<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{asset('assetwinny/style.css')}}">
    <title>profile</title>
</head>
<body>
    <div class="container">
        <div class="left-side">
            <div class="profile-text">
                <div class="imgBx">
                    <img src="{{asset('assetwinny/foto1.jpg')}}" alt="">
                </div>
                <h2>Winny Febriani<br><span>Web Developer</span></h2>
            </div>

            <div class="contact-info">
                <h3 class="title">Contact Info</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa-duotone fa-phone"></i></span>
                        <span class="text">+62 812 9653 8048</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa-sharp fa-solid fa-envelope"></i></span>
                        <span class="text">winny6587@gmail.com</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa-sharp fa-solid fa-globe"></i></span>
                        <span class="text">www.mywebsite.com</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa-brands fa-linkedin-in"></i></span>
                        <span class="text">www.linkedin.com/me</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                        <span class="text">Indonesia</span>
                    </li>
                </ul>
            </div>

            <div class="contact-info education">
                <h3 class="title">Education</h3>
                <ul>
                    <li>
                       <h5>2012 - 2018</h5>
                       <h4>Siswi</h4>
                       <h4>SDN Sukatani 3</h4>
                    </li>
                    <li>
                        <h5>2018 - 2021</h5>
                        <h4>Siswi</h4>
                        <h4>SMPN 23 DEPOK</h4>
                     </li>
                     <li>
                        <h5>2021 - 2024</h5>
                        <h4>Siswi</h4>
                        <h4>SMKS TARUNA BHAKTI</h4>
                     </li>
                </ul>
            </div>

            <div class="contact-info language">
                <h3 class="title">Languages</h3>
                <ul>
                    <li>
                        <span class="text">English</span>
                        <span class="percent">
                        <div style="width: 90%;"></div>
                        </span>
                    </li>
                    <li>
                        <span class="text">Indonesia</span>
                        <span class="percent">
                        <div style="width: 100%;"></div>
                        </span>
                    </li>
                    <li>
                        <span class="text">Japanese</span>
                        <span class="percent">
                        <div style="width: 25%;"></div>
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="right-side">
            <div class="about">
                <h2 class="title2">Profile</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa ipsum provident, obcaecati saepe laborum modi est dolorum asperiores illum laboriosam tenetur eveniet, quae adipisci, animi odit consequatur magni facere ullam vitae velit itaque. Ratione quas aliquid omnis praesentium, officia sed?</p>
            </div>
            <div class="about">
                <h2 class="title2">Experience</h2>
                <div class="box">
                    <div class="year-company">
                        <h5>2019 - Present</h5>
                        <h5>Pt.Alfamart Tbk</h5>
                    </div>
                    <div class="text">
                        <h4>Senior UX Designer</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab est deleniti doloribus voluptates consequuntur, vel deserunt eius tempore explicabo? Voluptatum.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="year-company">
                        <h5>2016 - 2019</h5>
                        <h5>Pt.Ebara</h5>
                    </div>
                    <div class="text">
                        <h4>UX/UI Designer</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab est deleniti doloribus voluptates consequuntur, vel deserunt eius tempore explicabo? Voluptatum.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="year-company">
                        <h5>2014 - 2017</h5>
                        <h5>Samsung Corp.</h5>
                    </div>
                    <div class="text">
                        <h4>Junior UX Designer</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab est deleniti doloribus voluptates consequuntur, vel deserunt eius tempore explicabo? Voluptatum.</p>
                    </div>
                </div>
            </div>

            <div class="about-skills">
                <h2 class="title2">Professional Skills</h2>
                <div class="box">
                    <h4>HTML</h4>
                    <div class="percent">
                        <div style="width: 95%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>CSS</h4>
                    <div class="percent">
                        <div style="width: 85%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>Javascript</h4>
                    <div class="percent">
                        <div style="width: 70%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>Photoshop</h4>
                    <div class="percent">
                        <div style="width: 90%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>Illustrator</h4>
                    <div class="percent">
                        <div style="width: 75%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>Adobe XD</h4>
                    <div class="percent">
                        <div style="width: 98%;"></div>
                    </div>
                </div>
            </div>

            <div class="about-interest">
                <h2 class="title2">Interest</h2>
                <ul>
                    <li>Gaming</li>
                    <li>Singing</li>
                    <li>Dancing</li>
                    <li>Reading</li>
                </ul>
            </div>
    </div>
</body>
</html>