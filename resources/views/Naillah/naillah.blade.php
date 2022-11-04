<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="{{asset('assetnaillah/style.css')}}">
</head>
<body>
  <div class="container">
    <div class="profile">
      <div class="profile_container">
        <div class="profile_profileImg">
          <img src="{{asset('assetnaillah/gb2.jpg')}}" alt="nai">
        </div>
        <div>
          <h1 class="profile_name">
            <span class="profile_name_firstName">NAILLAH NASYWA</span>
            <span class="profile_name_lastName">SABRINA</span>
          </h1>
          <p class="profile_title">STUDENT</p>
          <p class="description profile_description">
            hi, I'm naillah, i'am a student at SMK Taruna Bhakti Depok majoring in software development, and have the ability to learn new things and I am very interested in web design
          </p>
            <button class="btn" onclick="PDF();">Download CV</button>
        </div>
      </div>
    </div>


    <div class="group-1">
      <div class="skills">
        <h3 class="title">SKILL <i data-feather="check"></i></h3>
        <ul class="skills_list description">
          <li>JavaScript</li>
          <div class="skill-container">
            <div class="skill js"></div>
        </div>
          <li>PHP</li>
          <div class="skill-container">
            <div class="skill php"></div>
        </div>
          <li>CSS</li>
          <div class="skill-container">
            <div class="skill css"></div>
        </div>
          <li>HTML</li>
          <div class="skill-container">
            <div class="skill html"></div>
        </div>
          <li>JQUERY</li>
          <div class="skill-container">
            <div class="skill jquery"></div>
        </div>
          <li>FIGMA</li>
          <div class="skill-container">
            <div class="skill figma"></div>
        </div>
          <li>WEB DESIGN</li>
          <div class="skill-container">
            <div class="skill web"></div>
        </div>
        </ul>
      </div>


      <!-- <div class="ref">
        <h3 class="title">Reference</h3>
        <div class="ref_item">
          <h4 class="ref_name">Rashid Chy</h4>
          <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, neque?</p>
        </div>
        <div class="ref_item">
          <h4 class="ref_name">Ayman Rahman</h4>
          <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
        </div>
      </div> -->

      <div class="edu">
        <h3 class="title">Education <i data-feather="edit-3"></i></h3>
        <div class="edu_item">
          <p class="item_preTitle">2013-2018</p>
          <h4 class="item_title">RRI NASIONAL</h4>
          <p class="item_subtitle">
            ELEMENTARY SCHOOL
          </p>
        </div>
        <div class="edu_item">
          <p class="item_preTitle">2018-2021</p>
          <h4 class="item_title">SMP TARUNA BHAKTI</h4>
          <p class="item_subtitle">
            JUNIOR HIGH SCHOOL
          </p>
        </div>
        <div class="edu_item">
            <p class="item_preTitle">2021-2024</p>
            <h4 class="item_title">SMK TARUNA BHAKTI</h4>
            <p class="item_subtitle">
            VOCATIONAL HIGH SCHOOL
            </p>
          </div>
      </div>

      <div class="certification">
        <div class="certification_item">
        </div>
      </div>
    </div>
    <div class="group-2">
      <div class="exp">
        <h3 class="title"> ORGANIZATIONAL EXPERIENCE <i data-feather="folder"></i></h3>
        <div class="exp_item">
          <p class="item_preTitle">2018 - SMP</p>
          <h4 class="item_title">Anggota osis</h4>
          <!-- <p class="item_subtitle">Lorem ipsum dolor sit amet</p> -->
          <p class=" description">
            Organize activities, carry out existing activities and coordinate OSIS activities
          </p>
        </div>
        <div class="exp_item">
          <p class="item_preTitle">201 - SMP</p>
          <h4 class="item_title">Anggota pramuka</h4>
          <!-- <p class="item_subtitle">Lorem ipsum dolor sit amet</p> -->
          <p class="description">
            train and educate students in highly disciplined organizations and never give up in the face of everything.
          </p>
        </div>
      </div>
      <div class="awards">
        <h3 class="title">languanges <i data-feather="chevron-down"></i></h3>
        <div class="awards_item">
          <p class="item_preTitle">INDONESIA</p>
          <p class=" description">
            <div class="skill-container">
              <div class="skill in"></div>
          </div>
          </p>
        </div>
        <div class="awards_item">
          <p class="item_preTitle">ENGLISH</p>
          <p class="description">
            <div class="skill-container">
              <div class="skill ENG"></div>
          </div>
          </p>
        </div>
      </div>

      <div class="interest">
        <h3 class="title">HOBBIES <i data-feather="star"></i></h3>
        <div class="interest_items">
          <div class="interest_item">
            <i data-feather="music"></i>
            <span>Music</span>
          </div>
          <div class="interest_item">
            <i data-feather="map"></i>
            <span>Travel</span>
          </div>
          <div class="interest_item">
            <i data-feather="camera"></i>
            <span>photo</span>
          </div>
        </div>

      </div>
    </div>
    <hr>
    <div class="group-3">
      <div class="contact">
        <h3 class="title">Contact</h3>
        <div class="contact_info">
          <p class="description">
            Depok,Jawa Barat
          </p>
          <p class="description">
            +812 ** *** ***
          </p>
          <p class="description">
            naillahnaasywasabrina@gmail.com
          </p>
        </div>
      </div>
      <div class="social">
        <h3 class="title">Socials</h3>
        <div class="social_items">
          <a href="#" target="_b" class="social_item">
            <i data-feather="github"></i>
            <span>/NaillahNasywa</span>
          </a>
          <a href="#" target="_blank" class="social_item">
            <i data-feather="twitter"></i>
            <span>/naillahNS</span>
          </a>
          <a href="#" target="_blank" class="social_item">
            <i data-feather="instagram"></i>
            <span>/naillahNS</sNSpan>
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