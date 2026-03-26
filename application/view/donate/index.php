<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radishare · community giving</title>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(145deg, #ecf7e7 0%, #daeed3 100%);
            font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.5;
            color: #1d3b2a;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.8rem;
        }

        /* main container: centered, soft card with refined depth */
        .radishare-card {
            max-width: 960px;
            width: 100%;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(2px);
            box-shadow: 
                0 35px 55px -25px #2a4d2a,
                0 8px 20px -8px rgba(40, 70, 30, 0.25);
            border-radius: 56px;
            border: 1px solid rgba(210, 235, 200, 0.8);
            padding: 3.8rem 3.2rem;
            transition: all 0.3s ease;
        }

        /* inner centered content */
        .content-centred {
            max-width: 780px;
            margin: 0 auto;
            text-align: center;
        }

        /* headings & text */
        .content-centred h1 {
            font-size: 3.4rem;
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -0.02em;
            color: #0f3b22;
            margin-bottom: 1.2rem;
            text-wrap: balance;
        }

        .sub-lead {
            font-size: 1.6rem;
            font-weight: 420;
            color: #28633f;
            border-left: none;
            padding-left: 0;
            margin: 1rem 0 2rem 0;
            background: #eefae9;
            display: inline-block;
            padding: 0.7rem 2.5rem;
            border-radius: 80px;
            box-shadow: inset 0 1px 4px #c0e0b2, 0 4px 0 #b1cfaa;
            border: 1px solid #c2e0b6;
        }

        .content-centred p {
            font-size: 1.25rem;
            color: #1f4a31;
            margin: 2rem 0 2.2rem 0;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            background: #ffffffc9;
            padding: 0.8rem 2rem;
            border-radius: 48px;
            border: 1px solid #d4f0c8;
            box-shadow: 0 6px 0 #c2ddb8;
        }

        /* highlight block – made more centred friendly */
        .highlight-block {
            background: #f1faec;
            padding: 2.2rem 2.4rem;
            border-radius: 44px;
            margin: 2.4rem 0 2.2rem 0;
            border: 1px solid #bee0b2;
            box-shadow: 0 12px 18px -12px #8bb681;
            text-align: left;   /* list stays left aligned for readability */
        }

        .highlight-block p {
            font-size: 1.4rem;
            margin-bottom: 1.4rem;
            font-weight: 650;
            color: #17532c;
            background: transparent;
            padding: 0;
            border: none;
            box-shadow: none;
            text-align: center;
        }

        .impact-list {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.1rem 1.8rem;
        }

        .impact-list li {
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 0.9rem;
            color: #194529;
            background: white;
            padding: 0.7rem 1.2rem 0.7rem 1rem;
            border-radius: 40px;
            border: 1px solid #d5efcb;
            box-shadow: 0 4px 0 #b8d8ae;
        }

        .impact-list i {
            color: #78b43d;
            font-size: 1.5rem;
            width: 2rem;
            text-align: center;
        }

        .distinct-note {
            font-size: 1.25rem;
            background: white;
            padding: 1.2rem 2.8rem;
            border-radius: 80px;
            display: inline-block;
            border: 2px solid #d4efc8;
            margin: 1.2rem 0 2rem;
            font-weight: 600;
            color: #0f4a28;
            box-shadow: 0 10px 16px -8px #95bb8b;
        }

        .distinct-note i {
            color: #6f9e4b;
            margin-right: 10px;
            font-size: 1.6rem;
            vertical-align: middle;
        }

        .donation-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 1.8rem;
            align-items: center;
            justify-content: center;
            margin: 2.8rem 0 1.5rem;
        }

        .btn-mpesa {
            background: #4bb748;
            color: white;
            border: none;
            padding: 1.3rem 3rem;
            border-radius: 60px;
            font-size: 1.6rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 1.2rem;
            box-shadow: 0 14px 18px -8px #40a03d, 0 6px 0 #328530;
            border: 1px solid #5fb15c;
            cursor: default;
            transition: transform 0.15s, box-shadow 0.15s;
        }

        .btn-card {
            background: #153b28;
            color: white;
            border: none;
            padding: 1.3rem 3rem;
            border-radius: 60px;
            font-size: 1.6rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 1.2rem;
            box-shadow: 0 14px 18px -8px #1d442d, 0 6px 0 #0c2f1d;
            border: 1px solid #28663f;
            cursor: default;
            transition: transform 0.15s, box-shadow 0.15s;
        }

        .btn-mpesa:hover, .btn-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 22px -10px currentColor;
        }

        .btn-card i, .btn-mpesa i {
            font-size: 2rem;
        }

        .tiny-secure {
            font-size: 1rem;
            color: #386a45;
            margin-top: 2.2rem;
            display: flex;
            gap: 2.8rem;
            justify-content: center;
            border-top: 2px dotted #c5e0ba;
            padding-top: 2rem;
        }

        .tiny-secure span {
            background: #eef7e9;
            padding: 0.4rem 1.6rem;
            border-radius: 40px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid #c6e3bb;
        }

        /* mobile */
        @media (max-width: 700px) {
            .radishare-card {
                padding: 2.2rem 1.5rem;
                border-radius: 40px;
            }
            .content-centred h1 {
                font-size: 2.5rem;
            }
            .impact-list {
                grid-template-columns: 1fr;
            }
            .sub-lead {
                font-size: 1.3rem;
                padding: 0.6rem 1.5rem;
            }
            .donation-actions {
                flex-direction: column;
                width: 100%;
            }
            .btn-mpesa, .btn-card {
                width: 100%;
                justify-content: center;
                font-size: 1.4rem;
            }
            .tiny-secure {
                flex-direction: column;
                gap: 0.8rem;
                align-items: center;
            }
        }

        /* small decorative elements */
        .seed-icon {
            opacity: 0.2;
            font-size: 4rem;
            position: relative;
            top: 0.2rem;
        }
    </style>
</head>
<body>
    <div class="radishare-card">
        <div class="content-centred">

            <!-- main title -->
            <h1>Be the Reason a Community Thrives</h1>

            <!-- sub-lead styled as badge -->
            <div class="sub-lead">
                Change doesn’t start in boardrooms.<br> It starts in communities.
            </div>

            <!-- descriptive paragraph with subtle background -->
            <p>
                <i class="fas fa-seedling" style="color:#78b43d; margin-right:8px;"></i>
                At Radishare Company Limited, we equip grassroots organizations and local enterprises 
                with the tools, mentorship, and digital systems they need to create lasting impact.
            </p>

            <!-- impact block (nicely styled list) -->
            <div class="highlight-block">
                <p>✨ Your support helps:</p>
                <ul class="impact-list">
                    <li><i class="fas fa-shield-heart"></i> Protect families through safe medical waste solutions like EcoKinga</li>
                    <li><i class="fas fa-hand-holding-heart"></i> Strengthen 30+ Community-Based Organizations</li>
                    <li><i class="fas fa-users"></i> Empower 500+ members directly and 1,000+ indirectly</li>
                    <li><i class="fas fa-laptop"></i> Digitize and grow local SMEs</li>
                    <li><i class="fas fa-bullhorn"></i> Amplify advocacy campaigns reaching over 50,000 people</li>
                    <li><i class="fas fa-rocket"></i> And many other unique projects to empower young people in Kenya.</li>
                </ul>
            </div>

            <!-- "not charity" callout -->
            <div class="distinct-note">
                <i class="fas fa-hand-holding-heart"></i> This is not charity. <span style="font-weight:400;">⚡</span> It’s investment in sustainable, community-led change.
            </div>

            <!-- donation buttons (centered) -->
            <div class="donation-actions">
                <div class="btn-mpesa">
                    <i class="fas fa-mobile-alt"></i> Donate with Mpesa
                </div>
                <div class="btn-card">
                    <i class="fas fa-credit-card"></i> <i class="fab fa-cc-paypal"></i> Donate with Card / PayPal
                </div>
            </div>

            <!-- secure & impact note -->
            <div class="tiny-secure">
                <span><i class="fas fa-lock" style="color:#78b43d;"></i> 100% secure giving</span>
                <span><i class="fas fa-leaf"></i> community‑led impact</span>
            </div>

        </div> <!-- end content-centred -->
    </div> <!-- end radishare-card -->
</body>
</html>