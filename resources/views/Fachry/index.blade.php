<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexa</title>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{ asset('Assets-fachry/style.css') }}">
</head>

<body>
    
<header>
    <div class="container">
        <img src="{{ asset('Assets-fachry/img/pngwing.com (2).png') }}" class="main-image">

        <nav>
            <div>
                <a href="index.html" class="logo">
                    <i class="uil uil-flask-potion"></i>
                </a>
            </div>
            <ul>
                <li><a class="active" href="">Services</a></li>
                <li><a href="#about">Contact</a></li>
                <li><a href="#work">Works</a></li>
            </ul>
            <div class="menu-btn">
                <i class="uil uil-gitlab"></i>
            </div>
        </nav>

        <div class="container header-container">
            <div class="header-body">
                <div>
                    <h1 class="tittle">
                        Fachry <br> Zulfikar
                    </h1>
                    <ul class="social">
                        <li><a href=""><i class="uil uil-dribbble"></i></a></li>
                        <li><a href="https://instagram.com/7exaaa?igshid=YmMyMTA2M2Y="><i class="uil uil-instagram"></i></a></li>
                        <li><a href=""><i class="uil uil-linkedin"></i></a></li>
                    </ul>
                </div>
                <div>
                    <small>- Introduction</small>
                    <h2>
                        Fullstack Developer And AI Engineer,
                        Based In Japan.
                    </h2>
                    <p>
                        Hi , My name is Fachry zulfikar you can call me Lexa i am 17 years old i am a backend developer programmer.
                    </p>
                    <a href="{{ asset('Assets-fachry/cv/1.pdf') }}" download class="main-link">
                        <span>Download Cv</span>
                        <i class="uil uil-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About -->
<section id="about" class="about">
    <div class="container about-container">
        <div>
            <small>- Contact</small>
            <h2>
                Any Type Of Query &amp;
                Discussion.
            </h2>
            <p>
                hi this is my email , if you need anything please send an email.
            <a href="mailto:fachrylord0@gmail.com?Subject=Hello%20again" class="main-link">
                <span>fachrylord0@gmail.com</span>
                <i class="uil uil-arrow-right"></i>
            </a>
        </div>
        <div>
            <h2>
                "It's better to accept a bitter truth than a sweet lie." <span> 
            </h2>
            <div class="stats">
                <div>
                    <h1>14</h1>
                    <span>Years Of Experience.</span>
                </div>
                
                <div>
                    <h1>187</h1>
                    <span>Satisfied Clients.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project -->
<section  class="projects">
    <div class="container">
        <div class="panels">

            <div>
                
                <div class="icon">
                    <i class="uil uil-flask"></i>
                </div>
                <div>
                    <h2>UI Designer.</h2>
                    <a href=""><div class="chart">
                        <div class="bar"></div>
                        <!-- Change the value below -->
                        <span id="value1">90</span>
                    </div></a>
                </div>

            </div>

            <div>
                
                <div class="icon">
                    <i class="uil uil-flask"></i>
                </div>
                <div>
                    <h2> AI Engineer.</h2>
                    <a href=""><div class="chart">
                        <div class="bar"></div>
                        <!-- Change the value below -->
                        <span id="value2">50</span>
                    </div></a>
                </div>

            </div>

            <div>
                
                <div class="icon">
                    <i class="uil uil-flask"></i>
                </div>
                <div>
                    <h2>Dev Fullstack.</h2>
                    <a href=""><div class="chart">
                        <div class="bar"></div>
                        <!-- Change the value below -->
                        <span id="value3">70</span>
                    </div></a>
                </div>

            </div>



        </div>
    </div>
</section>

<!-- SPonsor -->
<!-- <section class="sponsor">
    <div class="container brands-container">
        <div class="brands">
            <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c1dc.png" alt="">
            <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c1dc.png" alt="">
            <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c1dc.png" alt="">
            <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c1dc.png" alt="">
            <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c1dc.png" alt="">
            <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c1dc.png" alt="">
            <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c1dc.png" alt="">
            <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c1dc.png" alt="">
    
        </div>
    </div>
</section> -->

<!-- portofolio -->
<section id="work" class="portofolio">
    <div class="container">
        <div class="col">
            <div>
                <small>- Portofolio</small>
                <h2>All Creative Works,
                    Selected Project.
                </h2>
                <p>
                    These are some examples of projects that I've made.
                </p>
                <a href="" class="main-link">
                    <span>Explore More</span>
                    <i class="uil uil-arrow-right"></i>
                </a>
            </div>    
               
            <a href="" class="card-link">
                <div class="card">
                    <div>
                        <h2>Figma</h2>
                        <span>NFT UI Design</span>
                    </div>
                    <img src="https://cdn.dribbble.com/users/1253590/screenshots/5556344/comic_4x.png?compress=1&resize=840x630&vertical=top" alt="">
                </div>
            </a>
        </div>

    <div class="col">
        <a href="" class="card-link">
            <div class="card">
                <div>
                    <h2>Figma</h2>
                    <span>Oculus UI Design</span>
                </div>
                <img src="https://cdn.dribbble.com/users/1585453/screenshots/15281469/media/6fddcf29f5b96b350ff2c7cd44527869.jpg?compress=1&resize=840x630&vertical=top" alt="">
            </div>
        </a>

            <a href="" class="card-link">
                <div class="card last-card">
                 <div>
                        <h2>Js.</h2>
                        <span>SIgn in & up.</span>
                    </div>
                    <img src="https://cdn.dribbble.com/users/1253590/screenshots/5690468/lamborghini_4x.png?compress=1&resize=840x630&vertical=top" alt="">
                </div>
            </a>
        </div>

    </div>
</section>

<!-- Blog -->
<section class="blog">
    <div class="container">
        <div>
            <small>- Blog</small>
            <h2>Whats New ?,
                My Blow And News.
            </h2>
        </div>

        <div>
            <div class="post">
                <small>Nov 3 &bull; Blog</small>
                <h3>Let This Be A Lesson To You</h3>
                <a href="" class="main-link">
                    <i class="uil uil-arrow-right"></i>
                </a>
            </div>

            <div class="post">
                <small>Nov 3 &bull; Blog</small>
                <h3>How Do You Use Time Tracing To Project</h3>
                <a href="" class="main-link">
                    <i class="uil uil-arrow-right"></i>
                </a>
            </div>

            <div class="post">
                <small>Nov 3 &bull; Blog</small>
                <h3>Ego and Empathy Ind Design</h3>
                <a href="" class="main-link">
                    <i class="uil uil-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- testimonials -->
<section class="testimonials">
    <div class="container">
        <img src="https://p4.wallpaperbetter.com/wallpaper/1016/989/111/anime-my-hero-academia-tenko-shimura-tomura-shigaraki-hd-wallpaper-preview.jpg" alt="">
        <div class="testimonial">
            <h2 class="user-text">
                Lexa (死し柄がら木き弔とむら Lexa?),  real name Fachry Zulfikar (志し村むら転てん弧こ Fachry Zulfikar?), is a fullstack programmer & AI engineer.
            </h2>
            <div>
                <h3 class="user-name">Lexa.</h3>
                <small class="user-tittle">
                    Fullstack & AI Engineer.
                </small>
            </div>
            <ul class="pagination">
                <li class="pag-active"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</section>

<!-- contact -->
<section class="contact">
    <div class="container">
        <div>
            <h2>Got a project ? Lets Talk.</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
            <a href="" class="main-link">
                <i class="uil uil-arrow-right"></i>
            </a>
        </div>
        <form action="">
            <h2>
                Estimate Your Project ?
                Let Me Know Here.
            </h2>
            <input type="text" class="name" name="" id="" placeholder="Whats Your Name ?">
            <div class="input-wrap">
                <input type="text" class="mail-content" name="" id="" placeholder="Tell Me About your Project">
                <div>
                    <button class="attach">
                        <i class="uil uil-paperclip"></i>
                    </button>
                    <button type="submit" class="main-link">
                        <i class="uil uil-arrow-right"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- footer -->

<footer>
    <a href="" class="logo">
        <i class="uil uil-flask-potion"></i>
    </a>
    <p>
        <b>Thanks For Scrolling dont forget to ngawi,</b>
        Thats All Folks
    </p>
    <ul class="social">
        <li>
            <a href="" class="active">
                <i class="uil uil-dribbble"></i>
            </a>
        </li>
        <li>
            <a href="" class="active">
                <i class="uil uil-instagram"></i>
            </a>
        </li>
        <li>
            <a href="" class="active">
                <i class="uil uil-linkedin"></i>
            </a>
        </li>
    </ul>
</footer>

<script src="{{ asset('Assets-fachry/main.js') }}"></script>

</body>
</html>