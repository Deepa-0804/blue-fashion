<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturing Services | Precision Production Solutions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #0056b3;
            --dark-blue: #003366;
            --light-blue: #e6f0fa;
            --accent-gold: #1fb8d3;
            --dark-gray: #333333;
            --medium-gray: #666666;
            --light-gray: #f8f9fa;
        }

        body {
            font-family: 'Roboto', sans-serif;
            color: var(--dark-gray);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
        }

        /* Animated Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(0, 51, 102, 0.9) 0%, rgba(0, 86, 179, 0.9) 100%), 
                        url('images/web-shots/WOW029182.jpg') center/cover no-repeat;
            color: white;
            padding: 150px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 50%, rgba(212, 175, 55, 0.2) 0%, transparent 50%);
            animation: pulse 8s infinite alternate;
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 0.2; }
            100% { transform: scale(1.2); opacity: 0.4; }
        }

        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 1rem;
            animation: fadeInUp 1s ease-out;
        }

        .hero-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: var(--accent-gold);
            animation: expandLine 1.5s ease-out forwards;
            transform-origin: left;
        }

        @keyframes expandLine {
            0% { transform: scaleX(0); }
            100% { transform: scaleX(1); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            animation: fadeIn 1.5s ease-out;
        }

        .section {
            padding: 100px 0;
            position: relative;
        }

        .section-title {
            text-align: center;
            margin-bottom: 80px;
            overflow: hidden;
        }

        .section-title h2 {
            font-size: 2.8rem;
            color: var(--dark-blue);
            position: relative;
            display: inline-block;
            padding-bottom: 20px;
            animation: slideUp 0.8s ease-out;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--accent-gold);
            animation: expandLine 1s ease-out forwards;
        }

        .section-title .lead {
            animation: fadeIn 1.5s ease-out;
        }

        /* Feature Cards with 3D Effect */
        .feature-card {
            background: white;
            border-radius: 12px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            height: 100%;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-top: 4px solid var(--accent-gold);
            transform-style: preserve-3d;
            transform: perspective(1000px) rotateY(0deg);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.1) 0%, transparent 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .feature-card:hover {
            transform: perspective(1000px) rotateY(5deg) translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .feature-card:hover::before {
            opacity: 1;
        }

        .feature-icon {
            font-size: 3.5rem;
            color: var(--accent-gold);
            margin-bottom: 25px;
            transition: transform 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .feature-card h3 {
            color: var(--dark-blue);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .feature-card h3::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--accent-gold);
            transition: width 0.3s ease;
        }

        .feature-card:hover h3::after {
            width: 80px;
        }

        /* Animated Quality Badge */
        .quality-badge {
            display: inline-block;
            background-color: var(--accent-gold);
            color: white;
            padding: 8px 25px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
            animation: bounceIn 1s ease-out;
        }

        .quality-badge::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(transparent, rgba(255,255,255,0.3), transparent);
            transform: rotate(30deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { left: -50%; }
            20% { left: 150%; }
            100% { left: 150%; }
        }

        /* Modern Image Container with Parallax Effect */
        .image-container {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        .image-container img {
            width: 100%;
            height: auto;
            transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            transform: translateZ(0);
        }

        .image-container:hover img {
            transform: scale(1.08) translateZ(20px);
        }

        .image-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,51,102,0.1) 0%, rgba(0,51,102,0.3) 100%);
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .image-container:hover::after {
            opacity: 1;
        }

        /* Animated CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--dark-blue) 100%);
            color: white;
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        /* Animated Button */
        .btn-primary {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
            padding: 12px 35px;
            font-weight: 500;
            border-radius: 30px;
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            position: relative;
            overflow: hidden;
            border: none;
            box-shadow: 0 5px 15px rgba(0,86,179,0.3);
        }

        .btn-primary:hover {
            background-color: var(--dark-blue);
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,86,179,0.4);
        }

        .btn-primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }

        .btn-primary:hover::after {
            transform: translateX(100%);
        }

        /* List Items Animation */
        .list-unstyled li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            opacity: 0;
            animation: fadeInRight 0.8s ease-out forwards;
        }

        .list-unstyled li:nth-child(1) { animation-delay: 0.2s; }
        .list-unstyled li:nth-child(2) { animation-delay: 0.4s; }
        .list-unstyled li:nth-child(3) { animation-delay: 0.6s; }

        .list-unstyled li::before {
            content: '\f00c';
            font-family: 'bootstrap-icons';
            position: absolute;
            left: 0;
            top: 2px;
            color: var(--primary-blue);
        }

        /* Animated Stats */
        .stat-item {
            text-align: center;
            padding: 30px;
            background: rgba(255,255,255,0.9);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.4s ease;
            opacity: 0;
            transform: translateY(20px);
        }
        .stat-item h4{
            color: var(--dark-blue);
        }

        .stat-item.animated {
            opacity: 1;
            transform: translateY(0);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--dark-blue);
            margin-bottom: 10px;
            font-family: 'Montserrat', sans-serif;
        }

        /* Keyframe Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes bounceIn {
            0% { opacity: 0; transform: scale(0.5); }
            50% { opacity: 1; transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Scroll Animations */
        .scroll-animate {
            opacity: 0;
            transform: translateY(40px) scale(0.98);
            transition: all 0.9s cubic-bezier(.22,1,.36,1);
        }
        .animated.scroll-up { animation: scrollUp 1.1s cubic-bezier(.22,1,.36,1) forwards; }
        .animated.scroll-down { animation: scrollDown 1.1s cubic-bezier(.22,1,.36,1) forwards; }
        .animated.scroll-left { animation: scrollLeft 1.1s cubic-bezier(.22,1,.36,1) forwards; }
        .animated.scroll-right { animation: scrollRight 1.1s cubic-bezier(.22,1,.36,1) forwards; }
        @keyframes scrollUp {
            from { opacity: 0; transform: translateY(60px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
        @keyframes scrollDown {
            from { opacity: 0; transform: translateY(-60px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
        @keyframes scrollLeft {
            from { opacity: 0; transform: translateX(-60px) scale(0.95); }
            to { opacity: 1; transform: translateX(0) scale(1); }
        }
        @keyframes scrollRight {
            from { opacity: 0; transform: translateX(60px) scale(0.95); }
            to { opacity: 1; transform: translateX(0) scale(1); }
        }
        /* SVG Gradient Divider Responsive */
        .svg-section-divider {
            display: block;
            width: 100vw;
            height: 60px;
            margin-bottom: -2px;
        }
        @media (max-width: 768px) {
            .svg-section-divider {
                height: 32px;
            }
            .feature-card {
                margin-bottom: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h1 class="hero-title">Advanced Manufacturing Solutions</h1>
                        <p class="lead mb-4">Precision-engineered manufacturing services that combine cutting-edge technology with unparalleled expertise to deliver exceptional quality and performance.</p>
                        <p>Our comprehensive solutions span from prototype development to full-scale production, ensuring seamless integration at every stage of your manufacturing process.</p>
                        <a href="#contact" class="btn btn-primary btn-lg mt-3">Request a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="image-container">
                        <img src="images/web-shots/WOW029182.jpg" alt="Quality Control Process" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 scroll-animate" data-scroll="right">
                    <span class="quality-badge">Quality Assurance</span>
                    <h2 class="mb-4">Precision Craftsmanship</h2>
                    <p class="mb-4">Our commitment to excellence is embedded in every stage of production. We implement rigorous quality control protocols that exceed industry standards, ensuring each component meets exact specifications.</p>
                    <p class="mb-5">Advanced metrology equipment and skilled technicians work in tandem to maintain tolerances within microns, delivering products that perform reliably in the most demanding applications.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3">ISO 9001:2015 Certified Quality Management System</li>
                        <li class="mb-3">Six Sigma methodologies for process optimization</li>
                        <li class="mb-3">100% dimensional verification for critical components</li>
                        <li>Advanced material testing and certification</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Workforce Section -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0">
                    <div class="image-container">
                        <img src="images/web-shots/WOW02585.jpg" alt="Trained Manufacturing Team" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 scroll-animate" data-scroll="left">
                    <h2 class="mb-4">Expert Engineering Team</h2>
                    <p class="mb-4">Our workforce comprises industry-certified professionals with specialized training in advanced manufacturing techniques. Continuous education programs ensure our team remains at the forefront of technological innovation.</p>
                    <p class="mb-5">From CNC programming to additive manufacturing, our engineers possess diverse skill sets that enable us to tackle complex production challenges with confidence and precision.</p>
                    
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <i class="bi bi-award-fill text-primary" style="font-size: 2.5rem;"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">Certified Specialists</h4>
                                    <p class="mb-0 text-muted">Industry-recognized certifications in specialized manufacturing disciplines</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <i class="bi bi-lightbulb-fill text-primary" style="font-size: 2.5rem;"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">Continuous Innovation</h4>
                                    <p class="mb-0 text-muted">Ongoing R&D initiatives to implement emerging technologies</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <i class="bi bi-people-fill text-primary" style="font-size: 2.5rem;"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">Cross-Functional Teams</h4>
                                    <p class="mb-0 text-muted">Collaborative approach integrating design, engineering and production</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <i class="bi bi-graph-up-arrow text-primary" style="font-size: 2.5rem;"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">Performance Metrics</h4>
                                    <p class="mb-0 text-muted">Data-driven quality and productivity tracking</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section bg-dark-blue text-white" style="background: linear-gradient(135deg, var(--dark-blue) 0%, #002244 100%);">
        <div class="container">
            <div class="section-title">
                <h2 class="text-white">Our Manufacturing Excellence</h2>
                <p class="lead text-white-50">Driving innovation through measurable results</p>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number" data-count="99.8">0</div>
                        <h4>Quality Rate</h4>
                        <p class="mb-0 text-muted">First-pass yield percentage</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number" data-count="150">0</div>
                        <h4>Clients Served</h4>
                        <p class="mb-0 text-muted">Global customer base</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number" data-count="25">0</div>
                        <h4>Years Experience</h4>
                        <p class="mb-0 text-muted">Industry leadership</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number" data-count="5000">0</div>
                        <h4>Components</h4>
                        <p class="mb-0 text-muted">Manufactured monthly</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Our Manufacturing Capabilities</h2>
                <p class="lead">Comprehensive solutions tailored to your technical requirements</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card scroll-animate" data-scroll="left">
                        <div class="feature-icon">
                            <i class="bi bi-cpu-fill"></i>
                        </div>
                        <h3>Precision Machining</h3>
                        <p>5-axis CNC machining with tolerances to ±0.0005" for complex geometries in metals, plastics and composites.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Swiss-style turning</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Micro-machining</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> EDM services</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card scroll-animate" data-scroll="up">
                        <div class="feature-icon">
                            <i class="bi bi-printer-fill"></i>
                        </div>
                        <h3>Additive Manufacturing</h3>
                        <p>Industrial-grade 3D printing with metal, polymer and ceramic materials for prototypes and production parts.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> DMLS/SLM metal printing</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> SLS nylon components</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Rapid tooling</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card scroll-animate" data-scroll="right">
                        <div class="feature-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h3>Assembly Services</h3>
                        <p>Turnkey assembly solutions including clean room capabilities for sensitive components and subassemblies.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Automated assembly</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Testing and validation</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Packaging and kitting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SVG Gradient Divider Example
    <svg class="svg-section-divider" viewBox="0 0 1440 320" style="display:block;width:100vw;height:60px;"><defs><linearGradient id="sectionGrad" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="#1fb8d3"/><stop offset="100%" stop-color="#0056b3"/></linearGradient></defs><path fill="url(#sectionGrad)" fill-opacity="0.3" d="M0,224L60,197.3C120,171,240,117,360,117.3C480,117,600,171,720,197.3C840,224,960,224,1080,197.3C1200,171,1320,85,1380,42.7L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg> -->

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">x
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="cta-content">
                        <h2 class="mb-4" style="color:#fff">Transform Your Production Process</h2>
                        <p class="lead mb-5">Partner with our manufacturing experts to optimize your supply chain, reduce costs, and accelerate time-to-market with precision-engineered solutions.</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#contact" class="btn btn-light btn-lg px-4">Request Consultation</a>
                            <a href="tel:+18005551234" class="btn btn-outline-light btn-lg px-4">Call Our Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <script>
        // Animation for stats counter
        function animateStats() {
            const statItems = document.querySelectorAll('.stat-item');
            statItems.forEach(item => {
                const rect = item.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) {
                    item.classList.add('animated');
                    const numberElement = item.querySelector('.stat-number');
                    const target = parseInt(numberElement.getAttribute('data-count'));
                    const duration = 2000;
                    const step = target / (duration / 16);
                    let current = 0;
                    const counter = setInterval(() => {
                        current += step;
                        if (current >= target) {
                            clearInterval(counter);
                            current = target;
                        }
                        numberElement.textContent = Math.floor(current);
                    }, 16);
                }
            });
        }
        // Intersection Observer for scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    // Add scroll direction animation
                    if (entry.target.hasAttribute('data-scroll')) {
                        const dir = entry.target.getAttribute('data-scroll');
                        entry.target.classList.remove('scroll-up','scroll-down','scroll-left','scroll-right');
                        if (dir === 'up') entry.target.classList.add('scroll-up');
                        if (dir === 'down') entry.target.classList.add('scroll-down');
                        if (dir === 'left') entry.target.classList.add('scroll-left');
                        if (dir === 'right') entry.target.classList.add('scroll-right');
                    }
                    if (entry.target.classList.contains('stat-item')) {
                        animateStats();
                    }
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.stat-item, .feature-card, .image-container, .scroll-animate').forEach(el => {
            observer.observe(el);
        });
        // Initialize animations on load
        window.addEventListener('load', () => {
            animateStats();
        });
    </script>
    <style>
    /* Scroll Animations */
    .scroll-animate {
        opacity: 0;
        transform: translateY(40px) scale(0.98);
        transition: all 0.9s cubic-bezier(.22,1,.36,1);
    }
    .animated.scroll-up { animation: scrollUp 1.1s cubic-bezier(.22,1,.36,1) forwards; }
    .animated.scroll-down { animation: scrollDown 1.1s cubic-bezier(.22,1,.36,1) forwards; }
    .animated.scroll-left { animation: scrollLeft 1.1s cubic-bezier(.22,1,.36,1) forwards; }
    .animated.scroll-right { animation: scrollRight 1.1s cubic-bezier(.22,1,.36,1) forwards; }
    @keyframes scrollUp {
        from { opacity: 0; transform: translateY(60px) scale(0.95); }
        to { opacity: 1; transform: translateY(0) scale(1); }
    }
    @keyframes scrollDown {
        from { opacity: 0; transform: translateY(-60px) scale(0.95); }
        to { opacity: 1; transform: translateY(0) scale(1); }
    }
    @keyframes scrollLeft {
        from { opacity: 0; transform: translateX(-60px) scale(0.95); }
        to { opacity: 1; transform: translateX(0) scale(1); }
    }
    @keyframes scrollRight {
        from { opacity: 0; transform: translateX(60px) scale(0.95); }
        to { opacity: 1; transform: translateX(0) scale(1); }
    }
    /* SVG Gradient Divider Responsive */
    .svg-section-divider {
        display: block;
        width: 100vw;
        height: 60px;
        margin-bottom: -2px;
    }
    @media (max-width: 768px) {
        .svg-section-divider {
            height: 32px;
        }
        .feature-card {
            margin-bottom: 1.5rem;
        }
    }
    </style>
    <?php include 'footer.php'; ?>
</body>
</html>