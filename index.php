<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Yu | Portfolio</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- ================= NAVBAR ================= -->

<header class="navbar">
    <div class="nav-container">

        <a href="#home" class="logo">
            Yu
        </a>

        <nav class="nav-links" id="navLinks">
            <a href="#home">خانه</a>
            <a href="#skills">مهارت‌ها</a>
            <a href="#projects">پروژه‌ها</a>
            <a href="#about">درباره من</a>
            <a href="#contact">ارتباط</a>
        </nav>

        <button class="menu-btn" id="menuBtn">
            ☰
        </button>

    </div>
</header>


<!-- ================= HERO ================= -->

<section class="hero" id="home">

    <video class="hero-video" autoplay muted loop playsinline>
        <source src="videos/background.mp4" type="video/mp4">
    </video>

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <p class="hero-small">PORTFOLIO</p>

        <h1>
            امیرمهدی قربانی
        </h1>

        <h2>
            <span>Yu</span>
        </h2>

        <div class="hero-role">
            Web Developer
        </div>

        <div class="tech-list">
            <span>Python</span>
            <span>HTML</span>
            <span>CSS</span>
            <span>JavaScript</span>
            <span>WordPress</span>
            <span>Git/GitHub</span>
        </div>

        <div class="hero-buttons">
            <a href="#projects" class="btn primary">
                پروژه‌ها
            </a>

            <a href="#contact" class="btn secondary">
                ارتباط با من
            </a>
        </div>

    </div>

    <div class="scroll-down">
        ↓
    </div>

</section>


<!-- ================= SKILLS ================= -->

<section class="section" id="skills">

    <div class="section-title">
        <span>01</span>
        <h2>مهارت‌ها</h2>
    </div>

    <div class="skills-grid">

        <div class="skill-card">
            <div class="skill-number">01</div>
            <h3>Python</h3>
            <p>برنامه‌نویسی و ساخت پروژه‌های کاربردی</p>
        </div>

        <div class="skill-card">
            <div class="skill-number">02</div>
            <h3>HTML</h3>
            <p>ساخت ساختار صفحات وب</p>
        </div>

        <div class="skill-card">
            <div class="skill-number">03</div>
            <h3>CSS</h3>
            <p>طراحی و استایل‌دهی صفحات وب</p>
        </div>

        <div class="skill-card">
            <div class="skill-number">04</div>
            <h3>JavaScript</h3>
            <p>تعامل و قابلیت‌های سمت کاربر</p>
        </div>

        <div class="skill-card">
            <div class="skill-number">05</div>
            <h3>WordPress</h3>
            <p>ساخت و شخصی‌سازی سایت</p>
        </div>

        <div class="skill-card">
            <div class="skill-number">06</div>
            <h3>Git / GitHub</h3>
            <p>مدیریت پروژه و نسخه‌های کد</p>
        </div>

    </div>

</section>


<!-- ================= PROJECTS ================= -->

<section class="section projects-section" id="projects">

    <div class="section-title">
        <span>02</span>
        <h2>پروژه‌ها</h2>
    </div>

    <div class="projects-grid">

        <article class="project-card">

            <div class="project-image">
                <div class="project-number">
                    01
                </div>

                <div class="project-code">
                    &lt;/&gt;
                </div>
            </div>

            <div class="project-info">

                <span class="project-type">
                    Web Development
                </span>

                <h3>
                    Personal Portfolio
                </h3>

                <p>
                    وب‌سایت شخصی و Portfolio من
                </p>

                <div class="project-tech">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>PHP</span>
                </div>

                <a href="https://github.com/aa10101010101010101010aa-sudo"
                   target="_blank"
                   class="project-link">
                    مشاهده در GitHub ↗
                </a>

            </div>

        </article>


        <article class="project-card empty-project">

            <div class="empty-content">
                <span>COMING SOON</span>
                <h3>پروژه بعدی</h3>
                <p>به‌زودی...</p>
            </div>

        </article>

    </div>

</section>


<!-- ================= ABOUT ================= -->

<section class="section about-section" id="about">

    <div class="section-title">
        <span>03</span>
        <h2>درباره من</h2>
    </div>

    <div class="about-box">

        <div class="about-main">
            <div class="about-label">
                ABOUT
            </div>

            <h2>
                Yu
            </h2>

            <p>
                توسعه‌دهنده وب و علاقه‌مند به برنامه‌نویسی
            </p>
        </div>

        <div class="about-info">

            <div>
                <span>نام</span>
                <strong>امیرمهدی قربانی</strong>
            </div>

            <div>
                <span>نام کاربری</span>
                <strong>Yu</strong>
            </div>

            <div>
                <span>سن</span>
                <strong>18</strong>
            </div>

            <div>
                <span>حوزه</span>
                <strong>Web Development</strong>
            </div>

        </div>

    </div>

</section>


<!-- ================= CONTACT ================= -->

<section class="section contact-section" id="contact">

    <div class="section-title">
        <span>04</span>
        <h2>ارتباط</h2>
    </div>

    <div class="contact-grid">

        <a href="https://t.me/ploplayer"
           target="_blank"
           class="contact-card">

            <span class="contact-icon">↗</span>

            <div>
                <small>TELEGRAM</small>
                <h3>@ploplayer</h3>
            </div>

        </a>


        <a href="mailto:aa10101010101010101010aa@gmail.com"
           class="contact-card">

            <span class="contact-icon">↗</span>

            <div>
                <small>EMAIL</small>
                <h3>ایمیل</h3>
            </div>

        </a>


        <a href="https://github.com/aa10101010101010101010aa-sudo"
           target="_blank"
           class="contact-card">

            <span class="contact-icon">↗</span>

            <div>
                <small>GITHUB</small>
                <h3>GitHub</h3>
            </div>

        </a>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <div class="footer-logo">
        Yu
    </div>

    <p>
        © 2026 Yu
    </p>

    <p class="footer-tech">
        Built with HTML / CSS / JavaScript
    </p>

</footer>


<script src="script.js"></script>

</body>
</html>