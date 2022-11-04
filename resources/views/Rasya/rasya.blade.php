<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>

    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" href="{{ asset('Assets-rasya/styles.css')}}">

</head>
<body>

    <div class="container">

        <div class="left_side">

            <!-- PROFILE -->
            <div class="profile">
                <div class="img_setting">
                    <img src="{{ asset('Assets-rasya/poto3.jpeg')}}">
                </div>
                <h4>Rasya Fadil Arf</h4>
                <h5>Web Developer</h5>
                <button class="btn" onclick="PDF();">Download PDF</button>
            </div>

            <!-- CONTACT INFO -->
            <div class="left_items">
                <h4 class="title">Contact Info</h4>
                <ul>
                    <li>
                        <span class="icons">
                            <i class="bx bx-map"></i>
                        </span>
                        <span class="text">Depok, Jawa Barat, Indoneisa </span>
                    </li>
                    <li>
                        <span class="icons">
                            <i class="bx bx-envelope"></i>
                        </span>
                        <span class="text">rasyafadil02@gmail.com</span>
                    </li>
                    <li>
                        <span class="icons">
                            <i class="bx bx-phone"></i>
                        </span>
                        <span class="text">087788551573</span>
                    </li>
                </ul>
            </div>

            <!-- EDUCATION -->
            <div class="left_items">
                <h4 class="title">Education</h4>
                <ul>
                    <li>
                        <h5 class="dates">2012 - 2015</h4>
                            <h4 class="text">SDN MEKARJAYA 10</h5>
                        <h5 class="dates">2015 - 2017</h4>
                            <h4 class="text">MIN 9 SRAGEN</h5>
                        <h5 class="dates">2017 - 2020</h4>
                            <h4 class="text">SMP Negeri 22 Depok</h5>
                        <h5 class="dates">2020 - NOW</h4>
                            <h4 class="text">SMK TARUNA BHAKTI</h5>
                    </li>
                </ul>
            </div>

            <!-- CERTIFICATINS -->
            <div class="left_items">
                <h4 class="title">Certificates</h4>
                <ul>
                    <li>
                        <h5 class="dates">5 March, 2022</h5>
                        <h4 class="text">Juara 1 ESPORT Sahabat Ganjar Depok</h4>
                        <h5 class="dates">16 September, 2022</h5>
                        <h4 class="text">Juara 3 ESPORT Universitas Nusa Mandiri</h4>
                    </li>
                </ul>
            </div>

            <!-- LANGUAGES -->
            <div class="left_items">
                <h4 class="title">Languages</h4>
                <ul class="languages">
                    <li>
                        <span class="text">Indoneisa</span>
                        <div class="percent">
                            <div style="width: 100%"></div>
                        </div>
                    </li>
                    <li>
                        <span class="text">English</span>
                        <div class="percent">
                            <div style="width: 34%"></div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

        <div class="right_side">

            <!-- SUMMARY -->
            <div class="right_items">
                <h3 class="title">Summary</h3>
                <p>
                    Hai :) <br />Saya adalah seorang <i class="english">Junior Web Design</i>, <i
                        class="english">Junior Back-End Developer</i>.
                </p>
                <p>
                    Lahir di <b class="important">Depok</b>, Jawa
                    Barat, Indonesia.
                </p>
                <p>
                    Tinggal dan Lahir di Kota <b class="important">Depok</b>, membuat Saya begitu menyukai <b
                        class="important">Tantangan & Belajar Hal-hal Baru</b> terlebih lagi dalam <b
                        class="important">Perkembangan Teknologi</b> yang begitu <b class="important">Pesat</b>.
                </p>
            </div>

            <!-- EXPERIENCE -->
            <div class="right_items">
                <h4 class="title">Experience</h4>

                <div class="experience">
                    <div class="time_line">
                        <span class="time_point"></span>
                        <span class="time_road"></span>
                    </div>
                    <div class="content">
                        <div class="interval">
                            <h5>2021 - Present</h5>
                        </div>
                        <div class="description">
                            <h4>UX/UI Designer</h4>
                        </div>
                    </div>
                </div>

                <div class="experience">
                    <div class="time_line">
                        <span class="time_point"></span>
                        <span class="time_road"></span>
                    </div>
                    <div class="content">
                        <div class="interval">
                            <h5>2021 - Present</h5>
                        </div>
                        <div class="description">
                            <h4>Web Designer</h4>
                        </div>
                    </div>
                </div>

            </div>

            <!-- SKILLS -->
            <div class="right_items">
                <h4 class="title">Professional Skills</h4>
                <div class="skills">
                    <h4>HTML</h4>
                    <div class="percent">
                        <div style="width: 90%"></div>
                    </div>
                </div>
                <div class="skills">
                    <h4>CSS</h4>
                    <div class="percent">
                        <div style="width: 80%"></div>
                    </div>
                </div>
                <div class="skills">
                    <h4>JavaScript</h4>
                    <div class="percent">
                        <div style="width: 30%"></div>
                    </div>
                </div>
                <div class="skills">
                    <h4>PHP</h4>
                    <div class="percent">
                        <div style="width: 50%"></div>
                    </div>
                </div>
            </div>

            <!-- HOBBIES -->
            <div class="right_items">
                <h4 class="title">Hobbies</h4>
                <ul class="hobby">
                    <li><i class="fa-solid fa-gamepad"></i> Game</li>
                    <li><i class="fa-solid fa-headphones"></i>Music</li>
                    <li><i class="fa-solid fa-motorcycle"></i> Motorized</li>
                </ul>
            </div>

        </div>

    </div>

    <!-- HTML2PDF SOURCE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CUSTOM JS -->
    <script type="text/javascript">
    
        function PDF(){
            const e = document.querySelector(".container");

            // RESIZE
            e.style.maxWidth = "700px";
            
            // OPTIONS
            const opt = {
                filename: 'resume.pdf',
                image: {
                    type: "jpg",
                    quality: 0.99
                },
                margin: 0,
                jsPDF: {
                    unit: "pt",
                    format: "letter",
                    orientation: "portrait"
                },
                pagebreak: {
                    mode: ["avoid-all", "css", "legacy"]
                }
            };
            html2pdf().set(opt).from(e).save();

            // RESIZE
            setTimeout(() => {e.style.maxWidth = "1400px";}, 2000);
        }

    </script>
    
</body>
</html>