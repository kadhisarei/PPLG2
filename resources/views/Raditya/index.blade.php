<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('Assets-radit/css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    
    <nav>
        <div class="logo">
            <h4><span class="r">R</span><span>F</span></h4>
        </div>

        <ul>
            <a href="#home"><li class="actived">Home</li></a>
            <a href="#skill"><li>Skill</li></a>
            <a href="#about"><li>About</li></a>
            <a href="#contact"><li>Contact</li></a>
            <a href="{{asset('Assets-radit/cv')}}" download="cv.pdf"><Button>Download CV</Button></a>
        </ul>
        
    </nav>

    <main id="home">

        
        <div class="hero-text">
            <p>Yo, Im</p>
            <h2>Raditya Faturrohman</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <button>Contact Me</button>
        </div>
        
        <div class="scroll" >
            <a href="#skill" id="skill" class="scroll-btn"></a>
            <p>See More</p>
        </div>
        
        <img src="{{asset('Assets-radit/img/kiriko.png')}}" width="58%">
        
    </main>

    <section class="section">

        <div class="skill-container">

            <div class="skill-card">
                <i class="fa-solid fa-pencil"></i>
                <p class="skill-title" >Design & Prototyping</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, expedita nostrum? Libero error necessitatibus, dolor, eaque, cumque numquam quasi illo maiores sapiente adipisci quae voluptatibus. Sapiente aperiam impedit expedita natus.</p>
            </div>

            <div class="skill-card">
                <i class="fa-solid fa-ghost"></i>
                <p class="skill-title" >UI/UX</p>
                <p id="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ab enim eligendi maxime, corrupti veniam nihil. Laboriosam, esse! Veritatis eum deserunt natus ab est maxime officia sed deleniti libero nulla.</p>
            </div>

            <div class="skill-card">
                <i class="fa-solid fa-gamepad"></i>
                <p class="skill-title" >Game Development</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint velit game 3D? No, web only similique cupiditate, esse soluta culpa rem dignissimos voluptatem iste ab reiciendis saepe eos, earum eveniet.</p>
            </div>

        </div>

        <div class="about">
            
            <i class="fa-solid fa-quote-left"></i>
            <img src="{{asset('Assets-radit/img/about.png')}}" width="30%" alt="">

            <div class="about-text">
                <h3>About Me</h3>
                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo cumque, <br> fugiat similique nam tempora eveniet est illum veniam illo? Illum. <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Ducimus, corporis! "</p>
            </div>
            <i class="fa-solid fa-quote-right"></i>

        </div>

        <div id="contact">
            <h3>Contact Me</h3>
            <form action="">
                <div class="upper-form-container">
                    <div class="upper-form">
                        <label for="">Username</label>
                        <input type="text">
                    </div>
                    
                    <div class="upper-form">
                        <label for="">Email Address</label>
                        <input type="email" name="" id="">
                    </div>
                </div>

                <label class="message-label" for="">Message</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>

    </section>

    <footer>
        <p></p>

        <div class="footer-icon">
            <a href="https://www.instagram.com/iyhmh/"><i class="fa-brands fa-instagram"></i></a> <span>|</span>
            <a href="https://twitter.com/KrakenGoreng"><i class="fa-brands fa-twitter"></i></a> <span>|</span>
            <a href="https://www.facebook.com/raditya.faturrohman/"><i class="fa-brands fa-facebook-f"></i></a> <span>|</span>
            <a href="https://github.com/RadityaFaturrohman"><i class="fa-brands fa-github"></i></a> <span>|</span>
            <a href="https://www.figma.com/files/user/1133297192156589322?fuid=1133297192156589322"><i class="fa-brands fa-figma"></i></a>
        </div>
    </footer>

    <script src="{{asset('Assets-radit/js/script.js')}}"></script>
</body>
</html>