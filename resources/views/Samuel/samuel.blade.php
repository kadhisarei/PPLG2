<!DOCTYPE html> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Portfolio Website | Code4education </title>
    <link rel="stylesheet" href="{{ asset('Assets-samuel/profile.css') }}">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <!-- Move to up bottom -->
  <div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
  </div>
  
  <!-- navigation menu -->
  <nav>
    <div class="navbar">
      <div class="logo" style="color: orangered;"><a href="#">Profile About Me.</a></div>
      <ul class="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#services">My Experience</a></li>
        <li><a href="#contact">Contact</a></li>
        <div class="cancel-btn">
          <i class="fas fa-times"></i>
        </div>
      </ul>
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>

  <!-- Home Section Start -->
  <section class="home" id="home">
    <div class="home-content">
      <div class="text">
        <div class="text-one">Hello Everyone,</div>
        <div class="text-two">I'm Samuel Martin</div>
        <div class="text-three">Student</div>
        <div class="text-four">From "SMK Taruna Bhakti"</div>
      </div>
      <div class="button">
        <button>
          Scroll down to see more..</button>
      </div>
    </div>
  </section>

  <!-- About Section Start -->
  <section class="about" id="about">
    <div class="content">
      <div class="title"><span style="color: purple;">About Me</span></div>
      <div class="about-details">
        <div class="left">
          <img src="{{ asset('Assets-samuel/assets/FotoProfile.png') }}" alt="Portfolio">
        </div>
        <div class="right">
          <div class="topic">About Me and About Study Coding</div>
            <p>My name Samuel Martin Sirait,born on 28 July 2006 in Jakarta(16YearsOld). And now i go to special school it at SMK Taruna Bhakti depok until now.</p>
            <br>
          <p>At the beginning of learning coding, I felt dizzy to see the code contained in a code. However, I saw tutorial tutorials through YouTube, so I gradually understood the functions of the code in a program.and now i go to special school it at smk Taruna Bhakti depok until now.</p>
          <div class="button">
            <!-- <button>Download CV</button> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- My Skill Section Start -->
  <section class="skills" id="skills">
    <div class="content">
      <div class="title"><span style="color: purple;">My Skills and My Education</span></div>
      <div class="skills-details">
        <div class="text">
          <div class="topic">My Skills</div>
          <p>while learning coding for a year, I was able to have the ability to create websites using html accompanied by css,
             PHP (just a little), also what I just learned is JavaScript</p>
          <br>
          <b>My Education</b>
          <p>kindergarten = <b>TK Mutiara</b> (2011-2012),</p>
          <p>Primary School = <b>SDN Sukamaju Baru 02 Depok</b> (2012-2017),</p>
          <p>Junior High School = <b>SMP Taruna Bhakti</b> (2018-2020),</p>
          <p>Vocational High School = <b>SMK Taruna Bhakti</b> (2021-Now).</p>
          <div class="experience">
            <div class="num">1</div>
            <div class="exp">Years <br> Learning Coding..</div>
          </div>
        </div>
        <div class="boxes">
          <div class="box">
            <div class="topic">HTML&CSS</div>
            <div class="per">80%</div>
          </div>
          <div class="box">
            <div class="topic">PHP</div>
            <div class="per">50%</div>
          </div>
          <div class="box">
            <div class="topic">Javascript</div>
            <div class="per">35%</div>
          </div>
          <div class="box">
            <div class="topic">Kodular</div>
            <div class="per">85%</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- My Services Section Start -->
  <section class="services" id="services">
    <div class="content">
      <div class="title"><span style="color: purple;">My Experience.</span></div>
      <div class="boxes">
        <div class="box">
          <div class="icon">
            <i class="fas fa-desktop"></i>
          </div>
          <div class="topic">Create project Login and Register</div>
          <p>
            On the website, I login and register on one page so that the impression looks dynamic and modern</p>
        </div>
        <div class="box">
          <div class="icon">
            <i class="fas fa-paint-brush"></i>
          </div>
          <div class="topic">Create Project games DOM HTML</div>
          <p>in learning html dom I made a simple game website project</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Me Section Start -->
  <section class="contact" id="contact">
    <div class="content">
      <div class="title"><span style="color: purple;">Contact Me</span></div>
      <div class="text">
        <div class="topic" style="color: purple;">Any Question?</div>
        <p>Are you have any question?chat me on my Email,Thank You!!</p>
        <div class="button">
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section Start -->
  <footer>
    <div class="text">
      <span><a href="#">Email : halomoansirait18@gmail.com</a> | © 2022 All Rights Reserved.</span>
    </div>
  </footer>

   

  <script src="{{ asset('Assets-samuel/assets/profile.js') }}"></script>
</body>
</html>
