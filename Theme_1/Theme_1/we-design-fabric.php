<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themetechmount.com/html/BlueFashion/demo4/we-design-fabric.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Mar 2025 08:40:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
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
 

    <!-- Main Content --><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Design Fabric | Premium Fabric Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #0d6efd;
            --primary-dark: #052c65;
            --primary-light: #0a58ca;
            --white: #ffffff;
            --transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            --transition-fast: all 0.2s ease-in-out;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
            background-color: #f8f9fa;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: var(--white);
            padding: 140px 0 90px;
            position: relative;
            overflow: hidden;
            text-align: center;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('images/fabric-pattern.png') center/cover;
            opacity: 0.08;
            z-index: 0;
            transition: var(--transition);
        }
        
        .hero-section:hover::before {
            opacity: 0.12;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 25px;
            text-shadow: 0 2px 8px rgba(0,0,0,0.15);
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.8s 0.2s forwards;
            line-height: 1.2;
        }
        
        .breadcrumb {
            display: inline-flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            font-size: 1.05rem;
            background: rgba(255,255,255,0.1);
            padding: 12px 24px;
            border-radius: 50px;
            backdrop-filter: blur(5px);
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.8s 0.4s forwards;
        }
        
        .breadcrumb a {
            color: var(--white);
            text-decoration: none;
            transition: var(--transition-fast);
            opacity: 0.85;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .breadcrumb a:hover {
            opacity: 1;
            transform: translateX(3px);
        }
        
        .breadcrumb span:not(:last-child)::after {
            content: '›';
            margin-left: 10px;
            opacity: 0.6;
        }
        
        /* Main Content */
        .main-content {
            padding: 100px 0;
        }
        
        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .section-title {
            color: var(--primary-dark);
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 35px;
            position: relative;
            display: inline-block;
            padding-bottom: 12px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 70px;
            height: 4px;
            background: var(--primary);
            transition: var(--transition);
            border-radius: 2px;
        }
        
        .section-title:hover::after {
            width: 100px;
            background: var(--primary-light);
        }
        
        .service-description p {
            font-size: 1.15rem;
            margin-bottom: 28px;
            line-height: 1.8;
            color: #495057;
        }
        
        /* Image Cards */
        .image-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(0,0,0,0.08);
            transition: var(--transition);
            margin-bottom: 40px;
            position: relative;
            background: var(--white);
        }
        
        .image-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 45px rgba(0,0,0,0.12);
        }
        
        .image-card img {
            width: 100%;
            height: auto;
            transition: var(--transition);
            display: block;
        }
        
        .image-card:hover img {
            transform: scale(1.03);
        }
        
        /* Feature Boxes */
        .feature-box {
            background: var(--white);
            border-radius: 12px;
            padding: 35px 30px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.06);
            transition: var(--transition);
            margin-bottom: 30px;
            border-left: 5px solid var(--primary);
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .feature-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
            border-left: 5px solid var(--primary-light);
        }
        
        .feature-icon {
            font-size: 2.8rem;
            color: var(--primary);
            margin-bottom: 25px;
            transition: var(--transition);
            display: inline-block;
        }
        
        .feature-box:hover .feature-icon {
            transform: rotate(8deg) scale(1.1);
            color: var(--primary-light);
        }
        
        .feature-title {
            color: var(--primary-dark);
            font-size: 1.6rem;
            font-weight: 600;
            margin-bottom: 18px;
            line-height: 1.3;
        }
        
        .feature-box p {
            margin-bottom: 20px;
            flex-grow: 1;
        }
        
        /* Grid System */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }
        
        .col-md-6, .col-md-4, .col-md-12 {
            padding: 0 15px;
            margin-bottom: 30px;
        }
        
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
        
        .col-md-4 {
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }
        
        .col-md-12 {
            flex: 0 0 100%;
            max-width: 100%;
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
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        .animate.animated {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Button Styles */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            gap: 8px;
        }
        
        .btn-primary {
            background: var(--primary);
            color: var(--white);
        }
        
        .btn-primary:hover {
            background: var(--primary-light);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(13, 110, 253, 0.3);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.8rem;
            }
            
            .section-title {
                font-size: 2.1rem;
            }
            
            .col-md-6, .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 100px 0 60px;
            }
            
            .hero-title {
                font-size: 2.3rem;
                margin-bottom: 20px;
            }
            
            .breadcrumb {
                font-size: 0.95rem;
                padding: 10px 18px;
            }
            
            .main-content {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 1.8rem;
                margin-bottom: 25px;
            }
            
            .service-description p {
                font-size: 1.05rem;
            }
            
            .feature-box {
                padding: 25px 20px;
            }
            
            .feature-icon {
                font-size: 2.2rem;
                margin-bottom: 15px;
            }
            
            .feature-title {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
        <?php include 'header.php'; ?>
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">We Design Fabric</h1>
                <div class="breadcrumb-wrapper">
                    <div class="breadcrumb">
                        <span>
                            <a title="Homepage" href="index.php"><i class="fas fa-home"></i> Home</a>
                        </span>
                        <span>
                            <a>We Design Fabric</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-content">
        <div class="container">
            <div class="service-description">
                <h2 class="section-title animate">Manufacturer of Design Fabrics Services</h2>
                <p class="animate" style="transition-delay: 0.1s">We specialize in producing high-quality design fabrics featuring unique patterns, textures, and finishes. Using advanced techniques in weaving, printing, and embroidery, we create fabrics ideal for both fashion and interior applications. Our customization options allow brands to craft exclusive, trend-driven fabrics tailored to their vision.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box animate" style="transition-delay: 0.2s">
                            <div class="feature-icon">
                                <i class="fas fa-palette"></i>
                            </div>
                            <h3 class="feature-title">Custom Designs</h3>
                            <p>Create unique fabric patterns and textures tailored to your brand's aesthetic vision and market needs with our advanced design capabilities.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box animate" style="transition-delay: 0.3s">
                            <div class="feature-icon">
                                <i class="fas fa-sliders-h"></i>
                            </div>
                            <h3 class="feature-title">Advanced Techniques</h3>
                            <p>Utilizing cutting-edge weaving, printing, and embroidery methods for superior fabric quality that stands out in the marketplace.</p>
                        </div>
                    </div>
                </div>
                
                <div class="image-card animate" style="transition-delay: 0.4s">
                    <img class="img-fluid" src="images/web-shots/WOW00135.jpg" alt="Fabric Design Services">
                </div>
                
                <h2 class="section-title animate" style="transition-delay: 0.5s">The Rayon Fabrics Wholesaler</h2>
                <p class="animate" style="transition-delay: 0.6s">As a leading rayon fabric wholesaler, we offer a wide range of premium-quality rayon materials to meet diverse industry needs. Our collection includes soft, breathable, and stylish fabrics, ideal for fashion apparel, home textiles, and upholstery. We maintain consistent quality through rigorous control measures, ensuring durability and exceptional craftsmanship.</p>
                <p class="animate" style="transition-delay: 0.7s">With bulk supply options and competitive pricing, we deliver cost-effective solutions for businesses of all sizes. Our commitment to reliability, innovation, and customer satisfaction makes us a trusted partner in the textile industry.</p>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box animate" style="transition-delay: 0.8s">
                            <div class="feature-icon">
                                <i class="fas fa-tshirt"></i>
                            </div>
                            <h3 class="feature-title">Fashion Fabrics</h3>
                            <p>Premium rayon materials perfect for stylish, comfortable apparel that drapes beautifully and feels luxurious.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box animate" style="transition-delay: 0.9s">
                            <div class="feature-icon">
                                <i class="fas fa-couch"></i>
                            </div>
                            <h3 class="feature-title">Home Textiles</h3>
                            <p>Luxurious fabrics for upholstery, curtains, and decorative home applications with lasting quality.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box animate" style="transition-delay: 1s">
                            <div class="feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h3 class="feature-title">Quality Assurance</h3>
                            <p>Rigorous quality control ensures every yard meets our exacting standards for perfection.</p>
                        </div>
                    </div>
                </div>
                
                <h2 class="section-title animate" style="transition-delay: 1.1s">In-House Training Programs</h2>
                <p class="animate" style="transition-delay: 1.2s">We believe in empowering our clients with knowledge. Our comprehensive in-house training programs cover fabric selection, design principles, and application techniques to help you make the most of our materials and create exceptional products.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-card animate" style="transition-delay: 1.3s">
                            <img class="img-fluid" src="images/web-shots/WOW03051.jpg" alt="Fabric Training">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-card animate" style="transition-delay: 1.4s">
                            <img class="img-fluid" src="images/web-shots/WOW00394.jpg" alt="Design Workshop">
                        </div>
                    </div>
                </div>
                
                <h2 class="section-title animate" style="transition-delay: 1.5s">Understanding Your Business</h2>
                <p class="animate" style="transition-delay: 1.6s">Success in fabric design hinges on a deep understanding of market trends, customer preferences, and quality standards. Innovation in patterns, colors, and sustainable materials helps businesses stay ahead. A strong production process and reliable sourcing are key to ensuring long-term growth in the industry.</p>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature-box animate text-center" style="transition-delay: 1.7s">
                            <div class="feature-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h3 class="feature-title">Our Commitment to Innovation</h3>
                            <p>We continuously invest in research and development to bring you the latest fabric technologies and sustainable solutions. Our team stays ahead of global trends to provide you with materials that will make your products stand out in the marketplace and delight your customers.</p>
                            <div style="margin-top: 20px;">
                                <a href="#" class="btn btn-primary">Learn About Our Innovations <i class="fas fa-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts for Animation -->
    <script>
        // Improved animation on scroll with Intersection Observer
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.animate');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });
            
            animateElements.forEach(element => {
                observer.observe(element);
            });
            
            // Add hover effects to all feature boxes and cards
            const interactiveElements = document.querySelectorAll('.feature-box, .image-card, .btn');
            
            interactiveElements.forEach(element => {
                element.addEventListener('mouseenter', () => {
                    element.style.transition = 'var(--transition-fast)';
                });
                
                element.addEventListener('mouseleave', () => {
                    element.style.transition = 'var(--transition)';
                });
            });
        });
    </script>
</body>
</html>
        <!--site-main end-->
        <!--footer start-->
        <?php include 'footer.php'; ?>    
        <!--footer end-->
        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->
    </div><!-- page end -->
    <!-- Javascript -->
  <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery-migrate-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery-waypoints.js"></script>
    <script src="js/jquery-validate.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/numinate.min.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/jquery-isotope.js"></script>
    <script src="js/main.js"></script>
    <!-- Javascript end-->
</body>


<!-- Mirrored from themetechmount.com/html/BlueFashion/demo4/we-design-fabric.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Mar 2025 08:40:01 GMT -->
</html>