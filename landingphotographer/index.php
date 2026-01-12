<?php
// WhatsApp Configuration
$whatsapp_number = "60123456789"; // Replace with actual number
$whatsapp_message = urlencode("Hi White Rose Studio, I'm interested in your wedding photography services!");
$whatsapp_link = "https://wasap.my/$whatsapp_number?text=$whatsapp_message";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>White Rose Studio - Premium Wedding Photography</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <img src="img/logo.png" alt="White Rose Studio" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="logo-text" style="display:none;">White Rose Studio</span>
                </div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <a href="<?php echo $whatsapp_link; ?>" class="btn-primary">Book Now</a>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="fade-in">Capture Your Perfect Moment</h1>
                    <p class="fade-in-delay">Malaysia's premier wedding photography studio - Capturing your unique love story with elegance and artistry</p>
                    <div class="location-badge fade-in-delay">
                        <i class="fas fa-map-marker-alt"></i> Based in Kuala Lumpur, Malaysia
                    </div>
                    <a href="<?php echo $whatsapp_link; ?>" class="btn-hero">Get Started Today</a>
                </div>
                <div class="hero-image float">
                    <img src="https://images.unsplash.com/photo-1606800052052-a08af7148866?w=600" alt="Wedding Couple">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">Comprehensive wedding photography packages tailored for Malaysian couples</p>
            <div class="services-grid">
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Wedding Photography</h3>
                    <p>Full-day coverage capturing every precious moment of your special day</p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Cinematic Videography</h3>
                    <p>Professional video production with stunning cinematic quality</p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Pre-Wedding Shoot</h3>
                    <p>Romantic outdoor sessions at breathtaking locations</p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-ring"></i>
                    </div>
                    <h3>Engagement Session</h3>
                    <p>Capture the excitement of your engagement with style</p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Premium Albums</h3>
                    <p>Luxury photo albums designed to last a lifetime</p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h3>Photo Editing</h3>
                    <p>Professional retouching and color grading for perfect results</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Showcase -->
    <section id="gallery" class="gallery">
        <div class="container">
            <h2 class="section-title">Our Portfolio</h2>
            <p class="section-subtitle">A glimpse of our recent work</p>
            <div class="gallery-grid">
                <div class="gallery-item fade-in">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=500" alt="Wedding Photo 1">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item fade-in">
                    <img src="https://images.unsplash.com/photo-1591604466107-ec97de577aff?w=500" alt="Wedding Photo 2">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item fade-in">
                    <img src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?w=500" alt="Wedding Photo 3">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item fade-in">
                    <img src="https://images.unsplash.com/photo-1522673607200-164d1b6ce486?w=500" alt="Wedding Photo 4">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item fade-in">
                    <img src="https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6?w=500" alt="Wedding Photo 5">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item fade-in">
                    <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?w=500" alt="Wedding Photo 6">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section 1 -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Book Your Dream Wedding Photography?</h2>
                <p>Limited slots available for 2026. Serving couples across Malaysia - KL, Selangor, Penang & beyond!</p>
                <a href="<?php echo $whatsapp_link; ?>" class="btn-cta pulse">
                    <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose">
        <div class="container">
            <h2 class="section-title">Why Choose White Rose Studio?</h2>
            <div class="features-grid">
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Award-Winning Team</h3>
                    <p>Malaysia's top-rated wedding photographers with multiple international awards</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>10+ Years Experience</h3>
                    <p>Over a decade serving Malaysian couples with 500+ successful weddings across the nation</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-camera-retro"></i>
                    </div>
                    <h3>Premium Equipment</h3>
                    <p>State-of-the-art cameras and lighting for stunning, high-quality images in any Malaysian venue</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Nationwide Coverage</h3>
                    <p>We travel across Malaysia - from KL to Penang, Johor to Sabah & Sarawak</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section 2 -->
    <section class="cta-section cta-dark">
        <div class="container">
            <div class="cta-content">
                <h2>Get Your Free Consultation Today</h2>
                <p>Let's discuss your vision and create a custom package for your special day</p>
                <a href="<?php echo $whatsapp_link; ?>" class="btn-cta pulse">
                    <i class="fab fa-whatsapp"></i> Contact Us Now
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2 class="section-title">What Our Clients Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card fade-in">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"White Rose Studio memang terbaik! Gambar-gambar cantik sangat dan tangkap setiap emosi dengan sempurna. Sangat recommended untuk pasangan yang nak photographer profesional!"</p>
                    <div class="client-info">
                        <h4>Siti Sarah & Ahmad Faisal</h4>
                        <span>Majlis Perkahwinan - Disember 2025, Kuala Lumpur</span>
                    </div>
                </div>
                <div class="testimonial-card fade-in">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Profesional, kreatif dan sangat mudah untuk bekerja sama. Team buat kami rasa selesa sepanjang hari. Hasilnya memang breathtaking! Worth every ringgit!"</p>
                    <div class="client-info">
                        <h4>Nurul Izzah & Danial</h4>
                        <span>Majlis Perkahwinan - November 2025, Selangor</span>
                    </div>
                </div>
                <div class="testimonial-card fade-in">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Keputusan terbaik untuk wedding kami! Team sangat amazing dan gambar-gambar macam karya seni. Terima kasih kerana capture hari istimewa kami dengan sempurna!"</p>
                    <div class="client-info">
                        <h4>Aisha Sofea & Muhammad Rizal</h4>
                        <span>Majlis Perkahwinan - Oktober 2025, Penang</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section 3 -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Don't Miss Out on Your Perfect Wedding Photos</h2>
                <p>Book now and receive a special discount on our premium packages</p>
                <a href="<?php echo $whatsapp_link; ?>" class="btn-cta pulse">
                    <i class="fab fa-whatsapp"></i> Book Your Date
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <img src="img/logo.png" alt="White Rose Studio" class="footer-logo" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <h3 class="footer-logo-text" style="display:none;">White Rose Studio</h3>
                    <p>Capturing timeless moments with elegance and artistry</p>
                </div>
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-phone"></i> +60 12-345 6789</p>
                    <p><i class="fas fa-envelope"></i> hello@whiterosestudio.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> Kuala Lumpur, Malaysia</p>
                    <p><i class="fas fa-globe"></i> Serving All of Malaysia</p>
                </div>
                <div class="footer-section">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 White Rose Studio Malaysia. All rights reserved. | Proudly Malaysian 🇲🇾</p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="<?php echo $whatsapp_link; ?>" class="whatsapp-float pulse" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="script.js"></script>
</body>
</html>
