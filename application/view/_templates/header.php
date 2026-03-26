<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Radishare Company Ltd</title>
    <meta name="description" content="Radishare Kenya">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
    
    <!-- Header Styles -->
    <style>
        /* Header and Navigation */
        .header-container {
            background-color: #fff;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        /* Logo section */
        .logo-section {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 0;
        }
        
        .logo-img {
            display: flex;
            align-items: center;
        }
        
        .logo-img img {
            width: 150px;
            height: auto;
            padding: 10px;
        }
        
        .logo-text {
            font-size: 24px;
            font-weight: 700;
            color: #2c3e50;
            letter-spacing: -0.5px;
        }
        
        /* Navigation */
        .nav-container {
            display: flex;
            align-items: center;
            gap: 30px;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            gap: 25px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #444;
            font-weight: 600;
            font-size: 16px;
            padding: 8px 5px;
            position: relative;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: #8a2be2;
        }
        
        .nav-links a.active {
            color: #8a2be2;
        }
        
        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #8a2be2;
            border-radius: 2px;
        }
        
        /* Donate Button */
        .donate-btn {
            background-color: #ff6b35;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 4px;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 8px rgba(255, 107, 53, 0.3);
        }
        
        .donate-btn:hover {
            background-color: #e55a2b;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(255, 107, 53, 0.4);
        }
        
        .donate-btn i {
            font-size: 14px;
        }
        
        /* Mobile menu toggle */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: #444;
            cursor: pointer;
            padding: 10px;
        }
        
        /* Main content wrapper */
        .content-wrapper {
            flex: 1;
            max-width: 1200px;
            width: 100%;
            margin: 30px auto;
            padding: 0 20px;
            position: relative;
        }
        
        /* Floating image for all pages */
        .floating-image {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            z-index: 999;
            border: 3px solid white;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        
        .floating-image:hover {
            transform: scale(1.05);
        }
        
        .floating-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* Responsive Design for Header */
        @media screen and (max-width: 1024px) {
            .header-content {
                padding: 0 15px;
            }
            
            .nav-links {
                gap: 20px;
            }
            
            .logo-img img {
                width: 130px;
            }
            
            .logo-text {
                font-size: 22px;
            }
        }
        
        @media screen and (max-width: 768px) {
            .header-content {
                flex-wrap: wrap;
                padding: 5px 15px;
            }
            
            .logo-section {
                width: 100%;
                justify-content: space-between;
                padding: 8px 0;
            }
            
            .mobile-menu-toggle {
                display: block;
            }
            
            .nav-container {
                width: 100%;
                flex-direction: column;
                align-items: flex-start;
                gap: 0;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.5s ease;
            }
            
            .nav-container.mobile-open {
                max-height: 400px;
                padding: 15px 0;
            }
            
            .nav-links {
                flex-direction: column;
                width: 100%;
                gap: 0;
                margin-bottom: 15px;
            }
            
            .nav-links li {
                width: 100%;
                border-bottom: 1px solid #eee;
            }
            
            .nav-links a {
                display: block;
                padding: 12px 0;
                width: 100%;
            }
            
            .nav-links a.active::after {
                display: none;
            }
            
            .nav-links a.active {
                background-color: rgba(138, 43, 226, 0.1);
                border-left: 4px solid #8a2be2;
                padding-left: 15px;
            }
            
            .donate-btn {
                width: 100%;
                justify-content: center;
                padding: 10px 20px;
            }
            
            .logo-img img {
                width: 120px;
                padding: 8px;
            }
            
            .logo-text {
                font-size: 20px;
            }
            
            .floating-image {
                width: 60px;
                height: 60px;
                bottom: 15px;
                right: 15px;
            }
        }
        
        @media screen and (max-width: 480px) {
            .logo-img img {
                width: 100px;
                padding: 5px;
            }
            
            .logo-text {
                font-size: 18px;
            }
            
            .floating-image {
                width: 50px;
                height: 50px;
                bottom: 10px;
                right: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Header with Navigation -->
    <header class="header-container">
        <div class="header-content">
            <div class="logo-section">
                <!-- Radishare Logo -->
                <div class="logo-img">
                    <img src="<?php echo URL; ?>img/radi.jpeg" alt="Radishare Kenya Logo">
                </div>
                <div class="logo-text">Radishare</div>
                
                <!-- Mobile menu toggle button -->
                <button class="mobile-menu-toggle" id="mobileMenuToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            
            <div class="nav-container" id="navContainer">
                <ul class="nav-links">
                    <li><a href="<?php echo URL; ?>" class="active">Home</a></li>
                    <li><a href="<?php echo URL; ?>about/index">About Us</a></li>
                    <li><a href="<?php echo URL; ?>venture/index">Our Ventures</a></li>
                    <!-- <li><a href="<?php echo URL; ?>learn">Learn</a></li>
                    <li><a href="<?php echo URL; ?>news">News & Publications</a></li> -->
                    <li><a href="<?php echo URL; ?>contact/index">Contact</a></li>
                </ul>
                
                <button class="donate-btn" onclick="window.location.href='<?php echo URL; ?>donate/index';">
                    <i class="fas fa-heart"></i> Donate
                </button>

            </div>
        </div>
    </header>

