<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="{{asset('Assets-Rizal/style.css')}}">
</head>

<body>
  <div class="container">
    <div class="profile">
      <div class="profile_container">
        <div class="profile_profileImg">
          <img src="{{asset('Assets-Rizal/images/zal.jpg ')}}" alt="">
        </div>
        <div>
          <h1 class="profile_name">
            <span class="profile_name_firstName">Muhamad Kautsyar</span>
            <span class="profile_name_lastName">Rizaldi</span>
          </h1>
          <p class="description profile_description">
            Halo Perkenalkan Nama Saya Muhamad Kautsyar Rizaldi,lahir di kuningan pada tanggal 01-02-06 dan sekarang tinggal di depok dan sekarang umur 16tahun sekolah di SMK TARUNA BHAKTI 
          </p>
          <!-- <a class="downloadBtn" href="./cv.pdf" download="Resume.pdf">Download Resume</a> -->
        </div>
      </div>
    </div>
    <div class="group-1">
      <div class="skills">
        <h3 class="title">Expertise</h3>
        <ul class="skills_list description">
          <li>JavaScript</li>
          <li>PHP</li>
          <li>HTML CSS</li>
          <li>MYSQL</li>
        </ul>
      </div>
      <div class="ref">
        <h3 class="title">Reference</h3>
        <div class="ref_item">
          <h4 class="ref_name">Mr.Agus</h4>
          <p class="description">Html & CSS</p>
        </div>
        <div class="ref_item">
          <h4 class="ref_name">Mr.Eraldo</h4>
          <p class="description"> Javascript & Laravel </p>
        </div>
      </div>
      

      <div class="edu">
        <h3 class="title">Education</h3>
        <div class="edu_item">
          <p class="item_preTitle">2012-2017</p>
          <h4 class="item_title">SD</h4>
          <p class="item_subtitle">
            Mi Al-Futuhat Alattasiyah
          </p>
        </div>
        <div class="edu_item">
          <p class="item_preTitle">2018-2020</p>
          <h4 class="item_title">SMP</h4>
          <p class="item_subtitle">
            SMP Al-Futuhat Alattasiyah
          </p>
        </div>
        <div class="edu_item">
          <p class="item_preTitle">2020-2024</p>
          <h4 class="item_title">SMK</h4>
          <p class="item_subtitle">
            SMK TARUNA BHAKTI
          </p>
        </div>
      </div>

      <div class="certification">
        <h3 class="title">certification</h3>
        <div class="certification_item">
          <p class="item_preTitle">5-MARET-2022</p>
          <h4 class="item_title">Juara 1 Ganjar Depok</h4>
          <p class="description">
            Memenangkan kejuaraan yang diselenggarakan oleh gubernur jawa tengah
          </p>
        </div>
      </div>
      <div class="certification">
        <div class="certification_item">
          <p class="item_preTitle">16-SEPTEMBER-2022</p>
          <h4 class="item_title">Juara 3 UNM</h4>
          <p class="description">
            Memenangkan kejuaraan yang diselenggarakan oleh pihak kampus UNM
          </p>
        </div>
      </div>
    </div>
    <div class="group-2">
      <div class="exp">
        <h3 class="title">Experience</h3>
        <div class="exp_item">
          <p class="item_preTitle">2090 - present</p>
          <h4 class="item_title">Frontend Developer.</h4>
        </div>
        <div class="exp_item">
          <p class="item_preTitle">2090 - present</p>
          <h4 class="item_title">Backend Developer.</h4>
        </div>
      </div>
      <div class="awards">
        <h3 class="title">Awards</h3>
        <div class="awards_item">
          <p class="item_preTitle">2019</p>
          <h4 class="item_title">Data Perpustakaan</h4>
          <p class=" description">
            sudah membuat data perpustakaan 
          </p>
        </div>
        <div class="awards_item">
          <p class="item_preTitle">2019</p>
          <h4 class="item_title">Login&Register</h4>
          <p class="description">
            Sudah membuat login&register dan masuk ke game canvas
          </p>
        </div>
      </div>

      <div class="">
        <h3 class="title">Contact Me</h3><br><br>
        
        <input class="input" type="text" placeholder="Name"><br><br>
        <input class="input" type="email" placeholder="Email"><br><br>
        <input class="input" type="text" placeholder="Project"><br><br>
        <input class="inputm" type="text" placeholder="Message"><br><br>
        <button class="button">Send</button>
      </div>
    </div>
    <hr>
    <div class="group-3">
      <div class="contact">
        <h3 class="title">Contact</h3>
        <div class="contact_info">
          <p class="description">
            Depok, Cimanggis
          </p>
          <p class="description">
            +62 896 5472 6359
          </p>
          <p class="description">
            Rizaldie78@gmail.com
          </p>
        </div>
      </div>
      <div class="social">
        <h3 class="title">Socials</h3>
        <div class="social_items">
          <a href="#" target="_b" class="social_item">
            <i data-feather="github"></i>
            <span>Rizaldie78</span>
          </a>
          <a href="#" target="_blank" class="social_item">
            <i data-feather="twitter"></i>
            <span>Rizaldie78</span>
          </a>
          <a href="#" target="_blank" class="social_item">
            <i data-feather="linkedin"></i>
            <span>Rizaldie78</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <script>
    feather.replace()
  </script>
</body>

</html>