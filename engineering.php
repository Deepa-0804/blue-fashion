<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denim Fabric Engineering Services | Advanced Textile Manufacturing</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" /> 
    <style>
        :root {
            --denim-dark: #0a2540;
            --denim-medium: #1a4b6e;
            --denim-light: #4f8edc;
            --accent-gold:#0dcaf0;
            --accent-teal: #00b4d8;
            --text-light: #f8f9fa;
            --text-dark: #212529;
            --gray-light: #e9ecef;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--text-dark);
            line-height: 1.7;
            overflow-x: hidden;
            background-color: #ffffff;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }

        /* Modern Button Styles */
        .btn-modern {
            border-radius: 30px;
            padding: 12px 28px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            border: none;
        }

        .btn-modern:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.1);
            transform: translateX(-100%);
            transition: transform 0.4s ease;
        }

        .btn-modern:hover:after {
            transform: translateX(0);
        }

        .btn-primary {
            background-color: var(--denim-medium);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--denim-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(10, 37, 64, 0.2);
        }

        .btn-outline-primary {
            border: 2px solid var(--denim-medium);
            color: var(--denim-medium);
            background: transparent;
        }

        .btn-outline-primary:hover {
            background-color: var(--denim-medium);
            color: white;
            border-color: var(--denim-medium);
        }

        /* Hero Section - Modern Design */
        .engineering-hero {
            background: linear-gradient(135deg, rgba(10, 37, 64, 0.95) 0%, rgba(26, 75, 110, 0.95) 100%), 
                        url('single-img-10.jpg') center/cover no-repeat;
            min-height: 90vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding: 100px 0;
        }

        .hero-engineering-content {
            max-width: 800px;
            color: var(--text-light);
            position: relative;
            z-index: 2;
        }

        .hero-engineering-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            background: linear-gradient(to right, #ffffff, #c0e6ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .hero-engineering-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

   

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* Section Styling */
        .section {
            padding: 100px 0;
            position: relative;
        }

        .section-title {
            margin-bottom: 60px;
            text-align: center;
        }

        .section-title h2 {
            font-size: 2.8rem;
            margin-bottom: 1rem;
            color: var(--denim-dark);
            position: relative;
            display: inline-block;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--accent-gold);
        }

        .section-title p {
            font-size: 1.2rem;
            color: var(--denim-medium);
            max-width: 700px;
            margin: 0 auto;
        }

        /* Process Cards - Modern Grid */
        .process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .process-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0,0,0,0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            z-index: 1;
        }

        .process-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .process-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 0%, rgba(10, 37, 64, 0.1) 100%);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .process-card:hover:before {
            opacity: 1;
        }

        .process-image {
            height: 250px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .process-image:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(10, 37, 64, 0.7) 0%, transparent 50%);
        }

        .process-number {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--accent-gold);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            box-shadow: 0 4px 10px rgba(212, 175, 55, 0.3);
        }

        .process-content {
            padding: 25px;
            background: white;
        }

        .process-content h3 {
            color: var(--denim-dark);
            margin-bottom: 15px;
            font-size: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }

        .process-content h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--accent-gold);
        }

        .process-content ul {
            margin: 15px 0;
            padding-left: 20px;
        }

        .process-content ul li {
            margin-bottom: 8px;
            position: relative;
        }

        .process-content ul li:before {
            content: '•';
            color: var(--accent-gold);
            font-weight: bold;
            position: absolute;
            left: -15px;
        }

        /* Training Section - Split Layout */
        .training-section {
            background: linear-gradient(to right, #f8f9fa 50%, white 50%);
            position: relative;
        }

        .training-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 600px;
        }

        .training-image {
            background: linear-gradient(rgba(10, 37, 64, 0.1), rgba(10, 37, 64, 0.1)), 
                        url('images/web-shots/WOW029702.jpg') center/cover no-repeat;
            position: relative;
        }

        .training-image:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(10, 37, 64, 0.4) 0%, transparent 100%);
        }

        .training-content {
            padding: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .training-content h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: var(--denim-dark);
            position: relative;
        }

        .training-content h2:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--accent-gold);
        }

        .training-list {
            margin: 30px 0;
        }

        .training-list li {
            margin-bottom: 15px;
            position: relative;
            padding-left: 30px;
            font-size: 1.1rem;
        }

        .training-list li:before {
            content: '';
            position: absolute;
            left: 0;
            top: 8px;
            width: 15px;
            height: 15px;
            background-color: var(--accent-gold);
            border-radius: 3px;
            transform: rotate(45deg);
        }

        /* Stats Section */
        .stats-section {
            background-color: var(--denim-dark);
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .stat-item {
            padding: 30px;
            position: relative;
            z-index: 1;
        }

        .stat-item:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 5px;
            z-index: -1;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--accent-gold);
            font-family: 'Playfair Display', serif;
        }

        .stat-label {
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.8;
        }

        /* Business Cards */
        .business-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .business-card {
            background: white;
            border-radius: 10px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            border-top: 4px solid var(--accent-gold);
            position: relative;
            overflow: hidden;
        }

        .business-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .business-card h3 {
            color: var(--denim-dark);
            margin-bottom: 20px;
            font-size: 1.5rem;
            position: relative;
            padding-bottom: 15px;
        }

        .business-card h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--accent-gold);
        }

        .business-card p {
            color: var(--denim-medium);
        }

        .business-card .icon {
            font-size: 2.5rem;
            color: var(--accent-gold);
            margin-bottom: 20px;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .hero-engineering-content h1 {
                font-size: 3rem;
            }
            
            .training-content {
                padding: 60px;
            }
        }

        @media (max-width: 992px) {
            .training-container {
                grid-template-columns: 1fr;
            }
            
            .training-section {
                background: linear-gradient(to bottom, #f8f9fa 50%, white 50%);
            }
            
            .training-image {
                height: 400px;
            }

            .section-title h2 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .hero-engineering-content h1 {
                font-size: 2.5rem;
            }
            
            .section {
                padding: 80px 0;
            }
            
            .training-content {
                padding: 40px;
            }
            
            .process-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .hero-engineering-content h1 {
                font-size: 2.2rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .training-content {
                padding: 30px 20px;
            }
            
            .stat-number {
                font-size: 2.5rem;
            }
        }

        /* Animation Classes */
        [data-aos] {
            transition: all 0.8s ease;
        }

        .aos-fade {
            opacity: 0;
            transition-property: opacity;
        }

        .aos-fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition-property: opacity, transform;
        }

        .aos-fade-down {
            opacity: 0;
            transform: translateY(-30px);
            transition-property: opacity, transform;
        }

        .aos-fade-left {
            opacity: 0;
            transform: translateX(-30px);
            transition-property: opacity, transform;
        }

        .aos-fade-right {
            opacity: 0;
            transform: translateX(30px);
            transition-property: opacity, transform;
        }

        .aos-zoom-in {
            opacity: 0;
            transform: scale(0.9);
            transition-property: opacity, transform;
        }

        .aos-animate {
            opacity: 1;
            transform: translate(0) scale(1);
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Engineering Hero Section -->
    <section class="engineering-hero" style="position: relative; background: url('images/web-shots/WOW03051C2.jpg') center/cover no-repeat;">
        <!-- Overlay with SVG grid pattern -->
        <!-- SVG Overlay: Modern Grid + Animated Waves -->
        <div style="position: absolute; inset: 0; z-index: 1; pointer-events: none;">
            <!-- Dark overlay -->
            <div style="width:100%;height:100%;position:absolute;inset:0; background: rgba(2, 11, 61, 0.5);"></div>
            <!-- Modern diagonal grid pattern -->
            <!-- <svg width="100%" height="100%" viewBox="0 0 1920 900" preserveAspectRatio="none" style="position:absolute;inset:0;z-index:2;mix-blend-mode:soft-light;opacity:0.22;">
            <defs>
                <pattern id="modernGrid" width="80" height="80" patternUnits="userSpaceOnUse" patternTransform="rotate(45)">
                <rect x="0" y="0" width="80" height="80" fill="none"/>
                <line x1="0" y1="0" x2="80" y2="0" stroke="#4f8edc" stroke-width="1"/>
                <line x1="0" y1="40" x2="80" y2="40" stroke="#0dcaf0" stroke-width="0.7" opacity="0.7"/>
                <line x1="0" y1="80" x2="80" y2="80" stroke="#4f8edc" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#modernGrid)" />
            </svg> -->
            <!-- Animated SVG Waves -->
            <svg width="100%" height="220" viewBox="0 0 1920 220" preserveAspectRatio="none" style="position:absolute;bottom:0;left:0;z-index:3;opacity:1;pointer-events:none;">
                <path d="M0,120 Q480,180 960,120 T1920,120 V220 H0 Z" fill="#fff" opacity="0.95"/>
                <path d="M0,170 Q600,210 1200,170 T1920,170 V220 H0 Z" fill="#fff" opacity="0.7"/>
            </svg>
        </div>
        <div class="container" style="position: relative; z-index: 3;">
            <div class="hero-engineering-content aos-fade-up" data-aos="fade-up" data-aos-delay="100">
                <span class="engineering-badge">Innovation in Textile Engineering</span>
                <h1>Precision Denim Fabric Manufacturing</h1>
                <p>Advanced engineering solutions for superior denim quality, performance, and sustainability</p>
                <a href="#contact" class="btn btn-primary btn-modern mt-3">Request Technical Specs</a>
            </div>
        </div>
    </section>

    <!-- Manufacturing Process Section -->
    <section class="section">
        <div class="container">
            <div class="section-title aos-fade-up" data-aos="fade-up">
                <h2>Advanced Denim Production Process</h2>
                <p>Our engineered solutions combine traditional craftsmanship with cutting-edge technology</p>
            </div>
            
            <div class="process-grid">
                <div class="process-card aos-fade-right" data-aos="fade-right">
                    <div class="process-image" style="background-image: url('images/web-shots/WOW09961.jpg')">
                        <div class="process-number">1</div>
                    </div>
                    <div class="process-content">
                        <h3>Precision Weaving</h3>
                        <p>State-of-the-art looms produce denim with exacting specifications for weight, texture, and durability.</p>
                        <ul>
                            <li>±0.5% tolerance in thread count</li>
                            <li>Automated tension control</li>
                            <li>Real-time quality monitoring</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card aos-fade-up" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-image" style="background-image: url('images/web-shots/WOW026001.jpg')">
                        <div class="process-number">2</div>
                    </div>
                    <div class="process-content">
                        <h3>Eco-Dyeing</h3>
                        <p>Our sustainable dyeing processes reduce environmental impact while ensuring colorfastness.</p>
                        <ul>
                            <li>40% less water consumption</li>
                            <li>35% chemical reduction</li>
                            <li>Closed-loop systems</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card aos-fade-left" data-aos="fade-left">
                    <div class="process-image" style="background-image: url('images/web-shots/WOW028061.jpg')">
                        <div class="process-number">3</div>
                    </div>
                    <div class="process-content">
                        <h3>Innovative Finishing</h3>
                        <p>Advanced treatments enhance fabric performance while maintaining authentic denim character.</p>
                        <ul>
                            <li>Laser finishing technology</li>
                            <li>Ozone washing systems</li>
                            <li>Nano-scale coatings</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section" style="position: relative;">
        <!-- SVG Hexagonal Grid Background -->
        <div style="position: absolute; inset: 0; z-index: 0; pointer-events: none; opacity: 0.15;">
            <svg width="100%" height="100%" viewBox="0 0 1920 400" preserveAspectRatio="none" style="width:100%;height:100%;">
                <defs>
                    <pattern id="hexGrid" width="60" height="52" patternUnits="userSpaceOnUse" patternTransform="scale(1)">
                        <polygon points="30,2 58,15 58,41 30,54 2,41 2,15" fill="none" stroke="#0dcaf0" stroke-width="1"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#hexGrid)" />
            </svg>
        </div>
        <div class="container" style="position: relative; z-index: 1;">
            <div class="stats-container" style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center;">
                <div class="stat-item aos-fade" data-aos="fade" data-aos-delay="100" style="flex: 1 1 220px; min-width:220px; max-width:320px;background: rgba(255, 255, 255, 0.1); border-radius: 10px; padding: 20px; text-align: center;">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Quality Consistency</div>
                </div>
                <div class="stat-item aos-fade" data-aos="fade" data-aos-delay="200" style="flex: 1 1 220px; min-width:220px; max-width:320px;background: rgba(255, 255, 255, 0.1); border-radius: 10px; padding: 20px; text-align: center;">
                    <div class="stat-number">25+</div>
                    <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat-item aos-fade" data-aos="fade" data-aos-delay="300" style="flex: 1 1 220px; min-width:220px; max-width:320px;background: rgba(255, 255, 255, 0.1); border-radius: 10px; padding: 20px; text-align: center;">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Global Clients</div>
                </div>
                <div class="stat-item aos-fade" data-aos="fade" data-aos-delay="400" style="flex: 1 1 220px; min-width:220px; max-width:320px;background: rgba(255, 255, 255, 0.1); border-radius: 10px; padding: 20px; text-align: center;">
                    <div class="stat-number">40%</div>
                    <div class="stat-label">Water Savings</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Training Section -->
    <section class="training-section section">
        <div class="container-fluid p-0">
            <div class="training-container">
                <div class="training-image aos-fade-right" data-aos="fade-right"></div>
                <div class="training-content aos-fade-left" data-aos="fade-left">
                    <h2>Technical Training Programs</h2>
                    <p>We develop your team's expertise in modern textile manufacturing through comprehensive training solutions.</p>
                    
                    <div class="training-list">
                        <ul>
                            <li>Advanced weaving machine operation</li>
                            <li>Eco-friendly dyeing techniques</li>
                            <li>Precision finishing technologies</li>
                            <li>Quality control protocols</li>
                            <li>Sustainable manufacturing practices</li>
                        </ul>
                    </div>
                    
                    <a href="#training" class="btn btn-outline-primary btn-modern">View Training Modules</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Excellence Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="section-title aos-fade-up" data-aos="fade-up">
                <h2>Engineering Excellence</h2>
                <p>Key pillars of our advanced denim manufacturing approach</p>
            </div>
            
            <div class="business-grid">
                <div class="business-card aos-zoom-in" data-aos="zoom-in">
                    <div class="icon"><i class="fas fa-cogs"></i></div>
                    <h3>Technical Innovation</h3>
                    <p>Continuous R&D drives our development of superior denim fabrics with enhanced performance characteristics.</p>
                </div>
                
                <div class="business-card aos-zoom-in" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-search"></i></div>
                    <h3>Quality Assurance</h3>
                    <p>Multi-stage inspection ensures every yard meets international standards for durability and consistency.</p>
                </div>
                
                <div class="business-card aos-zoom-in" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-lightbulb"></i></div>
                    <h3>Process Efficiency</h3>
                    <p>Lean manufacturing and automation optimize productivity while maintaining premium quality standards.</p>
                </div>
                
              
            </div>
        </div>
    </section>

    <script>
        // Simple animation on scroll implementation
        document.addEventListener('DOMContentLoaded', function() {
            const aosElements = document.querySelectorAll('[data-aos]');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('aos-animate');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            });
            
            aosElements.forEach(element => {
                observer.observe(element);
            });
        });

        // Add smooth scrolling to all links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
    
    <?php include 'footer.php'; ?>
</body>
</html>