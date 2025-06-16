<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Fabric Cutting Services | GlobalTextile</title>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="BlueFashion" />
    <meta name="author" content="https://www.themetechmount.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="BlueFashion - Textile Industry">
    <title>BlueFashion</title>
    <link rel="shortcut icon" href="images/favicon13.png" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans&family=Playfair+Display&display=swap">
    <style>
        :root {
             --primary: #1e3a8a;
            --primary-light: #38bdf8;
            --primary-dark: #0369a1;
            --secondary: #14043a;
            --dark: #0f172a;
            --light: #f1f5f9;
            --accent:#0ea5e9 ;
            --white: #FFFFFF;
            --black: #121212;
            --gray: #F5F5F5;
            --dark-gray: #333333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: var(--dark-gray);
            background-color: var(--white);
       
        }

        /* Header (Reused from Contact Page) */
      

        /* Hero Section */
        .service-hero {
            height: 70vh;
            width: 100%;
            background: linear-gradient(135deg, rgba(0, 35, 102, 0.85) 0%, rgba(135, 206, 235, 0.75) 100%), 
                        url('images/web-shots/WOW02925.jpg') center/cover no-repeat;
            display: flex;
            align-items: center;
            padding: 0 5%;
            /* margin-top: 80px; */
            color: var(--white);
        }

        .hero-content {
            max-width: 800px;
        }

        .hero-content h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .hero-content h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100px;
            height: 3px;
            background-color: var(--accent);
        }

        /* Service Showcase */
        .service-showcase {
            padding: 5rem 5%;
            background-color: var(--white);
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-family: 'Montserrat', sans-serif;
            color: var(--primary);
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent);
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .service-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-image {
            height: 250px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .service-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 1.5rem;
            background: linear-gradient(to top, rgba(0, 35, 102, 0.9), transparent);
            color: var(--white);
        }

        .service-overlay h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
        }

        .service-content {
            padding: 2rem;
        }

        .service-content p {
            margin-bottom: 1.5rem;
        }

        .specs-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .spec-item {
            display: flex;
            align-items: center;
        }

        .spec-icon {
            margin-right: 0.8rem;
            color: var(--accent);
        }

        .cta-button {
            display: inline-block;
            padding: 0.8rem 2rem;
            background-color: var(--accent);
            color: var(--primary);
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            background-color: var(--primary);
            color: var(--white);
        }

        /* Training Section */
        .training-section {
            padding: 5rem 5%;
            background-color: var(--gray);
        }

        .training-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            align-items: center;
        }

        .training-image {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .training-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .training-content h2 {
            font-family: 'Montserrat', sans-serif;
            color: var(--primary);
            margin-bottom: 1.5rem;
        }

        /* Gallery Section */
        .gallery-section {
            padding: 5rem 5%;
            background-color: var(--white);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .gallery-item {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 250px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .gallery-item:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
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

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.2rem;
            }
            .service-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            .service-showcase, .training-section, .gallery-section {
                padding: 2.5rem 2vw;
            }
            .training-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            .gallery-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            .service-image, .gallery-item {
                height: 180px;
            }
            .service-content {
                padding: 1.2rem;
            }
        }
        @media (max-width: 576px) {
            .hero-content h1 {
                font-size: 1.4rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .service-image, .gallery-item {
                height: 120px;
            }
            .service-content, .training-content {
                padding: 0.8rem;
            }
            .section-title {
                font-size: 1.2rem;
            }
            .cta-button {
                padding: 0.6rem 1.2rem;
                font-size: 0.95rem;
            }
            .specs-grid {
                grid-template-columns: 1fr;
            }
            ul {
                margin-left: 1rem !important;
            }
        }
        @media (max-width: 400px) {
            .hero-content h1 {
                font-size: 1.1rem;
            }
            .service-image, .gallery-item {
                height: 80px;
            }
            .cta-button {
                font-size: 0.85rem;
                padding: 0.5rem 0.8rem;
            }
            .service-overlay h3{
                font-size: 1.2rem;

            }
        }
    </style>
</head>
<body>
    <!-- Header (Same as Contact Page) -->
 <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="service-hero scroll-animate scroll-up">
        <div class="hero-content">
            <h1>Precision Fabric Cutting</h1>
            <p>Advanced cutting solutions for denim, rayon, and specialty fabrics with millimeter accuracy</p>
            <a href="#contact" class="cta-button">Request Custom Quote</a>
        </div>
    </section>

    <!-- Service Showcase -->
    <section class="service-showcase scroll-animate scroll-right">
        <h2 class="section-title">Our Fabric Cutting Services</h2>
        <div class="service-grid">
            <div class="service-card scroll-animate scroll-left">
                <div class="service-image" style="background-image: url('images/web-shots/WOW02616.jpg')">
                    <div class="service-overlay">
                        <h3>Denim Fabric Cutting</h3>
                    </div>
                </div>
                <div class="service-content">
                    <p>We specialize in crafting premium denim fabrics using advanced weaving and dyeing techniques. Our diverse range of finishes, weights, and textures cater to both fashion and industrial demands.</p>
                    <div class="specs-grid">
                        <div class="spec-item scroll-animate scroll-up">
                            <span class="spec-icon"><i class="fa fa-cut"></i></span>
                            <span>Laser Precision</span>
                        </div>
                        <div class="spec-item scroll-animate scroll-down">
                            <span class="spec-icon"><i class="fa fa-ruler-horizontal"></i></span>
                            <span>±0.5mm Tolerance</span>
                        </div>
                        <div class="spec-item scroll-animate scroll-left">
                            <span class="spec-icon"><i class="fa fa-industry"></i></span>
                            <span>Bulk Production</span>
                        </div>
                        <div class="spec-item scroll-animate scroll-right">
                            <span class="spec-icon"><i class="fa fa-paint-brush"></i></span>
                            <span>Custom Finishes</span>
                        </div>
                    </div>
                    <p>With customization and bulk production options, we offer tailored solutions to meet the specific needs of brands and businesses.</p>
                    <a href="#" class="cta-button">Explore Denim Options</a>
                </div>
            </div>
            <div class="service-card scroll-animate scroll-right">
                <div class="service-image" style="background-image: url('images/web-shots/WOW02793.jpg')">
                    <div class="service-overlay">
                        <h3>Rayon Wholesale Cutting</h3>
                    </div>
                </div>
                <div class="service-content">
                    <p>As a trusted rayon fabric wholesaler, we provide bulk quantities of this versatile material to retailers, garment manufacturers, and designers. Known for its softness and breathability, rayon is ideal for fashion, home textiles, and accessories.</p>
                    <div class="specs-grid">
                        <div class="spec-item scroll-animate scroll-up">
                            <span class="spec-icon"><i class="fa fa-tshirt"></i></span>
                            <span>Viscose</span>
                        </div>
                        <div class="spec-item scroll-animate scroll-down">
                            <span class="spec-icon"><i class="fa fa-female"></i></span>
                            <span>Modal</span>
                        </div>
                        <div class="spec-item scroll-animate scroll-left">
                            <span class="spec-icon"><i class="fa fa-bed"></i></span>
                            <span>Lyocell</span>
                        </div>
                        <div class="spec-item scroll-animate scroll-right">
                            <span class="spec-icon"><i class="fa fa-plane"></i></span>
                            <span>Fast Delivery</span>
                        </div>
                    </div>
                    <p>We offer a range of types including viscose, modal, and lyocell, with various prints, colors, and textures. Our competitive pricing and quick delivery ensure we meet the needs of the evolving textile market.</p>
                    <a href="#" class="cta-button">View Rayon Inventory</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Training Section -->
    <section class="training-section scroll-animate scroll-left">
        <div class="training-container">
            <div class="training-image scroll-animate scroll-up">
                <img src="images/web-shots/WOW02616.jpg" alt="In-house Fabric Cutting Training">
            </div>
            <div class="training-content scroll-animate scroll-right">
                <h2>In-House Training Programs</h2>
                <p>Fabric printing enhances textiles with vibrant designs through digital, screen, and block printing methods. By staying attuned to market trends and demand, businesses can meet the diverse needs of fashion, decor, and branding.</p>
                <p>Our comprehensive training programs cover:</p>
                <ul style="margin: 1rem 0 1.5rem 2rem;">
                    <li>Advanced cutting techniques</li>
                    <li>Material-specific handling</li>
                    <li>Equipment maintenance</li>
                    <li>Quality control standards</li>
                </ul>
                <a href="#" class="cta-button">Schedule Training</a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section scroll-animate scroll-down">
        <h2 class="section-title">Our Cutting Precision</h2>
        <div class="gallery-grid">
            <div class="gallery-item scroll-animate scroll-up" style="background-image: url('images/web-shots/WOW03257C.jpg')"></div>
            <div class="gallery-item scroll-animate scroll-left" style="background-image: url('images/web-shots/WOW03350C3.jpg')"></div>
            <div class="gallery-item scroll-animate scroll-right" style="background-image: url('images/web-shots/WOW09961.jpg')"></div>
        </div>
    </section>

    <!-- Footer (Same as Contact Page) -->
    <footer>
        <!-- Footer content from contact page -->
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Scroll-triggered animation for all .scroll-animate elements
            const scrollEls = document.querySelectorAll('.scroll-animate');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.13 });
            scrollEls.forEach(el => observer.observe(el));
        });
    </script>
    <?php include 'footer.php'; ?>
</body>
</html>