<style>
    /* Content section styles - to be added to your existing CSS */
    .content-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .content-row {
        display: flex;
        align-items: center;
        margin-bottom: 60px;
        gap: 40px;
    }

    .text-content {
        flex: 0 0 70%;
    }

    .image-content {
        flex: 0 0 30%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .content-image {
        width: 100%;
        height: auto;
        border-radius: 8px;
        object-fit: cover;
    }

    /* Simple line separator */
    .line-separator {
        height: 1px;
        background-color: #ddd;
        margin: 50px 0;
        width: 100%;
    }

    /* Thicker line for bottom separator */
    .thick-line-separator {
        height: 2px;
        background-color: #ccc;
        margin: 80px 0 50px;
        width: 100%;
    }

    /* Program list styling */
    .programs-list {
        margin: 20px 0;
    }

    .program-item {
        margin-bottom: 25px;
        padding-left: 10px;
        border-left: 3px solid #3498db;
    }

    .program-title {
        font-weight: bold;
        color: #2c3e50;
        margin-bottom: 5px;
        font-size: 18px;
    }

    .program-description {
        color: #555;
        line-height: 1.6;
        padding-left: 5px;
    }

    .programs-conclusion {
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #eee;
        font-style: italic;
        color: #2c3e50;
        font-size: 17px;
    }

    /* Features list styling */
    .features-list {
        margin: 20px 0 25px 0;
    }

    .feature-item {
        margin-bottom: 12px;
        padding: 8px 0;
        border-bottom: 1px dotted #eee;
    }

    .feature-title {
        font-weight: bold;
        color: #2c3e50;
        display: inline-block;
        min-width: 150px;
    }

    .feature-desc {
        color: #555;
        margin-left: 5px;
    }

    .conclusion-text {
        margin-top: 25px;
        padding-top: 20px;
        border-top: 1px solid #eee;
        font-style: italic;
        color: #2c3e50;
        font-size: 17px;
    }

    /* Reverse the second row */
    .reverse-row .text-content {
        order: 2;
    }

    .reverse-row .image-content {
        order: 1;
    }

    /* Three Columns Section Styling */
    .three-columns-section {
        margin: 60px 0 80px 0;
    }

    .section-title {
        text-align: center;
        font-size: 32px;
        color: #2c3e50;
        margin-bottom: 50px;
        position: relative;
        padding-bottom: 15px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: #3498db;
    }

    .columns-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .column-item {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .column-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
    }

    .column-image {
        height: 200px;
        overflow: hidden;
    }

    .column-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .column-item:hover .column-image img {
        transform: scale(1.05);
    }

    .column-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .column-content h3 {
        color: #2c3e50;
        font-size: 22px;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 2px solid #3498db;
    }

    .column-content p {
        color: #555;
        line-height: 1.7;
        margin-bottom: 0;
        flex-grow: 1;
    }

    .values-list {
        list-style: none;
        padding: 0;
        margin: 0;
        flex-grow: 1;
    }

    .values-list li {
        padding: 10px 0;
        color: #555;
        position: relative;
        padding-left: 25px;
        font-size: 16px;
    }

    .values-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #3498db;
        font-weight: bold;
        font-size: 18px;
    }

    .values-list li:not(:last-child) {
        border-bottom: 1px dotted #eee;
    }

    /* Mobile responsiveness */
    @media (max-width: 992px) {
        .columns-container {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }
    }

    @media (max-width: 768px) {
        .content-row {
            flex-direction: column;
        }
        
        .reverse-row .text-content,
        .reverse-row .image-content {
            order: 0;
        }
        
        .text-content, .image-content {
            flex: 0 0 100%;
            width: 100%;
        }
        
        .line-separator,
        .thick-line-separator {
            margin: 40px 0;
        }
        
        .program-item {
            margin-bottom: 20px;
        }
        
        .columns-container {
            grid-template-columns: 1fr;
            gap: 30px;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .column-image {
            height: 180px;
        }
        
        .section-title {
            font-size: 28px;
            margin-bottom: 40px;
        }
        
        .feature-item {
            display: block;
        }
        
        .feature-title {
            display: block;
            margin-bottom: 5px;
            min-width: auto;
        }
        
        .feature-desc {
            margin-left: 0;
            display: block;
        }
    }

    @media (max-width: 480px) {
        .column-content {
            padding: 20px;
        }
        
        .column-content h3 {
            font-size: 20px;
        }
        
        .values-list li {
            font-size: 15px;
            padding: 8px 0 8px 22px;
        }
    }
</style>

<div class="content-wrapper">
<!-- Main content section -->
<section class="content-section">
    <div class="content-row">
        <div class="text-content">
            <h1>Our Background</h1>
            <p>Radishare was initially developed in 2023 as a project under Madde MD LTD, with a focus on delivering practical digital solutions to clients and community-driven initiatives. What began as a digital support project quickly evolved into a purpose-led platform committed to strengthening grassroots institutions and local enterprises.</p>
            <p>The turning point came in December 2024 to January 2025, when Radishare successfully piloted its flagship CBO Mentorship Program with Kaloleni Young Mothers CBO in Kilifi County. The pilot demonstrated the strong demand for structured, relatable, and locally grounded capacity-building support for Community-Based Organizations. The impact of this engagement shaped Radishare's long-term direction.</p>
            <p>Following this success, the project transitioned into a fully registered company. In 2025, Radishare Company Limited was formally incorporated in Kenya under the Companies Act, with a clear shareholding structure and a renewed mandate to deliver scalable, sustainable, and community-centered solutions.</p>
            <p>Today, Radishare operates as a social-impact-driven company committed to empowering communities, youth, CBOs, and MSMEs through innovation, mentorship, and digital transformation.</p>
        </div>
        <div class="image-content">
            <img src="<?php echo URL; ?>img/aboutbg.jpeg" alt="Radishare Background" class="content-image">
        </div>
    </div>
    
    <!-- Simple line separator -->
    <div class="line-separator"></div>
    
    <div class="content-row reverse-row">
        <div class="text-content">
            <h2>Our Flagship Programs</h2>
            <p>Radishare currently delivers its impact through the following flagship programs:</p>
            
            <div class="programs-list">
                <div class="program-item">
                    <div class="program-title">CBO Mentorship Program</div>
                    <div class="program-description">Strengthening governance, financial management, leadership, digital skills, and sustainability of Community-Based Organizations.</div>
                </div>
                
                <div class="program-item">
                    <div class="program-title">MSME Empowerment & Digitization Program</div>
                    <div class="program-description">Supporting small and medium enterprises to improve visibility, systems, and growth through digital tools and advisory.</div>
                </div>
                
                <div class="program-item">
                    <div class="program-title">EcoKinga Project</div>
                    <div class="program-description">Promoting safe disposal of self-care medical products and driving community health and environmental awareness.</div>
                </div>
                
                <div class="program-item">
                    <div class="program-title">JaniAI Kenya Initiative</div>
                    <div class="program-description">A climate-focused innovation program promoting tree planting, environmental restoration, and climate action through the use of technology, data, and digital engagement tools to inspire community-led climate solutions.</div>
                </div>
            </div>
            
            <div class="programs-conclusion">
                Through these programs, Radishare continues to bridge the gap between community needs, technology, knowledge, and sustainable development.
            </div>
        </div>
        <div class="image-content">

            <img src="<?php echo URL; ?>img/abtflagship.jpeg" alt="Radishare Programs" class="content-image">
        </div>
    </div>

    <!-- Simple line separator -->
    <div class="line-separator"></div>

    <!-- Vision, Mission & Values - Three Columns Section -->
    <div class="three-columns-section">
        <h2 class="section-title">Our Guiding Principles</h2>
        
        <div class="columns-container">
            <!-- Vision Column -->
            <div class="column-item">
                <div class="column-image">
                    <img src="<?php echo URL; ?>img/vision.jpeg" alt="Vision" class="content-image">
                </div>
                <div class="column-content">
                    <h3>Vision</h3>
                    <p>To be a leader in creating and sustaining positive impact in the digital era through innovative, inclusive, and measurable initiatives that transform communities, organizations, and local enterprises.</p>
                </div>
            </div>
            
            <!-- Mission Column -->
            <div class="column-item">
                <div class="column-image">
                    <img src="<?php echo URL; ?>img/mission.jpeg" alt="Mission" class="content-image">
                </div>
                <div class="column-content">
                    <h3>Mission</h3>
                    <p>To design and deliver innovative, inclusive, and measurable solutions that empower communities, CBOs, youth, and MSMEs to thrive in the digital era and create lasting social, economic, and environmental impact.</p>
                </div>
            </div>
            
            <!-- Values Column -->
            <div class="column-item">
                <div class="column-image">
                    <img src="<?php echo URL; ?>img/value.jpeg" alt="Core Values" class="content-image">
                </div>
                <div class="column-content">
                    <h3>Core Values</h3>
                    <ul class="values-list">
                        <li>Integrity</li>
                        <li>Innovation</li>
                        <li>Insightful</li>
                        <li>Inquisitive</li>
                        <li>Measurable</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Simple line separator -->
    <div class="line-separator"></div>

    <div class="content-row">
        <div class="text-content">
            <h2>Why Radishare Is Different</h2>
            <p>Radishare is not just a service provider, we are a purpose-driven impact company built around community realities. What sets Radishare apart is our ability to combine digital innovation, grassroots engagement, and measurable impact into practical solutions that work on the ground. We do not impose models; we co-create with communities, CBOs, youth, and MSMEs to ensure relevance, ownership, and sustainability.</p>
            
            <p>Our programs are designed to be:</p>
            
            <div class="features-list">
                <div class="feature-item">
                    <span class="feature-title"><b>Context-driven</b></span>
                    <span class="feature-desc">– grounded in real community challenges and opportunities.</span>
                </div>
                <div class="feature-item">
                    <span class="feature-title"><b>Action-oriented</b></span>
                    <span class="feature-desc">– focused on practical implementation, not theory alone.</span>
                </div>
                <div class="feature-item">
                    <span class="feature-title"><b>Inclusive</b></span>
                    <span class="feature-desc">– ensuring youth, women, and marginalized groups are meaningfully engaged.</span>
                </div>
                <div class="feature-item">
                    <span class="feature-title"><b>Data-informed</b></span>
                    <span class="feature-desc">– guided by evidence and continuous learning.</span>
                </div>
                <div class="feature-item">
                    <span class="feature-title"><b>Impact-measurable</b></span>
                    <span class="feature-desc">– ensuring results can be tracked and demonstrated.</span>
                </div>
            </div>
            
            <p class="conclusion-text">
                Through strong partnerships, innovative programming, and a deep commitment to local development, Radishare continues to bridge the gap between ideas, technology, and real community transformation.
            </p>
        </div>
        <div class="image-content">
            <img src="<?php echo URL; ?>img/abtdifference.jpeg" alt="Why Radishare Is Different" class="content-image">
        </div>
    </div>
    
    <!-- Thicker bottom line separator -->
    <div class="thick-line-separator"></div>
</section>
