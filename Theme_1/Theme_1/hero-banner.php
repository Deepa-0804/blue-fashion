<div class="textile-banner-container">
    <!-- Banner Slides -->
    <div class="textile-slider">
        <!-- Slide 1 -->
        <div class="textile-slide active">
            <div class="slide-bg" style="background-image: url(images/web-shots/WOW03051C2.jpg);"></div>
            <div class="gradient-overlay"></div>
            
            <div class="slide-content">
                <div class="textile-tagline">
                    <span class="elegant-underline">Premium Textile Brand Since 2005</span>
                </div>
                
                <h1 class="textile-heading">
                    <span class="gradient-text">BlueFashion</span>
                </h1>
                
                <p class="textile-description">
                    Crafting excellence in textile solutions with unmatched quality and innovation
                </p>
                
                <div class="textile-cta">
                    <a href="contact-us.php" class="luxury-button">
                        <span class="button-text">Explore Collections</span>
                        <span class="button-icon">&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="textile-slide">
            <div class="slide-bg" style="background-image: url(images/web-shots/WOW03046C2.jpg);"></div>
            <div class="gradient-overlay"></div>
            
            <div class="slide-content">
                <div class="textile-tagline">
                    <span class="elegant-underline">Sustainable Textile Solutions</span>
                </div>
                
                <h1 class="textile-heading">
                    <span class="gradient-text">Ethical Craftsmanship</span>
                </h1>
                
                <p class="textile-description">
                    Environmentally conscious fabrics with premium quality and durability
                </p>
                
                <div class="textile-cta">
                    <a href="contact-us.php" class="luxury-button">
                        <span class="button-text">Discover More</span>
                        <span class="button-icon">&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Slider Navigation -->
    <div class="textile-nav">
        <div class="nav-dots"></div>
        <div class="slide-counter">
            <span class="current-slide">01</span>
            <span class="divider">/</span>
            <span class="total-slides">02</span>
        </div>
    </div>
</div>

<style>
/* Base Styles */
.textile-banner-container {
    position: relative;
    width: 100%;
    height: 100vh;
    max-height: 650px;
    overflow: hidden;
    font-family: 'Poppins', sans-serif;
    background: #0a1627;
}

/* Slide Styles */
.textile-slider {
    position: relative;
    height: 100%;
}

.textile-slide {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 1s ease-in-out;
}

.textile-slide.active {
    opacity: 1;
}

.slide-bg {
    position: absolute;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    transform: scale(1);
    transition: transform 10s cubic-bezier(0.25, 0.45, 0.45, 0.95);
    filter: brightness(0.85);
}

.textile-slide.active .slide-bg {
    transform: scale(1.05);
}

.gradient-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(10,22,39,0.9) 0%, rgba(23,42,80,0.7) 100%);
}

/* Content Styles */
.slide-content {
    position: relative;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 0 8%;
    color: #fff;
    max-width: 1200px;
    margin: 0 auto;
}

.textile-tagline {
    font-size: 1.1rem;
    font-weight: 500;
    letter-spacing: 3px;
    margin-bottom: 1.2rem;
    text-transform: uppercase;
    color: rgba(255,255,255,0.8);
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.8s ease 0.2s;
}

.elegant-underline {
    position: relative;
    display: inline-block;
    padding-bottom: 8px;
}

.elegant-underline::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #4a6fa5, #ffffff);
    transition: width 1s ease 0.5s;
}

.textile-heading {
    font-size: 4.5rem;
    font-weight: 700;
    line-height: 1.1;
    margin: 1rem 0;
    color: #fff;
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease 0.4s;
}

.gradient-text {
    background: linear-gradient(90deg, #ffffff, #a8c4ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.textile-description {
    font-size: 1.2rem;
    line-height: 1.6;
    margin-bottom: 2rem;
    color: rgba(255,255,255,0.8);
    max-width: 600px;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.8s ease 0.6s;
}

.textile-cta {
    margin-top: 2rem;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.8s ease 0.8s;
}

.luxury-button {
    display: inline-flex;
    align-items: center;
    padding: 1rem 2.5rem;
    background: transparent;
    color: #fff;
    font-size: 1rem;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    border: 1px solid rgba(255,255,255,0.3);
    border-radius: 0;
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
}

.luxury-button::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
    transition: all 0.6s ease;
}

.luxury-button:hover {
    border-color: rgba(255,255,255,0.6);
    background: rgba(255,255,255,0.05);
    padding-right: 3rem;
    padding-left: 2rem;
}

.luxury-button:hover::before {
    left: 100%;
}

.luxury-button:hover .button-icon {
    transform: translateX(5px);
}

.button-icon {
    margin-left: 10px;
    transition: transform 0.3s ease;
}

/* Navigation Styles */
.textile-nav {
    position: absolute;
    bottom: 40px;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 8%;
    z-index: 10;
}

.nav-dots {
    display: flex;
    gap: 12px;
}

.nav-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: rgba(255,255,255,0.3);
    cursor: pointer;
    transition: all 0.4s ease;
}

.nav-dot.active {
    background: #fff;
    transform: scale(1.3);
}

.slide-counter {
    display: flex;
    align-items: center;
    color: rgba(255,255,255,0.7);
    font-size: 0.9rem;
    letter-spacing: 1px;
}

.current-slide {
    color: #fff;
    font-weight: 600;
}

.divider {
    margin: 0 5px;
}

/* Active Slide Animations */
.textile-slide.active .textile-tagline,
.textile-slide.active .textile-heading,
.textile-slide.active .textile-description,
.textile-slide.active .textile-cta {
    opacity: 1;
    transform: translateY(0);
}

.textile-slide.active .elegant-underline::after {
    width: 100%;
}

/* Responsive Adjustments */
@media (max-width: 1200px) {
    .textile-heading {
        font-size: 3.8rem;
    }
    
    .slide-content {
        padding: 0 6%;
    }
}

@media (max-width: 992px) {
    .textile-heading {
        font-size: 3.2rem;
    }
    
    .textile-description {
        font-size: 1.1rem;
        max-width: 500px;
    }
    
    .textile-nav {
        padding: 0 6%;
    }
}

@media (max-width: 768px) {
    .textile-banner-container {
        height: 80vh;
    }
    
    .textile-heading {
        font-size: 2.5rem;
    }
    
    .textile-tagline {
        font-size: 0.9rem;
        letter-spacing: 2px;
    }
    
    .slide-content {
        padding: 0 5%;
    }
}

@media (max-width: 576px) {
    .textile-heading {
        font-size: 2rem;
    }
    
    .textile-description {
        font-size: 1rem;
    }
    
    .luxury-button {
        padding: 0.8rem 1.8rem;
        font-size: 0.9rem;
    }
    
    .textile-nav {
        flex-direction: column;
        gap: 20px;
        bottom: 30px;
    }
    
    .slide-counter {
        order: -1;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Slider
    const slider = document.querySelector('.textile-slider');
    const slides = document.querySelectorAll('.textile-slide');
    const dotsContainer = document.querySelector('.nav-dots');
    const currentSlideDisplay = document.querySelector('.current-slide');
    const totalSlidesDisplay = document.querySelector('.total-slides');
    let currentIndex = 0;
    let slideInterval;
    
    // Set total slides
    totalSlidesDisplay.textContent = slides.length.toString().padStart(2, '0');
    
    // Create dots
    slides.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('nav-dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });
    
    const dots = document.querySelectorAll('.nav-dot');
    
    // Initialize slider
    function initSlider() {
        slides[0].classList.add('active');
        startSlideShow();
    }
    
    // Start auto sliding
    function startSlideShow() {
        slideInterval = setInterval(nextSlide, slideDuration);
    }
    
    // Go to specific slide
    function goToSlide(index) {
        // Reset all slides and dots
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Set new active slide and dot
        currentIndex = index;
        slides[currentIndex].classList.add('active');
        dots[currentIndex].classList.add('active');
        currentSlideDisplay.textContent = (currentIndex + 1).toString().padStart(2, '0');
        
        // Reset timer
        clearInterval(slideInterval);
        startSlideShow();
    }
    
    // Next slide
    function nextSlide() {
        const nextIndex = (currentIndex + 1) % slides.length;
        goToSlide(nextIndex);
    }
    
    // Initialize
    initSlider();
    
    // Pause on hover
    slider.addEventListener('mouseenter', () => {
        clearInterval(slideInterval);
    });
    
    slider.addEventListener('mouseleave', () => {
        startSlideShow();
    });
});
</script>