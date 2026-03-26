<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    /* Reset and Base Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: #333;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Banner Section */
    .home-banner {
        width: 100%;
        height: 70vh;
        min-height: 500px;
        max-height: 700px;
        overflow: hidden;
        position: relative;
    }

    .banner-carousel {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .banner-slide {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .banner-slide.active {
        opacity: 1;
        z-index: 2;
    }

    .banner-bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }


    .banner-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        z-index: 3;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .banner-content {
        text-align: center;
        color: white;
        max-width: 800px;
        padding: 20px;
        z-index: 4;
    }

    .banner-content h1 {
        font-size: 3.5rem;
        margin-bottom: 20px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    .banner-tagline {
        font-size: 1.8rem;
        margin-bottom: 30px;
        font-weight: 300;
    }

    .banner-description {
        font-size: 1.1rem;
        margin-bottom: 30px;
        line-height: 1.8;
    }

    .cta-button {
        display: inline-block;
        padding: 15px 35px;
        background: #006e4f;
        color: white;
        text-decoration: none;
        border-radius: 30px;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        border: 2px solid #006e4f;
    }

    .cta-button:hover {
        background: transparent;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    /* Carousel Controls */
    .carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 110, 79, 0.8);
        color: white;
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s ease;
    }

    .carousel-control:hover {
        background: rgba(0, 110, 79, 1);
        transform: translateY(-50%) scale(1.1);
    }

    .carousel-control.prev {
        left: 20px;
    }

    .carousel-control.next {
        right: 20px;
    }

    /* Carousel Indicators */
    .carousel-indicators {
        position: absolute;
        bottom: 20px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 10px;
        z-index: 10;
    }

    .indicator {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        border: 2px solid transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        padding: 0;
    }

    .indicator.active {
        background: #f9d307;
        transform: scale(1.2);
    }

    .indicator:hover {
        background: white;
    }

    /* Stats Section */
    .stats-section {
        padding: 60px 0;
        background: white;
    }

    .stats-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 0;
    }

    .stat-item {
        padding: 20px 30px;
        flex: 1;
        min-width: 200px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .stat-number {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: #128b27;
        line-height: 1;
    }

    .stat-label {
        font-size: 1.2rem;
        font-weight: 500;
        color: #a677b4;
        opacity: 0.9;
    }

    .stat-separator {
        width: 2px;
        height: 70px;
        background: #e88f24;
        align-self: center;
    }

    /* Flagship Initiatives Section */
    .flagship-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-header h2 {
        font-size: 2.5rem;
        color: #a677b4;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: #666;
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .initiatives-grid {
        display: flex;
        gap: 20px;
        width: 100%;
        flex-wrap: nowrap;
        overflow-x: auto;
        padding-bottom: 20px;
        scrollbar-width: thin;
        scrollbar-color: #006e4f #f0f0f0;
    }

    /* Custom scrollbar */
    .initiatives-grid::-webkit-scrollbar {
        height: 8px;
    }

    .initiatives-grid::-webkit-scrollbar-track {
        background: #f0f0f0;
        border-radius: 10px;
    }

    .initiatives-grid::-webkit-scrollbar-thumb {
        background: #006e4f;
        border-radius: 10px;
    }

    .initiative-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
        min-width: 280px;
        flex: 1;
    }

    .initiative-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .card-image {
        height: 180px;
        overflow: hidden;
    }

    .image-placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .image-placeholder i {
        font-size: 3.5rem;
        opacity: 0.8;
    }

    .card-content {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .card-content h3 {
        font-size: 1.4rem;
        color: #006e4f;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .short-desc {
        font-size: 0.95rem;
        color: #333;
        margin-bottom: 15px;
        font-weight: 500;
        line-height: 1.4;
        min-height: 40px;
    }

    .full-description {
        max-height: 0;
        overflow: hidden;
        opacity: 0;
        transition: all 0.5s ease;
        margin-top: 10px;
    }

    .initiative-card:hover .full-description {
        max-height: 500px;
        opacity: 1;
        margin-top: 15px;
    }

    .full-description p {
        color: #555;
        line-height: 1.5;
        margin-bottom: 12px;
        font-size: 0.9rem;
    }

    .full-description p:last-child {
        margin-bottom: 0;
    }

    .card-footer {
        margin-top: auto;
        padding-top: 15px;
        border-top: 1px solid #eee;
    }

    .learn-more {
        color: #006e4f;
        font-size: 0.85rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: all 0.3s ease;
    }

    .initiative-card:hover .learn-more {
        color: #009970;
    }

    .initiative-card:hover .learn-more::after {
        content: '✓';
        font-weight: bold;
    }

    /* CALL TO ACTION SECTION */
    .call-to-action-section {
        padding: 80px 0;
        background: white;
    }

    .section-title {
        text-align: center;
        font-size: 2.8rem;
        color: #a677b4;
        margin-bottom: 60px;
        position: relative;
        padding-bottom: 20px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 150px;
        height: 4px;
        background-color: #a677b4;
        border-radius: 2px;
    }
    
    /* ARROW GRID - 3 ITEMS PER ROW */
    .arrow-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 30px;
    }
    
    .arrow-box {
        display: block;
        background-color: #a677b4;
        color: white;
        text-decoration: none;
        padding: 30px 25px 30px 55px;
        border-radius: 12px;
        font-size: 1.25rem;
        font-weight: 600;
        line-height: 1.4;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        box-shadow: 0 6px 20px rgba(166, 119, 180, 0.2);
        border-left: 6px solid rgba(255, 255, 255, 0.3);
        min-height: 120px;
        display: flex;
        align-items: center;
        text-align: left;
    }
    
    /* Arrow indicator inside the box (on the left) */
    .arrow-box::before {
        content: '→';
        position: absolute;
        left: 22px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 2rem;
        font-weight: bold;
        transition: all 0.4s ease;
        opacity: 0.9;
    }
    
    .arrow-box:hover {
        background-color: #935fa3;
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(166, 119, 180, 0.4);
        padding-left: 60px;
    }
    
    .arrow-box:hover::before {
        left: 28px;
        opacity: 1;
    }
    
    /* Arrow indicator on the right (for exit/click action) */
    .arrow-box::after {
        content: '↗';
        position: absolute;
        right: 22px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.8rem;
        opacity: 0;
        transition: all 0.4s ease;
    }
    
    .arrow-box:hover::after {
        opacity: 1;
        right: 28px;
    }
    
    /* Subtle hover effect variations */
    .arrow-box:nth-child(1):hover { background-color: #9b6ca9; }
    .arrow-box:nth-child(2):hover { background-color: #9762a5; }
    .arrow-box:nth-child(3):hover { background-color: #935fa3; }
    .arrow-box:nth-child(4):hover { background-color: #8f5ba1; }
    .arrow-box:nth-child(5):hover { background-color: #8b579f; }
    .arrow-box:nth-child(6):hover { background-color: #87539d; }
    .arrow-box:nth-child(7):hover { background-color: #834f9b; }

    /* PARTNERS SECTION */
    .partners-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #eef2f7 100%);
    }

    .partners-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* 4 items per row */
        gap: 40px;
        margin-top: 40px;
    }

    .partner-item {
        background: white;
        border-radius: 12px;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s ease;
        height: 160px;
        border: 1px solid #eee;
    }

    .partner-item:hover {
        transform: translateY(-8px);

        border-color: #a677b4;
    }

    .partner-image {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .partner-item:hover .partner-image {
        filter: grayscale(0%);
        opacity: 1;
    }

    .partner-placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .partner-placeholder i {
        font-size: 2.5rem;
        color: #a677b4;
        margin-bottom: 10px;
        opacity: 0.7;
    }

    .partner-placeholder span {
        font-size: 0.9rem;
        font-weight: 500;
    }



    /* Services Section */
    .services-section {
        padding: 80px 0;
        background: white;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        margin-bottom: 50px;
    }

    .service-card {
        background: white;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
        border-top: 4px solid #006e4f;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .service-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #006e4f, #009970);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }

    .service-icon i {
        font-size: 1.8rem;
        color: white;
    }

    .service-card h3 {
        font-size: 1.4rem;
        color: #333;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .service-card p {
        color: #666;
        line-height: 1.6;
        margin-bottom: 20px;
        font-size: 0.95rem;
    }

    .service-link {
        color: #006e4f;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: color 0.3s ease;
    }

    .service-link:hover {
        color: #009970;
    }

    .service-link::after {
        content: '→';
        transition: transform 0.3s ease;
    }

    .service-link:hover::after {
        transform: translateX(5px);
    }

    .section-cta {
        text-align: center;
        padding: 40px;
        background: #f8f9fa;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        margin-top: 30px;
    }

    .cta-text {
        font-size: 1.3rem;
        color: #333;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .btn {
        display: inline-block;
        padding: 14px 35px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .btn-primary {
        background: linear-gradient(135deg, #006e4f, #009970);
        color: white;
        box-shadow: 0 5px 15px rgba(0, 110, 79, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 110, 79, 0.4);
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .banner-content h1 {
            font-size: 3rem;
        }
        
        .banner-tagline {
            font-size: 1.6rem;
        }
        
        .container {
            max-width: 1200px;
        }
        
        .initiatives-grid {
            flex-wrap: wrap;
            overflow-x: visible;
        }
        
        .initiative-card {
            flex: 0 0 calc(50% - 15px);
            min-width: auto;
        }
        
        /* CTA Responsive */
        .arrow-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        /* Partners Responsive */
        .partners-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
    }

    @media (max-width: 992px) {
        .flagship-section {
            padding: 60px 0;
        }
        
        .services-grid {
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }
        
        .banner-content h1 {
            font-size: 2.5rem;
        }
        
        .banner-tagline {
            font-size: 1.4rem;
        }
        
        .section-header h2 {
            font-size: 2.2rem;
        }
        
        /* Stats Responsive */
        .stats-container {
            flex-wrap: wrap;
        }
        
        .stat-item {
            flex: 0 0 calc(50% - 1px);
            min-width: 250px;
        }
        
        .stat-separator:nth-child(2),
        .stat-separator:nth-child(6) {
            display: none;
        }
        
        .stat-item:nth-child(3),
        .stat-item:nth-child(4) {
            border-top: 1px solid #eee;
            padding-top: 30px;
            margin-top: 20px;
        }
        
        /* CTA Responsive */
        .section-title {
            font-size: 2.2rem;
            margin-bottom: 40px;
        }

        /* Partners Responsive */
        .partners-section {
            padding: 60px 0;
        }
        
        .partners-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }
    }

    @media (max-width: 768px) {
        .home-banner {
            height: 60vh;
            min-height: 400px;
        }
        
        .banner-content h1 {
            font-size: 2.2rem;
        }
        
        .banner-tagline {
            font-size: 1.2rem;
        }
        
        .banner-description {
            font-size: 1rem;
        }
        
        .initiatives-grid {
            flex-wrap: wrap;
            overflow-x: visible;
            grid-template-columns: 1fr;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .initiative-card {
            flex: 0 0 100%;
        }
        
        .services-grid {
            grid-template-columns: 1fr;
            max-width: 500px;
            margin: 0 auto 40px;
        }
        
        .card-content {
            padding: 20px;
        }
        
        .section-header {
            margin-bottom: 40px;
        }
        
        .section-header h2 {
            font-size: 2rem;
        }
        
        .section-subtitle {
            font-size: 1rem;
        }
        
        /* Stats Responsive */
        .stat-item {
            flex: 0 0 100%;
            border-bottom: 1px solid #eee;
            padding: 25px 20px;
        }
        
        .stat-item:last-child {
            border-bottom: none;
        }
        
        .stat-separator {
            display: none;
        }
        
        .stat-number {
            font-size: 3.2rem;
        }
        
        /* CTA Responsive */
        .call-to-action-section {
            padding: 60px 0;
        }
        
        .arrow-grid {
            grid-template-columns: 1fr;
            gap: 20px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .arrow-box {
            padding: 25px 20px 25px 50px;
            font-size: 1.15rem;
        }
        
        .arrow-box::before {
            left: 18px;
            font-size: 1.8rem;
        }

        /* Partners Responsive */
        .partners-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .partner-item {
            height: 140px;
            padding: 20px;
        }
    }

    @media (max-width: 576px) {
        .home-banner {
            height: 50vh;
            min-height: 350px;
        }
        
        .banner-content h1 {
            font-size: 1.8rem;
        }
        
        .flagship-section {
            padding: 50px 0;
        }
        
        .container {
            padding: 0 15px;
        }
        
        .section-header h2 {
            font-size: 1.8rem;
        }
        
        .card-image {
            height: 160px;
        }
        
        .image-placeholder i {
            font-size: 3rem;
        }
        
        .carousel-control {
            width: 40px;
            height: 40px;
            font-size: 1rem;
        }
        
        .carousel-control.prev {
            left: 10px;
        }
        
        .carousel-control.next {
            right: 10px;
        }
        
        /* Stats Responsive */
        .stat-number {
            font-size: 2.8rem;
        }
        
        .stat-label {
            font-size: 1.1rem;
        }
        
        /* CTA Responsive */
        .section-title {
            font-size: 1.9rem;
            margin-bottom: 30px;
        }
        
        .arrow-box {
            padding: 22px 18px 22px 45px;
            font-size: 1.05rem;
            min-height: 110px;
        }
        
        .arrow-box::before {
            left: 15px;
            font-size: 1.6rem;
        }

        /* Partners Responsive */
        .partners-grid {
            grid-template-columns: 1fr;
            max-width: 350px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .partner-item {
            height: 130px;
            padding: 15px;
        }
        
        .partner-placeholder i {
            font-size: 2rem;
        }
    }

    /* Fade-in animation for CTA */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .arrow-box {
        animation: fadeInUp 0.6s ease forwards;
        opacity: 0;
    }
    
    .arrow-box:nth-child(1) { animation-delay: 0.1s; }
    .arrow-box:nth-child(2) { animation-delay: 0.2s; }
    .arrow-box:nth-child(3) { animation-delay: 0.3s; }
    .arrow-box:nth-child(4) { animation-delay: 0.4s; }
    .arrow-box:nth-child(5) { animation-delay: 0.5s; }
    .arrow-box:nth-child(6) { animation-delay: 0.6s; }
    .arrow-box:nth-child(7) { animation-delay: 0.7s; }

    /* Animation for partners */
    .partner-item {
        animation: fadeInUp 0.6s ease forwards;
        opacity: 0;
    }
    
    .partner-item:nth-child(1) { animation-delay: 0.1s; }
    .partner-item:nth-child(2) { animation-delay: 0.2s; }
    .partner-item:nth-child(3) { animation-delay: 0.3s; }
    .partner-item:nth-child(4) { animation-delay: 0.4s; }
    .partner-item:nth-child(5) { animation-delay: 0.5s; }
    .partner-item:nth-child(6) { animation-delay: 0.6s; }
    .partner-item:nth-child(7) { animation-delay: 0.7s; }
    .partner-item:nth-child(8) { animation-delay: 0.8s; }
</style>

<!-- Banner Section -->
<section class="home-banner">
    <div class="banner-carousel">
        <!-- Banner Slide 1 -->
        <div class="banner-slide active">  
            <div class="banner-bg" style="background-image: url('<?php echo URL; ?>img/banner1.jpeg');"></div>
        </div> <!-- MISSING THIS CLOSING DIV -->

        <!-- Banner Slide 2 -->
        <div class="banner-slide">
            <div class="banner-bg" style="background-image: url('<?php echo URL; ?>img/banner2.jpeg');"></div>
        </div>

        <!-- Banner Slide 3 -->
        <div class="banner-slide">
            <div class="banner-bg" style="background-image: url('<?php echo URL; ?>img/banner3.jpeg');"></div>
        </div>

        <!-- Banner Overlay Content
        <div class="banner-overlay">
            <div class="banner-content">
                <h1>EMPOWERING ORGANIZATIONS & PROFESSIONALS</h1>
                <p class="banner-tagline">With Next-Generation Digital Solutions</p>
                <p class="banner-description">
                    MEASURABLE.   EFFICIENT.  IMPACTFUL.
            </div>
        </div> -->

        <!-- Carousel Controls -->
        <button class="carousel-control prev">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel-control next">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
            <button class="indicator active" data-slide="0"></button>
            <button class="indicator" data-slide="1"></button>
            <button class="indicator" data-slide="2"></button>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-number">19</div>
                <div class="stat-label">Counties Worked In</div>
            </div>
            <div class="stat-separator"></div>
            <div class="stat-item">
                <div class="stat-number">500+</div>
                <div class="stat-label">People Empowered</div>
            </div>
            <div class="stat-separator"></div>
            <div class="stat-item">
                <div class="stat-number">30+</div>
                <div class="stat-label">CBOs Mentored</div>
            </div>
            <div class="stat-separator"></div>
            <div class="stat-item">
                <div class="stat-number">40+</div>
                <div class="stat-label">MSMEs Services Provided</div>
            </div>
        </div>
    </div>
</section>

<!-- Flagship Initiatives Section -->
<section class="flagship-section">
    <div>
        <div class="section-header">
            <h2>Flagship Initiatives</h2>
            <p class="section-subtitle">Driving sustainable impact through targeted programs and innovative solutions</p>
        </div>

        <!-- Initiatives Grid -->
        <div class="initiatives-grid">
            <!-- CBO Mentorship Program -->
            <div class="initiative-card">
                <div class="card-image">
                    <div class="image-placeholder" style="background-color: #2c7873;">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                </div>
                <div class="card-content">
                    <h3>CBO Mentorship Program</h3>
                    <p class="short-desc">Building stronger CBOs for lasting community impact.</p>
                    <div class="full-description">
                        <p>Radishare's CBO Mentorship Program equips community-based organizations with the skills, networks, and tools they need to scale their impact. Through tailored mentorship, digital learning, and expert sessions, CBO leaders strengthen their governance, fundraising, and advocacy capacity enabling them to deliver sustainable solutions in health, climate action, and social development.</p>
                    </div>
                    <div class="card-footer">
                        <span class="learn-more">Hover for details →</span>
                    </div>
                </div>
            </div>

            <!-- MSME Empowerment Program -->
            <div class="initiative-card">
                <div class="card-image">
                    <div class="image-placeholder" style="background-color: #004445;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>
                <div class="card-content">
                    <h3>MSME Empowerment Program</h3>
                    <p class="short-desc">Fueling small businesses to grow, compete, and thrive.</p>
                    <div class="full-description">
                        <p>Our MSME Empowerment Program supports small and medium enterprises to thrive in a fast-changing economy. We provide training in financial literacy, digitization, strategic operations, capital access and market access, ensuring that businesses in agriculture, e-commerce, and green innovation grow resilient and competitive.</p>
                    </div>
                    <div class="card-footer">
                        <span class="learn-more">Hover for details →</span>
                    </div>
                </div>
            </div>

            <!-- Jani AI Kenya -->
            <div class="initiative-card">
                <div class="card-image">
                    <div class="image-placeholder" style="background-color: #6fb98f;">
                        <i class="fas fa-robot"></i>
                    </div>
                </div>
                <div class="card-content">
                    <h3>Jani AI Kenya</h3>
                    <p class="short-desc">Harnessing AI & Local Tech for a Greener Future.</p>
                    <div class="full-description">
                        <p>Jani AI Kenya is an innovative program designed to tackle climate change by advancing technologies, strategies, and public-private partnerships that reduce its impact. The program leverages accessible local digital solutions from social media and WhatsApp to mobile applications and enriched data systems, making climate action smarter, more inclusive, and community-driven across Kenya and Africa.</p>
                        <p>The program also drives the Hatua Yetu, Future Yetu (Our Action, Our Future) campaign on social media, especially TikTok, to mobilize climate action and amplify grassroots voices.</p>
                    </div>
                    <div class="card-footer">
                        <span class="learn-more">Hover for details →</span>
                    </div>
                </div>
            </div>

            <!-- EcoKinga -->
            <div class="initiative-card">
                <div class="card-image">
                    <div class="image-placeholder" style="background-color: #2e8b57;">
                        <i class="fas fa-recycle"></i>
                    </div>
                </div>
                <div class="card-content">
                    <h3>EcoKinga</h3>
                    <p class="short-desc">Protecting People and the Planet, One Container at a Time.</p>
                    <div class="full-description">
                        <p>EcoKinga is a climate-smart health innovation by Radishare Kenya, designed to promote the safe disposal of self-care medical waste, especially used needles and sharps.</p>
                        <p>Through a network of Community-Based Organizations (CBOs), pharmacies, and county health facilities, EcoKinga provides households with eco-friendly sharps containers made from recycled materials such as baby formula tins, coconut shells, and soda cans.</p>
                        <p>Each EcoKinga Container is durable, puncture-proof, and digitally linked, carrying a QR code and tracking number that connect users to safe disposal points and real-time monitoring.</p>
                        <p>By turning waste into safety, EcoKinga protects families from needle-stick injuries and infections, reduces environmental pollution, and empowers communities to lead sustainable, climate-health solutions.</p>
                    </div>
                    <div class="card-footer">
                        <span class="learn-more">Hover for details →</span>
                    </div>
                </div>
            </div>

            <!-- Consultancy Services -->
            <div class="initiative-card">
                <div class="card-image">
                    <div class="image-placeholder" style="background-color: #006e4f;">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                </div>
                <div class="card-content">
                    <h3>Consultancy Services</h3>
                    <p class="short-desc">Innovative solutions, measurable results.</p>
                    <div class="full-description">
                        <p>Radishare offers consultancy services in research, project design, communication strategy, digital marketing, and web development solutions. We partner with CBOs, MSMEs, and development organizations to co-create practical, evidence-based strategies that drive measurable impact. Our consultancy blends a deep understanding of realities with innovative digital approaches helping clients strengthen their visibility, expand their reach, and deliver sustainable results.</p>
                    </div>
                    <div class="card-footer">
                        <span class="learn-more">Hover for details →</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION SECTION -->
<section class="call-to-action-section">
    <div>
        <h2 class="section-title">Call To Action</h2>
        
        <!-- ARROW GRID - 3 ITEMS PER ROW -->
        <div class="arrow-grid">
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=radishare00@gmail.com" target="_blank" class="arrow-box">
                Join our CBO Mentorship Program
            </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=radishare00@gmail.com" target="_blank" class="arrow-box">
                Become our Client under the MSME Empowerment Program 
            </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=radishare00@gmail.com" target="_blank" class="arrow-box">
                Partner with EcoKinga Containers
            </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=radishare00@gmail.com" target="_blank" class="arrow-box">
                Collaborate with an Existing Program
            </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=radishare00@gmail.com" target="_blank" class="arrow-box">
                Co-Create Innovative Solutions with Radishare
            </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=radishare00@gmail.com" target="_blank" class="arrow-box">
                Partner in Active Fundraising
            </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=radishare00@gmail.com" target="_blank" class="arrow-box">
                Request our Services
            </a>
        </div>
    </div>
</section>

<!-- PARTNERS SECTION -->
<section class="partners-section">
    <div class="container">
        <div class="section-header">
            <h2>Our Trusted Partners</h2>
            <p class="section-subtitle">Collaborating with organizations that share our vision for sustainable impact and community empowerment</p>
        </div>
        
        <!-- Partners Grid - 8 images in 2 rows of 4 -->
        <div class="partners-grid">
            <!-- Partner 1 -->
            <div class="partner-item">
                <img src="<?php echo URL; ?>img/ouk.png" alt="Partner" class="partner-image">
            </div>
            
            <!-- Partner 2 -->
            <div class="partner-item">
                <img src="<?php echo URL; ?>img/moh.png" alt="Partner " class="partner-image">
            </div>
            
            <!-- Partner 3 -->
            <div class="partner-item">
                <img src="<?php echo URL; ?>img/ecokinga.png" alt="Partner" class="partner-image">
            </div>
            
            <!-- Partner 4 -->
            <div class="partner-item">
                <img src="<?php echo URL; ?>img/dama.png" alt="Partner" class="partner-image">
            </div>
            
            <!-- Partner 5 -->
            <div class="partner-item">
                <img src="<?php echo URL; ?>img/jani.png" alt="Partner" class="partner-image">
            </div>
            
            <!-- Partner 6 -->
            <div class="partner-item">
                <img src="<?php echo URL; ?>img/madde.png" alt="Partner " class="partner-image">
            </div>
            
            <!-- Partner 7 -->
            <div class="partner-item">
                <img src="<?php echo URL; ?>img/looku.png" alt="Partner" class="partner-image">
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Carousel functionality
        const slides = document.querySelectorAll('.banner-slide');
        const indicators = document.querySelectorAll('.indicator');
        const prevBtn = document.querySelector('.carousel-control.prev');
        const nextBtn = document.querySelector('.carousel-control.next');
        let currentSlide = 0;
        let slideInterval;

        // Function to show slide
        function showSlide(index) {
            // Remove active class from all slides
            slides.forEach(slide => slide.classList.remove('active'));
            indicators.forEach(indicator => indicator.classList.remove('active'));
            
            // Add active class to current slide
            slides[index].classList.add('active');
            indicators[index].classList.add('active');
            currentSlide = index;
        }

        // Next slide function
        function nextSlide() {
            let nextIndex = (currentSlide + 1) % slides.length;
            showSlide(nextIndex);
        }

        // Previous slide function
        function prevSlide() {
            let prevIndex = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prevIndex);
        }

        // Auto slide
        function startAutoSlide() {
            slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
        }

        function stopAutoSlide() {
            clearInterval(slideInterval);
        }

        // Event listeners
        prevBtn.addEventListener('click', () => {
            prevSlide();
            stopAutoSlide();
            startAutoSlide();
        });

        nextBtn.addEventListener('click', () => {
            nextSlide();
            stopAutoSlide();
            startAutoSlide();
        });

        // Indicator click events
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                showSlide(index);
                stopAutoSlide();
                startAutoSlide();
            });
        });

        // Pause auto-slide on hover
        const carousel = document.querySelector('.banner-carousel');
        carousel.addEventListener('mouseenter', stopAutoSlide);
        carousel.addEventListener('mouseleave', startAutoSlide);

        // Touch/swipe support for mobile
        let touchStartX = 0;
        let touchEndX = 0;

        carousel.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
            stopAutoSlide();
        });

        carousel.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
            startAutoSlide();
        });

        function handleSwipe() {
            const swipeThreshold = 50;
            
            if (touchEndX < touchStartX - swipeThreshold) {
                // Swipe left - next slide
                nextSlide();
            }
            
            if (touchEndX > touchStartX + swipeThreshold) {
                // Swipe right - previous slide
                prevSlide();
            }
        }

        // Initialize carousel
        showSlide(0);
        startAutoSlide();
    });
</script>
