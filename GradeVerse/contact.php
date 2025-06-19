<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="icon" type="image/x-icon" href="assets/images/gradeverse-bg.png">
    <link rel="stylesheet" href="contact-form.css">
</head>
<body>
    <style>

        /* Contact Form */

/* Reset and Base Styles */
:root {
  --primary-color: #1a73e8;
  --secondary-color: #4285f4;
  --text-color: #333;
  --light-bg: #f8f9fa;
}

/* Main Content Styles */
.contact-main {
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
  border-radius: 15px;
}

.page-title {
  text-align: center;
  color: var(--primary-color);
  font-size: 2.5rem;
  margin-bottom: 2rem;
  text-transform: uppercase;
  position: relative;
  padding-bottom: 1rem;
}

.page-title::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 3px;
  background-color: var(--primary-color);
}

.contact-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 3rem;
  background: white;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  padding: 3rem;
}

/* Contact Info Styles */
.contact-info {
  display: flex;
  flex-direction: column;
  gap: 2rem;
  background-color: var(--light-bg);
  padding: 2rem;
  border-radius: 10px;
}

.contact-logo {
  text-align: center;
  /* padding: 1rem; */
  /* background: white; */
  border-radius: 10px;
  /* margin-bottom: 1rem; */
}

.contact-logo img {
  max-width: 200px;
  height: auto;
}

.contact-details {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.contact-details h2 {
  color: var(--primary-color);
  font-size: 1.8rem;
  margin-bottom: 1rem;
  text-align: center;
}

.info-item {
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  padding: 1rem;
  /* background: white; */
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}

.info-item svg {
  color: var(--primary-color);
  flex-shrink: 0;
}

.map-preview {
  margin-top: 1rem;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

/* Form Styles */
.contact-form {
  /* background: white; */
  padding: 2rem;
  border-radius: 10px;
  box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
}

.contact-form h2 {
  color: var(--primary-color);
  font-size: 1.8rem;
  margin-bottom: 2rem;
  text-align: center;
}

.form-group {
  margin-bottom: 1.5rem;
}

.form-group label {
  display: block;
  margin-bottom: 0.5rem;
  color: var(--text-color);
  font-weight: 500;
}

.form-input {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 1rem;
  transition: border-color 0.3s ease;
}

.form-input:focus {
  border-color: var(--primary-color);
  outline: none;
  box-shadow: 0 0 0 2px rgba(26, 115, 232, 0.1);
}

.submit-btn {
  width: 100%;
  padding: 1rem;
  background: var(--primary-color);
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.submit-btn:hover {
  background: var(--secondary-color);
}

/* Responsive Design */
@media (max-width: 968px) {
  .contact-container {
      grid-template-columns: 1fr;
      padding: 2rem;
  }

  .page-title {
      font-size: 2rem;
  }

  .contact-info {
      order: 1;
  }

  .contact-form {
      order: 0;
  }
}

@media (max-width: 480px) {
  body {
      padding: 1rem;
  }

  .contact-main {
      padding: 1rem;
  }

  .contact-container {
      padding: 1.5rem;
  }

  .page-title {
      font-size: 1.8rem;
  }

  .contact-details h2,
  .contact-form h2 {
      font-size: 1.5rem;
  }

  .info-item {
      flex-direction: column;
      align-items: center;
      text-align: center;
  }
}
    </style>
    <main class="contact-main">
        <h1 class="page-title">Contact Form</h1>
        
        <div class="contact-container">
            <div class="contact-info">
                <div class="contact-logo">
                    <img src="assets/images/kkw.png" alt="K K Wagh College Logo" width="200">
                </div>
                <div class="contact-details">
                    <h2>Contact Information</h2>
                    <div class="info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <p>K. K. Wagh College, Kakasahebnagar,<br>Tal.Niphad, Dist. Nashik - 422308</p>
                    </div>
                    <div class="info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <p>+91 2550 252520</p>
                    </div>
                    <div class="info-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <p>info@kkwagh.edu.in</p>
                    </div>
                </div>
                <div class="map-preview">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.1231955449584!2d73.95227007499675!3d20.31825447935425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdded5c2e612c01%3A0x1c6f0c4c0a0c4b0a!2sK.K.Wagh%20College%20Kakasaheb%20Nagar!5e0!3m2!1sen!2sin!4v1689927148561!5m2!1sen!2sin"
                        width="100%" 
                        height="200" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <form class="contact-form">
                <h2>Send us a Message</h2>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="phone">Mobile Number</label>
                    <input type="tel" id="phone" class="form-input" pattern="[0-9]{10}" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" class="form-input" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </main>

    <script>
        document.querySelector('.contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Thank you for your message. We will get back to you soon!');
            this.reset();
        });
    </script>
</body>
</html>