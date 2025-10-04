<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DOsify</title>
    <link rel="icon" type="imaga/png" href="/img/logo-circle.png">

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </head>
  <body class="body-1">
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="container-xxl">
                <div class="row">
                    <div class="col">
                        <a class="navbar-brand " href="#">
                            <img src="/img/logo.png" alt="DOsify">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                      </button>
                    <div class="col">
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                          <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="/LandingPage">Home</a>
                            <a class="nav-link" href="#">Features</a>
                            <a class="nav-link" href="/SignUpPage">SignUp</a>
                          </div>
                          <button type="button" onclick="window.location.href='/LoginPage'" class="login-btn btn btn-primary" style="background-color: #3A4D39;">Login</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End NavBar -->

    <!-- Hero -->
    <div class="container-fluid">
      <section class="hero-home">
        <div class="container-xxl">
          <div class="row m-3 p-3 "></div>
          <div class="row m-5 ">

            <!-- Hero Title -->
            <div class="col-6 pt-5">
              <img class="mt-5 pt-4" src="/img/Dosify-hero.png" alt="">
              <div class="row">
                <div class="col-7 mt-4">
                  <p class="text-start fw-normal text-hero">Organize your tasks easily and efficiently your productivity with a simple and intuitive to do list app.</p>
                </div>
                <div class="d-grid gap-3 d-md-block mt-3">
                  <button class="btn btn-light opacity-75 " type="button">Features</button>
                  <button type="button" onclick="window.location.href='/LoginPage'" class="login-btn-hero btn btn-primary" style="background-color: #ECE3CE; border-color: #ECE3CE; color: #3A4D39;"><b>Login</b></button>
                </div>

              </div>
              <div class="container ml-5">

              </div>

            </div>

            <div class="col-6 pt-5">
              <div class="mt-154">
                <img src="/img/hero-img.png" alt="">
              </div>
            </div>

          </div>
          <div class="row "></div>
        </div>
      </section>
    </div>
    <!-- End Hero -->

    <!-- Features -->
    <div class="container-fluid container-features" style="background-color: #ECE3CE;">
      <div class="container-xxl">
        <div class="row mt-5 p-3"></div>

        <div class="row mt-5 mb-4 ">
          <h1 class="fs-1 fw-bold text-center m" style="color: #3A4D39;">Features</h1>
        </div>

        <div class="container-1">

          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <img src="/img/card-1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title fw-bolder">Task Grouping</h5>
                  <p class="card-text">Easily differentiate your tasks by category, such as work, personal, or shopping.</p>
                  <br> <br>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <img src="img/card-2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title fw-bolder">Task Priority</h5>
                  <p class="card-text">Set your task priorities to identify important and urgent tasks</p>
                  <br> <br>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <img src="img/card-3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title fw-bolder">Sync Between Devices</h5>
                  <p class="card-text">Freely switch between devices without losing important information. Ensure orderly task management.</p>
                  <br>
                </div>
              </div>
            </div>
          </div>

          <div class="row m-5 p-3"></div>

        </div>
        </div>
    </div>
    <!-- End Features -->

    <!-- Footer -->
    <div class="container-fluid" style="color: #3A4D39">
      <div class="container-xxl">
        <div class="row">
          <div class="text-center">
            <img class="mb-5 mt-3" src="/img/Dosify-hero.png" alt="">
            <p style="color: #ECE3CE;"> Made with ❤  by Kelompok 4</p>
          </div>
        </div>
      </div>
    </div>



    <!-- <div class="container-fluid" style="color: #3A4D39">
      <div class="container-xxl">
        <div class="row">

          <div class="col-6">
            <img class="m-5 pb-2" src="/img/Dosify-hero.png" alt="">
          </div>
          <div class="col-6">
            <div class="container">
              <div class="row align-items-center">
                <p class="text-end" style="color: #ECE3CE;"> Made with ❤  by Kelompok 4</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div> -->
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
