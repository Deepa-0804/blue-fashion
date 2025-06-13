<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Textile Solutions | Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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


    <style>
        :root {
            --primary: #002366;
            --secondary: #87CEEB;
            --accent: #2196F3;
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
            background: linear-gradient(135deg, var(--white) 0%, var(--secondary) 100%);
            background-size: auto;
            /* line-height: 1.6; */
            overflow-x: hidden;
        }

        .progress-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: transparent;
            z-index: 1001;
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            width: 0%;
            transition: width 0.1s ease;
        }

        .hero {
            height: 100vh;
            width: 100%;
            position: relative;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--white);
             background: url('https://static.vecteezy.com/system/resources/previews/024/733/159/original/blue-flying-fabric-3d-wave-cloth-ai-generative-free-png.png');
            
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
          
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 35, 102, 0.8) 0%, rgba(135, 206, 235, 0.6) 100%);
            z-index: -1;
        }

        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
margin-top: 260px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s ease forwards 0.5s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .hero h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: var(--accent);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .dynamic-text {
            min-height: 60px;
            margin-bottom: 2rem;
        }

        .dynamic-text span {
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            opacity: 0;
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            transition: opacity 0.5s ease;
        }

        .dynamic-text span.active {
            opacity: 1;
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2.5rem;
            background-color: var(--accent);
            color: var(--primary);
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .cta-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .contact-section {
            padding: 5rem 2rem;
            background: url('') no-repeat center center/cover;
            color: var(--white);
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

        .contact-container {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .contact-card {
            flex: 1;
            max-width: 400px;
            height: 650px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: var(--white);
            padding: 2rem 2.5rem 2rem 2.5rem;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.13);
            transition: transform 0.5s cubic-bezier(.22,1,.36,1), box-shadow 0.5s cubic-bezier(.22,1,.36,1);
            perspective: 1000px;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .contact-card:hover {
            transform: translateY(-10px) rotateY(10deg);
        }

        .contact-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(33, 150, 243, 0.1) 0%, transparent 70%);
            transform: rotate(30deg);
            transition: all 0.5s ease;
        }

        .contact-card:hover::before {
            transform: rotate(60deg);
        }

        .contact-card h3 {
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 2.2rem;
            font-size: 2rem;
            position: relative;
            display: block;
            width: 100%;
            text-align: left;
            letter-spacing: 1px;
        }

        .contact-card h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--accent);
            border-radius: 2px;
        }

        .contact-info {
            margin-bottom: 2.2rem;
            width: 100%;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.2rem;
            gap: 1.1rem;
            background: rgba(255,255,255,0.07);
            border-radius: 8px;
            padding: 0.7rem 1rem;
            box-shadow: 0 2px 8px 0 rgba(33,150,243,0.07);
            transition: background 0.3s, box-shadow 0.3s;
        }

        .contact-item:hover {
            background: rgba(33,150,243,0.13);
            box-shadow: 0 4px 16px 0 rgba(33,150,243,0.13);
        }

        .contact-icon {
            margin-right: 0.7rem;
            color: var(--accent);
            font-size: 1.7rem;
            min-width: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-text {
            flex: 1;
            font-size: 1.08rem;
            color: #fff;
            font-family: 'Open Sans', sans-serif;
            font-weight: 500;
            letter-spacing: 0.2px;
        }

        .local-time {
            font-size: 0.98rem;
            margin-top: 1.2rem;
            padding: 0.6rem 1rem;
            background-color: rgba(255, 255, 255, 0.13);
            border-radius: 7px;
            display: inline-block;
            color: #e3f0ff;
            font-weight: 500;
        }

        .social-links {
            display: flex;
            gap: 1.2rem;
            margin-top: 2rem;
        }

        .social-link {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.13);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            transition: all 0.3s cubic-bezier(.22,1,.36,1);
        }

        .social-link:hover {
            background-color: var(--accent);
            color: var(--primary);
            transform: translateY(-4px) scale(1.08);
        }

        .contact-form {
            flex: 2;
            min-width: 300px;
            background-color: var(--white);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--primary);
        }

        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Open Sans', sans-serif;
            transition: all 0.3s ease;
            background-color: var(--gray);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--secondary);
            box-shadow: 0 0 0 3px rgba(135, 206, 235, 0.3);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .form-help {
            font-size: 0.8rem;
            color: #666;
            margin-top: 0.5rem;
            display: none;
        }

        .form-group:focus-within .form-help {
            display: block;
        }

        .voice-message {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .voice-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .voice-btn:hover {
            background-color: var(--accent);
            color: var(--primary);
            transform: scale(1.1);
        }

        .voice-timer {
            font-size: 0.9rem;
            color: #666;
        }

        /* Google Map Container */
        .map-container {
            width: 100%;
            height: 400px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
        }

        #googleMap {
            width: 100%;
            height: 100%;
            border: none;
        }

        .map-card {
            flex: 1 1 350px;
            min-width: 320px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: var(--white);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
            margin-bottom: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        .map-card h3 {
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 1.2rem;
            font-size: 1.3rem;
            color: var(--white);
            letter-spacing: 1px;
        }

        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .dynamic-text span {
                font-size: 1.5rem;
            }

            .contact-container {
                flex-direction: column;
            }

            .map-card {
                margin-top: 0;
                margin-bottom: 2rem;
            }
        }

        @media (max-width: 768px) {
            .hero {
                margin-top: 80px;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .dynamic-text span {
                font-size: 1.2rem;
            }
            
            .contact-container {
                flex-direction: column;
            }
            
            .map-container {
                height: 300px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .dynamic-text {
                min-height: 40px;
            }
            
            .dynamic-text span {
                font-size: 1rem;
            }
            
            .map-container {
                height: 250px;
            }
        }
    </style>
</head>
<body>
   <?php include 'header.php'; ?>
    <!-- Progress Bar -->
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>
    <!-- Hero Section -->
     
    <section class="hero">
        <video autoplay muted loop class="hero-video">
            <source src="fabric-production.mp4" type="video/mp4">
        </video>
        <div class="hero-content">
            <h1 style="color:#ffffff">Global Textile Solutions</h1>
            <div class="dynamic-text">
                <span class="active">Custom Fabric Manufacturing</span>
                <span>Innovative Textile Technology</span>
                <span>Sustainable Production</span>
                <span>Global Supply Chain</span>
            </div>
            <p>Connecting innovation with craftsmanship to deliver premium textiles worldwide</p>
            <button class="cta-button" id="ctaButton">Contact Our Experts</button>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <h2 class="section-title">Get In Touch</h2>
        <div class="contact-container">
            <div class="contact-card">
                <h3>Contact Information</h3>
                <div class="contact-info">
                   
                    <div class="contact-item">
                        <span class="contact-icon material-icons">phone</span>
                        <span class="contact-text">+91 98426 59996</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon material-icons">email</span>
                        <span class="contact-text">bluefashion18@gmail.com</span>
                    </div>
                     <div class="contact-item">
                        <span class="contact-icon material-icons">location_on</span>
                        <span class="contact-text">42 B,Sankari Bypass Road Near Ottamethai, Pallipalayam, Erode</span>
                    </div>
                </div>
                <div class="local-time">
                    <span id="localTime"></span>
                </div>
                <div class="social-links">
                    <a href="#" class="social-link" title="WhatsApp"><span class="material-icons">chat</span></a>
                    <a href="#" class="social-link" title="Facebook"><span class="material-icons">facebook</span></a>
                    <a href="#" class="social-link" title="LinkedIn"><span class="material-icons">linkedin</span></a>
                    <a href="#" class="social-link" title="Instagram"><span class="material-icons">photo_camera</span></a>
                </div>
            </div>
            <div class="contact-form">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" class="form-control" required>
                        <div class="form-help">Please enter your full name as it appears on official documents</div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" class="form-control" required>
                        <div class="form-help">We'll never share your email with anyone else</div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" class="form-control">
                        <div class="form-help">Optional, but helpful for urgent inquiries</div>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" class="form-control" required></textarea>
                        <div class="form-help" id="messageHelp">Tell us about your project or inquiry</div>
                    </div>
                    
                    <div class="voice-message">
                        <button type="button" class="voice-btn" title="Record Voice Message">
                            <span class="material-icons">mic</span>
                        </button>
                        <div class="voice-timer">00:00</div>
                    </div>
                    
                    <button type="submit" class="cta-button">
                        <span class="material-icons" style="vertical-align: middle; margin-right: 8px;">send</span>
                        Send Message
                    </button>
                </form>
            </div>
        </div>
        <div class="map-card">
            <h3>Our Location</h3>
            <div class="map-container">
                <iframe id="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215209179323!2d-73.98784492452583!3d40.74844097138995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ0JzU0LjQiTiA3M8KwNTknMTMuNiJX!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <script>
        // Progress Bar
        window.addEventListener('scroll', function() {
            const scrollTotal = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPosition = window.scrollY;
            const scrollPercentage = (scrollPosition / scrollTotal) * 100;
            document.getElementById('progressBar').style.width = scrollPercentage + '%';
        });

        // Dynamic Text Rotation
        const dynamicTexts = document.querySelectorAll('.dynamic-text span');
        let currentIndex = 0;

        function rotateText() {
            dynamicTexts[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % dynamicTexts.length;
            dynamicTexts[currentIndex].classList.add('active');
        }

        setInterval(rotateText, 3000);

        // Local Time Display
        function updateLocalTime() {
            const now = new Date();
            const options = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                timeZoneName: 'short'
            };
            document.getElementById('localTime').textContent = now.toLocaleDateString('en-US', options);
        }

        updateLocalTime();
        setInterval(updateLocalTime, 60000);

        // Voice Recorder Simulation
        const voiceBtn = document.querySelector('.voice-btn');
        const voiceTimer = document.querySelector('.voice-timer');
        let recording = false;
        let seconds = 0;

        voiceBtn.addEventListener('click', function() {
            recording = !recording;
            
            if (recording) {
                this.innerHTML = '<span class="material-icons">stop</span>';
                this.style.backgroundColor = '#f44336';
                
                // Start timer
                const timer = setInterval(function() {
                    seconds++;
                    const mins = Math.floor(seconds / 60).toString().padStart(2, '0');
                    const secs = (seconds % 60).toString().padStart(2, '0');
                    voiceTimer.textContent = `${mins}:${secs}`;
                    
                    if (!recording) {
                        clearInterval(timer);
                    }
                }, 1000);
            } else {
                this.innerHTML = '<span class="material-icons">mic</span>';
                this.style.backgroundColor = 'var(--primary)';
                seconds = 0;
            }
        });

        // Form Submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will contact you shortly.');
            this.reset();
        });
    </script>
    <?php include 'footer.php'; ?>
</body>
</html>