<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BOX ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('Assets-deren/css/styles.css')}}">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('Assets-deren/img/deren.jpg')}}"  type="image/jpg">

        <title>CV Deren</title>
    </head>
    <body>
        <!-- HEADER -->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav_logo">Arya Darren Prayogo</a>
                <div class="nav_menu" id="nav-menu">
                    <ul class="nav_list">
                        <li class="nav_item">
                            <a href="#home" class="nav_link active-link">
                                <i class='bx bx-home nav_icon'></i>Home
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#profile" class="nav_link">
                                <i class='bx bx-user nav_icon'></i>Profile
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#education" class="nav_link">
                                <i class='bx bx-book nav_icon'></i>Education
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#skills" class="nav_link">
                                <i class='bx bx-receipt nav_icon'></i>Skills
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#experience" class="nav_link">
                                <i class='bx bx-briefcase-alt nav_icon'></i>R
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#certificate" class="nav_link">
                                <i class='bx bx-award nav_icon'></i>Certificate
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#references" class="nav_link">
                                <i class='bx bx-link-external nav_icon'></i>References
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nav_toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <main class="l-main bd-container">
            <!-- All elements within this div, is generated in PDF -->
            <div class="resume" id="area-cv">
                <div class="resume__left">
                    <!-- HOME -->
                    <section class="home" id="home">
                        <div class="home_containter section bd-grid">
                            <div class="home_data bd-grid">
                                <img  src="{{ asset('Assets-deren/img/deren.jpg') }}" alt="" class="home_img center">
                                <h1 class="home_title">Arya <b>Darren Prayogo</b></h1>
                                <h3 class="home_profession">Web Developer</h3>
                                <!-- Button to generate and download the pdf. Available for desktop. -->
                                <div>
                                    <a download="" href="assets/pdf/Muhammadessa-resume.pdf" class="home_button-movil">Download</a>
                                </div>
                            </div>
                            <div class="home_address bd-grid">
                                <span class="home_information">
                                    <i class="bx bx-map"> &nbsp; </i> Indonesia, Jawa Barat 
                                </span>
                                <span class="home_information">
                                    <i class="bx bx-envelope"> &nbsp; </i> aryadarrenp@gmail.com
                                </span>
                                <span class="home_information">
                                    <i class="bx bx-phone"> &nbsp; </i> +62 896 8462 3421
                                </span>
                            </div>
                        </div>
                        
                        <!-- Theme change button -->
                        <i class="bx bx-moon change-theme" title="Theme" id="theme-button"></i>
                        <!-- Button to generate and download the pdf. Available for desktop -->
                        <i class="bx bx-download generate-pdf" title="Generate PDF" id="resume-button"></i>
                    </section>          
                    
                    <!-- SOCIAL -->
                    <section class="social section">
                        <h2 class="section-title">SOSMED</h2>
                        <div class="social_container bd-grid">
                            <a href="https://www.linkedin.com/in/imuhammadessa/" target="_blank" class="social_link">
                                <i class="bx bxl-linkedin-square social_icon"></i> @imuhammadessa
                            </a>
                            <a href="https://github.com/imuhammadessa/" target="_blank" class="social_link">
                                <i class="bx bxl-github social_icon"></i> @imuhammadessa
                            </a>
                            <a href="https://twitter.com/imuhammadessa" target="_blank" class="social_link">
                                <i class="bx bxl-twitter social_icon"></i> @imuhammadessa
                            </a>
                        </div>
                    </section>
                    <!-- PROFILE -->
                    <section class="profile section" id="profile">
                        <h2 class="section-title">Profile</h2>
                        <p class="profile_description">
                            I am a person, very responsible for work during working hours assigned by a company. I am very goal oriented, result driven, detailed and focused person. I have several years of experiences & achievements in this field.
                        </p>
                    </section>
                    
                    <!-- EDUCATION -->
                    <section class="education section" id="education">
                        <h2 class="section-title">Asal Sekolah</h2>
                        <div class="education_container bd-grid">
                            <div class="education_content">
                                <div class="education_time">
                                    <span class="education_rounder"></span>
                                    <span class="education_line"></span>
                                </div>
                                <div class="education_data bd-grid">
                                    <h3 class="education_title">Sekolah Dasar</h3>
                                    <span class="education_studies">SDIT Nahwa Nur , Bogor</span>
                                    <span class="education_year">2012 - 2017</span>
                                </div>
                            </div>
                            <div class="education_content">
                                <div class="education_time">
                                    <span class="education_rounder"></span>
                                    <span class="education_line"></span>
                                </div>
                                <div class="education_data bd-grid">
                                    <h3 class="education_title">Sekolah Menengah Pertana</h3>
                                    <span class="education_studies">MTs Al-Muhajirin , Depok</span>
                                    <span class="education_year">2018 - 2020</span>
                                </div>
                            </div>
                            <div class="education_content">
                                <div class="education_time">
                                    <span class="education_rounder"></span>
                                    <!-- <span class="education_line"></span> -->
                                </div>
                                <div class="education_data bd-grid">
                                    <h3 class="education_title">Sekolah Menengah Kejuruan</h3>
                                    <span class="education_studies">SMK Taruna Bhakti, Depok</span>
                                    <span class="education_year">2021 - 2024</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SKILLS  -->
                    <section class="skills section" id="skills">
                        <h2 class="section-title">Skills</h2>
                        <div class="skills_content bd-grid">
                            <ul class="skills_data">
                                <li class="skills_name">
                                    <span class="skills_circle"></span> HTML
                                </li>
                                <li class="skills_name">
                                    <span class="skills_circle"></span> CSS
                                </li>
                                <li class="skills_name">
                                    <span class="skills_circle"></span> BOOTSTRAP
                                </li>
                                <li class="skills_name">
                                    <span class="skills_circle"></span> JAVASCRIPT
                                </li>
                            </ul>
                            <ul class="skills_data">
                                <li class="skills_name">
                                    <span class="skills_circle"></span>PHP
                                </li>
                                <li class="skills_name">
                                    <span class="skills_circle"></span>MYSQL
                                </li>
                                <li class="skills_name">
                                    <span class="skills_circle"></span>LARAVEL
                                </li>
                                <li class="skills_name">
                                    <span class="skills_circle"></span>GIT
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="resume__right">
                    <!-- EXPERIENCE -->
                    <section class="experience section" id="experience">
                        <h2 class="section-title">Refrensi</h2>
                        <div class="experience_container bd-grid">
                            <div class="experience_content">
                                <div class="experience_time">
                                    <span class="experience_rounder"></span>
                                    <span class="experience_line"></span>
                                </div>
                                <div class="experience_data bd-grid">
                                    <h3 class="experience_title">Pak Eraldo</h3>
                                    <span class="experience_company">April 2021 - Till date | <a href="https://itartificer.com/">IT Artificer</a> </span>
                                    <p class="experience_description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, quia rem? Minus dolores explicabo eos blanditiis laudantium autem architecto asperiores!
                                    </p>
                                </div>
                            </div>
                            <div class="experience_content">
                                <div class="experience_time">
                                    <span class="experience_rounder"></span>
                                    <!-- <span class="experience_line"></span> -->
                                </div>
                                <div class="experience_data bd-grid">
                                    <h3 class="experience_title">Pak Agus</h3>
                                    <span class="experience_company">Nov 2020 - Dec 2020 | <a href="https://interns.pk/">Interns Pakistan</a></span>
                                    <p class="experience_description">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum magni deserunt incidunt ea cumque porro enim ex dolorum consequatur sapiente.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- CERTIFICATES -->
                    <section class="certificate section" id="certificate">
                        <h2 class="section-title">SERTIFIKAT</h2>
                        <div class="certificate_container bd-grid">
                            <div class="certificate_content">
                                <h3 class="certificate_title">Juara Tenis Meja - 2015</h3>
                                <p class="certificate_description">
                                    Ikut Serta O2SN Tenis Meja Se kabupaten di kelas 5 SD dan mendapatkan Juara 2
                                </p>
                            </div>
                            <div class="certificate_content">
                                <h3 class="certificate_title">Futsal CUP - 2022</h3>
                                <p class="certificate_description">
                                    Ikut Serta Turnamen Futsal di daerah depok dan mendapatkan juara 2
                                </p>
                            </div>
                            <div class="certificate_content">
                                <h3 class="certificate_title">DAILY MABAR PEKAN BARU JAKARTA - 2021</h3>
                                <p class="certificate_description">
                                    Ikut serta Turnamen Games dan mendapatkan Juara 1
                                </p>
                            </div>
                        </div>
                    </section>
                    <!-- LANGUAGES -->
                    <section class="languages section">
                        <h2 class="section-title">Berbahasa</h2>
                        <div class="languages_container">
                            <ul class="languages_content bd-grid">
                                <li class="languages_name">
                                    <span class="languages_circle"></span> English
                                </li>
                                <li class="languages_name">
                                    <span class="languages_circle"></span> Indonesia
                                </li>
                            </ul>
                        </div>
                    </section>
                    
                    <!-- INTERESTS -->
                    <section class="interests section">
                        <h2 class="section-title">Minat di bidang</h2>
                        <div class="interests_container bd-grid">
                            <div class="interests_content">
                                <i class='bx bx-code-alt interests_icon'></i>
                                <span class="interests_name">Coding</span>
                            </div>
                            <div class="interests_content">
                                <i class='bx bxs-coffee-togo interests_icon' ></i>
                                <span class="interests_name">Coffe</span>
                            </div>
                            <div class="interests_content">
                                <i class="bx bxs-plane-alt interests_icon"></i>
                                <span class="interests_name">Berpergian</span>
                            </div>
                        </div>
                    </section>
                </div>
            </div>        
        </main> 

        <!-- SCROLL TOP -->
            <a href="#" class="scrolltop" id="scrolltop">
                <i class="bx bx-up-arrow-alt scrolltop_icon"></i>
            </a>

        <!-- HTML2PDF -->
        <script src="{{ asset('Assets-deren/js/html2pdf.bundle.min.js')}}"></script>
        
        <!-- MAIN JS -->
        <script src="{{ asset('Assets-deren/js/main.js')}}"></script>
    </body> <br>
</html>