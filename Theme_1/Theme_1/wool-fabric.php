<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themetechmount.com/html/BlueFashion/demo4/wool-fabric.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Mar 2025 08:40:54 GMT -->
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
                        url('images/web-shots/WOW03236C2.jpg') center/cover no-repeat;
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
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border-light);
            align-items: center;
            gap: 12px;
        }
        
        .detail-icon {
            width: 36px;
            height: 36px;
            background: rgba(37, 99, 235, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-blue);
            flex-shrink: 0;
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
        }
        
        .detail-value {
            color: var(--text-dark);
            font-size: 0.95rem;
            font-weight: 500;
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
    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->

        <!-- header start -->
        <?php include 'header.php'; ?>
        <!-- header end -->
    <!-- Modern Hero Banner -->
    <section class="modern-hero animate__animated animate__fadeIn">
        <div class="container">
            <div class="hero-content text-white">
                <h1 class="hero-title animate__animated animate__fadeInUp">Premium Wool Fabric Collection</h1>
                <div class="breadcrumb animate__animated animate__fadeInUp animate__delay-1s">
                    <a href="index.php">Home</a>
                    <span class="breadcrumb-separator">/</span>
                    <span>Wool Fabric</span>
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
                         <img src="images/web-shots/WOW03236C2.jpg" alt="portfolio-img" class="project-image">
                        <div class="project-image-overlay">
                            <div class="zoom-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="info-section">
                        <div class="info-title">Project Details</div>
                        <p class="info-desc">
                           Wool fabric project offers warmth, durability, and natural comfort, ideal for stylish, sustainable clothing.
                        </p>
                        <div class="detail-list">
                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="fas fa-project-diagram"></i>
                                </div>
                                <div class="detail-content">
                                    <div class="detail-label">Project</div>
                                    <div class="detail-value">Wool Materials</div>
                                </div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-icon">
                                    <i class="fas fa-tags"></i>
                                </div>
                                <div class="detail-content">
                                    <div class="detail-label">Category</div>
                                    <div class="detail-value">Wool</div>
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
        });
    </script>
        <!--site-main start-->
        <div class="site-main">
            <section class="ttm-row project-single-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ttm-pf-single-content-wrapper ttm-pf-view-left-image">
                                <div class="ttm-pf-single-content-wrapper-innerbox">
                                    <div class="ttm-pf-detail-box">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-8">
                                                <!-- ttm_pf_image-wrapper -->
                                                <div class="ttm_pf_image-wrapper">
                                                      <img src="images/web-shots/WOW03350C4.jpg" alt="Linen Fabric Closeup" class="project-image">
                                                    <img src="images/web-shots/WOW03236C2.jpg" alt="portfolio-img" class="project-image">
                                                </div><!-- ttm_pf_image-wrapper end -->
                                            </div>
                                            <div class="col-md-12 col-lg-4">
                                                <div class="ttm-pf-single-detail-box">
                                                    <div class="ttm-pf-single-title ttm-bgcolor-skincolor">
                                                        <h3>Project Information</h3>
                                                    </div>
                                                    <div class="ttm-short-desc">Wool fabric project offers warmth, durability, and natural comfort, ideal for stylish, sustainable clothing.</div>
                                                    <ul class="ttm-pf-detailbox-list">
                                                        <li><span>Project: </span><span>Wool Materials </span></li>
                                                        <li><span>Category: </span><span>Wool</span></li>
                                                        <li><span>Clients: </span><span>Alex Sam Martin</span></li>
                                                        <li><span>Date: </span><span>February 10, 2021</span></li>
                                                        <li><span>Status: </span><span>Completed</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ttm-pf-single-content-area">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="margin_top40">
                                                    <h2>Working Together For Your Better Life</h2>
                                                    <p>Our wool fabric project focuses on providing warmth, softness, and durability. Designed for both comfort and style, our sustainable wool textiles offer timeless appeal, ensuring cozy, high-quality clothing for every season.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="ttm_single_image-wrapper text-start padding_top15">
                                                    <img class="img-fluid" src="images/web-shots/WOW03051C.jpg" alt="single-img-10">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="ttm_single_image-wrapper text-start padding_top15">
                                                    <img class="img-fluid" src="images/web-shots/WOW02540C2.jpg" alt="single-img-11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="margin_top40">
                                            <h2>Results Our Client's Report</h2>
                                            <p>Results from our client's report highlight the exceptional warmth, comfort, and durability of our wool fabric. Clients appreciate its soft texture, breathability, and versatility, praising its ability to create both elegant and cozy garments, perfect for all-season wear.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="featuredbox-number">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--featured-icon-box-->
                                                            <div class="featured-icon-box icon-align-top-content style8">
                                                                <div class="featured-icon">
                                                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-size-lg ttm-icon_element-color-skincolor ttm-icon_element-style-square">
                                                                        <i class="flaticon-fabric"></i>
                                                                        <span class="fea_num ttm-textcolor-darkgrey ttm-bgcolor-darkgrey">
                                                                            <i class="ttm-num ti-info"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="featured-content">
                                                                    <div class="featured-title">
                                                                        <h3>Fabric Treatment</h3>
                                                                    </div>
                                                                    <div class="featured-desc">
                                                                        <p>We do execute stabilization including reweaving & stitch repair.</p>
                                                                    </div>
                                                                </div>
                                                            </div><!-- featured-icon-box end-->
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--featured-icon-box-->
                                                            <div class="featured-icon-box icon-align-top-content style8">
                                                                <div class="featured-icon">
                                                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-size-lg ttm-icon_element-color-skincolor ttm-icon_element-style-square">
                                                                        <i class="flaticon-textiles"></i>
                                                                        <span class="fea_num ttm-textcolor-darkgrey ttm-bgcolor-darkgrey">
                                                                            <i class="ttm-num ti-info"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="featured-content">
                                                                    <div class="featured-title">
                                                                        <h3>Artistic Direction</h3>
                                                                    </div>
                                                                    <div class="featured-desc">
                                                                        <p>Assist collection strategies, storage, application and pest production</p>
                                                                    </div>
                                                                </div>
                                                            </div><!-- featured-icon-box end-->
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--featured-icon-box-->
                                                            <div class="featured-icon-box icon-align-top-content style8">
                                                                <div class="featured-icon">
                                                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-size-lg ttm-icon_element-color-skincolor ttm-icon_element-style-square">
                                                                        <i class="flaticon-moisture-wicking-fabric"></i>
                                                                        <span class="fea_num ttm-textcolor-darkgrey ttm-bgcolor-darkgrey">
                                                                            <i class="ttm-num ti-info"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="featured-content">
                                                                    <div class="featured-title">
                                                                        <h3>Satin Weaving</h3>
                                                                    </div>
                                                                    <div class="featured-desc">
                                                                        <p>Continuous weft yarn, with as few interruptions of warp as it possible.</p>
                                                                    </div>
                                                                </div>
                                                            </div><!-- featured-icon-box end-->
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                                            <!--featured-icon-box-->
                                                            <div class="featured-icon-box icon-align-top-content style8">
                                                                <div class="featured-icon">
                                                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-size-lg ttm-icon_element-color-skincolor ttm-icon_element-style-square">
                                                                        <i class="flaticon-iron"></i>
                                                                        <span class="fea_num ttm-textcolor-darkgrey ttm-bgcolor-darkgrey">
                                                                            <i class="ttm-num ti-info"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="featured-content">
                                                                    <div class="featured-title">
                                                                        <h3>Fabric Dyeing</h3>
                                                                    </div>
                                                                    <div class="featured-desc">
                                                                        <p>Transfer dyes from aqueous solution onto the fiber surface & diffusion.</p>
                                                                    </div>
                                                                </div>
                                                            </div><!-- featured-icon-box end-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ttm-horizontal_sep width-100 margin_top30 margin_bottom30"></div>
                                        <!-- <div class="d-flex justify-content-between">
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-darkgrey" href="wool-fabric.php">Previous</a>
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-darkgrey" href="silk-fabric.php">Next</a>
                                        </div> -->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
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


<!-- Mirrored from themetechmount.com/html/BlueFashion/demo4/wool-fabric.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Mar 2025 08:40:54 GMT -->
</html>