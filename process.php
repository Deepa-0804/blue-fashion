<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueFashion | Premium Textile Manufacturing Solutions</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <style>
        /* Custom animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        @keyframes wave {
            0% { transform: rotate(0deg); }
            10% { transform: rotate(14deg); }
            20% { transform: rotate(-8deg); }
            30% { transform: rotate(14deg); }
            40% { transform: rotate(-4deg); }
            50% { transform: rotate(10deg); }
            60% { transform: rotate(0deg); }
            100% { transform: rotate(0deg); }
        }
        
        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        .animate-wave {
            display: inline-block;
            animation: wave 2s ease infinite;
            transform-origin: 70% 70%;
        }
        
        .aspect-ratio-box {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
        }
        .aspect-ratio-content {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        
        /* Parallax effect */
        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        /* Text gradient */
        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        /* Scroll indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            width: 24px;
            height: 40px;
            border: 2px solid rgba(255,255,255,0.7);
            border-radius: 12px;
        }
        .scroll-indicator::before {
            content: '';
            position: absolute;
            top: 6px;
            left: 50%;
            width: 4px;
            height: 8px;
            margin-left: -2px;
            background-color: rgba(255,255,255,0.7);
            border-radius: 2px;
            animation: scrollAnimation 2s infinite;
        }
        @keyframes scrollAnimation {
            0% { opacity: 1; transform: translateY(0); }
            100% { opacity: 0; transform: translateY(16px); }
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #3b82f6;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #2563eb;
        }
        
        /* Glow effect */
        .glow-effect {
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.5);
            transition: box-shadow 0.3s ease;
        }
        .glow-effect:hover {
            box-shadow: 0 0 25px rgba(59, 130, 246, 0.8);
        }
        
        /* Underline animation */
        .underline-animation {
            position: relative;
            display: inline-block;
        }
        .underline-animation::after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #3b82f6;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }
        .underline-animation:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
        
        /* Custom shape divider */
        .custom-shape-divider-bottom {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }
        .custom-shape-divider-bottom svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 80px;
        }
        .custom-shape-divider-bottom .shape-fill {
            fill: #FFFFFF;
        }
        
        /* Mobile menu animation */
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out;
        }
        .mobile-menu.open {
            max-height: 500px;
        }
        
        /* Unique Feature Animations */
        @keyframes swipeInLeft {
            from { opacity: 0; transform: translateX(-80px) scale(0.95) rotateY(-20deg); }
            to { opacity: 1; transform: translateX(0) scale(1) rotateY(0deg); }
        }
        @keyframes swipeInRight {
            from { opacity: 0; transform: translateX(80px) scale(0.95) rotateY(20deg); }
            to { opacity: 1; transform: translateX(0) scale(1) rotateY(0deg); }
        }
        @keyframes flipbook {
            0% { opacity: 0; transform: rotateY(-90deg) scale(0.9); }
            60% { opacity: 1; transform: rotateY(10deg) scale(1.05); }
            100% { opacity: 1; transform: rotateY(0deg) scale(1); }
        }
        .animate-swipe-left { opacity: 0; animation: swipeInLeft 1.2s cubic-bezier(.22,1,.36,1) forwards; }
        .animate-swipe-right { opacity: 0; animation: swipeInRight 1.2s cubic-bezier(.22,1,.36,1) forwards; }
        .animate-flipbook { opacity: 0; animation: flipbook 1.3s cubic-bezier(.22,1,.36,1) forwards; }
        .delay-1 { animation-delay: .2s; }
        .delay-2 { animation-delay: .4s; }
        .delay-3 { animation-delay: .6s; }
        .delay-4 { animation-delay: .8s; }
        
        /* Timeline Animation */
        @keyframes timelineFadeIn {
            0% { opacity: 0; transform: translateY(60px) scale(0.95) rotateZ(-6deg); }
            60% { opacity: 1; transform: translateY(-8px) scale(1.03) rotateZ(2deg); }
            100% { opacity: 1; transform: translateY(0) scale(1) rotateZ(0deg); }
        }
        @keyframes timelinePopIn {
            0% { opacity: 0; transform: scale(0.85) translateY(40px); box-shadow: none; }
            60% { opacity: 1; transform: scale(1.05) translateY(-8px); box-shadow: 0 0 0 0 #3b82f6; }
            80% { box-shadow: 0 0 24px 0 #3b82f6cc; }
            100% { opacity: 1; transform: scale(1) translateY(0); box-shadow: 0 0 12px 0 #3b82f688; }
        }
        .timeline-animate {
            opacity: 0;
            animation: timelinePopIn 1.1s cubic-bezier(.22,1,.36,1) forwards;
            animation-play-state: paused;
        }
        .timeline-delay-1 { animation-delay: 0.1s; }
        .timeline-delay-2 { animation-delay: 0.3s; }
        .timeline-delay-3 { animation-delay: 0.5s; }
        .timeline-delay-4 { animation-delay: 0.7s; }

        /* Industries & Production Timeline */
        * { box-sizing: border-box; }
        html { font-size: 14px; }
        body { background: #f6f9fc; font-family: "Open Sans", sans-serif; color: #525f7f; }
        h2 { margin: 5%; text-align: center; font-size: 4rem; font-weight: 100; }
        h1 { margin: 4%; text-align: center; font-size: 2rem; font-weight: 10; top: 0; }
        .timeline { display: flex; flex-direction: column; margin: 20px auto; position: relative; }
        .timeline__event { margin-bottom: 20px; position: relative; display: flex; margin: 20px 0; border-radius: 6px; align-self: center; width: 50vw; }
        .timeline__event:nth-child(2n+1) { flex-direction: row-reverse; }
        .timeline__event:nth-child(2n+1) .timeline__event__date { border-radius: 0 6px 6px 0; }
        .timeline__event:nth-child(2n+1) .timeline__event__content { border-radius: 6px 0 0 6px; }
        .timeline__event:nth-child(2n+1) .timeline__event__icon:before { content: ""; width: 2px; height: 100%; background: #f6a4ec; position: absolute; top: 0%; left: 50%; right: auto; z-index: -1; transform: translateX(-50%); animation: fillTop 2s forwards 4s ease-in-out; }
        .timeline__event:nth-child(2n+1) .timeline__event__icon:after { content: ""; width: 100%; height: 2px; background: #f6a4ec; position: absolute; right: 0; z-index: -1; top: 50%; left: auto; transform: translateY(-50%); animation: fillLeft 2s forwards 4s ease-in-out; }
        .timeline__event__title { font-size: 1.2rem; line-height: 1.4; text-transform: uppercase; font-weight: 600; color: #9251ac; letter-spacing: 1.5px; }
        .timeline__event__content { padding: 20px; box-shadow: 0 30px 60px -12px rgba(50, 50, 93, 0.25), 0 18px 36px -18px rgba(0, 0, 0, 0.3), 0 -12px 36px -8px rgba(0, 0, 0, 0.025); background: #fff; width: calc(40vw - 84px); border-radius: 0 6px 6px 0; }
        .timeline__event__date { color: #f6a4ec; font-size: 1.5rem; font-weight: 600; background: #9251ac; display: flex; align-items: center; justify-content: center; white-space: nowrap; padding: 0 20px; border-radius: 6px 0 0 6px; }
        .timeline__event__icon { display: flex; align-items: center; justify-content: center; color: #9251ac; padding: 40px; align-self: center; margin: 0 20px; background: #f6a4ec; border-radius: 100%; width: 40px; box-shadow: 0 30px 60px -12px rgba(50, 50, 93, 0.25), 0 18px 36px -18px rgba(0, 0, 0, 0.3), 0 -12px 36px -8px rgba(0, 0, 0, 0.025); height: 40px; position: relative; }
        .timeline__event__icon i { font-size: 32px; }
        .timeline__event__icon:before { content: ""; width: 2px; height: 100%; background: #f6a4ec; position: absolute; top: 0%; z-index: -1; left: 50%; transform: translateX(-50%); animation: fillTop 2s forwards 4s ease-in-out; }
        .timeline__event__icon:after { content: ""; width: 100%; height: 2px; background: #f6a4ec; position: absolute; left: 0%; z-index: -1; top: 50%; transform: translateY(-50%); animation: fillLeftOdd 2s forwards 4s ease-in-out; }
        .timeline__event__description { flex-basis: 100%; }
        .timeline__event--type2:after { background: #555ac0; }
        .timeline__event--type2 .timeline__event__date { color: #87bbfe; background: #555ac0; }
        .timeline__event--type2:nth-child(2n+1) .timeline__event__icon:before, .timeline__event--type2:nth-child(2n+1) .timeline__event__icon:after { background: #87bbfe; }
        .timeline__event--type2 .timeline__event__icon { background: #87bbfe; color: #555ac0; }
        .timeline__event--type2 .timeline__event__icon:before, .timeline__event--type2 .timeline__event__icon:after { background: #87bbfe; }
        .timeline__event--type2 .timeline__event__title { color: #555ac0; }
        .timeline__event--type3:after { background: #24b47e; }
        .timeline__event--type3 .timeline__event__date { color: #aff1b6; background-color: #24b47e; }
        .timeline__event--type3:nth-child(2n+1) .timeline__event__icon:before, .timeline__event--type3:nth-child(2n+1) .timeline__event__icon:after { background: #aff1b6; }
        .timeline__event--type3 .timeline__event__icon { background: #aff1b6; color: #24b47e; }
        .timeline__event--type3 .timeline__event__icon:before, .timeline__event--type3 .timeline__event__icon:after { background: #aff1b6; }
        .timeline__event--type3 .timeline__event__title { color: #24b47e; }
        .timeline__event:last-child .timeline__event__icon:before { content: none; }
        @media (max-width: 786px) {
            .timeline__event { flex-direction: column; align-self: center; }
            .timeline__event__content { width: 100%; }
            .timeline__event__icon { border-radius: 6px 6px 0 0; width: 100%; margin: 0; box-shadow: none; }
            .timeline__event__icon:before, .timeline__event__icon:after { display: none; }
            .timeline__event__date { border-radius: 0; padding: 20px; }
            .timeline__event:nth-child(2n+1) { flex-direction: column; align-self: center; }
            .timeline__event:nth-child(2n+1) .timeline__event__date { border-radius: 0; padding: 20px; }
            .timeline__event:nth-child(2n+1) .timeline__event__icon { border-radius: 6px 6px 0 0; margin: 0; }
        }
        @-webkit-keyframes fillLeft { 100% { right: 100%; } }
        @keyframes fillLeft { 100% { right: 100%; } }
        @-webkit-keyframes fillTop { 100% { top: 100%; } }
        @keyframes fillTop { 100% { top: 100%; } }
        @-webkit-keyframes fillLeftOdd { 100% { left: 100%; } }
        @keyframes fillLeftOdd { 100% { left: 100%; } }
    </style>
    <script src="https://kit.fontawesome.com/fc596df623.js" crossorigin="anonymous"></script>
</head>
<body class="font-inter antialiased text-gray-800 bg-white scroll-smooth">
    <!-- Navigation -->
    <!-- Hero Section -->
    <header class="relative pt-32 pb-20 md:pt-40 md:pb-28 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-blue-900/90 to-blue-800/90"></div>
        <div class="absolute inset-0 parallax-bg" style="background-image: url('images/web-shots/WOW00394C2.jpg');"></div>
        <div class="absolute inset-0 bg-black/60"></div>
        <!-- Floating elements -->
        <div class="absolute top-1/4 left-1/4 w-16 h-16 bg-white/10 rounded-full animate-float"></div>
        <div class="absolute top-1/3 right-1/4 w-24 h-24 bg-white/5 rounded-full animate-float" style="animation-delay: 0.5s;"></div>
        <div class="absolute bottom-1/4 right-1/3 w-20 h-20 bg-white/8 rounded-full animate-float" style="animation-delay: 1s;"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl animate-fade-in" style="animation-delay: 0.3s;">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-light text-white mb-6 leading-tight">
                    <span class="font-medium">Innovative Textile</span> Solutions<br>
                    <span class="text-gradient bg-gradient-to-r from-blue-300 to-blue-100">for Modern Fashion</span>
                </h1>
                <p class="text-xl text-blue-100 mb-8 max-w-2xl">
                    BlueFashion combines cutting-edge technology with artisanal craftsmanship to deliver premium textile solutions for fashion brands worldwide.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#" class="px-8 py-4 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300 shadow-lg hover:shadow-xl glow-effect text-center">
                        Explore Our Fabrics
                    </a>
                    <a href="#" class="px-8 py-4 bg-transparent border-2 border-white text-white font-medium rounded-lg hover:bg-white hover:text-blue-900 transition duration-300 text-center">
                        Request Samples
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="scroll-indicator"></div>
        
        <!-- Wave divider -->
        <div class="custom-shape-divider-bottom">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </header>

    <!-- Client Logos -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <p class="text-center text-gray-500 mb-8 uppercase text-sm tracking-wider">Trusted by leading brands worldwide</p>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-70 hover:opacity-100 transition-opacity duration-300">
                <img src="images/client/client-01.png" alt="Brand Logo" class="h-8 md:h-10 hover:scale-110 transition-transform">
                <img src="images/client/client-02.png" alt="Brand Logo" class="h-8 md:h-10 hover:scale-110 transition-transform">
                <img src="images/client/client-03.png" alt="Brand Logo" class="h-8 md:h-10 hover:scale-110 transition-transform">
                <img src="images/client/client-04.png" alt="Brand Logo" class="h-8 md:h-10 hover:scale-110 transition-transform">
            
            </div>
        </div>
    </section>

    <!-- Textile Innovation Section -->
    <section class="py-24 bg-gray-50 relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-0 left-0 w-32 h-32 bg-blue-100 rounded-full opacity-10 mix-blend-multiply transform -translate-x-20 -translate-y-20"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-blue-200 rounded-full opacity-10 mix-blend-multiply transform translate-x-32 translate-y-32"></div>
        
        <div class="container mx-auto px-6 max-w-7xl">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <span class="inline-block text-blue-600 font-medium tracking-widest text-sm uppercase mb-3 opacity-90">TEXTILE INNOVATION</span>
                <h2 class="text-4xl md:text-5xl font-light text-gray-900 leading-tight mb-6">
                    <span class="font-medium">Precision Textile</span> Manufacturing<br>
                    <span class="text-gradient bg-gradient-to-r from-blue-600 to-blue-400 font-normal">& Apparel Solutions</span>
                </h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
            </div>

            <!-- Feature 1 -->
            <div class="flex flex-col lg:flex-row items-stretch mb-28 group" data-scroll>
                <div class="w-full lg:w-1/2 relative overflow-hidden rounded-none lg:rounded-r-xl shadow-lg transition-all duration-700 ease-in-out transform group-hover:shadow-xl animate-swipe-left">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-200 overflow-hidden">
                        <img src="images/web-shots/WOW03046.jpg" alt="Custom fabric design" class="w-full h-full object-cover transition-all duration-1000 ease-out group-hover:scale-105 animate-flipbook">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/5 via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60 to-transparent">
                        <span class="text-white text-sm font-medium">Digital Textile Printing</span>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 flex items-center bg-white p-12 lg:p-16 xl:p-20 rounded-none lg:rounded-l-xl shadow-lg transition-all duration-700 ease-in-out group-hover:shadow-xl animate-swipe-right delay-1">
                    <div class="relative z-10">
                        <div class="flex items-center mb-6">
                            <span class="text-blue-600 font-light text-5xl mr-4">01</span>
                            <div class="w-16 h-px bg-blue-600"></div>
                        </div>
                        <h3 class="text-2xl font-light text-gray-900 mb-6 leading-relaxed">
                            Bespoke Fabric Design & <span class="font-medium">On-Demand Printing</span>
                        </h3>
                        <p class="text-gray-600 mb-8 leading-relaxed font-light">
                            BlueFashion's curated textile library offers premium substrates for custom design applications. 
                            Our precision digital printing technology delivers exceptional color fidelity and detail, 
                            enabling true design freedom while maintaining sustainable production practices.
                        </p>
                        <a href="#" class="inline-flex items-center px-6 py-3 border border-blue-600 text-blue-600 font-medium rounded-none transition-all duration-300 hover:bg-blue-600 hover:text-white hover:shadow-md group">
                            Explore Capabilities
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="flex flex-col lg:flex-row-reverse items-stretch group mb-28" data-scroll>
                <div class="w-full lg:w-1/2 relative overflow-hidden rounded-none lg:rounded-l-xl shadow-lg transition-all duration-700 ease-in-out transform group-hover:shadow-xl animate-swipe-right">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-200 overflow-hidden">
                        <img src="images/web-shots/WOW02616C.jpg" alt="Textile manufacturing" class="w-full h-full object-cover transition-all duration-1000 ease-out group-hover:scale-105 animate-flipbook">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-l from-blue-900/5 via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60 to-transparent">
                        <span class="text-white text-sm font-medium">Industrial Production</span>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 flex items-center bg-white p-12 lg:p-16 xl:p-20 rounded-none lg:rounded-r-xl shadow-lg transition-all duration-700 ease-in-out group-hover:shadow-xl animate-swipe-left delay-1">
                    <div class="relative z-10">
                        <div class="flex items-center mb-6">
                            <span class="text-blue-600 font-light text-5xl mr-4">02</span>
                            <div class="w-16 h-px bg-blue-600"></div>
                        </div>
                        <h3 class="text-2xl font-light text-gray-900 mb-6 leading-relaxed">
                            Industrial-Grade <span class="font-medium">Textile Production</span>
                        </h3>
                        <p class="text-gray-600 mb-8 leading-relaxed font-light">
                            As an ISO-certified textile manufacturer, BlueFashion combines artisanal craftsmanship with 
                            advanced production technologies. Our vertically integrated facilities ensure quality control 
                            from fiber selection to finished product, serving discerning clients worldwide.
                        </p>
                        <a href="#" class="inline-flex items-center px-6 py-3 border border-blue-600 text-blue-600 font-medium rounded-none transition-all duration-300 hover:bg-blue-600 hover:text-white hover:shadow-md group">
                            Manufacturing Process
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Showcase -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="inline-block text-blue-600 font-medium tracking-widest text-sm uppercase mb-3">OUR TECHNOLOGY</span>
                <h2 class="text-4xl md:text-5xl font-light text-gray-900 leading-tight mb-6">
                    Advanced <span class="font-medium text-gradient bg-gradient-to-r from-blue-600 to-blue-400">Manufacturing</span> Capabilities
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We invest in cutting-edge technology to deliver superior quality and innovative textile solutions.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 hover:-translate-y-2" data-scroll>
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Digital Printing</h3>
                    <p class="text-gray-600">
                        High-resolution digital printing with precise color matching and minimal environmental impact.
                    </p>
                    <div class="mt-6 h-1 w-16 bg-blue-100"></div>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 hover:-translate-y-2" data-scroll>
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Sustainable Processes</h3>
                    <p class="text-gray-600">
                        Eco-friendly production methods that reduce water and energy consumption by up to 40%.
                    </p>
                    <div class="mt-6 h-1 w-16 bg-blue-100"></div>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 hover:-translate-y-2" data-scroll>
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Quality Control</h3>
                    <p class="text-gray-600">
                        Automated inspection systems ensuring consistent quality across every meter of fabric.
                    </p>
                    <div class="mt-6 h-1 w-16 bg-blue-100"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fabric Gallery -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="inline-block text-blue-600 font-medium tracking-widest text-sm uppercase mb-3">OUR MATERIALS</span>
                <h2 class="text-4xl md:text-5xl font-light text-gray-900 leading-tight mb-6">
                    Premium <span class="font-medium">Fabric Collections</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Explore our extensive range of high-quality textiles for every application.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-500" data-scroll>
                    <div class="aspect-ratio-box">
                        <div class="aspect-ratio-content bg-gray-200">
                            <img src="https://img.freepik.com/premium-photo/luxury-silk_890746-14833.jpg" alt="Silk Fabrics" class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Luxury Silks</h3>
                            <p class="text-blue-100">Premium silk fabrics with exceptional drape and luster</p>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-600 text-white">
                            New Collection
                        </span>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-500" data-scroll>
                    <div class="aspect-ratio-box">
                        <div class="aspect-ratio-content bg-gray-200">
                            <img src="https://tse4.mm.bing.net/th?id=OIP.gim17axiTfaQHXBg0B5_twHaE6&pid=Api&P=0&h=180" alt="Cotton Fabrics" class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Organic Cottons</h3>
                            <p class="text-blue-100">Sustainable cotton with superior breathability</p>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-600 text-white">
                            Eco-Friendly
                        </span>
                    </div>
                </div>
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-500" data-scroll>
                    <div class="aspect-ratio-box">
                        <div class="aspect-ratio-content bg-gray-200">
                            <img src="https://tse4.mm.bing.net/th?id=OIP.tdVxlbcWXzK3NlB-dh1AjwHaEK&pid=Api&P=0&h=180" alt="Technical Fabrics" class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Technical Textiles</h3>
                            <p class="text-blue-100">High-performance fabrics for specialized applications</p>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-600 text-white">
                            High-Tech
                        </span>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12" data-scroll>
                <a href="#" class="inline-flex items-center px-8 py-4 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300 shadow-lg hover:shadow-xl glow-effect">
                    View Full Fabric Library
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Industries & Production Timeline -->
    <div class="timeline">
        <div class="timeline__event timeline-animate timeline-delay-3 timeline__event--type1" data-scroll="up">
            <div class="timeline__event__icon"></div>
            <div class="timeline__event__date"><img src="https://i.pinimg.com/474x/cc/ec/8b/ccec8b949b21208867ab436bc2188de4--satin-fabric-welding.jpg"></div>
            <div class="timeline__event__content">
                <div class="timeline__event__title">Fabric Treatment</div>
                <div class="timeline__event__description">
                    <p>We provide expert stabilization services, including detailed reweaving and stitch repairs.</p>
                </div>
            </div>
        </div>
        <div class="timeline__event timeline-animate timeline-delay-2 timeline__event--type2" data-scroll="left">
            <div class="timeline__event__icon"></div>
            <div class="timeline__event__date"><img src="https://tse1.mm.bing.net/th?id=OIP.iZeYiQF3MfidMrYg_tH32wHaEJ&pid=Api&P=0&h=180"></div>
            <div class="timeline__event__content">
                <div class="timeline__event__title">Artistic Direction</div>
                <div class="timeline__event__description">
                    <p>We offer support in collection strategies, storage solutions, application techniques, and pest management for textile preservation.</p>
                </div>
            </div>
        </div>
        <div class="timeline__event timeline-animate timeline-delay-1 timeline__event--type3" data-scroll="right">
            <div class="timeline__event__icon"></div>
            <div class="timeline__event__date"><img src="https://i.pinimg.com/474x/cc/ec/8b/ccec8b949b21208867ab436bc2188de4--satin-fabric-welding.jpg"></div>
            <div class="timeline__event__content">
                <div class="timeline__event__title">Satin weaving</div>
                <div class="timeline__event__description">
                    <p>A continuous weft yarn, woven with minimal interruptions to the warp wherever possible</p>
                </div>
            </div>
        </div>
        <div class="timeline__event timeline-animate timeline__event--type1" data-scroll="down">
            <div class="timeline__event__icon"></div>
            <div class="timeline__event__date"><img src="https://tse3.mm.bing.net/th?id=OIP.KB4KZ84PhQ7wQQiGvh7jdAHaEc&pid=Api&P=0&h=180"></div>
            <div class="timeline__event__content">
                <div class="timeline__event__title">Fabric Dyeing</div>
                <div class="timeline__event__description">
                    <p>Dyes are transferred from an aqueous solution onto the fiber surface, followed by diffusion into the fiber structure.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script>
        // Mobile menu toggle (if present)
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('open');
            });
        }
        // Scroll-triggered animation for all sections and unique feature animations
        document.addEventListener('DOMContentLoaded', function() {
            const animatedEls = document.querySelectorAll('[data-scroll], .animate-fade-in, .animate-swipe-left, .animate-swipe-right, .animate-flipbook, .timeline-animate');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                        entry.target.style.opacity = 1;
                        // Add scroll direction animation
                        if (entry.target.hasAttribute('data-scroll')) {
                            const dir = entry.target.getAttribute('data-scroll');
                            entry.target.classList.remove('scroll-up','scroll-down','scroll-left','scroll-right');
                            if (dir === 'up') entry.target.classList.add('scroll-up');
                            if (dir === 'down') entry.target.classList.add('scroll-down');
                            if (dir === 'left') entry.target.classList.add('scroll-left');
                            if (dir === 'right') entry.target.classList.add('scroll-right');
                        }
                    }
                });
            }, { threshold: 0.1 });
            animatedEls.forEach(el => {
                el.style.animationPlayState = 'paused';
                observer.observe(el);
            });
        });
        // Timeline animation with IntersectionObserver
        const timelineItems = document.querySelectorAll('.timeline-animate');
        const timelineObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });
        timelineItems.forEach(item => timelineObserver.observe(item));
    </script>
    <style>
    /* Scroll direction animations for timeline */
    .scroll-up { animation: scrollUp 1.1s cubic-bezier(.22,1,.36,1) forwards !important; }
    .scroll-down { animation: scrollDown 1.1s cubic-bezier(.22,1,.36,1) forwards !important; }
    .scroll-left { animation: scrollLeft 1.1s cubic-bezier(.22,1,.36,1) forwards !important; }
    .scroll-right { animation: scrollRight 1.1s cubic-bezier(.22,1,.36,1) forwards !important; }
    @keyframes scrollUp {
        from { opacity: 0; transform: translateY(60px) scale(0.95); }
        to { opacity: 1; transform: translateY(0) scale(1); }
    }
    @keyframes scrollDown {
        from { opacity: 0; transform: translateY(-60px) scale(0.95); }
        to { opacity: 1; transform: translateY(0) scale(1); }
    }
    @keyframes scrollLeft {
        from { opacity: 0; transform: translateX(-60px) scale(0.95); }
        to { opacity: 1; transform: translateX(0) scale(1); }
    }
    @keyframes scrollRight {
        from { opacity: 0; transform: translateX(60px) scale(0.95); }
        to { opacity: 1; transform: translateX(0) scale(1); }
    }
    @media (max-width: 786px) {
        .timeline { width: 98vw !important; }
        .timeline__event { width: 98vw !important; }
        .timeline__event__content { width: 100% !important; }
    }
    </style>
</body>
</html>