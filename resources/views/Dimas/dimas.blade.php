<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- UNICONS  -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
        <!-- SWIPER CSS  -->
        <link rel="stylesheet" href="{{ asset('Assets-dimas/swiper-bundle.min.css') }}">>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('Assets-dimas/styles.css') }}">>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('Assets-dimas/smile.png') }}" type="img" sizes="16x16">


        <title>cv Dimas adriyanto </title>
    </head>
    <body>
        <!-- HEADER -->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Dimas Adriyanto</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
                                <i class="uil uil-estate nav__icon"></i> Home
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="uil uil-user nav__icon"></i> About
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i> Skills
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i> Portfolio
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class="uil uil-message nav__icon"></i> Contact
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>
               
                <div class="nav__btns">
                    <!-- Theme Change Button -->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!-- MAIN -->
        <main class="main">
            <!-- HOME -->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a target="_blank" href="https://www.linkedin.com/in/dimas adriyanto/" class="home__social-icon">
                                <i class="uil uil-linkedin-alt"></i>
                            </a>

                            <a target="_blank" href="https://github.com/DimasMids444" class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                            </a>

                            <a target="_blank" href="https://www.twitter.com/yourfavdreams" class="home__social-icon">
                            <i class="uil uil-twitter"></i>
                            </a>
                        </div>

                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                            <image class="home__blob-img" x='12' y='18' xlink:href="{{ asset('Assets-dimas/kon.jpg') }}" />
                            </svg>
                        </div>

                        <div class="home__data">
                            <h1 class="home__title">Hi, I'm Dimas</h1>
                            <h3 class="home__subtitle">Front Developer</h3>
                            <p class="home__description">Memiliki pengalaman yang baik dalam pengembangan frontend. Saya sangat percaya pada kualitas dan ramah pengguna. </p>
                            <a href="#contact" class="button button--flex">
                                Contact Me <i class="uil uil-message button__icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-button button--flex">
                            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                            <span class="home__scroll--name">Scroll down</span>
                            <i class="uil uil-arrow-down home__scroll-arrow"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section__title">About Me</h2>
                <span class="section__subtitle">A little about me.</span>

                <div class="about__container container grid">
                <img src="{{ asset('Assets-dimas/samid.jpg') }}" alt="picture" class="samid__img">
                    <div class="aabout__data">
                        <p class="about__description">Memiliki pengalaman yang baik dalam pengembangan frontend. Saya sangat percaya pada kualitas dan ramah pengguna.</p>

                        <div class="about__info">
                            <div>
                                <span class="about__info-title">3+</span>
                                <span class="about__info-name">Months <br> experience</span>
                            </div>

                            <div>
                                <span class="about__info-title">3+</span>
                                <span class="about__info-name">Completed <br> projects</span>
                            </div>

                            <div>
                                <span class="about__info-title">00+</span>
                                <span class="about__info-name">Companies <br> worked</span>
                            </div>
                        </div>

                        <div class="about__buttons">
                            <a download="" href="yihiha.jpg" class="button button--flex">
                            Download CV <i class="uil uil-download-alt button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SKILLS -->
            <section class="skills section" id="skills">
                <h2 class="section__title">Skills</h2>
                <span class="section__subtitle">Tentang pekerjaan kecil ku</span>

                <div class="skills__container container grid">
                    <div>
                        <!--==================== SKILL 1====================-->
                        <div class="skills__content skills__open">
                            <div class="skills__header">
                                <i class="uil uil-brackets-curly skills__icon"></i>

                                <div>
                                    <h1 class="skills__title">Frontend developer</h1>
                                    <span class="skills__subtitle">kurang lebih lebih 3 bulan</span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">HTML</h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__html"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">CSS</h3>
                                        <span class="skills__number">40%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__css"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Bootstrap</h3>
                                        <span class="skills__number">60%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__bootstrap"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">JavaScript</h3>
                                        <span class="skills__number">20%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__js"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SKILL 2 -->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-server-network skills__icon"></i>
                        
                                <div>
                                    <h1 class="skills__title">Backend developer</h1>
                                    <span class="skills__subtitle">kurang lebih 6 bulan</span>
                                </div>
                        
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                        
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">PHP</h3>
                                        <span class="skills__number">50%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__php"></span>
                                    </div>
                                </div>
                        
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Node Js</h3>
                                        <span class="skills__number">10%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__node"></span>
                                    </div>
                                </div>
                        
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Git</h3>
                                        <span class="skills__number">60%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__git"></span>
                                    </div>
                                </div>
                        
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">WordPress</h3>
                                        <span class="skills__number">75%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__wordpress"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!--==================== SKILL 3====================-->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-swatchbook skills__icon"></i>
                        
                                <div>
                                    <h1 class="skills__title">Designer</h1>
                                    <span class="skills__subtitle">Kurang lebih 1 tahun</span>
                                </div>
                        
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                        
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Figma</h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__figma"></span>
                                    </div>
                                </div>
                        
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Sketch</h3>
                                        <span class="skills__number">75%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__sketch"></span>
                                    </div>
                                </div>
                        
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Canva</h3>
                                        <span class="skills__number">60%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__canva"></span>
                                    </div>
                                </div>
                        
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Adobe XD</h3>
                                        <span class="skills__number">40%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__adobexd"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- QUALIFICATION -->
            <section class="qualification  section">
                <h2 class="section__title">Qualification</h2>
                <span class="section__subtitle">Perjalanan pendidikan saya</span>

                <div class="qualification__container container">
                    <div class="qualification__tabs">

                        <div class="qualification__button button--flex qualification__active" data-target="#education">
                            <i class="uil uil-graduation-cap qualification__icon"></i>
                            Pendidikan
                        </div>
                    </div>

                    <div class="qualification__sections">

                        <!-- QUALIFICATION Content 1 -->
                        <div class="qualification__content qualification__active" data-content id="education">

                            <!-- QUALIFICATION 1 -->
                            <div class="qualification__data">
                                <div></div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>

                                <div>
                                    <h3 class="qualifcation__title">Sekolah Menengah Kejuruan (SMK) </h3>
                                    <span class="qualification__subtitle">SMK Taruna Bhakti - Depok</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2020 - 2022
                                    </div>
                                </div>
                            </div>

                            <!-- QUALIFICATION 2-->
                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualifcation__title">Sekolah Menengah Pertama (SMP))</h3>
                                    <span class="qualification__subtitle">SMPN 15 Depok - Depok</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2017 - 2020
                                    </div>
                                </div>
                            
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>


                            <!-- QUALIFICATION 3 -->
                            <div class="qualification__data">
                                <div></div>
                            
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <!-- <span class="qualification__line"></span> -->
                                </div>
                                <div>
                                    <h3 class="qualifcation__title">Sekolah Dasar (SD)</h3>
                                    <span class="qualification__subtitle">SDN Curug 5 - Depok</span>
                                    <div class="qualification__calendar">
                                        <i class="uil uil-calendar-alt"></i>
                                        2010 - 2016
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">
                <h2 class="section__title">Contact Me</h2>
                <span class="section__subtitle">Get in touch</span>

                <div class="contact__container container grid">
                    <div>
                        <div class="contact__information">
                            <i class="uil uil-uil uil-phone contact__icon"></i>

                            <div>
                                <h3 class="contact__title">Call Me</h3>
                                <span class="contact__subtitle">081296885059</span>
                            </div>
                        </div>

                        <div class="contact__information">
                            <i class="uil uil-envelope contact__icon"></i>
                        
                            <div>
                                <h3 class="contact__title">Email Me</h3>
                                <span class="contact__subtitle">Dimasadriyanto21@gmail.com</span>
                            </div>
                        </div>

                        <div class="contact__information">
                            <i class="uil uil-map-marker contact__icon"></i>
                        
                            <div>
                                <h3 class="contact__title">Address</h3>
                                <span class="contact__subtitle">Tipar - Depok</span>
                            </div>
                        </div>
                    </div>

                    <form action="" class="contact__form grid">
                        <div class="contact__inputs grid">
                            <div class="contact__content">
                                <label for="Name" class="contact__label">Name</label>
                                <input type="text" class="contact__input">
                            </div>
                            <div class="contact__content">
                                <label for="Email" class="contact__label">Email</label>
                                <input type="email" class="contact__input">
                            </div>
                        </div>
                        <div class="contact__content">
                            <label for="Email" class="contact__label">Project</label>
                            <input type="text" class="contact__input">
                        </div>
                        <div class="contact__content">
                            <label for="Email" class="contact__label">Message</label>
                            <textarea name="" id="" cols="0" rows="7" class="contact__input"></textarea>
                        </div>

                        <div>
                            <a href="#" class="button button--flex">
                                Send Message
                                <i class="uil uil-message button__icon"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container grid">
                    <div>
                        <h6 class="footer__title" style="font-size: 25px;">Dimas adriyanto</h6>
                        <span class="footer_subtitle">Frontend Developer</span>
                    </div>

                    <ul class="footer__links">
                        <li>
                            <a href="#portfolio" class="footer__link">Portfolio</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer__link">Contact</a>
                        </li>
                    </ul>

                    <div class="footer__socials">
                        <a target="_blank" href="https://facebook.com/Dimas adriyanto" class="footer__social">
                            <i class="uil uil-facebook-f"></i>
                        </a>

                        <a target="_blank" href="https://instagram.com/midxiety" class="footer__social">
                        <i class="uil uil-instagram-alt"></i>
                        </a>

                        <a target="_blank" href="https://twitter.com/yourfavdreams" class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                        </a>

                        <a target="_blank" href="https://github.com/DimasMids444" class="footer__social">
                            <i class="uil uil-github"></i>
                        </a>
                    </div>
                </div>

                <p class="footer__copy">&#169; Dimas Adriyanto - All Rights Reserved.</p>
            </div>
        </footer>
        
        <!--==================== SCROLL TOP ====================-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup__icon"></i>
        </a>

        <!--==================== SWIPER JS ====================-->
        <script src="{{ asset('Assets-dimas/swiper-bundle.min.js') }}"></script>
        <!--==================== MAIN JS ====================-->
        <script src="{{ asset('Assets-dimas/main.js') }}"></script>
    </body>
</html>