<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Textile Solutions | BlueFashion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Modern Textile Page Styles */
        :root {
            --primary: #0a47aa;
            --secondary: #1a023c;
            --dark: #222;
            --light: #f8f9fa;
            --gray: #666;
            --white: #fff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            overflow-x: hidden;
        }
        
        .modern-textile-page {
            padding: 80px 0;
            position: relative;
        }
        
        .container {
           height: 100%;
            max-width: 1200px;
        
            padding: 0 20px;
        }
        
        /* Hero Slider */
        /* About Section */
        .about-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 80px;
            align-items: center;
        }
        
        .about-image {
            position: relative;
            height: 500px;
            border-radius: 16px;
            overflow: hidden;
        }
        
        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        
        .about-image:hover img {
            transform: scale(1.05);
        }
        
        .about-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(58,134,255,0.2), rgba(131,56,236,0.2));
            z-index: 1;
        }
        
        .about-content {
            padding: 40px;
        }
        
        .section-tag {
            display: inline-block;
            font-size: 14px;
            font-weight: 600;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }
        
        .section-title {
            font-size: 36px;
            font-weight: 700;
            color: var(--dark);
            line-height: 1.3;
            margin-bottom: 20px;
        }
        
        .section-subtitle {
            color: var(--gray);
            line-height: 1.7;
            margin-bottom: 30px;
        }
        
        /* Features Grid */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 80px;
        }
        
        .feature-card {
            background: var(--white);
            border-radius: 12px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            opacity: 0;
            z-index: -1;
            transition: opacity 0.5s ease;
        }
        
        .feature-card:hover::before {
            opacity: 1;
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 28px;
            margin-bottom: 25px;
            transition: all 0.5s ease;
        }
        
        .feature-card:hover .feature-icon {
            background: var(--white);
            color: var(--primary);
            transform: rotateY(180deg);
        }
        
        .feature-card h3 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 15px;
            transition: color 0.5s ease;
        }
        
        .feature-card p {
            color: var(--gray);
            line-height: 1.7;
            transition: color 0.5s ease;
        }
        
        .feature-card:hover h3,
        .feature-card:hover p {
            color: var(--white);
        }
        
        /* Stats Section */
        .stats-section {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            padding: 80px 0;
            margin-bottom: 80px;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }
        
        .stats-section::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }
        
        .stats-section::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            position: relative;
            z-index: 1;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 60px;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 1;
        }
        
        .stat-label {
            font-size: 18px;
            font-weight: 500;
            opacity: 0.9;
        }
        
        /* Gallery Section */
        .gallery-section {
            margin-bottom: 80px;
        }
        
        .gallery-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .gallery-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            height: 250px;
            cursor: pointer;
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
            display: flex;
            align-items: flex-end;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        
        .gallery-caption {
            color: var(--white);
            transform: translateY(20px);
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover .gallery-caption {
            transform: translateY(0);
        }
        
        /* CTA Section */
        .cta-section {
            background: var(--white);
            border-radius: 16px;
            padding: 60px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            margin-bottom: 80px;
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, rgba(58,134,255,0.1), rgba(131,56,236,0.1));
            border-radius: 50%;
            z-index: 0;
        }
        
        .cta-section::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: -50px;
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, rgba(58,134,255,0.1), rgba(131,56,236,0.1));
            border-radius: 50%;
            z-index: 0;
        }
        
        .cta-content {
            position: relative;
            z-index: 1;
        }
        
        .cta-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .cta-text {
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto 30px;
            line-height: 1.7;
        }
        
        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 15px 30px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 16px;
            cursor: pointer;
            border: none;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
            box-shadow: 0 5px 15px rgba(58, 134, 255, 0.3);
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #2a76ef, #7328dc);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(58, 134, 255, 0.4);
        }
        
        .btn-outline {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
            margin-left: 15px;
        }
        
        .btn-outline:hover {
            background: var(--primary);
            color: var(--white);
            transform: translateY(-3px);
        }
        
        /* Hero Slider (scoped to home-2 only) */
        .hero-slider-home2 {
            position: relative;
            height: 500px;
            margin-bottom: 80px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 30px rgba(0,0,0,0.1);
        }
        .slide-home2 {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease, transform 1.5s ease;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
        }
        .slide-home2.active {
            opacity: 1;
            z-index: 1;
        }
        .slide-home2.next {
            transform: translateX(100%);
        }
        .slide-home2.prev {
            transform: translateX(-100%);
        }
        .slide-content-home2 {
            max-width: 600px;
            background: rgba(255,255,255,0.9);
            padding: 40px;
            border-radius: 12px;
            transform: translateY(50px);
            opacity: 0;
            box-shadow: 0 8px 32px rgba(58,134,255,0.10);
            transition: transform 0.8s cubic-bezier(.22,1,.36,1), opacity 0.8s cubic-bezier(.22,1,.36,1);
            width: 100%;
        }
        @media (max-width: 768px) {
            .slide-content-home2 {
                max-width: 95vw;
                padding: 18px 10px;
                border-radius: 10px;
                margin: 0 auto;
                left: 0;
                right: 0;
                font-size: 1rem;
                min-width: 0;
                width: 100%;
            }
        }
        @media (max-width: 576px) {
            .slide-content-home2 {
                max-width: 100vw;
                padding: 10px 4vw;
                border-radius: 8px;
                font-size: 0.98rem;
                margin: 0 auto;
                width: 100%;
            }
        }
        .slider-nav-home2 {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 2;
        }
        .slider-dot-home2 {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .slider-dot-home2.active {
            background: var(--white);
            transform: scale(1.3);
        }
        @media (max-width: 992px) {
            .hero-slider-home2 { height: 400px; }
        }
        @media (max-width: 768px) {
            .hero-slider-home2 { height: 350px; margin-bottom: 60px; }
            .slide-content-home2 { padding: 30px; max-width: 100%; }
        }
        @media (max-width: 576px) {
            .hero-slider-home2 { height: 300px; margin: 20px;}
            .slide-content-home2 { padding: 20px; 
            height: 100%; }
        }
        
        /* Responsive Styles */
        @media (max-width: 1200px) {
            .slide {
                padding: 0 40px;
            }
            
            .slide h2 {
                font-size: 36px;
            }
            
            .stat-number {
                font-size: 50px;
            }
        }
        
        @media (max-width: 992px) {
            .hero-slider {
                height: 400px;
            }
            
            .about-section {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .about-image {
                height: 300px;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 40px 20px;
            }
            
            .cta-section {
                padding: 40px;
            }
            
            .cta-title {
                font-size: 30px;
            }
        }
        
        @media (max-width: 768px) {
            .modern-textile-page {
                padding: 60px 0;
            }
            
            .hero-slider {
                height: 350px;
                margin-bottom: 60px;
            }
            
            .slide {
                padding: 0 20px;
            }
            
            .slide-content {
                padding: 30px;
                max-width: 100%;
            }
            
            .slide h2 {
                font-size: 28px;
            }
            
            .section-title, .cta-title {
                font-size: 28px;
            }
            
            .stats-section {
                padding: 60px 0;
            }
            
            .stat-number {
                font-size: 40px;
            }
            
            .stat-label {
                font-size: 16px;
            }
            
            .btn {
                padding: 12px 25px;
                font-size: 15px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-slider {
                height: 300px;
            }
            
            .slide-content {
                padding: 20px;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .cta-section {
                padding: 30px 20px;
            }
            
            .btn-group {
                display: flex;
                flex-direction: column;
                gap: 15px;
            }
            
            .btn-outline {
                margin-left: 0;
                margin-top: 15px;
            }
        }
        
        /* Animation Classes */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate {
            animation: fadeInUp 1s cubic-bezier(0.22, 1, 0.36, 1) forwards;
            opacity: 0;
        }
        .animate.visible {
            opacity: 1;
        }
        
        /* Scroll Animations */
        .scroll-animate {
            opacity: 0;
            transition: opacity 0.7s cubic-bezier(.22,1,.36,1), transform 0.7s cubic-bezier(.22,1,.36,1);
        }
        .scroll-up { transform: translateY(40px); }
        .scroll-down { transform: translateY(-40px); }
        .scroll-left { transform: translateX(-40px); }
        .scroll-right { transform: translateX(40px); }
        .scroll-animate.visible {
            opacity: 1;
            transform: translate(0,0);
        }
    </style>
</head>
<body>
    <!-- Modern Textile Page -->
    <div class="modern-textile-page">
        <!-- Hero Slider (scoped to home-2 only) -->
       
        <!-- About Section -->
        <div class="container">
            <div class="about-section scroll-animate scroll-left">
                <div class="about-content scroll-animate scroll-up">
                    <span class="section-tag">TEXTILE LEADERS</span>
                    <h2 class="section-title">We Are Pioneers in the Textile Market Since 2005</h2>
                    <p class="section-subtitle">Indian weavers of designer furnishing fabrics is a textile manufacturer founded with a vision to revolutionize fabric production.</p>
                    <div class="feature-list">
                        <div class="feature-item delay-1 scroll-animate scroll-right">
                            <i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i>
                            <span>We assess your fabric needs and recommend the right solution</span>
                        </div>
                        <div class="feature-item delay-2 scroll-animate scroll-up">
                            <i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i>
                            <span>Our specialists handle every textile order with care and precision</span>
                        </div>
                        <div class="feature-item delay-3 scroll-animate scroll-down">
                            <i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i>
                            <span>Regular quality checks ensure our fabrics meet the highest standards</span>
                        </div>
                    </div>
                    <div class="btn-group" style="margin-top: 30px;">
                        <a href="about-us-2.php" class="btn btn-primary">Our Story</a>
                        <a href="contact-us.php" class="btn btn-outline">Contact Our Team</a>
                    </div>
                </div>
                <div class="about-image scroll-animate scroll-right">
                    <img src="images/web-shots/WOW09961C2.jpg" alt="Textile manufacturing facility">
                </div>
            </div>
        </div>
        <div class="hero-slider-home2 scroll-animate scroll-up">
            <div class="slide-home2 active" style="background-image: url('images/web-shots/WOW09961C2.jpg');">
                <div class="slide-content-home2">
                    <span class="section-tag">INNOVATION IN TEXTILES</span>
                    <h2 class="section-title">Modern Solutions for the Textile Industry</h2>
                    <p class="section-subtitle">Discover advanced manufacturing, sustainable fabrics, and creative textile solutions for your business needs.</p>
                    <a href="fabric-printing.php" class="btn btn-primary">Explore Fabrics</a>
                </div>
            </div>
            <div class="slide-home2" style="background-image: url('images/web-shots/WOW00304C.jpg');">
                <div class="slide-content-home2">
                    <span class="section-tag">QUALITY ASSURANCE</span>
                    <h2 class="section-title">Unmatched Quality & Precision</h2>
                    <p class="section-subtitle">Every fabric is rigorously tested to ensure it meets the highest standards of quality and durability.</p>
                    <a href="about-us-2.php" class="btn btn-primary">Our Process</a>
                </div>
            </div>
            <div class="slide-home2" style="background-image: url('images/web-shots/WOW03350C3.jpg');">
                <div class="slide-content-home2">
                    <span class="section-tag">SUSTAINABILITY</span>
                    <h2 class="section-title">Eco-Friendly Textile Production</h2>
                    <p class="section-subtitle">We are committed to sustainable practices, reducing waste, and using eco-friendly materials in every step.</p>
                    <a href="contact-us.php" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
            <div class="slider-nav-home2">
                <div class="slider-dot-home2 active"></div>
                <div class="slider-dot-home2"></div>
                <div class="slider-dot-home2"></div>
            </div>
        </div>
        <div class="container">
            <div class="features-grid">
                <div class="feature-card scroll-animate scroll-left">
                    <div class="feature-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3>Apparel Manufacturing</h3>
                    <p>Specializing in high-quality fabrics for fashion designers and clothing manufacturers worldwide.</p>
                </div>
                <div class="feature-card scroll-animate scroll-up delay-1">
                    <div class="feature-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Revolutionary Textiles</h3>
                    <p>Innovative fabric technologies that are changing the textile industry standards and expectations.</p>
                </div>
                <div class="feature-card scroll-animate scroll-right delay-2">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Quality Assurance</h3>
                    <p>Rigorous testing and quality control processes ensure every yard meets our exacting standards.</p>
                </div>
            </div>
        </div>
        <div class="stats-section scroll-animate scroll-down">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-item scroll-animate scroll-up">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-item scroll-animate scroll-left delay-1">
                        <div class="stat-number">80%</div>
                        <div class="stat-label">Market Growth</div>
                    </div>
                    <div class="stat-item scroll-animate scroll-right delay-2">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Fabric Varieties</div>
                    </div>
                    <div class="stat-item scroll-animate scroll-down delay-3">
                        <div class="stat-number">10K</div>
                        <div class="stat-label">Satisfied Clients</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gallery-section">
                <div class="gallery-title scroll-animate scroll-up">
                    <span class="section-tag">OUR WORK</span>
                    <h2 class="section-title">Textile Manufacturing Excellence</h2>
                    <p class="section-subtitle">Explore our premium fabric collections and manufacturing process</p>
                </div>
                <div class="gallery-grid">
                    <div class="gallery-item scroll-animate scroll-left">
                        <img src="./images/web-shots/WOW002172.jpg" alt="Textile production">
                        <div class="gallery-overlay">
                            <div class="gallery-caption">Fabric Weaving Process</div>
                        </div>
                    </div>
                    <div class="gallery-item scroll-animate scroll-up delay-1">
                        <img src="./images/web-shots/WOW00304C.jpg" alt="Quality inspection">
                        <div class="gallery-overlay">
                            <div class="gallery-caption">Quality Control</div>
                        </div>
                    </div>
                    <div class="gallery-item scroll-animate scroll-down delay-2">
                        <img src="./images/web-shots/WOW03350C3.jpg" alt="Fabric rolls">
                        <div class="gallery-overlay">
                            <div class="gallery-caption">Fabric Inventory</div>
                        </div>
                    </div>
                    <div class="gallery-item scroll-animate scroll-right delay-3">
                        <img src="./images/web-shots/WOW029701.jpg" alt="Finished products">
                        <div class="gallery-overlay">
                            <div class="gallery-caption">Finished Textiles</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cta-section scroll-animate scroll-up">
                <div class="cta-content">
                    <h2 class="cta-title">Ready to Experience Premium Textiles?</h2>
                    <p class="cta-text">Contact our team today to discuss your fabric needs or request samples of our premium textile collections.</p>
                    <div class="btn-group">
                        <a href="contact-us.php" class="btn btn-primary">Get in Touch</a>
                        <a href="fabric-printing.php" class="btn btn-outline">View Collections</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Hero Slider Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slider-dot');
            let currentSlide = 0;
            let slideInterval;
            
            // Initialize slider
            function startSlider() {
                slideInterval = setInterval(nextSlide, 5000);
            }
            
            // Go to specific slide
            function goToSlide(n) {
                slides[currentSlide].classList.remove('active');
                slides[currentSlide].classList.add('prev');
                setTimeout(() => {
                    slides[currentSlide].classList.remove('prev');
                }, 1000);
                
                dots[currentSlide].classList.remove('active');
                currentSlide = (n + slides.length) % slides.length;
                slides[currentSlide].classList.add('active');
                dots[currentSlide].classList.add('active');
            }
            
            // Next slide
            function nextSlide() {
                goToSlide(currentSlide + 1);
            }
            
            // Previous slide
            function prevSlide() {
                goToSlide(currentSlide - 1);
            }
            
            // Dot click event
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    clearInterval(slideInterval);
                    goToSlide(index);
                    startSlider();
                });
            });
            
            // Start the slider
            startSlider();
            
            // Animation on scroll (smooth)
            const animateElements = document.querySelectorAll('.animate');
            function checkAnimation() {
                animateElements.forEach(element => {
                    const rect = element.getBoundingClientRect();
                    const windowHeight = window.innerHeight || document.documentElement.clientHeight;
                    if (rect.top < windowHeight - 80) {
                        element.classList.add('visible');
                    } else {
                        element.classList.remove('visible');
                    }
                });
            }
            window.addEventListener('scroll', checkAnimation, { passive: true });
            window.addEventListener('resize', checkAnimation);
            setTimeout(checkAnimation, 100); // Initial check after DOM ready
        });
        
        // Scoped Hero Slider JS for home-2.php only
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide_home2');
            const dots = document.querySelectorAll('.slider-dot-home2');
            let currentSlide = 0;
            let slideInterval;
            function startSlider() {
                slideInterval = setInterval(nextSlide, 5000);
            }
            function goToSlide(n) {
                slides[currentSlide].classList.remove('active');
                slides[currentSlide].classList.add('prev');
                setTimeout(() => {
                    slides[currentSlide].classList.remove('prev');
                }, 1000);
                dots[currentSlide].classList.remove('active');
                currentSlide = (n + slides.length) % slides.length;
                slides[currentSlide].classList.add('active');
                dots[currentSlide].classList.add('active');
            }
            function nextSlide() { goToSlide(currentSlide + 1); }
            function prevSlide() { goToSlide(currentSlide - 1); }
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    clearInterval(slideInterval);
                    goToSlide(index);
                    startSlider();
                });
            });
            startSlider();
        });
        
        // Animation on scroll (smooth)
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.scroll-animate');
            function checkAnimation() {
                animateElements.forEach(element => {
                    const rect = element.getBoundingClientRect();
                    const windowHeight = window.innerHeight || document.documentElement.clientHeight;
                    if (rect.top < windowHeight - 80) {
                        element.classList.add('visible');
                    } else {
                        element.classList.remove('visible');
                    }
                });
            }
            window.addEventListener('scroll', checkAnimation, { passive: true });
            window.addEventListener('resize', checkAnimation);
            setTimeout(checkAnimation, 100);
        });
    </script>
</body>
</html>