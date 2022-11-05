<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('Assets-yudiya/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Yudiya Ahrian</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light" id="home">
        <div class="container-fluid">
          <a class="navbar-brand" href="#home"><img src="{{asset('Assets-yudiya/img/Yudiya Ahrian.png')}}" height="30px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#hero">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#about">About</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link" aria-current="page" href="#skill">Skills</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link btn btn-info text-white" href="{{asset('Assets-yudiya/cv/')}}" download="cv.pdf">Download CV</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <main>
        <div class="container col-12 px-4 py-5" id="hero">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="{{asset('Assets-yudiya/img/776750.jpg')}}" class="d-block mx-lg-auto img-fluid rounded" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
              <h5 class="lh-1 mb-4">-Hello</h5>
              <h1 class="display-5 fw-bold lh-1 mb-4">I'm Yudiya Ahrian</h1>
              <p class="lead">This is Yudiya Ahrian portofolio, Just Back-End Developer Right Now</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="#about"><button type="button" class="btn btn-primary btn-lg px-4 my-3 me-md-2">About Me</button></a>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="col-12 py-4 bg-light px-5" id="about">
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-1 col-sm-4 col-lg-5">
                  <img src="{{asset('Assets-yudiya/img/1221552.jpg')}}" class="d-block mx-lg-auto img-fluid rounded" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                  <h5 class="lh-1 mb-4">-MY INFO</h5>
                  <h1 class="display-5 fw-bold lh-1 mb-4">About Me</h1>
                  <p class="lead mb-4">My name is Muhamad Yudiya Ahrian, I'm a Back-End Developer and this is my portofolio. <br> I'm Really enjoyed being a Back-End Developer Because It's really fit with me.</p>
                  <div class="d-flex align-items-bottom">
                      <i class="fa-regular fa-user text-primary fs-5 me-4" id="name"></i>
                      <p>Name </p>
                      <span class="mx-5">:</span>
                      <p>Muhamad Yudiya Ahrian</p>
                  </div>
                  <div class="d-flex align-items-bottom">
                      <i class="fa-solid fa-phone text-primary fs-5 me-4"></i>
                      <p>Phone </p>
                      <span class="colon1">:</span>
                      <p class="ms-5">0812-9617-7470</p>
                  </div>
                  <div class="d-flex align-items-bottom">
                      <i class="fa-regular fa-envelope text-primary fs-5 me-4"></i>
                      <p>Email </p>
                      <span class="colon2">:</span>
                      <p class="ms-5">yudiyaahrian@gmail.com</p>
                  </div>
                </div>
              </div>
        </div>

        <div class="col-12 py-4 px-5" id="skill">
            <div class="col-lg-12 col-md-10 col-sm-8">
                <h5 class="d-flex justify-content-center mb-3" id="label1">-Skill</h5>
                <h1 class="d-flex justify-content-center display-5 fw-bold lh-1 mb-5">My Expertise</h1>

                <div class="row">
                    <div class="col-5">
                        <label class="mb-1">HTML</label>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>

                    <div class="col-5 ms-auto">
                        <label class="mb-1">Laravel</label>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                    </div>

                    <div class="col-5">
                        <label class="mb-1">CSS</label>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                        </div>
                    </div>

                    <div class="col-5 ms-auto">
                        <label class="mb-1">JavaScript</label>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                        </div>
                    </div>

                    <div class="col-5">
                        <label class="mb-1">PHP</label>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                    </div>

                    <div class="col-5 ms-auto">
                        <label class="mb-1">Python</label>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 5%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">1%</div>
                        </div>
                    </div>
                    <div class="col-5">
                        <label class="mb-1">Bootstrap</label>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                    </div>

                    <div class="col-5 ms-auto">
                        <label class="mb-1">TailWind</label>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </main>

      <footer class="bg-success bg-opacity-10 text-center text-white mt-4">
        <div class="container p-2 pb-0">
          <section class="mb-2">
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #333333;"
              href="https://github.com/yudiyahrian"
              role="button"
              target="_blank"
              ><i class="fa-brands fa-github"></i>
            </a>
      
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #ac2bac;"
              href="https://www.instagram.com/yudiya_ahrian/"
              role="button"
              target="_blank"
              ><i class="fa-brands fa-instagram"></i>
            </a>
          </section>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          Created By Yudiya Ahrian
        </div>
      </footer>
</body>
</html>