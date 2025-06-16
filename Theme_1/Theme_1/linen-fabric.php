<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themetechmount.com/html/BlueFashion/demo4/linen-fabric.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Mar 2025 08:40:03 GMT -->
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-blue: #2563eb;
            --dark-blue: #1e40af;
            --light-blue: #93c5fd;
            --bg-gray: #f8fafc;
            --text-dark: #1f2937;
            --text-medium: #4b5563;
            --text-light: #6b7280;
            --border-light: #e5e7eb;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-lg: 0 10px 25px rgba(0,0,0,0.1);
            --rounded-sm: 8px;
            --rounded-md: 12px;
            --rounded-lg: 16px;
            --rounded-xl: 24px;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            background-color: white;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .modern-hero {
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.9) 0%, rgba(30, 64, 175, 0.9) 100%), 
                        url('images/web-shots/WOW03350C4.jpg') center/cover no-repeat;
            min-height: 70vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding: 80px 0;
        }
        
        .hero-content {
            z-index: 2;
            position: relative;
            max-width: 800px;
        }
        
        .hero-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            background: linear-gradient(to right, #fff, #e0e7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1.2;
            margin-bottom: 24px;
            letter-spacing: -0.05em;
        }
        
        .breadcrumb {
            color: rgba(255,255,255,0.8);
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .breadcrumb a {
            color: white;
            transition: all 0.3s ease;
            text-decoration: none;
            font-weight: 500;
        }
        
        .breadcrumb a:hover {
            color: var(--light-blue);
        }
        
        .breadcrumb-separator {
            opacity: 0.6;
            font-size: 0.8rem;
        }
        
        .breadcrumb span:last-child {
            color: var(--light-blue);
            font-weight: 500;
        }
        
        /* Modern Project Card */
        .project-section {
            padding: 60px 0;
            background-color: white;
        }
        
        .project-card {
            border-radius: var(--rounded-xl);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            background: white;
            margin-top: -100px;
            position: relative;
            z-index: 10;
            border: 1px solid var(--border-light);
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }
        
        .project-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            min-height: 500px;
        }
        
        .project-image-container {
            position: relative;
            overflow: hidden;
        }
        
        .project-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        
        .project-image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.3) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .project-image-container:hover .project-image-overlay {
            opacity: 1;
        }
        
        .project-image-container:hover .project-image {
            transform: scale(1.05);
        }
        
        .zoom-icon {
            background: rgba(255,255,255,0.9);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--dark-blue);
            font-size: 1.5rem;
            transform: scale(0.8);
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .project-image-container:hover .zoom-icon {
            transform: scale(1);
        }
        
        .info-section {
            padding: 40px;
            background: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .info-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 24px;
            position: relative;
            padding-bottom: 16px;
        }
        
        .info-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--primary-blue), var(--dark-blue));
            border-radius: 3px;
        }
        
        .info-desc {
            color: var(--text-medium);
            line-height: 1.7;
            font-size: 1.05rem;
            margin-bottom: 32px;
        }
        
        .detail-list {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
        }
        
        .detail-item {
            display: flex;
            padding: 16px;
            border-radius: var(--rounded-sm);
            border-bottom: 1px solid var(--border-light);
            align-items: center;
            gap: 12px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: default;
            background: white;
            position: relative;
            overflow: hidden;
        }
        
        .detail-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            background: var(--primary-blue);
            transform: scaleY(0);
            transform-origin: bottom;
            transition: transform 0.3s ease;
        }
        
        .detail-item:hover {
            background: rgba(248, 250, 252, 0.6);
            transform: translateX(4px);
            box-shadow: var(--shadow-sm);
            border-bottom-color: transparent;
        }
        
        .detail-item:hover::before {
            transform: scaleY(1);
            transform-origin: top;
        }
        
        .detail-icon {
            width: 40px;
            height: 40px;
            background: rgba(37, 99, 235, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-blue);
            flex-shrink: 0;
            transition: all 0.3s ease;
        }
        
        .detail-item:hover .detail-icon {
            background: var(--primary-blue);
            color: white;
            transform: rotate(5deg) scale(1.1);
        }
        
        .detail-content {
            flex: 1;
        }
        
        .detail-label {
            font-weight: 600;
            color: var(--dark-blue);
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
            transition: all 0.3s ease;
        }
        
        .detail-item:hover .detail-label {
            color: var(--primary-blue);
        }
        
        .detail-value {
            color: var(--text-dark);
            font-size: 0.95rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .detail-item:hover .detail-value {
            color: var(--dark-blue);
            font-weight: 600;
        }
        
        .status-badge {
            background: linear-gradient(to right, #10b981, #34d399);
            color: white;
            padding: 6px 14px 6px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
        }
        
        .detail-item:hover .status-badge {
            transform: translateX(4px);
            box-shadow: 0 2px 8px rgba(16, 185, 129, 0.3);
        }
        
        .status-badge:before {
            content: '';
            display: block;
            width: 8px;
            height: 8px;
            background-color: white;
            border-radius: 50%;
        }
        
        /* Modern Responsive Adjustments */
        @media (max-width: 1024px) {
            .project-grid {
                grid-template-columns: 1fr;
                min-height: auto;
            }
            
            .project-image-container {
                height: 400px;
            }
            
            .project-card {
                margin-top: -60px;
            }
        }
        
        @media (max-width: 768px) {
            .modern-hero {
                min-height: 60vh;
                padding: 60px 0;
            }
            
            .info-section {
                padding: 30px;
            }
            
            .hero-title {
                margin-bottom: 16px;
            }
        }
        
        @media (max-width: 480px) {
            .modern-hero {
                min-height: 50vh;
            }
            
            .project-image-container {
                height: 300px;
            }
            
            .info-section {
                padding: 24px;
            }
            
            .detail-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }
            
            .detail-icon {
                width: 32px;
                height: 32px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
        <!-- preloader end -->

        <!-- header start -->
        <?php include 'header.php'; ?>
        <!-- header end -->
    <!-- Modern Hero Banner -->
    <section class="modern-hero animate__animated animate__fadeIn">
        <div class="container">
            <div class="hero-content text-white">
                <h1 class="hero-title animate__animated animate__fadeInUp">Premium Linen Fabric Collection</h1>
                <div class="breadcrumb animate__animated animate__fadeInUp animate__delay-1s">
                    <a href="index.php">Home</a>
                    <span class="breadcrumb-separator">/</span>
                    <span>Linen Fabric</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern Project Section -->
    <section class="project-section">
        <div class="container">
            <div class="project-card animate__animated animate__fadeIn animate__delay-1s">
                <div class="project-grid">
                    <div class="project-image-container">
                        <img src="images/web-shots/WOW03350C4.jpg" alt="Linen Fabric Closeup" class="project-image">
                        <div class="project-image-overlay">
                            <div class="zoom-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-section">
                        <div class="info-title">Project Details</div>
                        <p class="info-desc">
                            Our premium linen fabric collection combines natural comfort with sophisticated elegance. 
                            Lightweight and breathable, these textiles offer exceptional durability while maintaining 
                            timeless style for contemporary fashion.
                        </p>
                        <div class="detail-list">
                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="fas fa-project-diagram"></i>
                                </div>
                                <div class="detail-content">
                                    <div class="detail-label">Project</div>
                                    <div class="detail-value">Linen Materials</div>
                                </div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="fas fa-tags"></i>
                                </div>
                                <div class="detail-content">
                                    <div class="detail-label">Category</div>
                                    <div class="detail-value">Premium Linen</div>
                                </div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="detail-content">
                                    <div class="detail-label">Client</div>
                                    <div class="detail-value">Alex Sam Martin</div>
                                </div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="detail-content">
                                    <div class="detail-label">Date</div>
                                    <div class="detail-value">February 10, 2021</div>
                                </div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="detail-content">
                                    <div class="detail-label">Status</div>
                                    <div class="status-badge">Completed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern JavaScript Effects -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for scroll animations
            const animateOnScroll = (elements, animation) => {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add(animation);
                            observer.unobserve(entry.target);
                        }
                    });
                }, {threshold: 0.1});
                
                elements.forEach(el => observer.observe(el));
            };
            
            // Animate elements
            const projectCard = document.querySelector('.project-card');
            if (projectCard) {
                animateOnScroll([projectCard], 'animate__fadeInUp');
            }
            
            // Enhanced hover effect for project image
            const projectImage = document.querySelector('.project-image');
            const projectImageContainer = document.querySelector('.project-image-container');
            
            if (projectImage && projectImageContainer) {
                projectImageContainer.addEventListener('mouseenter', () => {
                    projectImage.style.transform = 'scale(1.05)';
                });
                
                projectImageContainer.addEventListener('mouseleave', () => {
                    projectImage.style.transform = 'scale(1)';
                });
            }
            
            // Click handler for zoom icon (could be expanded to open a lightbox)
            const zoomIcon = document.querySelector('.zoom-icon');
            if (zoomIcon) {
                zoomIcon.addEventListener('click', (e) => {
                    e.preventDefault();
                    // Here you would typically open a lightbox with the full-size image
                    console.log('Open image in lightbox');
                });
            }
            
            // Add ripple effect to detail items
            const detailItems = document.querySelectorAll('.detail-item');
            detailItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    item.style.transform = 'translateX(4px)';
                });
                
                item.addEventListener('mouseleave', () => {
                    item.style.transform = 'translateX(0)';
                });
            });
        });
    </script>

                                   <div class="ttm-pf-single-content-area" style="background: linear-gradient(135deg, #f5fbff 0%, #e6f2ff 100%); padding: 80px 0; overflow: hidden;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="content-wrapper" style="padding-right: 40px; transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1); transform: translateX(-20px); opacity: 0;">
                    <h2 style="font-size: 2.8rem; font-weight: 700; color: #1a3e72; margin-bottom: 30px; line-height: 1.3; position: relative;">
                        <span style="display: inline-block; position: relative;">
                            Working Together For Your Better Life
                            <span style="position: absolute; bottom: -12px; left: 0; width: 80px; height: 4px; background: #4a90e2; border-radius: 2px; transition: width 0.4s ease;"></span>
                        </span>
                    </h2>
                    <p style="font-size: 1.15rem; line-height: 1.8; color: #4a5568; margin-bottom: 35px; transition: all 0.5s ease 0.1s; transform: translateY(10px); opacity: 0;">
                        Our premium linen fabric collection combines breathability with eco-friendly innovation to deliver natural comfort and lasting durability. Designed for modern elegance, these versatile textiles offer a timeless, lightweight solution for sustainable fashion and conscious living.
                    </p>
                    <button style="background: linear-gradient(135deg, #4a90e2, #2a5c8d); color: white; border: none; padding: 14px 35px; border-radius: 30px; font-weight: 600; cursor: pointer; transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1); box-shadow: 0 4px 15px rgba(42, 92, 141, 0.2); transform: translateY(20px); opacity: 0;">
                        Discover Our Collection
                        <span style="display: inline-block; margin-left: 8px; transition: transform 0.3s ease;">→</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="row g-4" style="perspective: 1500px;">
                    <div class="col-md-6">
                        <div class="image-slide" style="overflow: hidden; border-radius: 12px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1); transform: translateX(20px) rotateY(15deg); opacity: 0;">
                            <img class="img-fluid" src="images/web-shots/WOW00446C2.jpg" alt="Linen Fabric Close-up" style="width: 100%; height: auto; transition: transform 0.7s ease; transform-origin: center;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-slide" style="overflow: hidden; border-radius: 12px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.1s; transform: translateX(20px) rotateY(15deg); opacity: 0; margin-top: 40px;">
                            <img class="img-fluid" src="images/web-shots/WOW00394C2.jpg" alt="Linen Fabric Texture" style="width: 100%; height: auto; transition: transform 0.7s ease; transform-origin: center;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Hover Effects */
    .image-slide:hover {
        transform: translateY(-10px) rotateY(0deg) !important;
        box-shadow: 0 20px 50px rgba(42, 92, 141, 0.15) !important;
    }
    
    .image-slide:hover img {
        transform: scale(1.08) !important;
    }
    
    button:hover {
        transform: translateY(-3px) !important;
        box-shadow: 0 10px 25px rgba(42, 92, 141, 0.3) !important;
    }
    
    button:hover span {
        transform: translateX(4px) !important;
    }
    
    h2 span:hover span {
        width: 100% !important;
    }
    
    /* Animation Classes */
    .animate-in {
        transform: translateX(0) translateY(0) rotateY(0deg) !important;
        opacity: 1 !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animate elements when they come into view
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.content-wrapper, .image-slide, p, button');
            const windowHeight = window.innerHeight;
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementPosition < windowHeight - elementVisible) {
                    element.classList.add('animate-in');
                }
            });
        };
        
        // Initial check
        animateOnScroll();
        
        // Check on scroll
        window.addEventListener('scroll', animateOnScroll);
        
        // Additional hover effect for the heading underline
        const heading = document.querySelector('h2 span');
        heading.addEventListener('mouseenter', function() {
            this.querySelector('span').style.width = '100%';
        });
        heading.addEventListener('mouseleave', function() {
            this.querySelector('span').style.width = '80px';
        });
    });
</script>
                                        <div class="client-reports-section">
    <div class="container">
        <!-- Header Section -->
        <div class="section-header text-center mb-5">
            <h2 class="section-title">Client Success Stories</h2>
            <p class="section-subtitle">Discover why our clients love working with us and our premium linen fabrics</p>
        </div>
        
        <!-- Testimonial Highlight -->
        <div class="testimonial-highlight bg-blue-gradient p-4 rounded-lg mb-5 text-center text-white">
            <p class="mb-0">"Our clients consistently praise the breathable comfort, durability, and timeless elegance of our linen fabric. Its versatility and eco-friendly nature make it perfect for creating stylish, lightweight garments for any occasion."</p>
        </div>
        
        <!-- Services Cards -->
        <div class="row services-grid">
            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card blue-card">
                    <div class="card-icon">
                        <i class="flaticon-fabric"></i>
                        <div class="icon-badge">1</div>
                    </div>
                    <h3>Fabric Treatment</h3>
                    <p>We do execute stabilization including reweaving & stitch repair.</p>
                    <div class="hover-content">
                        <div class="hover-inner">
                            <h4>Advanced Techniques</h4>
                            <ul>
                                <li>Professional fabric stabilization</li>
                                <li>Precision reweaving</li>
                                <li>Seamless stitch repair</li>
                            </ul>
                            <div class="hover-btn">Learn More →</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card blue-card">
                    <div class="card-icon">
                        <i class="flaticon-textiles"></i>
                        <div class="icon-badge">2</div>
                    </div>
                    <h3>Artistic Direction</h3>
                    <p>Assist collection strategies, storage, application and pest production</p>
                    <div class="hover-content">
                        <div class="hover-inner">
                            <h4>Creative Solutions</h4>
                            <ul>
                                <li>Collection strategy development</li>
                                <li>Optimal storage solutions</li>
                                <li>Pest prevention systems</li>
                            </ul>
                            <div class="hover-btn">Learn More →</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card blue-card">
                    <div class="card-icon">
                        <i class="flaticon-moisture-wicking-fabric"></i>
                        <div class="icon-badge">3</div>
                    </div>
                    <h3>Satin Weaving</h3>
                    <p>Continuous weft yarn, with as few interruptions of warp as it possible.</p>
                    <div class="hover-content">
                        <div class="hover-inner">
                            <h4>Weaving Excellence</h4>
                            <ul>
                                <li>High-density weaving</li>
                                <li>Minimal warp interruption</li>
                                <li>Premium yarn selection</li>
                            </ul>
                            <div class="hover-btn">Learn More →</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card blue-card">
                    <div class="card-icon">
                        <i class="flaticon-iron"></i>
                        <div class="icon-badge">4</div>
                    </div>
                    <h3>Fabric Dyeing</h3>
                    <p>Transfer dyes from aqueous solution onto the fiber surface & diffusion.</p>
                    <div class="hover-content">
                        <div class="hover-inner">
                            <h4>Dyeing Process</h4>
                            <ul>
                                <li>Eco-friendly dye solutions</li>
                                <li>Uniform color application</li>
                                <li>Advanced diffusion techniques</li>
                            </ul>
                            <div class="hover-btn">Learn More →</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Blue Theme Colors */
:root {
    --primary-blue: #2a5bd7;
    --dark-blue: #1a3a8f;
    --light-blue: #e6f0ff;
    --accent-blue: #4a7dff;
    --hover-blue: #1e4fd1;
}

/* Animation Keyframes */
@keyframes slideUp {
    from {
        transform: translateY(30px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.client-reports-section {
    padding: 80px 0;
    background-color: #f8fafc;
    transition: all 0.5s ease;
    overflow: hidden;
}

.section-header {
    max-width: 800px;
    margin: 0 auto;
    transition: all 0.5s ease;
    animation: slideUp 0.8s ease-out forwards;
}

.section-title {
    font-size: 2.5rem;
    color: var(--dark-blue);
    margin-bottom: 1rem;
    font-weight: 700;
    transition: all 0.3s ease;
    animation: slideUp 0.8s ease-out 0.2s forwards;
    opacity: 0;
}

.section-subtitle {
    font-size: 1.1rem;
    color: #666;
    transition: all 0.3s ease;
    animation: slideUp 0.8s ease-out 0.4s forwards;
    opacity: 0;
}

.testimonial-highlight {
    background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
    max-width: 900px;
    margin: 0 auto;
    box-shadow: 0 10px 30px rgba(42, 91, 215, 0.2);
    padding: 25px;
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    animation: slideUp 0.8s ease-out 0.6s forwards;
    opacity: 0;
}

.services-grid {
    animation: slideUp 0.8s ease-out 0.8s forwards;
    opacity: 0;
}

.service-card {
    background: white;
    border-radius: 12px;
    padding: 30px;
    height: 100%;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(42, 91, 215, 0.1);
    z-index: 1;
    opacity: 0;
}

/* Staggered animations for each card */
.service-card:nth-child(1) {
    animation: slideUp 0.8s ease-out 0.8s forwards;
}
.service-card:nth-child(2) {
    animation: slideUp 0.8s ease-out 1.0s forwards;
}
.service-card:nth-child(3) {
    animation: slideUp 0.8s ease-out 1.2s forwards;
}
.service-card:nth-child(4) {
    animation: slideUp 0.8s ease-out 1.4s forwards;
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
    opacity: 0;
    z-index: -1;
    transition: opacity 0.4s ease;
}

.blue-card {
    border-top: 4px solid var(--primary-blue);
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(42, 91, 215, 0.25);
    color: white;
    border-color: transparent;
}

.service-card:hover::before {
    opacity: 1;
}

.service-card:hover h3,
.service-card:hover p {
    color: white;
}

.card-icon {
    font-size: 2.5rem;
    color: var(--primary-blue);
    margin-bottom: 20px;
    position: relative;
    display: inline-block;
    transition: all 0.3s ease;
}

.service-card:hover .card-icon {
    color: white;
    transform: scale(1.1);
}

.icon-badge {
    position: absolute;
    top: -15px;
    right: -15px;
    background: var(--dark-blue);
    color: white;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.8rem;
    font-weight: bold;
    transition: all 0.3s ease;
}

.service-card:hover .icon-badge {
    background: white;
    color: var(--primary-blue);
    transform: scale(1.1);
}

.service-card h3 {
    color: var(--dark-blue);
    margin-bottom: 15px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.service-card p {
    color: #666;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.hover-content {
    position: absolute;
    bottom: -100%;
    left: 0;
    right: 0;
    background: rgba(255, 255, 255, 0.95);
    padding: 25px;
    transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border-radius: 0 0 12px 12px;
    backdrop-filter: blur(5px);
    height: 100%;
    display: flex;
    align-items: center;
}

.service-card:hover .hover-content {
    bottom: 0;
}

.hover-inner {
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.4s ease 0.1s;
}

.service-card:hover .hover-inner {
    transform: translateY(0);
    opacity: 1;
}

.hover-content h4 {
    color: var(--dark-blue);
    margin-bottom: 15px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.hover-content ul {
    padding-left: 20px;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.hover-content li {
    margin-bottom: 8px;
    color: #555;
    transition: all 0.3s ease;
    position: relative;
}

.hover-content li::before {
    content: '•';
    color: var(--primary-blue);
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: -1em;
    transition: all 0.3s ease;
}

.hover-btn {
    color: var(--primary-blue);
    font-weight: 600;
    display: inline-block;
    transition: all 0.3s ease;
    cursor: pointer;
}

.hover-btn:hover {
    color: var(--dark-blue);
    transform: translateX(5px);
}

.bg-blue-gradient {
    background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
}

@media (max-width: 992px) {
    .service-card {
        padding: 20px;
    }
    
    .hover-content {
        padding: 15px;
    }
    
    .section-title {
        font-size: 2rem;
    }
}
</style> 
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


<!-- Mirrored from themetechmount.com/html/BlueFashion/demo4/linen-fabric.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Mar 2025 08:40:03 GMT -->
</html>