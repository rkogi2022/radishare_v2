    </div> <!-- Close content-wrapper from header.php -->

    
    <!-- Corporate Tool Floating Icon -->
    <div class="floating-icon">
        <img src="<?php echo URL; ?>img/tools.png" alt="Corporate Tools">
    </div>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-grid">
                <!-- DISCOVER Column -->
                <div class="footer-column">
                    <h3 class="footer-column-title">DISCOVER</h3>
                    <ul class="footer-links-list">
                        <li><a href="<?php echo URL; ?>about">About us</a></li>
                        <li><a href="<?php echo URL; ?>news">News & Publications</a></li>
                        <li><a href="<?php echo URL; ?>careers">Careers</a></li>
                        <li><a href="<?php echo URL; ?>madde-md">Madde MD LTD</a></li>
                        <li><a href="<?php echo URL; ?>staff-portal">Staff Portal</a></li>
                    </ul>
                </div>
                
                <!-- FLAGSHIP INITIATIVES Column -->
                <div class="footer-column">
                    <h3 class="footer-column-title">FLAGSHIP INITIATIVES</h3>
                    <ul class="footer-links-list">
                        <li><a href="<?php echo URL; ?>flagships/cbo">CBO Mentorship Program</a></li>
                        <li><a href="<?php echo URL; ?>flagships/msmeEmpowerment">MSME Empowerment Program</a></li>
                        <li><a href="<?php echo URL; ?>flagships/ecokinga">EcoKinga</a></li>
                        <li><a href="<?php echo URL; ?>flagships/janiAI">Jani AI Kenya</a></li>
                        <li><a href="<?php echo URL; ?>venture/index">Consultancy Services</a></li>
                    </ul>
                </div>
                
                <!-- FOLLOW US Column -->
                <div class="footer-column">
                    <h3 class="footer-column-title">FOLLOW US</h3>
                    <div class="social-links">
                        <a href="https://linkedin.com/company/radishare-kenya" target="_blank" class="social-icon" title="LinkedIn">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://facebook.com/radisharekenya" target="_blank" class="social-icon" title="Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://instagram.com/radishare" target="_blank" class="social-icon" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://tiktok.com/@radishare_ke" target="_blank" class="social-icon" title="TikTok">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                    
                    <!-- LinkedIn Embed -->
                    <div class="embed-container">
                        <iframe 
                            src="https://www.linkedin.com/embed/feed/update/urn:li:activity:7372241853661827072" 
                            width="100%" 
                            height="200" 
                            style="border: none;" 
                            title="LinkedIn Post">
                        </iframe>
                    </div>
                </div>
                
                <!-- TikTok Embed Column -->
                <div class="footer-column">
                    <h3 class="footer-column-title">RECENT POST</h3>
                    <div class="tiktok-embed-container">
                        <blockquote class="tiktok-embed" 
                            cite="https://www.tiktok.com/@radishare_ke/video/7547692730206391557" 
                            data-video-id="7547692730206391557" 
                            style="max-width: 100%; min-width: 100%; height: 350px;">
                            <section>
                                <a target="_blank" title="@radishare_ke" href="https://www.tiktok.com/@radishare_ke?refer=embed">@radishare_ke</a> 🚨 Introducing the 
                                <a title="radisharekenyapodcast" target="_blank" href="https://www.tiktok.com/tag/radisharekenyapodcast?refer=embed">#RadishareKenyaPodcast</a> 🎙️ 
                                Where real community stories meet the power of AI! 🤖✨ From CBOs to innovators and changemakers, we're amplifying voices that matter across 🇰🇪 making storytelling sharper, faster, and more accessible than ever. Crisp. Engaging. Impactful. 
                                This isn't just a podcast… it's your front-row seat to Kenya's ground-level change. 👉 Stay tuned — the future of Kenyan storytelling starts here. 
                                Radishare Kenya – Empower. Digitize. Deliver. 
                                <a title="radisharekenyapodcast" target="_blank" href="https://www.tiktok.com/tag/radisharekenyapodcast?refer=embed">#RadishareKenyaPodcast</a> 
                                <a title="digitalstorytelling" target="_blank" href="https://www.tiktok.com/tag/digitalstorytelling?refer=embed">#DigitalStorytelling</a> 
                                <a title="aipowered" target="_blank" href="https://www.tiktok.com/tag/aipowered?refer=embed">#AIPowered</a> 
                                <a title="cboimpact" target="_blank" href="https://www.tiktok.com/tag/cboimpact?refer=embed">#CBOImpact</a> 
                                <a target="_blank" title="♬ original sound - Radishare Kenya" href="https://www.tiktok.com/music/original-sound-7547692723622693638?refer=embed">♬ original sound - Radishare Kenya</a>
                            </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>
                </div>
            </div>
            
            <div style="padding:15px 30px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;font-weight:bolder;">
                <li style="list-style:none;">
                    <a href="<?php echo URL; ?>home/privacypolicy" style="color:#f9d307;text-decoration:none;font-size:14px;display:flex;align-items:center;gap:6px;">
                        <i class="fa-solid fa-user-shield"></i>
                        Privacy Policy
                    </a>
                </li>

                <li style="list-style:none;">
                    <a href="<?php echo URL; ?>home/terms" style="color:#f9d307;text-decoration:none;font-size:14px;display:flex;align-items:center;gap:6px;">
                        <i class="fa-solid fa-file-contract"></i>
                        Terms & Conditions
                    </a>
                </li>

                <div style="color:#fff;font-size:13px;display:flex;align-items:center;gap:6px;">
                    <i class="fa-regular fa-copyright"></i>
                    <?php echo date('Y') == 2023 ? '2023' : '2023 - ' . date('Y'); ?>
                    Radishare Company Limited
                </div>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript for mobile menu -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            const navContainer = document.getElementById('navContainer');
            const navLinks = document.querySelectorAll('.nav-links a');
            
            // Toggle mobile menu
            mobileMenuToggle.addEventListener('click', function() {
                navContainer.classList.toggle('mobile-open');
                
                // Change icon based on menu state
                const icon = mobileMenuToggle.querySelector('i');
                if (navContainer.classList.contains('mobile-open')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
            
            // Set active link on click
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    // Remove active class from all links
                    navLinks.forEach(item => item.classList.remove('active'));
                    
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    // Close mobile menu after clicking a link (on mobile)
                    if (window.innerWidth <= 768) {
                        navContainer.classList.remove('mobile-open');
                        const icon = mobileMenuToggle.querySelector('i');
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                });
            });
            
            // Set active link based on current URL
            function setActiveLink() {
                const currentUrl = window.location.pathname;
                navLinks.forEach(link => {
                    const linkUrl = link.getAttribute('href');
                    // For PHP URLs, we need to check differently
                    if (linkUrl === '<?php echo URL; ?>' && (currentUrl === '/' || currentUrl.includes('home'))) {
                        link.classList.add('active');
                    } else if (currentUrl.includes(linkUrl.replace('<?php echo URL; ?>', '')) && linkUrl !== '<?php echo URL; ?>') {
                        navLinks.forEach(item => item.classList.remove('active'));
                        link.classList.add('active');
                    }
                });
            }
            
            // Set active link on page load
            setActiveLink();
            
            // Handle window resize to close mobile menu when switching to desktop
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    navContainer.classList.remove('mobile-open');
                    const icon = mobileMenuToggle.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        });
    </script>
    
    <!-- TikTok Embed Script -->
    <script async src="https://www.tiktok.com/embed.js"></script>
    
    <!-- Footer Styles -->
    <style>
        /* Footer */
        .footer {
            background-color: #006e4f; /* Exact green background color */
            color: #ffffff;
            padding: 40px 0 20px; /* Reduced padding */
            margin-top: auto;
            font-family: 'Arial', sans-serif;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Footer Grid Layout - 4 equal columns */
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px; /* Reduced gap */
            align-items: start; /* Align all columns at the top */
        }
        
        .footer-column {
            display: flex;
            flex-direction: column;
            min-height: 100%; /* Make all columns same height */
        }
        
        .footer-column-title {
            color: #f9d307;
            font-size: 16px; /* Smaller font */
            margin-bottom: 20px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.3);
            padding-bottom: 8px;
        }
        
        /* Footer Links */
        .footer-links-list {
            list-style: none;
            padding: 0;
            margin: 0 0 15px 0;
        }
        
        .footer-links-list li {
            margin-bottom: 12px; /* Reduced spacing */
        }
        
        .footer-links-list a {
            color: #ffffff;
            text-decoration: none;
            font-size: 14px; /* Smaller font */
            font-weight: 400;
            transition: color 0.3s ease;
            line-height: 1.4;
            display: block;
        }
        
        .footer-links-list a:hover {
            color: #e0e0e0;
            text-decoration: underline;
        }
        
        /* Social Links in FOLLOW US */
        .social-links {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }

        .social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: #ffffff;
            font-size: 18px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-icon:hover {
            background-color: rgba(249, 211, 7, 0.3); /* Yellow tint on hover */
            color: #f9d307; /* Yellow icon on hover */
            transform: translateY(-3px);
        }

        /* Specific colors on hover for each platform */
        .social-icon:nth-child(1):hover { /* LinkedIn */
            background-color: rgba(10, 102, 194, 0.3);
            color: #0a66c2;
        }

        .social-icon:nth-child(2):hover { /* Facebook */
            background-color: rgba(24, 119, 242, 0.3);
            color: #1877f2;
        }

        .social-icon:nth-child(3):hover { /* Twitter */
            background-color: rgba(29, 161, 242, 0.3);
            color: #1da1f2;
        }

        .social-icon:nth-child(4):hover { /* TikTok */
            background-color: rgba(255, 0, 80, 0.3);
            color: #ff0050;
        }
        
        /* Embed Containers - Uniform sizing */
        .embed-container {
            margin-top: 10px;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            height: 200px; /* Fixed height */
        }
        
        .tiktok-embed-container {
            border-radius: 6px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.05);
            padding: 12px;
            height: 280px; /* Fixed height */
            overflow-y: auto; /* Scroll if content is too long */
        }
        
        /* Floating Corporate Tools on Left */
        .floating-icon {
            position: fixed;          
            bottom: 20px;             
            left: 20px;              
            width: 60px;              
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 9999;            
            transition: transform 0.2s; 
            background: none;          
            border-radius: 0;          
            box-shadow: none;          
        }

        .floating-icon img {
            width: 100%;               
            height: 100%;
        }

        .floating-icon:hover {
            transform: scale(1.1);     
        }

        /* Pulse Animation */
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(0, 110, 79, 0.4);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(0, 110, 79, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(0, 110, 79, 0);
            }
        }
        
        .corporate-tool.pulse {
            animation: pulse 2s infinite;
        }
        
        /* Body setup for footer positioning */
        body {
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: 'Arial', sans-serif;
        }
        
        /* Responsive Footer */
        @media screen and (max-width: 1024px) {
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
            
            .floating-tools {
                left: 20px;
                bottom: 20px;
            }
            
            .corporate-tools-float {
                width: 180px;
                padding: 12px;
            }
            
            .corporate-tool {
                bottom: 110px;
                left: 20px;
                width: 55px;
                height: 55px;
                padding: 10px;
            }
            
            .corporate-tool::after {
                font-size: 11px;
                padding: 6px 10px;
            }
        }
        
        @media screen and (max-width: 768px) {
            .footer {
                padding: 30px 0 15px;
            }
            
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .footer-column-title {
                font-size: 15px;
                margin-bottom: 15px;
            }
            
            .footer-links-list li {
                margin-bottom: 10px;
            }
            
            .footer-links-list a {
                font-size: 13px;
            }
            
            .social-links {
                margin-bottom: 15px;
            }
            
            .social-links a {
                font-size: 13px;
            }
            
            .embed-container,
            .tiktok-embed-container {
                height: 180px;
            }
            
            .floating-tools {
                left: 15px;
                bottom: 15px;
                display: none; /* Hide on mobile for better UX */
            }
            
            .corporate-tool {
                bottom: 100px;
                left: 15px;
                width: 50px;
                height: 50px;
                padding: 8px;
            }
            
            .corporate-tool::after {
                content: "Tools";
                font-size: 10px;
                padding: 5px 8px;
            }
            
            .corporate-tool:hover::after,
            .corporate-tool:hover::before {
                left: 65px;
            }
        }
        
        @media screen and (max-width: 480px) {
            .footer-content {
                padding: 0 15px;
            }
            
            .embed-container,
            .tiktok-embed-container {
                height: 160px;
            }
            
            .corporate-tool {
                bottom: 90px;
                left: 10px;
                width: 45px;
                height: 45px;
            }
            
            .corporate-tool::after {
                display: none; /* Hide tooltip on very small screens */
            }
            
            .corporate-tool::before {
                display: none;
            }
        }
        
        /* For mobile devices, you might want to hide it completely */
        @media screen and (max-width: 320px) {
            .corporate-tool {
                display: none;
            }
        }
    </style>
</body>
</html>