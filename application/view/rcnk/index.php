<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    .rcnk-page {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
        max-width: 960px;
        margin: 0 auto;
    }

    /* ── Hero ── */
    .rcnk-hero {
        background: linear-gradient(135deg, #04342C 0%, #006e4f 100%);
        border-radius: 12px;
        padding: 3rem 2.5rem;
        margin-bottom: 2rem;
        position: relative;
        overflow: hidden;
    }
    .rcnk-hero::before {
        content: '';
        position: absolute; right: -40px; top: -40px;
        width: 220px; height: 220px;
        border-radius: 50%;
        background: rgba(255,255,255,0.05);
    }
    .rcnk-hero::after {
        content: '';
        position: absolute; right: 80px; bottom: -60px;
        width: 140px; height: 140px;
        border-radius: 50%;
        background: rgba(255,255,255,0.04);
    }
    .rcnk-hero-inner { position: relative; z-index: 2; }
    .rcnk-hero h1 {
        font-size: 2.8rem;
        font-weight: 700;
        color: #fff;
        line-height: 1.2;
        margin: 0 0 1rem 0;
    }
    .rcnk-hero h1 span { color: #5DCAA5; }
    .rcnk-hero-sub {
        font-size: 1rem;
        color: rgba(255,255,255,0.82);
        line-height: 1.7;
        max-width: 620px;
        margin-bottom: 1.5rem;
    }
    .rcnk-convener-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255,255,255,0.25);
        border-radius: 30px;
        padding: 6px 16px;
        font-size: 12px;
        color: #9FE1CB;
        font-weight: 500;
        margin-bottom: 1.8rem;
    }
    .rcnk-convener-badge i { font-size: 13px; color: #5DCAA5; }
    .rcnk-hero-btns { display: flex; gap: 12px; flex-wrap: wrap; }
    .rcnk-btn-primary {
        background: #fff;
        color: #006e4f;
        border: none;
        border-radius: 6px;
        padding: 11px 24px;
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        transition: all 0.2s;
    }
    .rcnk-btn-primary:hover { background: #E1F5EE; transform: translateY(-2px); }
    .rcnk-btn-secondary {
        background: transparent;
        color: #fff;
        border: 1.5px solid rgba(255,255,255,0.5);
        border-radius: 6px;
        padding: 11px 24px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        transition: all 0.2s;
    }
    .rcnk-btn-secondary:hover { border-color: #fff; background: rgba(255,255,255,0.08); }

    /* ── Stats bar ── */
    .rcnk-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1px;
        background: #e8e8e8;
        border: 1px solid #e8e8e8;
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 1.5rem;
    }
    .rcnk-stat {
        background: #fff;
        padding: 1.5rem 1rem;
        text-align: center;
    }
    .rcnk-stat-num {
        font-size: 3rem;
        font-weight: 800;
        color: #006e4f;
        line-height: 1;
        margin-bottom: 4px;
    }
    .rcnk-stat-label {
        font-size: 0.85rem;
        font-weight: 500;
        color: #a677b4;
    }

    /* ── Geo note ── */
    .rcnk-geo {
        background: #E1F5EE;
        border-left: 4px solid #006e4f;
        border-radius: 0 8px 8px 0;
        padding: 1rem 1.25rem;
        margin-bottom: 2.5rem;
        font-size: 14px;
        color: #0F6E56;
        line-height: 1.6;
    }
    .rcnk-geo i { margin-right: 6px; font-size: 14px; }

    /* ── Section helpers ── */
    .rcnk-section-label {
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.1em;
        color: #a677b4;
        text-transform: uppercase;
        margin-bottom: 6px;
    }
    .rcnk-section-heading {
        font-size: 1.9rem;
        font-weight: 700;
        color: #006e4f;
        margin: 0 0 1.5rem 0;
        line-height: 1.25;
    }

    /* ── About two-column ── */
    .rcnk-about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        margin-bottom: 2.5rem;
    }
    .rcnk-body-text {
        font-size: 15px;
        line-height: 1.75;
        color: #444;
        margin-bottom: 1rem;
    }
    .rcnk-callout {
        background: linear-gradient(135deg, #04342C 0%, #006e4f 100%);
        border-radius: 10px;
        padding: 1.2rem 1.4rem;
        margin-top: 1.5rem;
        font-size: 13.5px;
        color: #C8EFE4;
        line-height: 1.65;
    }
    .rcnk-callout i { color: #5DCAA5; margin-right: 6px; }

    /* ── Value cards ── */
    .rcnk-value-card {
        background: #fff;
        border: 1px solid #e8e8e8;
        border-radius: 10px;
        padding: 1rem 1.2rem;
        margin-bottom: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .rcnk-value-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    }
    .rcnk-value-title {
        font-size: 13px;
        font-weight: 700;
        color: #006e4f;
        margin-bottom: 4px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .rcnk-value-dot {
        width: 8px; height: 8px;
        border-radius: 50%;
        background: #1D9E75;
        flex-shrink: 0;
    }
    .rcnk-value-desc { font-size: 12.5px; color: #555; line-height: 1.55; }

    /* ── Focus area cards ── */
    .rcnk-focus-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 14px;
        margin-bottom: 2.5rem;
    }
    .rcnk-focus-card {
        background: #fff;
        border: 1px solid #e8e8e8;
        border-radius: 12px;
        padding: 1.2rem 1.25rem;
        box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        transition: transform 0.2s, box-shadow 0.2s;
        border-top: 3px solid #006e4f;
    }
    .rcnk-focus-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 22px rgba(0,0,0,0.09);
    }
    .rcnk-focus-icon {
        width: 38px; height: 38px;
        border-radius: 8px;
        background: #E1F5EE;
        display: flex; align-items: center; justify-content: center;
        margin-bottom: 10px;
    }
    .rcnk-focus-icon i { font-size: 17px; color: #006e4f; }
    .rcnk-focus-title {
        font-size: 14px;
        font-weight: 700;
        color: #006e4f;
        margin-bottom: 6px;
    }
    .rcnk-focus-desc { font-size: 12.5px; color: #555; line-height: 1.55; }

    /* ── Board stats ── */
    .rcnk-board-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 14px;
        margin: 1.25rem 0 1rem;
    }
    .rcnk-board-stat {
        background: #f8f9fa;
        border: 1px solid #e8e8e8;
        border-radius: 10px;
        padding: 1rem 1.1rem;
        text-align: center;
    }
    .rcnk-board-stat-num {
        font-size: 2rem;
        font-weight: 800;
        color: #006e4f;
        line-height: 1;
        margin-bottom: 4px;
    }
    .rcnk-board-stat-label {
        font-size: 11.5px;
        color: #555;
        line-height: 1.4;
    }

    /* ── SOP table ── */
    .rcnk-sop-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
    }
    .rcnk-sop-table th {
        text-align: left;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #666;
        padding: 10px 14px;
        background: #f8f9fa;
        border-bottom: 1px solid #e8e8e8;
    }
    .rcnk-sop-table td {
        padding: 11px 14px;
        border-bottom: 1px solid #f0f0f0;
        color: #333;
        vertical-align: middle;
    }
    .rcnk-sop-table tr:last-child td { border-bottom: none; }
    .rcnk-sop-table tr:hover td { background: #f8fffe; }
    .rcnk-sop-num {
        display: inline-flex;
        align-items: center; justify-content: center;
        width: 28px; height: 28px;
        background: #E1F5EE;
        color: #006e4f;
        font-size: 12px;
        font-weight: 700;
        border-radius: 6px;
    }

    /* ── Responsive ── */
    @media (max-width: 860px) {
        .rcnk-focus-grid  { grid-template-columns: repeat(2, 1fr); }
        .rcnk-board-stats { grid-template-columns: 1fr; gap: 10px; }
        .rcnk-hero h1     { font-size: 2rem; }
        .rcnk-about-grid  { grid-template-columns: 1fr; }
        .rcnk-stats       { grid-template-columns: 1fr; gap: 1px; }
    }
    @media (max-width: 580px) {
        .rcnk-focus-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 480px) {
        .rcnk-hero { padding: 2rem 1.25rem; }
        .rcnk-hero h1 { font-size: 1.7rem; }
        .rcnk-hero-btns { flex-direction: column; }
        .rcnk-btn-primary, .rcnk-btn-secondary { text-align: center; }
    }

    /* ── OCA vetting banner ── */
    .rcnk-oca-banner {
        background: linear-gradient(135deg, #04342C 0%, #0F6E56 100%);
        border-radius: 10px;
        padding: 1.25rem 1.5rem;
        margin-bottom: 1.25rem;
        display: flex;
        gap: 14px;
        align-items: flex-start;
    }
    .rcnk-oca-icon {
        width: 40px; height: 40px;
        background: rgba(255,255,255,0.12);
        border-radius: 8px;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }
    .rcnk-oca-icon i { font-size: 18px; color: #5DCAA5; }
    .rcnk-oca-title {
        font-size: 12px;
        font-weight: 700;
        color: #5DCAA5;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        margin-bottom: 5px;
    }
    .rcnk-oca-body { font-size: 13px; color: #C8EFE4; line-height: 1.65; }

    /* ── Member directory table ── */
    .rcnk-dir-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13.5px;
    }
    .rcnk-dir-table th {
        text-align: left;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #666;
        padding: 10px 14px;
        background: #f8f9fa;
        border-bottom: 1px solid #e8e8e8;
        white-space: nowrap;
    }
    .rcnk-dir-table td {
        padding: 11px 14px;
        border-bottom: 1px solid #f0f0f0;
        color: #333;
        vertical-align: middle;
    }
    .rcnk-dir-table tr:last-child td { border-bottom: none; }
    .rcnk-dir-table tr:hover td { background: #f8fffe; }
    .rcnk-dir-id {
        font-family: 'Courier New', Courier, monospace;
        font-size: 11.5px;
        background: #E1F5EE;
        color: #0F6E56;
        padding: 3px 8px;
        border-radius: 4px;
        white-space: nowrap;
        font-weight: 600;
    }
    .rcnk-dir-county {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-size: 12.5px;
        color: #555;
    }
    .rcnk-dir-county i { font-size: 11px; color: #a677b4; }

    /* ── Campaign card ── */
    .rcnk-campaign-card {
        background: #fff;
        border: 1px solid #e8e8e8;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    }
    .rcnk-campaign-header {
        background: linear-gradient(135deg, #6a0572 0%, #a677b4 100%);
        padding: 1.1rem 1.4rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        flex-wrap: wrap;
    }
    .rcnk-campaign-year {
        background: rgba(255,255,255,0.15);
        border: 1px solid rgba(255,255,255,0.3);
        border-radius: 20px;
        padding: 4px 14px;
        font-size: 12px;
        font-weight: 600;
        color: #fff;
    }
    .rcnk-campaign-name {
        font-size: 15px;
        font-weight: 700;
        color: #fff;
        flex: 1;
    }
    .rcnk-tag {
        display: inline-block;
        font-size: 11px;
        font-weight: 500;
        padding: 3px 10px;
        border-radius: 20px;
        background: #EEEDFE;
        color: #3C3489;
        margin: 2px;
    }

    /* ── Join CTA ── */
    .rcnk-join {
        background: #fff;
        border: 1px solid #e8e8e8;
        border-radius: 12px;
        padding: 2.5rem 2rem;
        text-align: center;
        box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        margin-bottom: 2rem;
    }
    .rcnk-join-inner { position: relative; z-index: 2; }
    .rcnk-join-footer {
        margin-top: 1rem;
        font-size: 11px;
        color: #aaa;
        letter-spacing: 0.03em;
    }

    @media (max-width: 700px) {
        .rcnk-dir-table { font-size: 12px; }
        .rcnk-dir-id { font-size: 10px; }
        .rcnk-dir-table th:nth-child(3),
        .rcnk-dir-table td:nth-child(3) { display: none; }
    }
</style>

<div class="rcnk-page">

    <!-- ═══════════════════════════════════
         HERO BANNER
    ════════════════════════════════════ -->
    <div class="rcnk-hero">
        <div class="rcnk-hero-inner">
            <h1>Radishare CBOs<br><span>Network of Kenya</span></h1>
            <p class="rcnk-hero-sub">A coordinated alliance of Community-Based Organisations convened, coordinated, and chaired by Radishare — working across Kenya's counties to strengthen grassroots impact on gender, health, climate change, education, youth matters, social justice, and more.</p>
            <div class="rcnk-convener-badge">
                <i class="fas fa-award"></i>
                Convened, Coordinated &amp; Chaired by Radishare Co. Ltd
            </div>
            <div class="rcnk-hero-btns">
                <a href="#member-cbos" class="rcnk-btn-primary">
                    <i class="fas fa-users" style="margin-right:7px;"></i>View Member CBOs
                </a>
                <a href="#about-rcnk" class="rcnk-btn-secondary">
                    <i class="fas fa-info-circle" style="margin-right:7px;"></i>Learn More
                </a>
            </div>
        </div>
    </div>

    <!-- ═══════════════════════════════════
         KEY STATS
    ════════════════════════════════════ -->
    <div class="rcnk-stats">
        <div class="rcnk-stat">
            <div class="rcnk-stat-num">9</div>
            <div class="rcnk-stat-label">Vetted CBOs</div>
        </div>
        <div class="rcnk-stat">
            <div class="rcnk-stat-num">9</div>
            <div class="rcnk-stat-label">Counties</div>
        </div>
        <div class="rcnk-stat">
            <div class="rcnk-stat-num">2026</div>
            <div class="rcnk-stat-label">Cohort Year</div>
        </div>
    </div>

    <!-- ═══════════════════════════════════
         GEOGRAPHIC NOTE
    ════════════════════════════════════ -->
    <div class="rcnk-geo">
        <i class="fas fa-map-marker-alt"></i>
        <strong>Spanning 9 counties</strong> — RCNK's vetted member CBOs operate across <strong>Vihiga, Nakuru, Nairobi, Kakamega, Kiambu, Bungoma, Busia, West Pokot, and Trans Nzoia</strong>, with <strong>8 more CBOs in the vetting pipeline</strong> set to expand the network's footprint further.
    </div>

    <!-- ═══════════════════════════════════
         ABOUT RCNK
    ════════════════════════════════════ -->
    <div id="about-rcnk" style="margin-bottom: 2.5rem;">
        <p class="rcnk-section-label"><i class="fas fa-network-wired" style="font-size:11px; margin-right:5px;"></i>About RCNK</p>
        <div class="rcnk-about-grid">

            <!-- Left column — body text + callout -->
            <div>
                <h2 class="rcnk-section-heading">Built on Structure, Trust &amp; Shared Purpose</h2>

                <p class="rcnk-body-text">The <strong>Radishare CBOs Network of Kenya (RCNK)</strong> is a structured civil society network bringing together community-based organisations united by a shared commitment to gender equality, menstrual health, youth development, and social justice.</p>

                <p class="rcnk-body-text">Each member CBO retains full independence while gaining access to collective capacity — joint campaigns, peer learning, standardised operating procedures, resource mobilisation opportunities, and a shared platform for visibility and accountability.</p>

                <p class="rcnk-body-text">The network operates with a formal vetting system, a permanent membership numbering format, and a governance structure that ensures representation across counties and focus areas.</p>

                <div class="rcnk-callout">
                    <i class="fas fa-building"></i>
                    <strong style="color:#9FE1CB;">Radishare Co. Ltd</strong> serves as the founding convener, coordinating hub, permanent Secretariat, and temporary Chairperson of RCNK — providing strategic leadership, administrative support, and the platform infrastructure that powers the network. Radishare will hold the Chair until a suitable organisation or professional is onboarded as permanent Chairperson.
                </div>
            </div>

            <!-- Right column — values/pillars -->
            <div>
                <p style="font-size: 13px; font-weight: 600; color: #666; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 12px;">
                    <i class="fas fa-star" style="color: #a677b4; margin-right:5px;"></i>Network Values &amp; Pillars
                </p>

                <div class="rcnk-value-card">
                    <div class="rcnk-value-title">
                        <span class="rcnk-value-dot"></span>Coordinated Action
                    </div>
                    <p class="rcnk-value-desc">Joint campaigns, pooled learning, and shared advocacy amplify what individual CBOs cannot achieve alone.</p>
                </div>

                <div class="rcnk-value-card">
                    <div class="rcnk-value-title">
                        <span class="rcnk-value-dot"></span>Accountability &amp; Standards
                    </div>
                    <p class="rcnk-value-desc">Vetting, SOPs, and formal membership registers ensure every CBO meets quality and governance thresholds.</p>
                </div>

                <div class="rcnk-value-card">
                    <div class="rcnk-value-title">
                        <span class="rcnk-value-dot"></span>County-Wide Reach
                    </div>
                    <p class="rcnk-value-desc">Members span more than 10 Kenyan counties, ensuring no region's community voice is left out of the network.</p>
                </div>

                <div class="rcnk-value-card">
                    <div class="rcnk-value-title">
                        <span class="rcnk-value-dot"></span>Community-First Mandate
                    </div>
                    <p class="rcnk-value-desc">Every decision and initiative is rooted in the lived realities of the communities each CBO serves on the ground.</p>
                </div>

                <div class="rcnk-value-card">
                    <div class="rcnk-value-title">
                        <span class="rcnk-value-dot"></span>Transparency &amp; Inclusivity
                    </div>
                    <p class="rcnk-value-desc">All Board operations and decisions are documented. CBO member voices are central in shaping network strategies.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- ═══════════════════════════════════
         WHAT WE WORK ON
    ════════════════════════════════════ -->
    <div style="margin-bottom: 2.5rem;">
        <p class="rcnk-section-label"><i class="fas fa-th-large" style="font-size:11px; margin-right:5px;"></i>Thematic Focus</p>
        <h2 class="rcnk-section-heading">What We Work On</h2>
        <div class="rcnk-focus-grid">

            <div class="rcnk-focus-card">
                <div class="rcnk-focus-icon"><i class="fas fa-tint"></i></div>
                <div class="rcnk-focus-title">Menstrual Health &amp; Hygiene</div>
                <p class="rcnk-focus-desc">Sensitisation, supply, and advocacy for MHH across schools and communities.</p>
            </div>

            <div class="rcnk-focus-card">
                <div class="rcnk-focus-icon"><i class="fas fa-venus"></i></div>
                <div class="rcnk-focus-title">Gender Equality &amp; SGBV</div>
                <p class="rcnk-focus-desc">Eliminating gender-based violence and advancing equal rights for women and girls.</p>
            </div>

            <div class="rcnk-focus-card">
                <div class="rcnk-focus-icon"><i class="fas fa-graduation-cap"></i></div>
                <div class="rcnk-focus-title">Youth Development</div>
                <p class="rcnk-focus-desc">Skills, leadership, and economic pathways for young people across Kenya.</p>
            </div>

            <div class="rcnk-focus-card">
                <div class="rcnk-focus-icon"><i class="fas fa-balance-scale"></i></div>
                <div class="rcnk-focus-title">Social Justice</div>
                <p class="rcnk-focus-desc">Advocacy for marginalised communities including PWDs, indigenous groups, and orphans.</p>
            </div>

            <div class="rcnk-focus-card">
                <div class="rcnk-focus-icon"><i class="fas fa-heartbeat"></i></div>
                <div class="rcnk-focus-title">Community Health</div>
                <p class="rcnk-focus-desc">Integrated health programming including reproductive, maternal, and primary healthcare.</p>
            </div>

            <div class="rcnk-focus-card">
                <div class="rcnk-focus-icon"><i class="fas fa-book-open"></i></div>
                <div class="rcnk-focus-title">Education &amp; Literacy</div>
                <p class="rcnk-focus-desc">School retention, safe learning environments, and community-based adult literacy.</p>
            </div>

        </div>
    </div>

    <!-- ═══════════════════════════════════
         NETWORK LEADERSHIP & GOVERNANCE
    ════════════════════════════════════ -->
    <div style="margin-bottom: 2.5rem; background: linear-gradient(135deg, #f8f9fa 0%, #eef2f7 100%); border-radius: 12px; padding: 2rem;">
        <p class="rcnk-section-label"><i class="fas fa-landmark" style="font-size:11px; margin-right:5px;"></i>Board Governance</p>
        <h2 class="rcnk-section-heading" style="margin-bottom: 0.75rem;">Network Leadership &amp; Governance</h2>

        <p class="rcnk-body-text" style="margin-bottom: 0;">RCNK is governed by a <strong>7-member Board</strong> comprising Radishare Co. Ltd as temporary Chairperson and permanent Secretariat, alongside five representatives drawn from vetted member CBOs — ensuring strategic oversight and grassroots voice.</p>

        <div class="rcnk-board-stats">
            <div class="rcnk-board-stat">
                <div class="rcnk-board-stat-num">7</div>
                <div class="rcnk-board-stat-label">Board Members<br><span style="color:#a677b4;">1 Chair &middot; 1 Secretariat &middot; 5 CBO Reps</span></div>
            </div>
            <div class="rcnk-board-stat">
                <div class="rcnk-board-stat-num" style="font-size:1.6rem;">1 yr</div>
                <div class="rcnk-board-stat-label">CBO Member Term<br><span style="color:#a677b4;">Annual renewal, staggered rotation</span></div>
            </div>
            <div class="rcnk-board-stat">
                <div class="rcnk-board-stat-num" style="font-size:1.3rem;">Quarterly</div>
                <div class="rcnk-board-stat-label">Board Meetings<br><span style="color:#a677b4;">In-person or virtual</span></div>
            </div>
        </div>

        <p style="font-size: 12px; color: #888; margin-top: 0.5rem;">
            <i class="fas fa-info-circle" style="margin-right:5px; color:#a677b4;"></i>
            * Full board profiles and CBO representative seats will be published once the 2026 vetting cohort is complete and appointments are confirmed.
        </p>
    </div>

    <!-- ═══════════════════════════════════
         STANDARD OPERATING PROCEDURES
    ════════════════════════════════════ -->
    <div style="margin-bottom: 2rem;">
        <p class="rcnk-section-label"><i class="fas fa-file-alt" style="font-size:11px; margin-right:5px;"></i>Standards &amp; Procedures</p>
        <h2 class="rcnk-section-heading">Standard Operating Procedures</h2>
        <p class="rcnk-body-text" style="max-width: 640px;">RCNK is developing a set of SOPs to guide consistent, ethical, and accountable practice across all member CBOs. Documents will be published here as they are finalised.</p>

        <div style="border: 1px solid #e8e8e8; border-radius: 12px; overflow: hidden; background: #fff; box-shadow: 0 3px 10px rgba(0,0,0,0.05);">
            <table class="rcnk-sop-table">
                <thead>
                    <tr>
                        <th style="width: 56px;">#</th>
                        <th>Standard Operating Procedure</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="rcnk-sop-num">01</span></td>
                        <td>CBO Vetting &amp; Onboarding</td>                    </tr>
                    <tr>
                        <td><span class="rcnk-sop-num">02</span></td>
                        <td>Membership Numbering &amp; Registry</td>                    </tr>
                    <tr>
                        <td><span class="rcnk-sop-num">03</span></td>
                        <td>Joint Campaign Protocols</td>                    </tr>
                    <tr>
                        <td><span class="rcnk-sop-num">04</span></td>
                        <td>Data Collection &amp; Reporting</td>                    </tr>
                    <tr>
                        <td><span class="rcnk-sop-num">05</span></td>
                        <td>Safeguarding &amp; Ethics</td>                    </tr>
                    <tr>
                        <td><span class="rcnk-sop-num">06</span></td>
                        <td>Communication &amp; Branding</td>                    </tr>
                    <tr>
                        <td><span class="rcnk-sop-num">07</span></td>
                        <td>Financial Management &amp; Accountability</td>                    </tr>
                    <tr>
                        <td><span class="rcnk-sop-num">08</span></td>
                        <td>Conflict of Interest &amp; Whistleblowing</td>                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ═══════════════════════════════════
         VETTED MEMBER CBOs
    ════════════════════════════════════ -->
    <div id="member-cbos" style="margin-bottom: 2.5rem;">
        <p class="rcnk-section-label"><i class="fas fa-id-badge" style="font-size:11px; margin-right:5px;"></i>Member Directory</p>
        <h2 class="rcnk-section-heading">Vetted Member CBOs</h2>

        <!-- OCA Vetting Banner -->
        <div class="rcnk-oca-banner">
            <div class="rcnk-oca-icon"><i class="fas fa-shield-alt"></i></div>
            <div>
                <p class="rcnk-oca-title"><i class="fas fa-check-circle" style="margin-right:5px;"></i>Rigorously vetted &middot; International OCA Standards</p>
                <p class="rcnk-oca-body">Every CBO listed here has undergone RCNK's thorough vetting process, modelled on internationally recognised <strong style="color:#9FE1CB;">Organisational Capacity Assessment (OCA)</strong> standards. The assessment evaluates governance &amp; legal standing, financial management, programme delivery capacity, safeguarding policies, human resources, and strategic planning — ensuring only accountable, capable, and ethical organisations hold network membership.</p>
            </div>
        </div>

        <!-- Directory Table -->
        <div style="border: 1px solid #e8e8e8; border-radius: 12px; overflow: hidden; background: #fff; box-shadow: 0 3px 10px rgba(0,0,0,0.05); margin-bottom: 1rem;">
            <table class="rcnk-dir-table">
                <thead>
                    <tr>
                        <th>CBO Name</th>
                        <th>County</th>
                        <th>Membership ID</th>
                        <th>Admitted</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Survivors CBO Vihiga</strong></td>
                        <td><span class="rcnk-dir-county"><i class="fas fa-map-pin"></i>Vihiga</span></td>
                        <td><span class="rcnk-dir-id">RCNK-VHG-2026-001</span></td>
                        <td style="font-size:12.5px; color:#666; white-space:nowrap;">20 May 2026</td>
                    </tr>
                    <tr>
                        <td><strong>Arthur For Others Organisation</strong></td>
                        <td><span class="rcnk-dir-county"><i class="fas fa-map-pin"></i>Nakuru</span></td>
                        <td><span class="rcnk-dir-id">RCNK-NKR-2026-002</span></td>
                        <td style="font-size:12.5px; color:#666; white-space:nowrap;">25 May 2026</td>
                    </tr>
                    <tr>
                        <td><strong>Bethel Organisation</strong></td>
                        <td><span class="rcnk-dir-county"><i class="fas fa-map-pin"></i>Nairobi</span></td>
                        <td><span class="rcnk-dir-id">RCNK-NRB-2026-003</span></td>
                        <td style="font-size:12.5px; color:#666; white-space:nowrap;">25 May 2026</td>
                    </tr>
                    <tr>
                        <td><strong>Vision Carriers CBO</strong></td>
                        <td><span class="rcnk-dir-county"><i class="fas fa-map-pin"></i>Kakamega</span></td>
                        <td><span class="rcnk-dir-id">RCNK-KKG-2026-004</span></td>
                        <td style="font-size:12.5px; color:#666; white-space:nowrap;">25 May 2026</td>
                    </tr>
                    <tr>
                        <td><strong>Youth Advisory Champions for Health (YACH) CBO</strong></td>
                        <td><span class="rcnk-dir-county"><i class="fas fa-map-pin"></i>Kiambu</span></td>
                        <td><span class="rcnk-dir-id">RCNK-KMB-2026-005</span></td>
                        <td style="font-size:12.5px; color:#666; white-space:nowrap;">6 Jun 2026</td>
                    </tr>
                    <tr>
                        <td><strong>Make A Girl Smile (MAGS) CBO</strong></td>
                        <td><span class="rcnk-dir-county"><i class="fas fa-map-pin"></i>Bungoma</span></td>
                        <td><span class="rcnk-dir-id">RCNK-BGM-2026-006</span></td>
                        <td style="font-size:12.5px; color:#666; white-space:nowrap;">6 Jun 2026</td>
                    </tr>
                    <tr>
                        <td><strong>Justice Center Busia CBO</strong></td>
                        <td><span class="rcnk-dir-county"><i class="fas fa-map-pin"></i>Busia</span></td>
                        <td><span class="rcnk-dir-id">RCNK-BSA-2026-007</span></td>
                        <td style="font-size:12.5px; color:#666; white-space:nowrap;">6 Jun 2026</td>
                    </tr>
                    <tr>
                        <td><strong>I-Rep Foundation CBO</strong></td>
                        <td><span class="rcnk-dir-county"><i class="fas fa-map-pin"></i>West Pokot</span></td>
                        <td><span class="rcnk-dir-id">RCNK-WPK-2026-008</span></td>
                        <td style="font-size:12.5px; color:#666; white-space:nowrap;">6 Jun 2026</td>
                    </tr>
                    <tr>
                        <td><strong>Lynya CBO</strong></td>
                        <td><span class="rcnk-dir-county"><i class="fas fa-map-pin"></i>Trans Nzoia</span></td>
                        <td><span class="rcnk-dir-id">RCNK-TNZ-2026-009</span></td>
                        <td style="font-size:12.5px; color:#666; white-space:nowrap;">6 Jun 2026</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pending note -->
        <div style="display:flex; align-items:flex-start; gap:10px; background:#faf7ff; border:1px solid #e0d9f7; border-radius:8px; padding:12px 14px;">
            <i class="fas fa-hourglass-half" style="color:#a677b4; font-size:14px; margin-top:2px; flex-shrink:0;"></i>
            <p style="font-size:13px; color:#555; margin:0; line-height:1.6;">
                <strong style="color:#6a0572;">8 additional CBOs</strong> are currently progressing through the OCA vetting process. They will be listed here upon successful completion.
            </p>
        </div>
    </div>

    <!-- ═══════════════════════════════════
         COLLABORATION & JOINT CAMPAIGNS
    ════════════════════════════════════ -->
    <div style="margin-bottom: 2.5rem;">
        <p class="rcnk-section-label"><i class="fas fa-handshake" style="font-size:11px; margin-right:5px;"></i>Joint Initiatives</p>
        <h2 class="rcnk-section-heading">Collaboration &amp; Joint Campaigns</h2>
        <p class="rcnk-body-text" style="max-width:640px; margin-bottom:1.25rem;">RCNK coordinates joint campaigns that unite member CBOs around shared advocacy moments — delivering wider reach, unified messaging, and greater collective impact.</p>

        <div class="rcnk-campaign-card">
            <div class="rcnk-campaign-header">
                <span class="rcnk-campaign-year">2025</span>
                <p class="rcnk-campaign-name">16 Days of Activism Against Gender-Based Violence</p>
            </div>
            <div style="padding:1.25rem 1.4rem;">
                <p style="font-size:14px; color:#444; line-height:1.7; margin-bottom:1rem;">A coordinated joint campaign uniting RCNK member CBOs across multiple counties to mark the global <strong>16 Days of Activism (25 Nov – 10 Dec)</strong>. Activities included community awareness events, social media amplification, survivor spotlights, and joint advocacy letters to county governments.</p>
                <div>
                    <span class="rcnk-tag">GBV Awareness</span>
                    <span class="rcnk-tag">Multi-County</span>
                    <span class="rcnk-tag">16 Days 2025</span>
                    <span class="rcnk-tag">Joint Campaign</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══════════════════════════════════
         JOIN THE NETWORK
    ════════════════════════════════════ -->
    <div class="rcnk-join">
        <div class="rcnk-join-inner">
            <p style="font-size:11px; font-weight:600; letter-spacing:0.1em; color:#a677b4; text-transform:uppercase; margin-bottom:8px;">
                <i class="fas fa-users" style="margin-right:5px;"></i>Join the Network
            </p>
            <h2 style="font-size:2rem; font-weight:700; color:#006e4f; margin:0 0 0.75rem 0; line-height:1.2;">Is Your CBO Ready to Join RCNK?</h2>
            <p style="font-size:15px; color:#555; max-width:560px; margin:0 auto 1.75rem; line-height:1.7;">We welcome applications from community-based organisations working in gender, health, youth, or social justice across any Kenyan county. Vetting is <strong style="color:#006e4f;">free, transparent, and merit-based.</strong></p>
            <div style="display:flex; gap:12px; justify-content:center; flex-wrap:wrap;">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@radi-share.co.ke&su=RCNK%20Membership%20Application" target="_blank" class="rcnk-btn-primary">
                    <i class="fas fa-file-signature" style="margin-right:7px;"></i>Apply for Membership
                </a>
                <a href="#" class="rcnk-btn-secondary">
                    <i class="fas fa-download" style="margin-right:7px;"></i>Download CBO Criteria
                </a>
            </div>
            <p class="rcnk-join-footer">
                RCNK &mdash; Radishare CBOs Network of Kenya &nbsp;&bull;&nbsp; Convened, Coordinated &amp; Chaired by Radishare Co. Ltd
            </p>
        </div>
    </div>

</div>
