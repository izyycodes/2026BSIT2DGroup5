<?php require_once VIEW_PATH . 'includes/header.php'; ?>

<!-- Hero Section -->
<section id="home" class="hero">
    <img src="assets/images/hero-background.jpg" alt="Emergency Communication Background" class="hero-bg-image">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">
                Emergency Communication Made Accessible for the Deaf and Mute
            </h1>
            <p class="hero-description">
                A Web-based emergency help and monitoring system designed<br>
                for deaf and mute children as a communication bridge.
            </p>
            <a href="index.php?page=signup" class="btn btn-hero">Get Started</a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="features">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Key Features</h2>
            <p class="section-subtitle">Designed for Accessibility</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon sun-icon">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none">
                        <circle cx="25" cy="25" r="10" fill="#FDB022"/>
                        <line x1="25" y1="5" x2="25" y2="10" stroke="#FDB022" stroke-width="2"/>
                        <line x1="25" y1="40" x2="25" y2="45" stroke="#FDB022" stroke-width="2"/>
                        <line x1="5" y1="25" x2="10" y2="25" stroke="#FDB022" stroke-width="2"/>
                        <line x1="40" y1="25" x2="45" y2="25" stroke="#FDB022" stroke-width="2"/>
                        <line x1="11" y1="11" x2="14.5" y2="14.5" stroke="#FDB022" stroke-width="2"/>
                        <line x1="35.5" y1="35.5" x2="39" y2="39" stroke="#FDB022" stroke-width="2"/>
                        <line x1="11" y1="39" x2="14.5" y2="35.5" stroke="#FDB022" stroke-width="2"/>
                        <line x1="35.5" y1="14.5" x2="39" y2="11" stroke="#FDB022" stroke-width="2"/>
                    </svg>
                </div>
                <h3 class="feature-title">Emergency Alert System</h3>
                <p class="feature-description">
                    Quickly reach out in any<br>
                    emergency with simple visual<br>
                    buttons, medical information and<br>
                    one-tap calling.
                </p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon bell-icon">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none">
                        <path d="M25 10C21 10 18 13 18 17V25L15 30H35L32 25V17C32 13 29 10 25 10Z" fill="#FDB022"/>
                        <path d="M23 35C23 36.1046 23.8954 37 25 37C26.1046 37 27 36.1046 27 35" stroke="#FDB022" stroke-width="2"/>
                        <circle cx="35" cy="15" r="3" fill="#FF4444"/>
                    </svg>
                </div>
                <h3 class="feature-title">Disaster Monitoring &<br>Auto-Alert</h3>
                <p class="feature-description">
                    Stay informed about potential<br>
                    risks with real-time alerts.
                </p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon family-icon">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none">
                        <circle cx="20" cy="15" r="5" fill="#FDB022"/>
                        <circle cx="30" cy="15" r="5" fill="#FDB022"/>
                        <circle cx="25" cy="27" r="4" fill="#FDB022"/>
                        <path d="M15 35C15 30 17 28 20 28H30C33 28 35 30 35 35" stroke="#FDB022" stroke-width="2"/>
                    </svg>
                </div>
                <h3 class="feature-title">Family Check-In System</h3>
                <p class="feature-description">
                    Parents can easily keep their<br>
                    children's safety and well-being<br>
                    safe – without speaking.
                </p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon video-icon">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none">
                        <rect x="10" y="15" width="25" height="20" rx="2" fill="#FDB022"/>
                        <path d="M35 20L42 15V35L35 30V20Z" fill="#FDB022"/>
                    </svg>
                </div>
                <h3 class="feature-title">Visual Communication</h3>
                <p class="feature-description">
                    Communicate clearly using<br>
                    images/signs or symbols.
                </p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon medical-icon">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none">
                        <rect x="15" y="10" width="20" height="30" rx="2" stroke="#FDB022" stroke-width="2" fill="none"/>
                        <line x1="20" y1="17" x2="30" y2="17" stroke="#FDB022" stroke-width="2"/>
                        <line x1="20" y1="23" x2="30" y2="23" stroke="#FDB022" stroke-width="2"/>
                        <line x1="20" y1="29" x2="27" y2="29" stroke="#FDB022" stroke-width="2"/>
                        <path d="M25 5C28 5 30 7 30 10H20C20 7 22 5 25 5Z" fill="#FDB022"/>
                    </svg>
                </div>
                <h3 class="feature-title">Medical Profile &<br>Pre-Registered</h3>
                <p class="feature-description">
                    Important medical details easily<br>
                    when responding to roadblocks.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section id="how-it-works" class="how-it-works">
    <div class="container">
        <h2 class="section-title">How It Works</h2>
        
        <div class="steps-grid">
            <div class="step-card">
                <div class="step-number">1</div>
                <h3 class="step-title">Sign Up &<br>Set Up Profile</h3>
                <p class="step-description">
                    Users (or their<br>
                    parents/guardians) can add<br>
                    emergency contacts.
                </p>
            </div>
            
            <div class="step-card">
                <div class="step-number">2</div>
                <h3 class="step-title">Activate &<br>Stay Alert</h3>
                <p class="step-description">
                    Receive disaster alerts, check<br>
                    and receive updates.
                </p>
            </div>
            
            <div class="step-card">
                <div class="step-number">3</div>
                <h3 class="step-title">Get Help<br>Instantly</h3>
                <p class="step-description">
                    In an emergency, tap buttons to<br>
                    send pre-configured messages<br>
                    (with/without location).
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <h2 class="section-title">Contact Us</h2>
        
        <div class="contact-content">
            <div class="contact-form-wrapper">
                <form action="index.php?action=submit-contact" method="POST" class="contact-form">
                    <div class="form-group">
                        <label for="name">Name (optional)</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-submit">Send Message</button>
                </form>
            </div>
            
            <div class="contact-info-wrapper">
                <div class="contact-info-header">
                    <h3>Need help or have questions?</h3>
                    <p>We are here to support you — no voice required.</p>
                </div>
                
                <div class="contact-info-grid">
                    <div class="contact-info-item">
                        <div class="contact-icon phone-icon">📞</div>
                        <div class="contact-details">
                            <h4>Call Us</h4>
                            <p><?php echo CONTACT_PHONE; ?></p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-icon email-icon">✉️</div>
                        <div class="contact-details">
                            <h4>Email Us</h4>
                            <p><?php echo CONTACT_EMAIL; ?></p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-icon website-icon">🌐</div>
                        <div class="contact-details">
                            <h4>Website</h4>
                            <p><?php echo CONTACT_WEBSITE; ?></p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-icon address-icon">📍</div>
                        <div class="contact-details">
                            <h4>Address</h4>
                            <p><?php echo CONTACT_ADDRESS; ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="social-section">
                    <h4>Follow Us On:</h4>
                    <div class="social-icons">
                        <a href="#" class="social-icon-circle facebook">f</a>
                        <a href="#" class="social-icon-circle twitter">t</a>
                        <a href="#" class="social-icon-circle instagram">in</a>
                        <a href="#" class="social-icon-circle youtube">yt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once VIEW_PATH . 'includes/footer.php'; ?>