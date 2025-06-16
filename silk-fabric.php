<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Cotton Fabric | Blue Textiles</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2563eb;
            --primary-light: #3b82f6;
            --primary-dark: #1d4ed8;
            --secondary: #93c5fd;
            --accent: #bfdbfe;
            --dark: #1e3a8a;
            --light: #f8fafc;
            --text: #1e293b;
            --text-light: #64748b;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text);
            background-color: var(--light);
            line-height: 1.6;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--dark);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 14px;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
        }

        /* Hero Section */
        .product-hero {
            background: linear-gradient(rgba(30, 58, 138, 0.8), rgba(30, 58, 138, 0.8)), 
                        url('https://images.unsplash.com/photo-1520367445093-50dc08a59d9d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
            color: white;
            padding: 120px 0;
            text-align: center;
        }

        .hero-title {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem;
            opacity: 0.9;
        }

        /* Product Info Section */
        .product-section {
            padding: 80px 0;
        }

        .product-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .product-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .product-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .product-image:hover img {
            transform: scale(1.03);
        }

        .product-info {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .product-title {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: var(--primary-dark);
        }

        .product-description {
            margin-bottom: 2rem;
            color: var(--text-light);
        }

        .product-meta {
            margin-bottom: 2rem;
        }

        .meta-item {
            display: flex;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .meta-label {
            font-weight: 600;
            min-width: 120px;
            color: var(--primary-dark);
        }

        /* Features Section */
        .features-section {
            padding: 80px 0;
            background-color: var(--light);
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
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
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: rgba(59, 130, 246, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 24px;
            color: var(--primary);
        }

        .feature-card h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        /* Gallery Section */
        .gallery-section {
            padding: 80px 0;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .gallery-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: var(--transition);
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .product-grid {
                grid-template-columns: 1fr;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="product-hero">
        <div class="container">
            <h1 class="hero-title">Premium Cotton Fabric</h1>
            <p class="hero-subtitle">Soft, breathable cotton fabric designed for comfort, durability, and sustainability</p>
            <a href="#product-info" class="btn btn-primary">Explore Collection</a>
        </div>
    </section>

    <!-- Product Info Section -->
    <section id="product-info" class="product-section">
        <div class="container">
            <div class="product-grid">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cotton Fabric">
                </div>
                <div class="product-info">
                    <h2 class="product-title">Project Information</h2>
                    <p class="product-description">Soft, breathable cotton fabric designed for comfort, durability, and sustainability. Natural fibers crafted to meet modern needs with timeless quality appeal.</p>
                    
                    <div class="product-meta">
                        <div class="meta-item">
                            <span class="meta-label">Project:</span>
                            <span>Cotton Materials</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">Category:</span>
                            <span>Cotton</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">Clients:</span>
                            <span>Alex Sam Martin</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">Date:</span>
                            <span>February 10, 2021</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">Status:</span>
                            <span>Completed</span>
                        </div>
                    </div>
                    
                    <h3>Working Together For Your Better Life</h3>
                    <p>Our cotton fabric project is dedicated to creating soft, breathable, and eco-friendly textiles that ensure comfort, promote sustainability, and support healthy living through high-quality, skin-friendly materials crafted with care and innovation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1520367445093-50dc08a59d9d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cotton Fabric Texture">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1556909212-d5b604d0c90d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cotton Fabric Use">
                </div>
            </div>
            
            <div style="margin-top: 40px; padding: 40px 0;">
                <h2 style="text-align: center; margin-bottom: 20px;">Results Our Client's Report</h2>
                <p style="text-align: center; max-width: 800px; margin: 0 auto; color: var(--text-light);">
                    Results from our client's report highlight the exceptional comfort, durability, and breathability of our cotton fabrics. Customers appreciate the natural feel, skin-friendliness, and long-lasting quality, confirming our commitment to delivering sustainable, high-performance textiles that exceed expectations in every use.
                </p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="section-title">
                <h2>Fabric Features</h2>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>Fabric Treatment</h3>
                    <p>We do execute stabilization including reweaving & stitch repair.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Artistic Direction</h3>
                    <p>Assist collection strategies, storage, application and pest production</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-th"></i>
                    </div>
                    <h3>Satin Weaving</h3>
                    <p>Continuous weft yarn, with as few interruptions of warp as it possible.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-fill-drip"></i>
                    </div>
                    <h3>Fabric Dyeing</h3>
                    <p>Transfer dyes from aqueous solution onto the fiber surface & diffusion.</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Simple animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const featureCards = document.querySelectorAll('.feature-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            featureCards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'all 0.6s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>