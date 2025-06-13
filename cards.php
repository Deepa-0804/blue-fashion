<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modern Animated Card Design</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #3b82f6;
            --primary-light: #60a5fa;
            --primary-dark: #2563eb;
            --secondary: #14043a;
            --dark: #1e293b;
            --light: #f8fafc;
            --gradient: linear-gradient(135deg, var(--primary), var(--secondary));
            --card-bg: rgba(255, 255, 255, 0.9);
            --card-shadow: 0 8px 32px rgba(31, 38, 135, 0.1);
            --glass-border: 1px solid rgba(255, 255, 255, 0.18);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
            color: var(--dark);
            line-height: 1.6;
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        /* Modern Card Styles */
        .card-section {
            padding: 5rem 0;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
        }
        
        .section-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: inline-block;
            position: relative;
            z-index: 1;
        }
        
        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--gradient);
            border-radius: 2px;
            z-index: 0;
        }
        
        .section-header p {
            font-size: 1.1rem;
            color: #64748b;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.8;
        }
        
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            perspective: 1000px;
        }
        
        .card {
            position: relative;
            height: 100%;
            transform-style: preserve-3d;
            transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: var(--glass-border);
            transform: translateY(50px);
            opacity: 0;
        }
        
        .card.animate {
            transform: translateY(0);
            opacity: 1;
        }
        
        .card:hover {
            transform: translateY(-10px) !important;
            box-shadow: 0 20px 40px rgba(59, 130, 246, 0.2);
        }
        
        .card-content {
            padding: 2rem;
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .card-image {
            height: 220px;
            overflow: hidden;
            position: relative;
            border-radius: 15px 15px 0 0;
            transform: translateZ(30px);
        }
        
        .card-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 1;
            mix-blend-mode: overlay;
        }
        
        .card:hover .card-image::before {
            opacity: 0.3;
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
        }
        
        .card:hover .card-image img {
            transform: scale(1.1) rotate(1deg);
        }
        
        .card-category {
            display: inline-block;
            background: var(--gradient);
            color: white;
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 1rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
            transform: translateZ(20px);
        }
        
        .card-title {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--dark);
            font-family: 'Playfair Display', serif;
            transform: translateZ(25px);
            transition: color 0.3s ease;
        }
        
        .card:hover .card-title {
            color: var(--primary-dark);
        }
        
        .card-text {
            color: #64748b;
            margin-bottom: 2rem;
            flex-grow: 1;
            transform: translateZ(20px);
            transition: color 0.3s ease;
        }
        
        .card:hover .card-text {
            color: #475569;
        }
        
        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(226, 232, 240, 0.6);
            transform: translateZ(15px);
        }
        
        .card-author {
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }
        
        .author-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .card:hover .author-avatar {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .author-name {
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        .card-date {
            font-size: 0.8rem;
            color: #94a3b8;
            font-weight: 500;
        }
        
        .card-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: white;
            color: var(--primary);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            z-index: 3;
            transition: all 0.3s ease;
        }
        
        .card:hover .card-badge {
            background: var(--primary);
            color: white;
            transform: scale(1.1) rotate(15deg);
        }
        
        .card-cta {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 2rem;
            background: var(--gradient);
            color: white;
            transform: translateY(100%);
            transition: transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 4;
            text-align: center;
            border-radius: 0 0 15px 15px;
        }
        
        .card:hover .card-cta {
            transform: translateY(0);
        }
        
        .card-cta h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .card-cta p {
            margin-bottom: 1.5rem;
            opacity: 0.9;
            font-size: 0.95rem;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            border: none;
            cursor: pointer;
            font-size: 0.95rem;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-outline {
            background: transparent;
            color: white;
            border: 2px solid white;
        }
        
        .btn-outline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: white;
            transition: width 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            z-index: -1;
        }
        
        .btn-outline:hover {
            color: var(--primary);
        }
        
        .btn-outline:hover::before {
            width: 100%;
        }
        
        .btn i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        
        .btn:hover i {
            transform: translateX(3px);
        }
        
        /* Floating elements */
        .card::after {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(59, 130, 246, 0.2);
            filter: blur(10px);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .card:hover::after {
            opacity: 1;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .card-grid {
                grid-template-columns: 1fr;
            }
            
            .section-header h2 {
                font-size: 2.2rem;
            }
            
            .card {
                max-width: 400px;
                margin: 0 auto;
            }
        }
        
        /* Animation delays */
        .card:nth-child(1) {
            transition-delay: 0.1s;
        }
        
        .card:nth-child(2) {
            transition-delay: 0.2s;
        }
        
        .card:nth-child(3) {
            transition-delay: 0.3s;
        }
    </style>
</head>

<body>
    <section class="card-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Manufacturing Excellence</h2>
                <p>Discover how our state-of-the-art facilities and skilled workforce combine to create garments that embody precision, quality, and style.</p>
            </div>
            
            <div class="card-grid">
                <!-- Card 1 -->
                <div class="card">
                    <div class="card-badge">
                        <i class="fas fa-industry"></i>
                    </div>
                    <div class="card-image">
                        <img src="images/web-shots/WOW03257.jpg" alt="Advanced Infrastructure">
                    </div>
                    <div class="card-content">
                        <span class="card-category">Facilities</span>
                        <h3 class="card-title">Advanced Infrastructure</h3>
                        <p class="card-text">600+ high-precision machines across 50,000 sq.ft. of modern manufacturing space designed for efficiency and quality.</p>
                        <div class="card-footer">
                            <div class="card-author">
                                <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Author" class="author-avatar">
                                <span class="author-name">Sarah Johnson</span>
                            </div>
                            <span class="card-date">Updated May 2023</span>
                        </div>
                    </div>
                    <div class="card-cta">
                        <h3>Why Our Infrastructure Matters</h3>
                        <p>Our modern facilities incorporate lean manufacturing principles with automated quality control systems.</p>
                        <a href="#" class="btn btn-outline">Explore More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="card">
                    <div class="card-badge">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <div class="card-image">
                        <img src="images/web-shots/WOW005132C.jpg" alt="High Production Capacity">
                    </div>
                    <div class="card-content">
                        <span class="card-category">Capacity</span>
                        <h3 class="card-title">High Production Volume</h3>
                        <p class="card-text">14,000 shirts & 1,000 trousers daily with consistent quality and precision that meets international standards.</p>
                        <div class="card-footer">
                            <div class="card-author">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author" class="author-avatar">
                                <span class="author-name">Michael Chen</span>
                            </div>
                            <span class="card-date">Updated June 2023</span>
                        </div>
                    </div>
                    <div class="card-cta">
                        <h3>Scalable Solutions</h3>
                        <p>Our modular production lines allow us to scale quickly while maintaining rigorous quality standards.</p>
                        <a href="#" class="btn btn-outline">View Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="card">
                    <div class="card-badge">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="card-image">
                        <img src="images/web-shots/WOW00081C.jpg" alt="Speed & Precision">
                    </div>
                    <div class="card-content">
                        <span class="card-category">Customization</span>
                        <h3 class="card-title">Speed & Precision</h3>
                        <p class="card-text">Customized tailoring delivered within 2 hours without compromising quality or attention to detail.</p>
                        <div class="card-footer">
                            <div class="card-author">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Author" class="author-avatar">
                                <span class="author-name">Emma Rodriguez</span>
                            </div>
                            <span class="card-date">New Service</span>
                        </div>
                    </div>
                    <div class="card-cta">
                        <h3>Rapid Customization</h3>
                        <p>Our digital patterning system and skilled tailors work together to deliver perfectly fitted garments.</p>
                        <a href="#" class="btn btn-outline">Try Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animate cards on scroll
            const animateCards = () => {
                const cards = document.querySelectorAll('.card');
                const windowHeight = window.innerHeight;
                
                cards.forEach((card, index) => {
                    const cardPosition = card.getBoundingClientRect().top;
                    const animationPoint = windowHeight - 100;
                    
                    if (cardPosition < animationPoint) {
                        setTimeout(() => {
                            card.classList.add('animate');
                        }, index * 200);
                    }
                });
            };
            
            // Initial animation check
            animateCards();
            
            // Animate on scroll
            window.addEventListener('scroll', animateCards);
            
            // Enhanced hover effects
            const cards = document.querySelectorAll('.card');
            
            cards.forEach(card => {
                // Tilt effect on mouse move
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    const angleX = (y - centerY) / 15;
                    const angleY = (centerX - x) / 15;
                    
                    card.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg)`;
                });
                
                // Reset position when mouse leaves
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
                });
            });
            
            // Add ripple effect to buttons
            const buttons = document.querySelectorAll('.btn');
            
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const x = e.clientX - e.target.getBoundingClientRect().left;
                    const y = e.clientY - e.target.getBoundingClientRect().top;
                    
                    const ripple = document.createElement('span');
                    ripple.className = 'ripple';
                    ripple.style.left = `${x}px`;
                    ripple.style.top = `${y}px`;
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 1000);
                });
            });
        });
    </script>
</body>
</html>