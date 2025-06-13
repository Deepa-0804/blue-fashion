<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Textile Gallery</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="images/favicon13.png" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
  <style>
    * {
      box-sizing: border-box;
      transition: all 0.2s;
    }

    body {
      margin: 0px;
      overflow-x: hidden;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
        Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
      background-color: #f5f9ff;
    }

    /* Hero Section */
    .hero-section {
      position: relative;
      min-height: 120vh;
      display: flex;
      align-items: center;
      background: linear-gradient(135deg, #1a2a4a 0%, #3a5683 100%);
    }

    .hero-content {
      position: relative;
      z-index: 10;
      padding: 0 3rem;
      max-width: 600px;
      color: white;
      margin-top: -20vh;
    }

    .hero-title {
      font-size: 5rem;
      font-weight: 300;
      color: #ffffff;
      margin-bottom: 1.5rem;
      line-height: 1.1;
    }

    .hero-highlight {
      background: linear-gradient(90deg, #4d8acb, #7bb6f0);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 700;
    }

    .hero-subtitle {
      font-size: 1.5rem;
      color: rgba(255, 255, 255, 0.9);
      margin-bottom: 2rem;
    }

    .hero-btn {
      display: inline-block;
      padding: 1rem 2rem;
      background: linear-gradient(90deg, #4d8acb, #7bb6f0);
      color: white;
      border-radius: 50px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.4s;
      box-shadow: 0 10px 20px rgba(77, 138, 203, 0.3);
    }

    .hero-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(77, 138, 203, 0.4);
    }

    /* Grid Gallery */
    .grid-gallery {
      position: relative;
      margin-top: -130vh;
      padding-bottom: 20vh;
      max-height:800px;
    }

    .heading {
      font-size: 8rem;
      margin: 0 3rem 7rem;
      font-weight: 300;
      color: #4d8acb;
      display: inline-block;
      position: relative;
      z-index: 3;
    }

    .heading::after {
      content: "";
      width: 80%;
      height: 80%;
      position: absolute;
      top: 22%;
      left: 12%;
      border: 1px solid rgba(77, 138, 203, 0.2);
      z-index: -20;
    }

    @keyframes move {
      from {
        transform: rotate(45deg) translate(-120px, 60px);
      }
      to {
        transform: rotate(45deg) translate(-120px, -290px);
      }
    }

    .container {
      margin: 0;
      display: grid;
      grid-template-columns: auto auto auto;
      gap: 1rem;
      animation: move 4.5s linear infinite alternate;
      justify-content: flex-end;
      padding-right: 3rem;
    }

    .container .child-container {
      width: 150px;
      height: 150px;
      border-radius: 5px;
      background-color: #b9b9b9;
      text-align: center;
      overflow: hidden;
    }

    .child-container img {
      width: 100%;
      height: 100%;
      border-radius: inherit;
      object-fit: cover;
    }

    /* Fabric Showcase Section */
    .fabric-showcase {
      padding: 5rem 0;
      position: relative;
      z-index: 5;
      background-color: #fff;
    }

    .container-fluid {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
    }

    .justify-content-center {
      justify-content: center !important;
    }

    .col-lg-10 {
      flex: 0 0 83.333333%;
      max-width: 83.333333%;
    }

    .text-center {
      text-align: center !important;
    }

    .mb-5 {
      margin-bottom: 3rem !important;
    }

    .process-label {
      color: #4d8acb;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-bottom: 15px;
    }

    .section-title {
      font-size: 3rem;
      font-weight: 700;
      color: #4d8acb;
      margin-bottom: 15px;
      line-height: 1.2;
    }

    .highlight-text {
      background: linear-gradient(90deg, #4d8acb, #7bb6f0);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .section-subtitle {
      font-size: 1.2rem;
      color: #6c757d;
      max-width: 600px;
      margin: 0 auto;
    }

    .g-4 {
      margin-right: -15px;
      margin-left: -15px;
    }

    .g-4 > [class*="col-"] {
      padding-right: 15px;
      padding-left: 15px;
    }

    .fabric-grid {
      display: flex;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
      justify-content: center;
    }

    .col-xl-4 {
      flex: 0 0 33.333333%;
      max-width: 33.333333%;
    }

    .col-lg-4 {
      flex: 0 0 33.333333%;
      max-width: 33.333333%;
    }

    .col-md-6 {
      flex: 0 0 50%;
      max-width: 50%;
    }

    .col-sm-12 {
      flex: 0 0 100%;
      max-width: 100%;
    }

    .fabric-item {
      padding: 15px;
    }

    .fabric-card {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
      height: 100%;
      background: #fff;
      border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .fabric-image-wrapper {
      position: relative;
      overflow: hidden;
      border-radius: 12px 12px 0 0;
      height: 280px;
    }

    .fabric-badge {
      position: absolute;
      top: 15px;
      right: 15px;
      background: #4d8acb;
      color: white;
      padding: 5px 12px;
      border-radius: 4px;
      font-size: 12px;
      font-weight: 600;
      z-index: 2;
      text-transform: uppercase;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .fabric-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
      transform-origin: center;
    }

    .fabric-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(180deg, rgba(77, 138, 203, 0.1) 0%, rgba(77, 138, 203, 0.8) 100%);
      opacity: 0;
      transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
      display: flex;
      align-items: flex-end;
    }

    .overlay-content {
      width: 100%;
      padding: 20px;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .overlay-buttons {
      display: flex;
      gap: 15px;
      justify-content: center;
    }

    .image-zoom, .image-link {
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.9);
      color: #4d8acb;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
      transform: translateY(20px);
      opacity: 0;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      text-decoration: none;
    }

    .fabric-stats {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: center;
      margin-top: 10px;
    }

    .stat-item {
      background: rgba(255, 255, 255, 0.9);
      padding: 8px 12px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 600;
      color: #1a2a4a;
      display: flex;
      align-items: center;
      gap: 5px;
      opacity: 0;
      transform: translateY(10px);
      transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .fabric-info {
      padding: 20px;
      position: relative;
      background: #fff;
    }

    .fabric-category {
      display: block;
      font-size: 12px;
      color: #4d8acb;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 5px;
      font-weight: 600;
    }

    .fabric-title {
      font-size: 1.25rem;
      color: #1a2a4a;
      margin-bottom: 15px;
      transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
      font-weight: 700;
    }

    .fabric-hover-line {
      position: absolute;
      bottom: 0;
      left: 20px;
      width: 0;
      height: 2px;
      background: linear-gradient(90deg, #4d8acb, #7bb6f0);
      transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .fabric-meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 15px;
    }

    .fabric-price {
      font-size: 14px;
      font-weight: 600;
      color: #1a2a4a;
    }

    .fabric-rating {
      font-size: 13px;
      color: #1a2a4a;
      display: flex;
      align-items: center;
      gap: 3px;
    }

    .fabric-rating i {
      color: #ffc107;
    }

    /* Hover Effects */
    .fabric-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .fabric-card:hover .fabric-image {
      transform: scale(1.05);
    }

    .fabric-card:hover .fabric-overlay {
      opacity: 1;
    }

    .fabric-card:hover .image-zoom,
    .fabric-card:hover .image-link,
    .fabric-card:hover .stat-item {
      transform: translateY(0);
      opacity: 1;
    }

    .fabric-card:hover .fabric-hover-line {
      width: calc(100% - 40px);
    }

    /* Responsive Styles */
    @media screen and (max-width: 1200px) {
      .hero-title {
        font-size: 4rem;
      }
      
      .heading {
        margin: 0 3rem 7rem;
        font-size: 6rem;
      }
    }

    @media screen and (max-width: 992px) {
      .hero-content {
        padding: 0 3rem;
      }
      
      .hero-title {
        font-size: 3.5rem;
      }
      
      .hero-subtitle {
        font-size: 1.25rem;
      }
      
      .col-xl-4 {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }

    @media screen and (max-width: 780px) {
      .heading {
        font-size: 4rem;
        margin: 0 2rem 5rem;
      }
      
      @keyframes move {
        from {
          transform: rotate(45deg) translate(20px, 80px);
        }
        to {
          transform: rotate(45deg) translate(20px, 20px);
        }
      }

      .container {
        gap: 0.5rem;
        padding-right: 2rem;
      }
      
      .container .child-container {
        width: 100px;
        height: 100px;
        border-radius: 4px;
      }
      
      .hero-content {
        padding: 0 2rem;
      }
      
      .hero-title {
        font-size: 3rem;
      }
      
      .col-lg-4 {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }

    @media screen and (max-width: 576px) {
      .heading {
        font-size: 3rem;
        margin: 0 2rem 3rem;
      }
      
      @keyframes move {
        from {
          transform: rotate(45deg) translate(150px, 80px);
        }
        to {
          transform: rotate(45deg) translate(150px, 20px);
        }
      }
      
      .hero-content {
        padding: 0 2rem;
      }
      
      .hero-title {
        font-size: 2.5rem;
      }
      
      .hero-subtitle {
        font-size: 1.1rem;
      }
      
      .col-md-6, .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%;
      }
      
      .section-title {
        font-size: 2.5rem;
      }
    }
  </style>
    <style>
    :root {
      --primary: #2563eb;
      --secondary: #1e40af;
      --dark: #1e293b;
      --light: #f8fafc;
      --gray: #94a3b8;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    }
    
    body {
      background-color: var(--light);
      color: var(--dark);
      overflow-x: hidden;
    }
    
    /* Header */
    .hero {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    
    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.7));
      z-index: 1;
    }
    
    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      padding: 0 2rem;
    }
    
    .hero h1 {
      font-size: 4rem;
      font-weight: 800;
      margin-bottom: 1.5rem;
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      line-height: 1.2;
    }
    
    .hero p {
      font-size: 1.2rem;
      color: var(--dark);
      margin-bottom: 2rem;
      opacity: 0.9;
    }
    
    .scroll-down {
      position: absolute;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      animation: bounce 2s infinite;
      color: var(--primary);
      font-size: 1.5rem;
    }
    
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {transform: translateY(0) translateX(-50%);}
      40% {transform: translateY(-20px) translateX(-50%);}
      60% {transform: translateY(-10px) translateX(-50%);}
    }
    
    /* Fabric Grid */
    .fabrics-section {
      padding: 8rem 2rem;
      max-width: 1400px;
      margin: 0 auto;
    }
    
    .section-header {
      text-align: center;
      margin-bottom: 4rem;
    }
    
    .section-header h2 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
      color: var(--dark);
    }
    
    .section-header p {
      color: var(--gray);
      max-width: 600px;
      margin: 0 auto;
      font-size: 1.1rem;
    }
    
    .fabrics-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      gap: 2rem;
    }
    
    .fabric-card {
      background: white;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
      position: relative;
      height: 520px;
    }
    
    .fabric-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    }
    
    .fabric-image {
      height: 240px;
      width: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .fabric-card:hover .fabric-image {
      transform: scale(1.05);
    }
    
    .fabric-content {
      padding: 1.5rem;
      position: relative;
      z-index: 2;
      background: white;
    }
    
    .fabric-category {
      display: inline-block;
      background: var(--primary);
      color: white;
      padding: 0.3rem 0.8rem;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
      margin-bottom: 0.8rem;
    }
    
    .fabric-title {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 0.8rem;
      color: var(--dark);
    }
    
    .fabric-description {
      color: var(--gray);
      margin-bottom: 1.2rem;
      line-height: 1.6;
    }
    
    .fabric-properties {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      margin-bottom: 1.5rem;
    }
    
    .property {
      background: #e0e7ff;
      color: var(--primary);
      padding: 0.3rem 0.8rem;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
    }
    
    .view-btn {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      color: var(--primary);
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    
    .view-btn:hover {
      color: var(--secondary);
      gap: 0.8rem;
    }
    
    /* Parallax Section */
    .parallax {
      height: 60vh;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }
    
    .parallax::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.4);
    }
    
    .parallax-content {
      position: relative;
      z-index: 2;
      color: white;
      text-align: center;
      max-width: 800px;
      padding: 0 2rem;
    }
    
    .parallax h2 {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
    }
    
    .parallax p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
      opacity: 0.9;
    }
    
    .cta-btn {
      display: inline-block;
      background: white;
      color: var(--primary);
      padding: 0.8rem 2rem;
      border-radius: 30px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    
    .cta-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.5rem;
      }
      
      .fabrics-grid {
        grid-template-columns: 1fr;
      }
      
      .fabric-card {
        height: auto;
      }
    }
  </style>
</head>

<body>
<section>
  <?php include 'header.php'; ?>
</section>
  <!-- Hero Section -->
  <section class="hero-section">
    <div class="hero-content">
      <h1 class="hero-title">Discover Our <span class="hero-highlight">Premium Textiles</span></h1>
      <p class="hero-subtitle">Experience the finest quality fabrics crafted with precision and care for your unique needs.</p>
      <a href="#fabrics" class="hero-btn">Explore Collection</a>
    </div>

    
  </section>

  <!-- Grid Gallery Section (now scrolls with content) -->
  <section class="grid-gallery">
    <!-- <h1 class="heading">Grid<br>Gallery</h1> -->
    <div class="container">
      <div class="child-container">
        <img src="https://picsum.photos/100" alt="pic 1">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/200" alt="pic 2">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/300" alt="pic 3">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/400" alt="pic 4">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/500" alt="pic 5">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/600" alt="pic 6">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/150" alt="pic 7">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/250" alt="pic 8">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/350" alt="pic 9">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/450" alt="pic 10">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/550" alt="pic 11">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/650" alt="pic 12">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/110" alt="pic 13">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/210" alt="pic 14">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/310" alt="pic 15">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/410" alt="pic 16">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/510" alt="pic 17">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/610" alt="pic 18">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/125" alt="pic 19">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/225" alt="pic 20">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/325" alt="pic 21">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/425" alt="pic 22">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/525" alt="pic 23">
      </div>
      <div class="child-container">
        <img src="https://picsum.photos/625" alt="pic 24">
      </div>
    </div>
  </section>

  <!-- Fabric Showcase Section -->
  <section class="fabric-showcase" id="fabrics">
    <div class="container-fluid p-0">
      <!-- Section Header -->
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center mb-5">
          <div class="section-header">
            <div class="process-label">
              OUR FABRICS
            </div>
            <h2 class="section-title">
              Explore Our Premium<br>
              <span class="highlight-text">Fabric Collection</span>
            </h2>
            <p class="section-subtitle">
              High-quality fabrics crafted with precision and style for your unique needs.
            </p>
          </div>
        </div>
      </div>

      <!-- Fabric Grid -->


  <!-- Hero Section -->
  <section class="hero" style="background: url('https://images.unsplash.com/photo-1516762689617-e1cffcef479d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1411&q=80') center/cover no-repeat;">
    <div class="hero-content">
      <h1>Crafting Excellence in Every Thread</h1>
      <p>Discover premium textiles that blend innovation with tradition, offering unparalleled quality for designers and creators.</p>
      <a href="#fabrics" class="cta-btn">Explore Collection</a>
    </div>
    <div class="scroll-down">
      <i class="fas fa-chevron-down"></i>
    </div>
  </section>
  
  <!-- Fabric Grid -->
  <section id="fabrics" class="fabrics-section">
    <div class="section-header">
      <h2>Our Premium Textiles</h2>
      <p>Each fabric is carefully selected for its unique characteristics and superior quality</p>
    </div>
    
    <div class="fabrics-grid">
      <!-- Silk -->
      <div class="fabric-card">
        <img src="https://images.unsplash.com/photo-1537633493919-04e5ba5c0a2a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Silk Fabric" class="fabric-image">
        <div class="fabric-content">
          <span class="fabric-category">Luxury</span>
          <h3 class="fabric-title">Silk Fabric</h3>
          <p class="fabric-description">Soft, luxurious, and versatile, silk fabric adds elegance to any design with its smooth texture and natural sheen.</p>
          <div class="fabric-properties">
            <span class="property">Luxurious</span>
            <span class="property">Breathable</span>
            <span class="property">Elegant</span>
          </div>
          <a href="#" class="view-btn">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      
      <!-- Cotton -->
      <div class="fabric-card">
        <img src="https://images.unsplash.com/photo-1520367445093-50dc08a59d9d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Cotton Fabric" class="fabric-image">
        <div class="fabric-content">
          <span class="fabric-category">Natural</span>
          <h3 class="fabric-title">Cotton Fabric</h3>
          <p class="fabric-description">Soft, breathable, and durable, ideal for a variety of applications from fashion to home textiles.</p>
          <div class="fabric-properties">
            <span class="property">Natural</span>
            <span class="property">Versatile</span>
            <span class="property">Comfortable</span>
          </div>
          <a href="#" class="view-btn">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      
      <!-- Leather -->
      <div class="fabric-card">
        <img src="https://images.unsplash.com/photo-1563170351-be82bc888aa4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Leather Material" class="fabric-image">
        <div class="fabric-content">
          <span class="fabric-category">Premium</span>
          <h3 class="fabric-title">Leather Material</h3>
          <p class="fabric-description">Durable, versatile, and luxurious, perfect for high-quality fashion and upholstery applications.</p>
          <div class="fabric-properties">
            <span class="property">Durable</span>
            <span class="property">Timeless</span>
            <span class="property">Luxurious</span>
          </div>
          <a href="#" class="view-btn">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      
      <!-- Georgette -->
      <div class="fabric-card">
        <img src="https://images.unsplash.com/photo-1567401893414-76b7b1e5a7a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Georgette Fabric" class="fabric-image">
        <div class="fabric-content">
          <span class="fabric-category">Sheer</span>
          <h3 class="fabric-title">Georgette Fabric</h3>
          <p class="fabric-description">Lightweight and flowy with a slight crinkle, ideal for elegant drapes in fashion and formal wear.</p>
          <div class="fabric-properties">
            <span class="property">Flowy</span>
            <span class="property">Elegant</span>
            <span class="property">Lightweight</span>
          </div>
          <a href="#" class="view-btn">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      
      <!-- Wool -->
      <div class="fabric-card">
        <img src="https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Wool Fabric" class="fabric-image">
        <div class="fabric-content">
          <span class="fabric-category">Winter</span>
          <h3 class="fabric-title">Wool Fabric</h3>
          <p class="fabric-description">Warm, breathable, and insulating, perfect for colder climates in both fashion and home textiles.</p>
          <div class="fabric-properties">
            <span class="property">Warm</span>
            <span class="property">Natural</span>
            <span class="property">Insulating</span>
          </div>
          <a href="#" class="view-btn">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      
      <!-- Linen -->
      <div class="fabric-card">
        <img src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Linen Fabric" class="fabric-image">
        <div class="fabric-content">
          <span class="fabric-category">Eco-Friendly</span>
          <h3 class="fabric-title">Linen Fabric</h3>
          <p class="fabric-description">Light, breathable, and eco-friendly with natural texture, perfect for warm weather applications.</p>
          <div class="fabric-properties">
            <span class="property">Breathable</span>
            <span class="property">Sustainable</span>
            <span class="property">Natural</span>
          </div>
          <a href="#" class="view-btn">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Parallax Section -->
  <section class="parallax" style="background-image: url('https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')">
    <div class="parallax-content">
      <h2>Craft Your Vision</h2>
      <p>Our premium textiles provide the perfect foundation for your creative projects, whether you're designing fashion or furnishing spaces.</p>
      <a href="#" class="cta-btn">Contact Our Experts</a>
    </div>
  </section>
  
  <script>
    // Simple animation for cards when they come into view
    document.addEventListener('DOMContentLoaded', function() {
      const fabricCards = document.querySelectorAll('.fabric-card');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = 1;
            entry.target.style.transform = 'translateY(0)';
          }
        });
      }, { threshold: 0.1 });
      
      fabricCards.forEach(card => {
        card.style.opacity = 0;
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'all 0.6s ease';
        observer.observe(card);
      });
    });
  </script>

    </div>
  </section>
 
</body>

</html>