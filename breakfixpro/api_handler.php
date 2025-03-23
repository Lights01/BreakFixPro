<?php
// Log user messages and API responses to debug.log
function logMessage($message) {
    $logFile = 'debug.log';
    $maxLogSize = 5 * 1024 * 1024; // 5 MB
    if (file_exists($logFile) && filesize($logFile) > $maxLogSize) {
        rename($logFile, $logFile . '.' . date('YmdHis') . '.bak');
    }
    file_put_contents($logFile, $message . PHP_EOL, FILE_APPEND);
}

// Get user input from POST request
$input = json_decode(file_get_contents('php://input'), true);
if (json_last_error() !== JSON_ERROR_NONE || empty($input['message'])) {
    logMessage('Invalid or missing message received from frontend');
    echo json_encode(['response' => 'Please provide a valid question.']);
    exit;
}
$userMessage = trim($input['message']);

// Log the user's message
logMessage("User Message: $userMessage");

try {
    // Call your Python script (chat.py) with the user's message
    $command = escapeshellcmd("python chat.py " . escapeshellarg($userMessage));
    $output = shell_exec($command);

    // Parse the Python script's output
    $response = trim($output) ?: 'Sorry, I could not generate a response.';
    logMessage("AI Response: $response");
    echo json_encode(['response' => $response]);
} catch (Exception $e) {
    logMessage("Error communicating with Python script: " . $e->getMessage());
    echo json_encode(['response' => 'An error occurred while processing your request.']);
    exit;
}
?>