import google.generativeai as ai
import sys

# Replace with your actual API key
API_KEY = 'AIzaSyD0Gd7yazpoRmm0ZvtI7MGtBP-5WGyzuvE'
ai.configure(api_key=API_KEY)

# Initialize the model
model = ai.GenerativeModel("gemini-2.0-flash")  # Replace with the correct model name
chat = model.start_chat()

def get_bot_response(message):
    try:
        # Send the message to the model
        response = chat.send_message(message)
        return response.text
    except Exception as e:
        return f"An error occurred: {e}"

if __name__ == "__main__":
    # Accept user input as a command-line argument
    if len(sys.argv) > 1:
        user_message = sys.argv[1]
        bot_response = get_bot_response(user_message)
        print(bot_response)
    else:
        print("Please provide a message.")