<div class="content-wrapper">
<!-- Main Content Section -->
<section class="ventures-section">
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Our Ventures</h1>
            <p class="page-subtitle">Innovative solutions and strategic services to empower your organization's growth and impact</p>
        </div>

        <!-- Ventures Grid -->
        <div class="ventures-grid">
            <!-- Venture 1 -->
            <div class="venture-card">
                <div class="venture-number">1</div>
                <div class="venture-content">
                    <h3>Digital Marketing & Branding Consultancy</h3>
                    <p>Radishare helps enterprises, NGOs, and startups build strong brand identities and create effective digital marketing strategies. From social media campaigns and content creation to brand storytelling, we amplify visibility, engagement, and impact for your organization or business.</p>
                </div>
            </div>

            <!-- Venture 2 -->
            <div class="venture-card">
                <div class="venture-number">2</div>
                <div class="venture-content">
                    <h3>E-Learning Platform Development</h3>
                    <p>We design and implement customized e-learning solutions for youth, CBOs, and MSMEs. Our platforms combine interactive courses, practical assessments, and data tracking to ensure meaningful learning and measurable outcomes.</p>
                </div>
            </div>

            <!-- Venture 3 -->
            <div class="venture-card">
                <div class="venture-number">3</div>
                <div class="venture-content">
                    <h3>Consultants on Digital Health</h3>
                    <p>Radishare provides expert guidance to organizations looking to leverage technology for healthcare delivery, community health programs, and digital medical solutions—improving access, efficiency, and health outcomes.</p>
                </div>
            </div>

            <!-- Venture 4 -->
            <div class="venture-card">
                <div class="venture-number">4</div>
                <div class="venture-content">
                    <h3>Climate Change Collaboration through Jani AI</h3>
                    <p>Through our Jani AI initiative, we partner with organizations to implement tech-driven climate solutions. We focus on tree planting, environmental restoration, and using digital tools and AI to empower communities to act on climate change.</p>
                </div>
            </div>

            <!-- Venture 5 -->
            <div class="venture-card">
                <div class="venture-number">5</div>
                <div class="venture-content">
                    <h3>Consultants on Research & Adaptive Learning</h3>
                    <p>We support organizations in designing research initiatives, monitoring and evaluation systems, and adaptive learning strategies—turning insights into actionable solutions that improve programs and community impact.</p>
                </div>
            </div>

            <!-- Venture 6 -->
            <div class="venture-card">
                <div class="venture-number">6</div>
                <div class="venture-content">
                    <h3>Consultants on Resource Mobilization</h3>
                    <p>Radishare helps organizations diversify and scale their funding. We assist in identifying opportunities, developing proposals, and building sustainable strategies for long-term growth.</p>
                </div>
            </div>
        </div>

        <!-- Pricing Section -->
        <div class="pricing-section">
            <div class="section-header">
                <h2>Pricing</h2>
                <p class="section-subtitle">At Radishare, we believe in accessible, transparent, and value-driven solutions. Our pricing is designed to suit different needs, whether you are an individual, a CBO, an MSME, or a corporate partner.</p>
            </div>

            <div class="pricing-grid">
                <!-- Pricing 1 -->
                <div class="pricing-card">
                    <h3>Digital Marketing & Branding Consultancy</h3>
                    <p>Tailored packages based on scope and scale. From starter support to comprehensive campaigns, we create solutions that fit your budget and goals.</p>
                </div>

                <!-- Pricing 2 -->
                <div class="pricing-card">
                    <h3>E-Learning Platform Development</h3>
                    <p>Pricing depends on features, number of users, and customization. We offer scalable options for small organizations as well as larger institutions.</p>
                </div>

                <!-- Pricing 3 -->
                <div class="pricing-card">
                    <h3>Consulting Services (Digital Health, Climate, Research, Resource Mobilization)</h3>
                    <p>Flexible pricing based on consultancy duration, depth of engagement, and deliverables. Each engagement is designed to maximize value and measurable impact.</p>
                </div>
            </div>

            <!-- Contact CTA -->
            <div class="contact-cta">
                <p>For a personalized quote or to discuss your project needs, contact our team, and we'll create a solution tailored for you.</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email Us:</strong>
                            <a href="mailto:info@radi-share.co.ke">info@radi-share.co.ke</a> | 
                            <a href="mailto:radishare00@gmail.com">radishare00@gmail.com</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Or reach out to us directly at:</strong>
                            <span>Our contact numbers listed on our contact page</span>
                        </div>
                    </div>
                </div>
                <a href="<?php echo URL; ?>contact" class="cta-button">Contact Us Now</a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Ventures Section Styles */
    .ventures-section {
        padding: 60px 0;
        background-color: #f8f9fa;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Page Header */
    .page-header {
        text-align: center;
        margin-bottom: 50px;
        padding-bottom: 30px;
        border-bottom: 2px solid #e9ecef;
    }

    .page-header h1 {
        color: #006e4f;
        font-size: 42px;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .page-subtitle {
        color: #666;
        font-size: 18px;
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Ventures Grid */
    .ventures-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 25px;
        margin-bottom: 60px;
    }

    .venture-card {
        background: white;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        border-left: 5px solid #006e4f;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        align-items: flex-start;
        gap: 25px;
    }

    .venture-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
    }

    .venture-number {
        background: #006e4f;
        color: white;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        font-weight: bold;
        flex-shrink: 0;
    }

    .venture-content h3 {
        color: #2c3e50;
        font-size: 22px;
        margin-bottom: 12px;
        font-weight: 600;
    }

    .venture-content p {
        color: #555;
        line-height: 1.7;
        font-size: 16px;
        margin: 0;
    }

    /* Pricing Section */
    .pricing-section {
        background: white;
        border-radius: 15px;
        padding: 50px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-header h2 {
        color: #006e4f;
        font-size: 36px;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .section-subtitle {
        color: #666;
        font-size: 18px;
        max-width: 900px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Pricing Grid */
    .pricing-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        margin-bottom: 40px;
    }

    .pricing-card {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 30px;
        border: 1px solid #e9ecef;
        transition: all 0.3s ease;
    }

    .pricing-card:hover {
        border-color: #006e4f;
        background: #f0f9f6;
    }

    .pricing-card h3 {
        color: #2c3e50;
        font-size: 20px;
        margin-bottom: 15px;
        font-weight: 600;
        line-height: 1.4;
    }

    .pricing-card p {
        color: #555;
        line-height: 1.6;
        font-size: 16px;
        margin: 0;
    }

    /* Contact CTA */
    .contact-cta {
        text-align: center;
        padding-top: 40px;
        border-top: 1px solid #e9ecef;
    }

    .contact-cta > p {
        color: #666;
        font-size: 18px;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .contact-info {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 25px;
        margin-bottom: 30px;
        text-align: left;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .contact-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        margin-bottom: 20px;
    }

    .contact-item:last-child {
        margin-bottom: 0;
    }

    .contact-item i {
        color: #006e4f;
        font-size: 20px;
        margin-top: 3px;
        flex-shrink: 0;
    }

    .contact-item strong {
        color: #2c3e50;
        display: block;
        margin-bottom: 5px;
        font-size: 16px;
    }

    .contact-item a {
        color: #006e4f;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .contact-item a:hover {
        color: #005a40;
        text-decoration: underline;
    }

    .contact-item span {
        color: #666;
        font-size: 15px;
    }

    .cta-button {
        display: inline-block;
        background: #006e4f;
        color: white;
        padding: 15px 35px;
        border-radius: 8px;
        font-size: 18px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid #006e4f;
    }

    .cta-button:hover {
        background: #005a40;
        border-color: #005a40;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 110, 79, 0.3);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .pricing-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .pricing-section {
            padding: 40px 30px;
        }
    }

    @media (max-width: 768px) {
        .ventures-section {
            padding: 40px 0;
        }
        
        .page-header h1 {
            font-size: 36px;
        }
        
        .section-header h2 {
            font-size: 30px;
        }
        
        .venture-card {
            padding: 25px;
            flex-direction: column;
            gap: 15px;
        }
        
        .venture-number {
            width: 35px;
            height: 35px;
            font-size: 18px;
        }
        
        .venture-content h3 {
            font-size: 20px;
        }
        
        .pricing-card {
            padding: 25px;
        }
        
        .pricing-card h3 {
            font-size: 18px;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 0 15px;
        }
        
        .page-header h1 {
            font-size: 30px;
        }
        
        .page-subtitle {
            font-size: 16px;
        }
        
        .section-header h2 {
            font-size: 26px;
        }
        
        .section-subtitle {
            font-size: 16px;
        }
        
        .venture-card {
            padding: 20px;
        }
        
        .pricing-section {
            padding: 30px 20px;
        }
        
        .contact-info {
            padding: 20px;
        }
        
        .contact-item {
            flex-direction: column;
            gap: 10px;
        }
        
        .cta-button {
            padding: 12px 25px;
            font-size: 16px;
            width: 100%;
        }
    }
</style>