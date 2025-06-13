<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueFashion - Textile Excellence</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom CSS */
        .interactive-card {
            position: relative;
            overflow: hidden;
            border-radius: 0.5rem;
        }
        
        .card-inner {
            position: relative;
            width: 100%;
            height: 100%;
        }
        
        .image-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 125%; /* Adjust based on your image aspect ratio */
            overflow: hidden;
            border-radius: 0.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.5s ease;
        }
        
        .primary-image {
            opacity: 1;
        }
        
        .hover-image {
            opacity: 0;
        }
        
        .image-container:hover .primary-image {
            opacity: 0;
        }
        
        .image-container:hover .hover-image {
            opacity: 1;
        }
        
        /* Content styling */
        .section-title h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #2c3e50;
        }
        
        .title-desc p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 1.5rem;
        }
        
        .ttm-highlight-quote {
            background-color: #f8f9fa;
            border-left: 4px solid #3498db;
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-radius: 0.25rem;
        }
        
        blockquote p {
            font-style: italic;
            color: #2c3e50;
            font-size: 1.1rem;
        }
        
        .text-primary {
            color: #3498db !important;
        }
        
        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .padding_left30 {
                padding-left: 0 !important;
            }
            
            .res-991-padding_top40 {
                padding-top: 40px !important;
            }
            
            .image-container {
                padding-bottom: 100%; /* Adjust for mobile */
            }
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                <div class="interactive-card">
                    <div class="card-inner">
                        <div class="image-container fade-in">
                            <!-- Primary Image (visible by default) -->
                            <img class="primary-image img-fluid rounded-lg" 
                                 src="images/web-shots/WOW028201C.jpg" 
                                 alt="BlueFashion Manufacturing Facility">
                                 
                            <!-- Hover Image (hidden by default) -->
                            <img class="hover-image img-fluid rounded-lg" 
                                 src="images/web-shots/WOW0292912.jpg" 
                                 alt="BlueFashion Quality Control">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-12 col-xs-12 fade-in">
                <div class="padding_top20 res-991-padding_top40 padding_left30 res-991-padding_left0">
                    <!-- section title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h3>Our Journey in Textile Excellence</h3>
                        </div>
                        <div class="title-desc">
                            <p>Founded in 2005 with just five machines, BlueFashion began as a small job-work unit with big dreams. Today, we stand as a testament to what passion, innovation, and dedication can achieve in the textile industry.</p>
                            
                            <p>Our evolution from a modest operation to a large-scale garment manufacturing hub specializing in premium men's shirts and trousers for global brands reflects our commitment to quality and craftsmanship. In 2022, we expanded our horizons with Trendy Fits, bringing our expertise in custom tailoring and corporate uniforms to discerning clients who value both style and precision.</p>
                            
                            <div class="ttm-highlight-quote margin_top25 clearfix">
                                <blockquote class="ttm-bgcolor-grey rounded p-4 border-left-4 border-primary">
                                    <p class="mb-0">
                                        <i class="fas fa-quote-left text-primary mr-2"></i> 
                                        Precision in every stitch, innovation in every step. Our garments don't just clothe bodies—they empower personalities.
                                        <i class="fas fa-quote-right text-primary ml-2"></i>
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Optional: Add fade-in animation on scroll -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simple fade-in animation for elements with .fade-in class
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const fadeInOnScroll = function() {
                fadeElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementTop < windowHeight - 100) {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }
                });
            };
            
            // Set initial state
            fadeElements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            });
            
            // Check on load
            fadeInOnScroll();
            
            // Check on scroll
            window.addEventListener('scroll', fadeInOnScroll);
            
            // Optional: Preload hover image for smoother transition
            const hoverImage = document.querySelector('.hover-image');
            const img = new Image();
            img.src = hoverImage.src;
        });
    </script>
</body>
</html>