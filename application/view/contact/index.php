<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        background-color: #f5f7fa;
        color: #333;
        line-height: 1.6;
    }
    
    .container {
        display: flex;
        flex: 1;
        position: relative;
    }
    
    .background-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48c3R5bGU+dGV4dHtmb250LWZhbWlseTpBcmlhbDtmb250LXNpemU6MTBweDtmaWxsOiNmZmY7fTwvc3R5bGU+PHRleHQgeD0iMTAiIHk9IjE1Ij5DYXJlZ29yeTwvdGV4dD48dGV4dCB4PSI3MCIgeT0iMTUiPlZhbHVlPC90ZXh0Pjx0ZXh0IHg9IjEwIiB5PSIyOCI+MTwvdGV4dD48dGV4dCB4PSI3MCIgeT0iMjgiPjEwMDwvdGV4dD48dGV4dCB4PSIxMCIgeT0iNDEiPjI8L3RleHQ+PHRleHQgeD0iNzAiIHk9IjQxIj4xMDA8L3RleHQ+PHRleHQgeD0iMTAiIHk9IjU0Ij4zPC90ZXh0Pjx0ZXh0IHg9IjcwIiB5PSI1NCI+MTAwPC90ZXh0Pjx0ZXh0IHg9IjEwIiB5PSI2NyI+NDwvdGV4dD48dGV4dCB4PSI3MCIgeT0iNjciPjEwMDwvdGV4dD48dGV4dCB4PSIxMCIgeT0iODAiPjU8L3RleHQ+PHRleHQgeD0iNzAiIHk9IjgwIj4xMDA8L3RleHQ+PHRleHQgeD0iMTAiIHk9IjkzIj42PC90ZXh0Pjx0ZXh0IHg9IjcwIiB5PSI5MyI+MTAwPC90ZXh0Pjwvc3ZnPg==');
        background-repeat: repeat;
        background-size: 200px 200px;
        opacity: 0.15;
        z-index: 1;
    }
    
    .contact-section {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px 20px;
        position: relative;
        z-index: 2;
        background-color: rgba(255, 255, 255, 0.85);
    }
    
    .content-wrapper {
        max-width: 800px;
        width: 100%;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        border: 1px solid #eaeaea;
    }
    
    .header-section {
        background: linear-gradient(135deg, #2c6e49 0%, #4c956c 100%);
        color: white;
        padding: 50px 40px;
        text-align: center;
    }
    
    .header-section h1 {
        font-size: 2.8rem;
        margin-bottom: 15px;
        letter-spacing: 1px;
    }
    
    .header-section .tagline {
        font-size: 1.3rem;
        font-weight: 300;
        opacity: 0.9;
        margin-bottom: 25px;
    }
    
    .quote-section {
        font-style: italic;
        font-size: 1.1rem;
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.3);
        position: relative;
    }
    
    .quote-section:before {
        content: '"';
        font-size: 3rem;
        position: absolute;
        top: 10px;
        left: -10px;
        opacity: 0.5;
    }
    
    .quote-author {
        display: block;
        text-align: right;
        font-size: 1rem;
        font-style: normal;
        margin-top: 10px;
        font-weight: 600;
    }
    
    .main-content {
        padding: 50px 40px;
    }
    
    .description {
        font-size: 1.2rem;
        color: #555;
        margin-bottom: 40px;
        line-height: 1.8;
    }
    
    .highlight {
        color: #2c6e49;
        font-weight: 600;
    }
    
    .contact-methods {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        margin-top: 40px;
    }
    
    .contact-card {
        flex: 1;
        min-width: 250px;
        background-color: #f9f9f9;
        border-radius: 10px;
        padding: 25px;
        text-align: center;
        border-left: 4px solid #4c956c;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
    }
    
    .contact-icon {
        font-size: 2.5rem;
        color: #2c6e49;
        margin-bottom: 15px;
    }
    
    .contact-card h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: #333;
    }
    
    .contact-card p {
        color: #666;
        font-size: 1rem;
    }
    
    .contact-form {
        margin-top: 50px;
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 10px;
    }
    
    .contact-form h2 {
        color: #2c6e49;
        margin-bottom: 25px;
        font-size: 1.8rem;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #444;
    }
    
    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 1rem;
        transition: border-color 0.3s;
    }
    
    .form-control:focus {
        outline: none;
        border-color: #4c956c;
    }
    
    .submit-btn {
        background: linear-gradient(to right, #2c6e49, #4c956c);
        color: white;
        border: none;
        padding: 14px 30px;
        font-size: 1.1rem;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    
    .submit-btn:hover {
        background: linear-gradient(to right, #24573d, #3e7a59);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(44, 110, 73, 0.3);
    }
    
    footer {
        background-color: #2c3e50;
        color: white;
        text-align: center;
        padding: 20px;
        font-size: 0.9rem;
        z-index: 2;
    }
    
    .footer-logo {
        font-weight: 700;
        color: #4c956c;
        font-size: 1.2rem;
    }
    
    @media (max-width: 768px) {
        .header-section h1 {
            font-size: 2.2rem;
        }
        
        .header-section .tagline {
            font-size: 1.1rem;
        }
        
        .contact-card {
            min-width: 100%;
        }
        
        .content-wrapper {
            margin: 10px;
        }
    }
</style>
<div class="container">
    <div class="background-pattern"></div>
    <section class="contact-section">
        <div class="content-wrapper">
            <div class="header-section">
                <h1>CONTACT US</h1>
                <div class="tagline">LET'S BUILD IMPACT TOGETHER</div>
                <div class="quote-section">
                    Never doubt that a small group of thoughtful, committed citizens can change the world; indeed, it is the only thing that ever has.
                    <span class="quote-author">— Margaret Mead</span>
                </div>
            </div>
            
            <div class="main-content">
                <p class="description">
                    We'd love to hear from you. Whether you are a <span class="highlight">community group</span>, <span class="highlight">corporate partner</span>, <span class="highlight">MSME</span>, <span class="highlight">researcher</span>, or <span class="highlight">development collaborator</span>, <strong>Radishare Company Limited</strong> is ready to engage.
                </p>
                
                <div class="contact-methods">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3>Email Us</h3>
                        <p>info@radi-share.co.ke <br>radishare00@gmail.com</p>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3>Call Us</h3>
                        <p>+254 784 515955<br></p>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3>Visit Us</h3>
                        <p>Applewood Adams, 10th Floor,<br>Odyssey Workspace, Suite 1011.</p>
                        <p> Ngong Road, Nairobi, Kenya</p>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h2>Send us a Message</h2>
                    <form id="contactForm" method="POST" action="<?= URL; ?>contact/send">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Organization/Company</label>
                            <input type="text" name="company" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>How can we help you?</label>
                            <select name="category" class="form-control" required>
                                <option value="">Select your category</option>
                                <option value="Partnership Inquiry">Partnership Inquiry</option>
                                <option value="MSME Digitization">MSME Digitization</option>
                                <option value="Digital Marketing & Branding">Digital Marketing & Branding</option>
                                <option value="Climate & EcoKinga">Climate & EcoKinga</option>
                                <option value="Jani AI Kenya">Jani AI Kenya</option>
                                <option value="Research & Adaptive Learning">Research & Adaptive Learning</option>
                                <option value="Resource Mobilization">Resource Mobilization</option>
                                <option value="Media / Publication">Media / Publication</option>
                                <option value="General Inquiry">General Inquiry</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Your Message</label>
                            <textarea name="message" class="form-control" rows="5" required></textarea>
                        </div>

                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // Form submission handling
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form values
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const category = document.getElementById('category').value;
        const message = document.getElementById('message').value;
        
        // Simple validation
        if (!name || !email || !category || !message) {
            alert('Please fill in all fields.');
            return;
        }
        alert(`Thank you ${name}! Your message has been sent. We'll contact you at ${email} soon.`);
        
        // Reset the form
        document.getElementById('contactForm').reset();
    });
    
    // Add subtle animation to the contact cards on page load
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.contact-card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 300 + (index * 200));
        });
    });

    document.getElementById("contactForm").addEventListener("submit", function(e) {
        e.preventDefault();

        fetch("<?= URL ?>contact/send", {
            method: "POST",
            body: new FormData(this)
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === "success") {
                alert(data.message);
                this.reset();
            } else {
                alert("Mailer Error: " + data.message);
            }
        })
        .catch(() => {
            alert("Network error. Please try again.");
        });
    });
</script>


