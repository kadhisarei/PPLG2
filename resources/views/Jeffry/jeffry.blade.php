<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('Assets-jeffry/style.css') }}">
  </head>
  <body>
    <!-- header section starts  -->
    <div id="menu-bars" class="fas fa-bars"></div>

    <header>
      <div id="menu" class="fas fa-bars"></div>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#education">education</a>
        <a href="#contact">contact</a>
      </nav>
      <div class="scroll-bar"></div>
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="content">
        <h3 class="hello">hi, there!</h3>
        <h3 class="name">i'm <span>JEFFRY MALIK</span></h3>
        <p>STUDENT IN SMK TARUNA BHAKTi</p>
        <a href="#about" class="btn">about me</a>
      </div>
    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
      <h1 class="heading">about me</h1>

      <div class="row-1">
        <div class="image">
          <img src="{{ asset('Assets-jeffry/j.jpg') }}" height="100" alt="" />
        </div>

        <div class="content">
          <div class="box-container">
            <div class="row">
              <div class="presonal-info">
                <h3 class="ji">About</h3>
                <p>Hi everyone, I am Jeffry, creating awesome and effective visual identities for companies of all sizes around the globe. Let's start scrolling and learn more about me.I was born on May 9, 2006. I live in Depok, Indonesia.
                </p>
                <h3 class="title">personal info</h3>

                <div class="box-container">
                  <div class="box">
                    <h3><span> full name : </span> Jeffry Malik</h3>
                    <h3><span> age : </span> 16 years</h3>
                  </div>
                  <div class="box">
                    <h3><span> email : </span> <a style="color: red" href="mailto:jeffrymalik123@gmail.com">jeffrymalik123@gmail.com</a></h3>
                    <h3><span> phone : </span> +-812-1988-7317</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="btn">hire me</a>
        </div>
      </div>

      <div class="row">
        <div class="progress-bar">
          <h3 class="title">my skills</h3>

          <div class="progress">
            <h3>HTML <span>80%</span></h3>
            <div class="bar"><span></span></div>
          </div>
          <div class="progress">
            <h3>CSS <span>80%</span></h3>
            <div class="bar"><span></span></div>
          </div>
          <div class="progress">
            <h3>Javascript <span>60%</span></h3>
            <div class="bar"><span></span></div>
          </div>
        </div>
      </div>
    </section>

    <!-- about section ends -->

    <!-- education section starts  -->

    <section class="education" id="education">
      <h1 class="heading">education</h1>

      <div class="row">
        <div class="column">
          <h3 class="title">my education</h3>

          <div class="box">
            <div class="year"><i class="fas fa-calendar"></i> 2018 - 2020</div>
            <h3>SMPN 11 Depok</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita perferendis eveniet consectetur incidunt fuga quos, et cumque corporis natus veniam.</p>
          </div>
          <div class="box">
            <div class="year"><i class="fas fa-calendar"></i> 2020 - 2022</div>
            <h3>SMK TARUNA BHAKTI</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita perferendis eveniet consectetur incidunt fuga quos, et cumque corporis natus veniam.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- education section ends -->

    <!-- portfolio section starts  -->

    <!-- portfolio section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">
      <h1 class="heading"> contact <span> me </span> </h1>

    <div class="icons-container">

        <div class="icons">
            <a href="mailto:jeffrymalik123@gmail.com"><i class="fas fa-envelope"></i></a>
            <h3>my email</h3>
            <p><a style="color: red;" href="mailto:jeffrymalik123@gmail.com">jeffrymalik123@gmail.com</a></p>
        </div>

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>my number</h3>
            <p>+62-812-1988-7317</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>my address</h3>
            <p>Cluster Permata Ciherang block a no 9, Sukatani Tapos Depok Jawabarat Indonesia</p>
        </div>

    </div>
    </section>

    <!-- contact section ends -->

    <!-- footer section  -->

    <div class="footer">created by Jeffry Malik | all rights reserved!</div>

    <!-- custom js file link  -->
    <script src="{{ asset('Assets-jeffry/script.js') }}"></script>
  </body>
</html>
