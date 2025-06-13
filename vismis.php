<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BlueFashion - Mission & Vision</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #0ea5e9;
            --primary-light: #38bdf8;
            --primary-dark: #0369a1;
            --secondary: #14043a;
            --dark: #0f172a;
            --light: #f1f5f9;
            --gradient: linear-gradient(135deg, var(--primary), #14043a);
            --card-bg: rgba(255, 255, 255, 0.95);
            --card-shadow: 0 8px 32px rgba(14, 165, 233, 0.08);
            --glass-border: 1px solid rgba(14, 165, 233, 0.10);
            --light-blue: #e0f2fe;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
            background: var(--light-blue);
            perspective: 1000px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        /* Mission Section */
        .mission-section {
            padding: 6rem 0;
            background: var(--light-blue);
            position: relative;
            overflow: hidden;
        }
        
        .mission-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, rgba(59, 130, 246, 0) 70%);
            z-index: 0;
        }
        
        .mission-section::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(139, 92, 246, 0.1) 0%, rgba(139, 92, 246, 0) 70%);
            z-index: 0;
        }
        
        /* Vision Section */
        .vision-section {
            padding: 6rem 0;
            background: white;
            position: relative;
            overflow: hidden;
        }
        
        .vision-section::before {
            content: '';
            position: absolute;
            top: 50px;
            right: -100px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.05) 0%, rgba(59, 130, 246, 0) 70%);
            z-index: 0;
        }
        
        /* Section Header */
        .section-header {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
            z-index: 1;
        }
        
        .section-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: inline-block;
        }
        
        .section-header .lead {
            font-size: 1.2rem;
            color: #64748b;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.8;
        }
        
        /* Mission/Vision Cards */
        .value-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            position: relative;
            z-index: 1;
        }
        
        .value-card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 2.5rem;
            box-shadow: var(--card-shadow);
            border: var(--glass-border);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            transform: translateY(30px);
            opacity: 0;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(5px);
        }
        
        .value-card.animate {
            transform: translateY(0);
            opacity: 1;
        }
        
        .value-card:hover {
            transform: translateY(-10px) !important;
            box-shadow: 0 15px 40px rgba(59, 130, 246, 0.15);
        }
        
        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }
        
        .value-card:hover::before {
            opacity: 0.05;
        }
        
        .card-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            background: var(--gradient);
            color: white;
            font-size: 1.8rem;
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.2);
            transition: all 0.3s ease;
        }
        
        .value-card:hover .card-icon {
            transform: scale(1.1) rotate(10deg);
            box-shadow: 0 15px 25px rgba(59, 130, 246, 0.3);
        }
        
        .card-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--dark);
            font-family: 'Playfair Display', serif;
            transition: color 0.3s ease;
        }
        
        .value-card:hover .card-title {
            color: var(--primary-dark);
        }
        
        .card-desc {
            color: #64748b;
            transition: color 0.3s ease;
        }
        
        .value-card:hover .card-desc {
            color: #475569;
        }
        
        /* Floating elements */
        .floating-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(59, 130, 246, 0.05);
            z-index: 0;
            pointer-events: none;
        }
        
        /* Enhanced Fabric Wave Background */
        .fabric-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
            pointer-events: none;
            opacity: 0.3;
        }
        
        .fabric-layer {
            position: absolute;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                135deg,
                rgba(59, 130, 246, 0.1) 0%,
                rgba(139, 92, 246, 0.1) 50%,
                rgba(59, 130, 246, 0.1) 100%
            );
            background-size: 200% 200%;
            animation: fabricFlow 30s ease infinite;
            transform-origin: center;
            will-change: transform;
        }
        
        .fabric-layer:nth-child(2) {
            background: linear-gradient(
                45deg,
                rgba(255, 255, 255, 0.05) 0%,
                rgba(59, 130, 246, 0.1) 50%,
                rgba(255, 255, 255, 0.05) 100%
            );
            background-size: 200% 200%;
            animation: fabricFlow 25s ease-in-out infinite reverse;
            opacity: 0.7;
        }
        
        @keyframes fabricFlow {
            0% {
                transform: translate(-25%, -25%) rotate(0deg);
                background-position: 0% 50%;
            }
            50% {
                transform: translate(-15%, -15%) rotate(5deg);
                background-position: 100% 50%;
            }
            100% {
                transform: translate(-25%, -25%) rotate(0deg);
                background-position: 0% 50%;
            }
        }
        
        /* Interactive Particles */
        .particles-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(59, 130, 246, 0.1);
            pointer-events: none;
            will-change: transform;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .section-header h2 {
                font-size: 2.2rem;
            }
            
            .value-cards {
                grid-template-columns: 1fr;
            }
            
            .mission-section, .vision-section {
                padding: 4rem 0;
            }
            
            .fabric-bg {
                display: none;
            }
        }
        
        /* Animation delays */
        .value-card:nth-child(1) {
            transition-delay: 0.1s;
        }
        
        .value-card:nth-child(2) {
            transition-delay: 0.2s;
        }
        
        .value-card:nth-child(3) {
            transition-delay: 0.3s;
        }
        
        .value-card:nth-child(4) {
            transition-delay: 0.4s;
        }
        
        .value-card:nth-child(5) {
            transition-delay: 0.5s;
        }
        
        .value-card:nth-child(6) {
            transition-delay: 0.6s;
        }
.needle-icon {
  width: 24px;
  height: 24px;
}
.card-icon svg {
  width: 1.8rem;
  height: 1.8rem;
}
        .fabric-wave {
  width: 100%;
  height: 120px;
  display: block;
  background: var(--light-blue);
  margin-top: -1px; /* Connects seamlessly */
}
.value-card::after {
  content: '';
  display: block;
  width: 80%;
  height: 1px;
  margin: 1.5rem auto 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 2' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,1 Q50,-1 100,1 T200,1' stroke='%233b82f6' stroke-width='1' fill='none' stroke-dasharray='3,2' opacity='0.3'/%3E%3C/svg%3E");
}
.value-card {
  position: relative;
  overflow: hidden;
}

.value-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 1px;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 1' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,0.5 Q25,1 50,0.5 T100,0.5' stroke='%233b82f6' stroke-width='0.5' fill='none' stroke-dasharray='2,2'/%3E%3C/svg%3E");
  background-size: 100% 100%;
}
    </style>
</head>

<body>
    <!-- Enhanced Fabric Background -->
    <div class="fabric-bg">
        <div class="fabric-layer"></div>
        <div class="fabric-layer"></div>
    </div>
    
    <!-- Interactive Particles -->
    <div class="particles-container" id="particles"></div>

    <!-- Mission Section -->
    <section class="mission-section">
          <svg width="100%" height="100%" class="fabric-texture" style="position:absolute;top:0;left:0;z-index:0;opacity:0.03;">
    <defs>
      <pattern id="weave" width="40" height="40" patternUnits="userSpaceOnUse">
        <path d="M0,0 L40,0 L40,20 L0,20 Z M20,20 L60,20 L60,40 L20,40 Z" fill="var(--primary)"/>
      </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#weave)"/>
  </svg>
        <div class="container">
            
            <div class="section-header">
                <h2>Our Mission</h2>
                <p class="lead">At BlueFashion, we don't just manufacture garments—we craft experiences that blend quality, innovation, and responsibility.</p>
            </div>
            
            <div class="value-cards">
                <!-- Card 1 -->
                <div class="value-card">
                   <div class="card-icon">
  <svg viewBox="0 0 24 24" class="needle-icon">
    <path fill="white" d="M11,2H13V4H15V6H13V9.4L19.4,15.8C19.8,16.2 20,16.7 20,17.2C20,18.2 19.2,19 18.2,19C17.7,19 17.2,18.8 16.8,18.4L10.4,12H7V14H5V12H4V10H5V8H7V10H11V6H9V4H11V2M7,17H9V19H7V17Z"/>
  </svg>
</div>
                    <h3 class="card-title">Innovation & Leadership</h3>
                    <p class="card-desc">Creating value-added products with advanced technology and forward-thinking designs that set industry standards.</p>
                </div>
                
                <!-- Card 2 -->
                <div class="value-card">
                    <div class="card-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="card-title">Process-Driven Excellence</h3>
                    <p class="card-desc">Constantly upgrading our technology and workforce skills to maintain our position at manufacturing's cutting edge.</p>
                </div>
                
                <!-- Card 3 -->
                <div class="value-card">
                    <div class="card-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3 class="card-title">One-Stop Solution</h3>
                    <p class="card-desc">From ready-made shirts to customized corporate tailoring, we offer comprehensive apparel solutions under one roof.</p>
                </div>
                
                <!-- Card 4 -->
                <div class="value-card">
                    <div class="card-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="card-title">Integrity & Responsibility</h3>
                    <p class="card-desc">Maintaining fair, transparent, and sustainable business practices that benefit all stakeholders.</p>
                </div>
                
                <!-- Card 5 -->
                <div class="value-card">
                    <div class="card-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="card-title">Ethical Practices</h3>
                    <p class="card-desc">Upholding our responsibility towards society through ethical labor practices and community engagement.</p>
                </div>
                
                <!-- Card 6 -->
                <div class="value-card">
                    <div class="card-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="card-title">Enhancing Lives</h3>
                    <p class="card-desc">Creating value that improves the quality of life for our employees, customers, and business partners alike.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- After Mission Section, before Vision Section -->
</section> <!-- Close mission section -->
<!-- Animated SVG Separator -->
<div style="position:relative;z-index:2;">
    <svg viewBox="0 0 1440 120" width="100%" height="120" style="display:block;" preserveAspectRatio="none">
        <defs>
            <linearGradient id="waveGradient" x1="0" y1="0" x2="1" y2="0">
                <stop offset="0%" stop-color="#3b82f6"/>
                <stop offset="100%" stop-color="#8b5cf6"/>
            </linearGradient>
        </defs>
        <path id="wavePath"
            d="M0,60 Q360,120 720,60 T1440,60 V120 H0 Z"
            fill="url(#waveGradient)">
            <animate attributeName="d"
                dur="6s"
                repeatCount="indefinite"
                values="
                    M0,60 Q360,120 720,60 T1440,60 V120 H0 Z;
                    M0,70 Q360,40 720,80 T1440,70 V120 H0 Z;
                    M0,60 Q360,120 720,60 T1440,60 V120 H0 Z
                "
            />
        </path>
    </svg>
</div>


    <!-- Vision Section -->
    <section class="vision-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Vision</h2>
                <p class="lead">We don't just follow fashion trends—we aim to shape the future of apparel manufacturing through innovation and excellence.</p>
            </div>
            
            <div class="value-cards">
                <!-- Card 1 -->
                <div class="value-card">
                    <div class="card-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="card-title">Quality Without Compromise</h3>
                    <p class="card-desc">To consistently deliver garments that exceed expectations in style, comfort, and durability through meticulous craftsmanship.</p>
                </div>
                
                <!-- Card 2 -->
                <div class="value-card">
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="card-title">Empowered Workforce</h3>
                    <p class="card-desc">To create an environment where our team members grow professionally while maintaining the highest ethical standards.</p>
                </div>
                
                <!-- Card 3 -->
                <div class="value-card">
                    <div class="card-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="card-title">Sustainable Innovation</h3>
                    <p class="card-desc">To pioneer eco-conscious manufacturing processes that reduce environmental impact while maintaining premium quality.</p>
                </div>
            </div>
        </div>
    </section>
<!-- Triple Animated Wave Banner -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animate cards on scroll
            const animateCards = () => {
                const cards = document.querySelectorAll('.value-card');
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
            const cards = document.querySelectorAll('.value-card');
            
            cards.forEach(card => {
                // Tilt effect on mouse move
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    const angleX = (y - centerY) / 20;
                    const angleY = (centerX - x) / 20;
                    
                    card.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg) translateY(-10px)`;
                });
                
                // Reset position when mouse leaves
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
                });
            });
            
            // Create floating circles
            const missionSection = document.querySelector('.mission-section');
            const visionSection = document.querySelector('.vision-section');
            
            for (let i = 0; i < 5; i++) {
                const circle = document.createElement('div');
                circle.classList.add('floating-circle');
                
                // Random properties
                const size = Math.random() * 100 + 50;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const opacity = Math.random() * 0.1 + 0.05;
                const animationDuration = Math.random() * 20 + 10;
                const animationDelay = Math.random() * 5;
                
                circle.style.width = `${size}px`;
                circle.style.height = `${size}px`;
                circle.style.left = `${posX}%`;
                circle.style.top = `${posY}%`;
                circle.style.opacity = opacity;
                circle.style.animation = `float ${animationDuration}s ease-in-out ${animationDelay}s infinite alternate`;
                
                if (i % 2 === 0) {
                    missionSection.appendChild(circle);
                } else {
                    visionSection.appendChild(circle);
                }
            }
            
            // Add floating animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes float {
                    0% {
                        transform: translate(0, 0) rotate(0deg);
                    }
                    50% {
                        transform: translate(20px, 20px) rotate(180deg);
                    }
                    100% {
                        transform: translate(0, 0) rotate(360deg);
                    }
                }
            `;
            document.head.appendChild(style);
            
            // Interactive particles
            const particlesContainer = document.getElementById('particles');
            const particleCount = window.innerWidth < 768 ? 30 : 80;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                const size = Math.random() * 10 + 2;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const opacity = Math.random() * 0.2 + 0.05;
                const duration = Math.random() * 20 + 10;
                const delay = Math.random() * 5;
                
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.opacity = opacity;
                particle.style.animation = `particleMove ${duration}s ease-in-out ${delay}s infinite alternate`;
                
                particlesContainer.appendChild(particle);
            }
            
            // Add particle animation
            const particleStyle = document.createElement('style');
            particleStyle.textContent = `
                @keyframes particleMove {
                    0% {
                        transform: translate(0, 0);
                    }
                    50% {
                        transform: translate(${Math.random() * 100 - 50}px, ${Math.random() * 100 - 50}px);
                    }
                    100% {
                        transform: translate(0, 0);
                    }
                }
            `;
            document.head.appendChild(particleStyle);
            
            // Interactive fabric effect on mouse move
            const fabricLayers = document.querySelectorAll('.fabric-layer');
            document.addEventListener('mousemove', (e) => {
                const x = e.clientX / window.innerWidth;
                const y = e.clientY / window.innerHeight;
                
                fabricLayers.forEach((layer, index) => {
                    const factor = index === 0 ? 0.05 : 0.03;
                    const moveX = (x - 0.5) * 100 * factor;
                    const moveY = (y - 0.5) * 100 * factor;
                    
                    layer.style.transform = `translate(calc(-25% + ${moveX}px), calc(-25% + ${moveY}px)) rotate(${moveX * 0.2}deg)`;
                });
            });
        });
    </script>
</body>
</html>