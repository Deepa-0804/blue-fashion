<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Textile Industry, Garment Manufacturing, Custom Tailoring, Corporate Uniforms">
    <meta name="description" content="BlueFashion - Leading textile manufacturer since 2005 specializing in high-quality shirts, trousers, and custom tailoring">
    <meta name="author" content="BlueFashion" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About BlueFashion - Textile Manufacturing Excellence</title>
    <link rel="shortcut icon" href="images/favicon13.png" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    
    <style>
        :root {
            --primary-blue: #1a237e;      /* Deep Indigo for hero banner */
            --dark-blue: #0d1333;         /* Darker indigo for headings */
            --light-blue: #e3e8fa;        /* Softer light blue background */
            --accent-blue: #263bb4;       /* Vivid accent blue for highlights */
            --text-dark: #23233a;         /* Slightly cooler dark for text */
            --text-light: #010a41;        /* Muted blue-grey for subtext */
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
            line-height: 1.7;
            /* background: linear-gradient(120deg, #0039d6 0%, #4d88ff 100%); */
            background-attachment: fixed;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            color: var(--dark-blue);
        }
        
        /* Hero Section */
        .ttm-page-title-row {
            position: relative;
            overflow: hidden;
            padding: 0;
            min-height: unset;
            height: 500px !important;
            background: none;
            cursor: pointer;
            transition: box-shadow 0.4s, filter 0.4s;
        }
        .ttm-page-title-row .ttm-row-wrapper-bg-layer::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: 1;
            background: linear-gradient(120deg, #000000 0%, #002366 100%);
            opacity: 0.95;
            animation: gradientMove 8s ease-in-out infinite alternate;
        }
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }
        
        .ttm-page-title-row .title {
            font-size: 3.5rem;
            font-weight: 700;
            color: white;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            transition: text-shadow 0.4s, color 0.4s, letter-spacing 0.4s;
            will-change: text-shadow, color, letter-spacing;
        }
        
        .ttm-page-title-row .title:hover {
            color: #4d88ff;
            text-shadow: 0 4px 24px #0039d6, 0 1px 0 #fff;
            letter-spacing: 2px;
        }
        
        .ttm-page-title-row .title {
            position: relative;
            z-index: 2;
        }
        .ttm-page-title-row .title::after {
            display: none;
        }
        .ttm-page-title-row .title,
        .page-title-heading h2 {
            /* Remove hover underline and blue color shift, add a subtle interactive effect */
            color: #fff !important;
            background: none !important;
            -webkit-background-clip: initial !important;
            background-clip: initial !important;
            text-shadow: 0 2px 8px #0039d655;
            transition: none;
        }
        .ttm-page-title-row .title:hover,
        .page-title-heading h2:hover {
            /* Subtle glow on hover, no color/underline change */
            color: #fff !important;
            background: none !important;
            text-shadow: 0 2px 8px #0039d655;
            letter-spacing: normal;
        }
        
        .breadcrumb-wrapper {
            color: rgba(255,255,255,0.8);
            font-size: 1rem;
            margin-top: 4px;
        }
        
        .breadcrumb-wrapper a {
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .breadcrumb-wrapper a:hover {
            color: var(--light-blue);
        }
        
        /* Floating Elements Animation */
        /* .floating-element {
            position: absolute;
            background-size: contain;
            background-repeat: no-repeat;
            z-index: 5;
            opacity: 0.8;
            filter: drop-shadow(0 5px 15px rgba(0,0,0,0.2));
        }
        
        @keyframes float {
            0% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(5deg);
            }
            100% {
                transform: translateY(0px) rotate(0deg);
            }
        }
         */
        /* About Section */
        .about-section {
            background-color: white;
            position: relative;
            z-index: 2;
        }
        
        .section-title .title-header h2, 
        .section-title .title-header h3 {
            color: var(--primary-blue);
            position: relative;
            margin-bottom: 25px;
        }
        
        .section-title .title-header h2:after,
        .section-title .title-header h3:after {
            content: '';
            display: block;
            width: 80px;
            height: 3px;
            background: var(--primary-blue);
            margin: 15px 0;
        }
        
        .title-style-center_text .title-header h2:after,
        .title-style-center_text .title-header h3:after {
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Mission/Vision Cards */
        .featured-icon-box.style7 {
            border-radius: 8px;
            transition: all 0.3s ease;
            padding: 30px;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,57,214,0.1);
        }
        
        .featured-icon-box.style7:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,57,214,0.1);
            border-color: rgba(0,57,214,0.2);
        }
        
        .featured-icon-box.style7 .featured-icon .ttm-icon_element-color-skincolor {
            color: var(--primary-blue);
        }
        
        .featured-icon-box.style7 .featured-title h4 {
            color: var(--primary-blue);
            font-weight: 600;
        }
        
        /* Manufacturing Excellence Section */
        .service-one-section {
            background-color: var(--light-blue);
            position: relative;
            overflow: hidden;
        }
        
        .service-one-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('images/pattern-blue.png') repeat;
            opacity: 0.9;
            z-index: -1;
        }
        
        .featured-icon-box.style5 {
            background: white;
            border-radius: 8px;
            padding: 40px 30px;
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .featured-icon-box.style5:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 4px;
            background: var(--primary-blue);
            transition: all 0.3s ease;
        }
        
        .featured-icon-box.style5:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,57,214,0.1);
        }
        
        .featured-icon-box.style5:hover:after {
            width: 100%;
        }
        
        .featured-icon-box.style5 .featured-icon i {
            font-size: 50px;
            color: var(--primary-blue);
        }
        
        .featured-icon-box.style5 .featured-title h3 {
            color: var(--primary-blue);
            font-weight: 600;
        }
        
        /* Team Section */
        .team-section {
            background: white;
            padding: 80px 0;
            position: relative;
        }
        
        .team-section h2 {
            color: var(--primary-blue);
            margin-bottom: 20px;
            position: relative;
        }
        
        .team-section h2:after {
            content: '';
            display: block;
            width: 80px;
            height: 3px;
            background: var(--primary-blue);
            margin: 15px auto 30px;
        }
        
        .team-section ul {
            max-width: 500px;
            margin: 0 auto;
        }
        
        .team-section li {
            margin-bottom: 15px;
            padding-left: 30px;
            position: relative;
            color: var(--text-light);
        }
        
        .team-section li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary-blue);
            font-weight: bold;
        }
        
        .team-section strong {
            color: var(--dark-blue);
        }
        
        .team-quote {
            font-style: italic;
            color: var(--primary-blue);
            font-weight: 500;
            margin-top: 40px;
            font-size: 1.2rem;
            position: relative;
            padding: 20px;
            border-left: 3px solid var(--primary-blue);
            background: rgba(0,57,214,0.05);
        }
        
        /* --- Advanced Blue Gradient Animations & Modern Effects --- */
        /* Floating Gradient Orbs */
        .gradient-orb {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            z-index: 10;
            opacity: 0.7;
            background: radial-gradient(circle at 30% 30%, #4d88ff 0%, #0039d6 80%);
            animation: orbFloat 10s ease-in-out infinite alternate;
        }
        .gradient-orb.orb1 { width: 120px; height: 120px; top: 10%; left: 5%; animation-delay: 0s; }
        .gradient-orb.orb2 { width: 90px; height: 90px; top: 60%; right: 10%; animation-delay: 2s; }
        .gradient-orb.orb3 { width: 70px; height: 70px; bottom: 15%; left: 25%; animation-delay: 4s; }
        @keyframes orbFloat {
            0% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-30px) scale(1.1); }
            100% { transform: translateY(0) scale(1); }
        }

        /* Enhanced Fade-in Animation with Gradient Reveal */
        .fade-in {
            opacity: 0;
            transform: translateY(40px) scale(0.98);
            background: linear-gradient(90deg, #0039d6 0%, #4d88ff 100%);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            transition: opacity 0.8s cubic-bezier(.77,0,.18,1), transform 0.8s cubic-bezier(.77,0,.18,1);
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0) scale(1);
            color: var(--text-dark);
            background: none;
            -webkit-background-clip: initial;
        }

        /* Animated Gradient Border for Cards */
        .featured-icon-box.style7, .featured-icon-box.style5 {
            border: 3px solid;
            border-image: linear-gradient(120deg, #0039d6, #4d88ff, #002699) 1;
            box-shadow: 0 8px 32px 0 rgba(0,57,214,0.10);
            position: relative;
            overflow: hidden;
        }
        .featured-icon-box.style7:before, .featured-icon-box.style5:before {
            content: '';
            position: absolute;
            top: -2px; left: -2px; right: -2px; bottom: -2px;
            z-index: 0;
            background: linear-gradient(120deg, #0039d6, #4d88ff, #002699);
            opacity: 0.12;
            filter: blur(8px);
            pointer-events: none;
        }
        .featured-icon-box.style7 .featured-content, .featured-icon-box.style5 .featured-content {
            position: relative;
            z-index: 1;
        }
        .featured-icon-box.style7:hover, .featured-icon-box.style5:hover {
            box-shadow: 0 16px 48px 0 rgba(0,57,214,0.18);
            border-image: linear-gradient(120deg, #4d88ff, #0039d6, #002699) 1;
            transition: box-shadow 0.4s, border-image 0.4s;
        }

        /* Glowing Gradient Shadow on Interactive Card Hover */
        .interactive-card .card-inner {
            box-shadow: 0 0 0 rgba(77,136,255,0.0);
            transition: box-shadow 0.5s, transform 0.6s;
        }
        .interactive-card:hover .card-inner {
            box-shadow: 0 8px 40px 0 rgba(77,136,255,0.35), 0 0 32px 0 #0039d6;
            background: linear-gradient(120deg, #0039d6 0%, #4d88ff 100%);
        }

        /* Animated Gradient Button (for future use) */
        .btn-gradient {
            background: linear-gradient(90deg, #0039d6, #4d88ff);
            color: #fff;
            border: none;
            border-radius: 30px;
            padding: 12px 32px;
            font-weight: 600;
            box-shadow: 0 4px 16px 0 rgba(0,57,214,0.10);
            transition: background 0.4s, box-shadow 0.4s, transform 0.2s;
        }
        .btn-gradient:hover {
            background: linear-gradient(90deg, #4d88ff, #0039d6);
            box-shadow: 0 8px 32px 0 rgba(0,57,214,0.18);
            transform: translateY(-2px) scale(1.04);
        }

        /* Responsive: Hide orbs on mobile */
        @media (max-width: 991px) {
            .gradient-orb { display: none; }
        }
        
        /* Responsive Adjustments */
        @media (max-width: 991px) {
            .ttm-page-title-row {
                height: 260px !important;
                min-height: 200px;
                padding: 0;
            }
            
            .ttm-page-title-row .title {
                font-size: 2.5rem;
            }
            
            .floating-element {
                display: none;
            }
        }
        
        /* Interactive Elements */
        .interactive-card {
            perspective: 1000px;
        }
        
        .card-inner {
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }
        
        .interactive-card:hover .card-inner {
            transform: rotateY(10deg);
        }
        
        /* Scroll Animation */
        .fade-in {
            opacity: 0;
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            transform: translateY(30px);
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Animated Fabric Background Layers */
        .fabric-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 0;
            opacity: 0.1;
        }
        .fabric-bg.silk { background: url('images/fabric-silk.png') repeat; }
        .fabric-bg.cotton { background: url('images/fabric-cotton.png') repeat; }
        .fabric-bg.leather { background: url('images/fabric-leather.png') repeat; }
        .fabric-bg.georgette { background: url('images/fabric-georgette.png') repeat; }
        .fabric-bg.wool { background: url('images/fabric-wool.png') repeat; }

        /* --- Perfected Cloth Animation: Enhanced Realism & Responsiveness --- */
        .cloth-animation {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            z-index: 1;
            pointer-events: none;
            opacity: 0.18;
            background-repeat: no-repeat;
            background-size: cover;
            mix-blend-mode: lighten;
            animation: clothFlow 22s cubic-bezier(.77,0,.18,1) infinite alternate;
            will-change: filter, transform, opacity;
            transition: opacity 0.8s;
        }
        .cloth-hero {
            background: radial-gradient(ellipse at 60% 30%, #4d88ffcc 0%, #0039d6 60%, transparent 100%),
                        repeating-linear-gradient(120deg, #e6f0ff22 0 10px, transparent 10px 20px);
            animation-delay: 0s;
        }
        .cloth-mission {
            background: radial-gradient(ellipse at 30% 70%, #0039d6bb 0%, #4d88ff 60%, transparent 100%),
                        repeating-linear-gradient(100deg, #4d88ff11 0 12px, transparent 12px 24px);
            animation-delay: 2s;
        }
        .cloth-vision {
            background: radial-gradient(ellipse at 80% 50%, #e6f0ffcc 0%, #0039d6 70%, transparent 100%),
                        repeating-linear-gradient(140deg, #0039d611 0 8px, transparent 8px 16px);
            animation-delay: 4s;
        }
        .cloth-manufacturing {
            background: radial-gradient(ellipse at 40% 80%, #4d88ffcc 0%, #002699 70%, transparent 100%),
                        repeating-linear-gradient(160deg, #4d88ff22 0 14px, transparent 14px 28px);
            animation-delay: 6s;
        }
        .cloth-team {
            background: radial-gradient(ellipse at 70% 60%, #0039d6bb 0%, #e6f0ff 60%, transparent 100%),
                        repeating-linear-gradient(110deg, #0039d611 0 10px, transparent 10px 20px);
            animation-delay: 8s;
        }
        @keyframes clothFlow {
            0%   { filter: blur(0px) brightness(1) hue-rotate(0deg); transform: scale(1) translateY(0); opacity: 1; }
            20%  { filter: blur(2px) brightness(1.08) hue-rotate(8deg); transform: scale(1.03) translateY(-10px) skewY(1deg); opacity: 0.95; }
            40%  { filter: blur(3px) brightness(1.12) hue-rotate(-8deg); transform: scale(1.04) translateY(10px) skewY(-1deg); opacity: 0.92; }
            60%  { filter: blur(2.5px) brightness(1.10) hue-rotate(4deg); transform: scale(1.02) translateY(-8px) skewY(0.5deg); opacity: 0.96; }
            80%  { filter: blur(1.5px) brightness(1.04) hue-rotate(-4deg); transform: scale(1.01) translateY(4px) skewY(-0.5deg); opacity: 0.98; }
            100% { filter: blur(0.5px) brightness(1.01) hue-rotate(0deg); transform: scale(1) translateY(0); opacity: 1; }
        }
        /* Responsive: Hide cloth animation on mobile for performance */
        @media (max-width: 991px) {
            .cloth-animation { display: none; }
        }
        
        /* Ensure content is above cloth animation */
        .page, .ttm-page-title-row, .site-main, .container, .floating-element, .gradient-orb {
            position: relative;
            z-index: 2;
        }

        /* --- Interactive Hero Section Enhancements --- */
        .ttm-page-title-row {
            /* ...existing code... */
            cursor: pointer;
            transition: box-shadow 0.4s, filter 0.4s;
        }
        .ttm-page-title-row:active {
            filter: brightness(1.08) saturate(1.2);
            box-shadow: 0 8px 40px 0 rgba(77,136,255,0.18), 0 0 32px 0 #0039d6;
        }
        .ttm-page-title-row .title {
            /* ...existing code... */
            transition: text-shadow 0.4s, color 0.4s, letter-spacing 0.4s;
            will-change: text-shadow, color, letter-spacing;
        }
        .ttm-page-title-row .title:hover {
            color: #4d88ff;
            text-shadow: 0 4px 24px #0039d6, 0 1px 0 #fff;
            letter-spacing: 2px;
        }
        .ttm-page-title-row .title {
            position: relative;
            z-index: 2;
        }
        .ttm-page-title-row .title::after {
            display: none;
        }
        .ttm-page-title-row .title,
        .page-title-heading h2 {
            /* Remove hover underline and blue color shift, add a subtle interactive effect */
            color: #fff !important;
            background: none !important;
            -webkit-background-clip: initial !important;
            background-clip: initial !important;
            text-shadow: 0 2px 8px #0039d655;
            transition: none;
        }
        .ttm-page-title-row .title:hover,
        .page-title-heading h2:hover {
            /* Subtle glow on hover, no color/underline change */
            color: #fff !important;
            background: none !important;
            text-shadow: 0 2px 8px #0039d655;
            letter-spacing: normal;
        }
        .svg-overlay {
            /* ...existing code... */
            transition: opacity 0.5s;
        }
        .ttm-page-title-row:hover .svg-overlay {
            opacity: 0.5;
        }
        /* Parallax Mouse Move Effect */
        .ttm-page-title-row[data-interactive="true"] .svg-overlay {
            will-change: transform;
        }
    </style>
    
<style>
  .ttm-page-title-row {
    position: relative;
    background-image: url('https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExYjFseWJ5MjByeGNpamJ1Z2tmcTFxbGo1MXBscGd3Yng5Y28wNGJzNCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/C5SImDBh03Qje/giphy.gif'); /* Stylish animated background */
   width: 100%;
   background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 20px 0;
    overflow: hidden;
    color: #fff;
  }

  /* Dark overlay */
  .ttm-row-wrapper-bg-layer::before {
    content: "";
    position: absolute;
    /* inset: 0;
    background: rgba(0, 0, 0, 0.6); */
    z-index: 1;
  }

  .ttm-page-title-row-inner {
    position: relative;
    z-index: 2;
    text-align: center;
  }

  .page-title-heading h2 {
    font-size: 48px;
    font-weight: bold;
    animation: slideInDown 1.2s ease-out;
  }

  .breadcrumb-wrapper {
    font-size: 18px;
    margin-top: 10px;
    animation: fadeIn 2s ease-in;
  }

  /* SVG overlay animation */
  /* .svg-overlay {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    pointer-events: none;
    opacity: 0.3;
  } */

  @keyframes slideInDown {
    from {
      transform: translateY(-40px);
      opacity: 0;
    }
    to {
      transform: translateY(0);
      opacity: 1;
    }
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
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
        
        <!-- Hero Section with Floating Elements -->
        <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            
            <!-- Floating elements -->
         
       <!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
<!-- AOS Script -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>


<!-- Hero Section HTML -->
<div id="hero" class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
  <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>

  <!-- SVG Overlay -->
  <!-- <svg class="svg-overlay" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="#ffffff" fill-opacity="0.2"
      d="M0,224L60,202.7C120,181,240,139,360,149.3C480,160,600,224,720,229.3C840,235,960,181,1080,165.3C1200,149,1320,171,1380,181.3L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
    </path>
  </svg> -->

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <div class="ttm-page-title-row-inner" data-aos="fade-up">
          <div class="page-title-heading">
            <h2 class="title" data-aos="zoom-in" data-aos-delay="300">
              Crafting Excellence Since 2005
            </h2>
          </div>
          <div class="breadcrumb-wrapper" data-aos="fade-in" data-aos-delay="600">
            <span><a title="Homepage" href="index.php">Home</a></span>
            <span> / About Us</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

        </div>

        <!--site-main start-->
        <div class="site-main">
            <!-- About Section -->
            <section class="padding_bottom70 padding_top70 about-section clearfix">
                <div class="container">
                <!-- row end -->
                 <?php include 'about-main.php'; ?>
                </div>
            </section>

            <?php include 'vismis.php'; ?>
            

            <?php include 'cards.php'; ?>
            <!-- Team Section -->
      <?php include 'team.php'; ?>
        </div>
        <!--site-main end-->
         <div style="position:relative;width:100%;overflow:hidden;">
    <!-- Wave 1 (Primary to Secondary) -->
    <!-- Wave 1 (Primary to Secondary, with shimmer and subtle pattern overlay) -->
    <svg viewBox="0 0 400 80" class="ribbon-banner" style="display:block;width:100%;height:auto;position:relative;z-index:3;">
        <defs>
            <linearGradient id="ribbonGradient1" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#3b82f6">
                    <animate attributeName="stop-color" values="#3b82f6;#8b5cf6;#3b82f6" dur="4s" repeatCount="indefinite"/>
                </stop>
                <stop offset="100%" stop-color="#8b5cf6">
                    <animate attributeName="stop-color" values="#8b5cf6;#3b82f6;#8b5cf6" dur="4s" repeatCount="indefinite"/>
                </stop>
            </linearGradient>
            <!-- Subtle diagonal lines pattern -->
            <pattern id="wavePattern" patternUnits="userSpaceOnUse" width="16" height="16">
                <path d="M0,16 l16,-16 M-4,4 l8,-8 M12,20 l8,-8" stroke="#ffffff" stroke-width="0.5" opacity="0.12"/>
            </pattern>
            <!-- Shimmer gradient for animated highlight -->
            <linearGradient id="shimmerGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="white" stop-opacity="0"/>
                <stop offset="50%" stop-color="white" stop-opacity="0.18">
                    <animate attributeName="offset" values="0;1;0" dur="2.5s" repeatCount="indefinite"/>
                </stop>
                <stop offset="100%" stop-color="white" stop-opacity="0"/>
            </linearGradient>
        </defs>
        <!-- Main animated wave -->
        <path d="M0,60 Q80,20 160,60 T320,60 T400,60 L400,80 Q320,40 240,80 T80,80 T0,80 Z"
              fill="url(#ribbonGradient1)" opacity="0.8">
            <animate attributeName="d"
                values="
                    M0,60 Q80,20 160,60 T320,60 T400,60 L400,80 Q320,40 240,80 T80,80 T0,80 Z;
                    M0,60 Q80,80 160,60 T320,40 T400,60 L400,80 Q320,60 240,80 T80,60 T0,80 Z;
                    M0,60 Q80,20 160,60 T320,60 T400,60 L400,80 Q320,40 240,80 T80,80 T0,80 Z
                "
                dur="4s"
                repeatCount="indefinite"
                fill="freeze"
            />
        </path>
        <!-- Pattern overlay for texture -->
        <path d="M0,60 Q80,20 160,60 T320,60 T400,60 L400,80 Q320,40 240,80 T80,80 T0,80 Z"
              fill="url(#wavePattern)" opacity="0.25">
            <animate attributeName="d"
                values="
                    M0,60 Q80,20 160,60 T320,60 T400,60 L400,80 Q320,40 240,80 T80,80 T0,80 Z;
                    M0,60 Q80,80 160,60 T320,40 T400,60 L400,80 Q320,60 240,80 T80,60 T0,80 Z;
                    M0,60 Q80,20 160,60 T320,60 T400,60 L400,80 Q320,40 240,80 T80,80 T0,80 Z
                "
                dur="4s"
                repeatCount="indefinite"
                fill="freeze"
            />
        </path>
        <!-- Animated shimmer highlight -->
        <rect x="0" y="0" width="400" height="80" fill="url(#shimmerGradient)" opacity="0.18">
            <animate attributeName="x" values="0;400;0" dur="2.5s" repeatCount="indefinite"/>
        </rect>
        <!-- Decorative floating circles for extra uniqueness -->
        <circle cx="60" cy="40" r="7" fill="#fff" opacity="0.13">
            <animate attributeName="cy" values="40;30;40" dur="3s" repeatCount="indefinite"/>
            <animate attributeName="cx" values="60;80;60" dur="4s" repeatCount="indefinite"/>
        </circle>
        <circle cx="320" cy="60" r="5" fill="#8b5cf6" opacity="0.18">
            <animate attributeName="cy" values="60;50;60" dur="3.5s" repeatCount="indefinite"/>
            <animate attributeName="cx" values="320;340;320" dur="4.5s" repeatCount="indefinite"/>
        </circle>
        <circle cx="200" cy="70" r="4" fill="#3b82f6" opacity="0.15">
            <animate attributeName="cy" values="70;60;70" dur="2.8s" repeatCount="indefinite"/>
            <animate attributeName="cx" values="200;220;200" dur="3.8s" repeatCount="indefinite"/>
        </circle>
    </svg>
    <!-- Wave 2 (Secondary to Light, offset animation, lower opacity) -->
    <svg viewBox="0 0 400 80" class="ribbon-banner" style="display:block;width:100%;height:auto;position:absolute;top:0;left:0;z-index:2;">
        <defs>
            <linearGradient id="ribbonGradient2" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#8b5cf6">
                    <animate attributeName="stop-color" values="#8b5cf6;#f0f7ff;#8b5cf6" dur="5s" repeatCount="indefinite"/>
                </stop>
                <stop offset="100%" stop-color="#f0f7ff">
                    <animate attributeName="stop-color" values="#f0f7ff;#8b5cf6;#f0f7ff" dur="5s" repeatCount="indefinite"/>
                </stop>
            </linearGradient>
        </defs>
        <path d="M0,50 Q60,70 120,50 T240,50 T360,50 T400,50 L400,80 Q340,60 280,80 T160,80 T80,60 T0,80 Z"
              fill="url(#ribbonGradient2)" opacity="0.5">
            <animate attributeName="d"
                values="
                    M0,50 Q60,70 120,50 T240,50 T360,50 T400,50 L400,80 Q340,60 280,80 T160,80 T80,60 T0,80 Z;
                    M0,50 Q60,30 120,50 T240,70 T360,50 T400,50 L400,80 Q340,100 280,80 T160,60 T80,80 T0,80 Z;
                    M0,50 Q60,70 120,50 T240,50 T360,50 T400,50 L400,80 Q340,60 280,80 T160,80 T80,60 T0,80 Z
                "
                dur="5s"
                repeatCount="indefinite"
                fill="freeze"
                begin="0.8s"
            />
        </path>
    </svg>
    <!-- Wave 3 (Primary-dark to Primary, further offset, lowest opacity) -->
    <svg viewBox="0 0 400 80" class="ribbon-banner" style="display:block;width:100%;height:auto;position:absolute;top:0;left:0;z-index:1;background:#fff;">
        <defs>
            <linearGradient id="ribbonGradient3" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#2563eb">
                    <animate attributeName="stop-color" values="#2563eb;#3b82f6;#2563eb" dur="6s" repeatCount="indefinite"/>
                </stop>
                <stop offset="100%" stop-color="#3b82f6">
                    <animate attributeName="stop-color" values="#3b82f6;#2563eb;#3b82f6" dur="6s" repeatCount="indefinite"/>
                </stop>
            </linearGradient>
        </defs>
        <path d="M0,60 Q80,90 160,60 T320,60 T400,60 L400,80 Q320,70 240,80 T80,80 T0,80 Z"
              fill="url(#ribbonGradient3)" opacity="0.35">
            <animate attributeName="d"
                values="
                    M0,60 Q80,90 160,60 T320,60 T400,60 L400,80 Q320,70 240,80 T80,80 T0,80 Z;
                    M0,60 Q80,40 160,60 T320,80 T400,60 L400,80 Q320,90 240,80 T80,60 T0,80 Z;
                    M0,60 Q80,90 160,60 T320,60 T400,60 L400,80 Q320,70 240,80 T80,80 T0,80 Z
                "
                dur="6s"
                repeatCount="indefinite"
                fill="freeze"
                begin="1.6s"
            />
        </path>
    </svg>
</div>

        
        <!--footer start-->
        <?php include 'footer.php'; ?>   
        <!--footer end-->
        
        <!--back-to-top start-->
        <a id="totop" href="#top" class="bg-primary">
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
    
    <script>
        // Scroll animation
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const fadeInOnScroll = function() {
                fadeElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    if (elementTop < windowHeight - 100) {
                        element.classList.add('visible');
                        // Animate gradient text reveal if not already done
                        if (!element.dataset.gradientAnimated) {
                            element.style.transition = 'opacity 0.8s cubic-bezier(.77,0,.18,1), transform 0.8s cubic-bezier(.77,0,.18,1), color 0.8s';
                            setTimeout(() => {
                                element.style.color = getComputedStyle(document.documentElement).getPropertyValue('--text-dark');
                                element.style.background = 'none';
                                element.style.webkitBackgroundClip = 'initial';
                            }, 400);
                            element.dataset.gradientAnimated = 'true';
                        }
                    }
                });
            };
            
            // Initial check
            fadeInOnScroll();
            
            // Check on scroll
            window.addEventListener('scroll', fadeInOnScroll);
            
            // Interactive card tilt effect with glowing gradient shadow
            const interactiveCards = document.querySelectorAll('.interactive-card');
            
            interactiveCards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const xAxis = ((rect.width / 2 - x) / 18).toFixed(2);
                    const yAxis = ((rect.height / 2 - y) / 18).toFixed(2);
                    const cardInner = card.querySelector('.card-inner');
                    cardInner.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
                    cardInner.style.boxShadow = `0 8px 40px 0 rgba(77,136,255,0.35), 0 0 32px 0 #0039d6`;
                });
                card.addEventListener('mouseenter', () => {
                    const cardInner = card.querySelector('.card-inner');
                    cardInner.style.transition = 'none';
                });
                card.addEventListener('mouseleave', () => {
                    const cardInner = card.querySelector('.card-inner');
                    cardInner.style.transition = 'transform 0.6s, box-shadow 0.5s';
                    cardInner.style.transform = 'rotateY(0) rotateX(0)';
                    cardInner.style.boxShadow = '0 0 0 rgba(77,136,255,0.0)';
                });
            });
        });
    </script>
    <script>
// --- Interactive Hero Section: Parallax & Shine ---
document.addEventListener('DOMContentLoaded', function() {
  var hero = document.querySelector('.ttm-page-title-row');
  var svgOverlay = document.querySelector('.svg-overlay');
  if (hero && svgOverlay) {
    hero.setAttribute('data-interactive', 'true');
    hero.addEventListener('mousemove', function(e) {
      var rect = hero.getBoundingClientRect();
      var x = (e.clientX - rect.left) / rect.width - 0.5;
      var y = (e.clientY - rect.top) / rect.height - 0.5;
      // Parallax SVG overlay
      svgOverlay.style.transform = `translate(${x * 30}px, ${y * 18}px) scale(1.03)`;
      // Shine effect on title
      var title = hero.querySelector('.title');
      if (title) {
        var shineX = x * 60;
        var shineY = y * 30;
        title.style.textShadow = `${shineX}px ${shineY}px 32px #4d88ff88, 0 2px 8px #0039d6`;
      }
    });
    hero.addEventListener('mouseleave', function() {
      svgOverlay.style.transform = '';
      var title = hero.querySelector('.title');
      if (title) title.style.textShadow = '';
    });
  }
});
</script>
</body>
</html>