<?php
session_start();
;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BreakFixPro | AI-Powered Vehicle Assistance</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
  <header id="main-header">
        <div class="logo-container">
          <img src="imgs/Logo.png" alt="Website Logo" class="logo">
      </div>
         <h1 style=" align-items: left;">BreakFixPro</h1> 
<nav>
    <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#ai-troubleshooting">AI Troubleshooting</a></li>
        <li><a href="#find-mechanic">Find Mechanic</a></li>
        <li><a href="#maintenance">Maintenance</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="about-us.html">About Us</a></li>
        <li><a href="#contact">Contact</a></li>
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <!-- User is logged in -->
            <li class="auth-links">
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                
            </li>
            <li><a href="add-vehicle.php">Register Vehicle</a></li>
        <?php else: ?>
            <!-- User is not logged in -->
            <li class="auth-links">
                <a href="register.php"><i class="fas fa-user-plus"></i> Register</a> |
                <a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
    </div>
  </header>

  <section class="hero" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('imgs/CarBackground.webp');">
    
    <div class="container">
      <div class="hero-content">
        <h1>BreakFixPro: 24/7 Vehicle Emergency Support</h1>
        <p>Instant AI-powered diagnostics and mechanic assistance when you need it most</p>
        <div class="hero-buttons">
          <a href="emergency.html" class="sos-button"><i class="fas fa-exclamation-circle"></i>(!)Emergency SOS</a>
          <div class="call-dropdown">
            <a href="#" class="call-button" id="call-dropdown-btn"><i class="fas fa-phone-alt"></i>Call Mechanic</a>
            <div class="call-dropdown-content">
              <a href="tel:+9779801234567"><i class="fas fa-wrench"></i> Ram's Auto: +977 9801234567</a>
              <a href="tel:+9779807654321"><i class="fas fa-car"></i> Pokhara Motors: +977 9807654321</a>
              <a href="tel:+9779841234567"><i class="fas fa-tools"></i> Shiva's Repair: +977 9841234567</a>
              <a href="find-mechanic.html"><i class="fas fa-list"></i> View All Mechanics</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="features" class="features"> 
    <div class="container">
      <h2>Key Features</h2>
      <div class="feature-cards">
        <div id="emergency-sos" class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-exclamation-circle"></i>
          </div>
          <h3>Emergency SOS</h3>
          <p>One-click emergency assistance with real-time mechanic tracking</p>
          <a href="emergency.html" class="feature-link">Learn More</a>
        </div>

        <div id="ai-troubleshooting" class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-microchip"></i>
          </div>
          <h3>AI Diagnostics</h3>
          <p>Instant vehicle diagnostics powered by advanced AI technology</p>
          <a href="ai-troubleshooting.html" class="feature-link">Learn More</a>
        </div>

        <div id="find-mechanic" class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3>Mechanic Locator</h3>
          <p>Find and contact nearby certified mechanics instantly</p>
          <a href="find-mechanic.html" class="feature-link">Find Mechanics</a>
        </div>

        <div id="maintenance" class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-wrench"></i>
          </div>
          <h3>Maintenance Guide</h3>
          <p>Access vehicle-specific repair guides and maintenance tips</p>
          <a href="maintenance.html" class="feature-link">View Guides</a>
      </div>
      <div id="register-vehicle" class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-car"></i>
        </div>
        <h3>Register Vehicle</h3>
        <p>Register and manage your vehicle information</p>
        <a href="add-vehicle.php" class="feature-link">Register Now</a>
    </div>
    </div>
  </div>
</div>

  <section id="how-it-works" class="how-it-works">
    <div class="container">
      <h2>How It Works</h2>
      <div class="steps">
        <div class="step">
          <div class="step-number">1</div>
          <h3>Register Vehicle</h3>
          <p>Input your vehicle details for personalized assistance</p>
        </div>

        <div class="step">
          <div class="step-number">2</div>
          <h3>Get Assistance</h3>
          <p>Receive AI troubleshooting or connect with mechanics</p>
        </div>

        <div class="step">
          <div class="step-number">3</div>
          <h3>Resolve Issues</h3>
          <p>Fix problems quickly and safely with expert guidance</p>
        </div>
      </div>
    </div>
  </section>

  <section id="pricing" class="pricing">
    <div class="container">
      <h2>Pricing Plans</h2>
      <div class="pricing-cards">
        <div class="pricing-card">
          <h3>Free</h3>
          <div class="price">NPR 0</div>
          <ul>
            <li>Basic AI diagnostics</li>
            <li>Limited mechanic search</li>
            <li>Emergency SOS</li>
          </ul>
          <a href="#" class="btn">Get Started</a>
        </div>

        <div class="pricing-card highlighted">
          <h3>Premium</h3>
          <div class="price">NPR 499<span>/month</span></div>
          <ul>
            <li>Full AI diagnostics</li>
            <li>Unlimited mechanic search</li>
            <li>Priority emergency support</li>
            <li>Maintenance calendar</li>
          </ul>
          <a href="pricing.html" class="btn">Choose Plan</a>
        </div>

        <div class="pricing-card">
          <h3>Pro</h3>
          <div class="price">NPR 999<span>/month</span></div>
          <ul>
            <li>Advanced AI diagnostics</li>
            <li>VIP mechanic access</li>
            <li>24/7 emergency support</li>
            <li>Full maintenance tracking</li>
            <li>Roadside assistance included</li>
          </ul>
          <a href="pricing.html" class="btn">Choose Plan</a>
        </div>
      </div>
    </div>
  </section>

  

  <section id="contact" class="contact">
    <div class="container">
      <h2>Contact Us</h2>
      <div class="contact-wrapper">
        <div class="contact-info">
          <h3>Get in Touch</h3>
          <p><i class="fas fa-envelope"></i> support@breakfixpro.com</p>
          <p><i class="fas fa-phone"></i> +977 9765418493</p>
          <p><i class="fas fa-map-marker-alt"></i> New Road, Kathmandu, Nepal</p>

          <div id="emergency-contact" class="emergency-contact-info">
            <h4>Emergency Contact</h4>
            <p><i class="fas fa-phone-alt"></i> +977 984-7380635 (24/7 Hotline)</p>
            <p><i class="fas fa-headset"></i> +977 974-4373204 (Support)</p>
          </div>
        </div>

        <div class="contact-form">
          <form action="http://localhost:8000" method="POST">
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <br><br>
            <input type="email" id="email" name="email" placeholder="Your Email" required>
            <br><br>
            <textarea id="message" name="message" placeholder="Your Message" required></textarea>
            <br><br>
            <button type="submit" class="btn">Send Message</button>
        </form>
        </div>
        
      </div>
    </div>
  </section>

  <footer class="quick-links-footer">
    <div class="container">
      <div class="quick-links-container">
        <div class="footer-brand">
          <h3>BreakFixPro</h3>
          <p>24/7 AI-powered vehicle emergency support and maintenance solutions.</p>
        </div>
        
        <div class="footer-links">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="pricing.html">Pricing</a></li>
          </ul>
        </div>
        
        <div class="footer-language">
          <h3>Language</h3>
          <button class="language-btn">
            <i class="fas fa-globe">
              <select>
                <option>English</option>
                <option>नेपाली</option>
              </select>
            </i> 
            
            
          </button>
        </div>
      </div>
      
      <div class="copyright-bar">
        <p>&copy; 2023 BreakFixPro. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>