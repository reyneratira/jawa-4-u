<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>PROJECT KK4A | Portofolio</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href="#home">
          <img src="img/J4U.jpg" alt="logo kecil" width="30" height="30" class="d-inline-block align-text-top" />
          JAWA 4 U
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link border-0" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link border-0" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link border-0" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link border-0" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link border-0" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center backgroundimg">
      <img src="img/J.jpg" alt="Logo Besar" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4 mt-2 fw-normal text-white">JAWA 4 U</h1>
      <p class="lead fw-normal text-white">Gaming Community | Content Creator</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="background-attachment: fixed">
        <path
          fill="#FFFFFFFF"
          fill-opacity="1"
          d="M0,256L21.8,224C43.6,192,87,128,131,96C174.5,64,218,64,262,96C305.5,128,349,192,393,229.3C436.4,267,480,277,524,240C567.3,203,611,117,655,96C698.2,75,742,117,785,144C829.1,171,873,181,916,160C960,139,1004,85,1047,85.3C1090.9,85,1135,139,1178,181.3C1221.8,224,1265,256,1309,250.7C1352.7,245,1396,203,1418,181.3L1440,160L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->
    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Us</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>JAWA 4 U adalah sebuah website yang dibuat oleh Kelompok 10 dari kelas XI RPL 3 yang beranggotakan S. Maulana Muhammad Rafid, Reyner Atira Prasetyo, Nicolaus Bintang Natanael, dan Afridho Nur Zaki.</p>
          </div>
          <div class="col-md-4"><p>JAWA 4 U ada untuk memenuhi kebutuhan bagi para Content Creator yang ingin mengembangkan Community dan Proyek yang ingin dikembangkannya bersama komunitas JAWA 4 U.</p></div>
        </div>
      </div>
    </section>
    <!-- Akhir About -->

    <!-- The Team -->
    <section id="team">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>The Team</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="card m-3 border-0" style="max-width: 540px">
            <div class="row g-0 mb-3">
              <div class="col-md-4">
                <img src="img/team/rey.jpg" class="img-fluid rounded-circle img-thumbnail" style="background-color: #ffe652" alt="Jawa" />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Reyner Atira Prasetyo</h5>
                  <p class="card-text">
                    <li>Valorant Pro Player (Aseli)</li>
                    <li>CSGO Pro Player (Aseli)</li>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card m-3 border-0" style="max-width: 540px">
            <div class="row g-0 mb-3">
              <div class="col-md-4">
                <img src="img/team/bibin.jpeg" class="img-fluid rounded-circle img-thumbnail" style="background-color: #ffe652" alt="Jawa" />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Nicolaus Bintang Natanael</h5>
                  <p class="card-text">
                    <li>Proud Ace Combat Enjoyer</li>
                    <li>Sangat Gaming</li>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card m-3 border-0" style="max-width: 540px">
            <div class="row g-0 mb-3">
              <div class="col-md-4">
                <img src="img/team/rapid.jpeg" class="img-fluid rounded-circle img-thumbnail" style="background-color: #ffe652" alt="Jawa" />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">S. Maulana Muhammad Rafid</h5>
                  <p class="card-text">
                    <li>Brawhalla Pro Player (Aseli)</li>
                    <li>Valorant Pro Player (Aseli)</li>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card m-3 border-0" style="max-width: 540px">
            <div class="row g-0 mb-3">
              <div class="col-md-4">
                <img src="img/team/dodo.jpg" class="img-fluid rounded-circle img-thumbnail" style="background-color: #ffe652" alt="Jawa" />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Afridho Nur Zaki</h5>
                  <p class="card-text">
                    <li>Genshin Impact Enjoyer (Aseli)</li>
                    <li>Certified Weeblet</li>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffe652"
          fill-opacity="1"
          d="M0,192L48,170.7C96,149,192,107,288,80C384,53,480,43,576,85.3C672,128,768,224,864,218.7C960,213,1056,107,1152,74.7C1248,43,1344,85,1392,106.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir The Team -->

    <!-- Projects -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Projects</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/projects/1.jpg" class="card-img-top" alt="Project 1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/projects/4.jpg" class="card-img-top" alt="Project 2" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/projects/3.jpg" class="card-img-top" alt="Project 3" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/projects/2.jpg" class="card-img-top" alt="Project 4" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/projects/5.jpg" class="card-img-top" alt="Project 5" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#FFF"
          fill-opacity="1"
          d="M0,288L34.3,261.3C68.6,235,137,181,206,181.3C274.3,181,343,235,411,234.7C480,235,549,181,617,181.3C685.7,181,754,235,823,240C891.4,245,960,203,1029,192C1097.1,181,1166,203,1234,229.3C1302.9,256,1371,288,1406,304L1440,320L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Projects -->
    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col mb-3">
            <h2>Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7">
            <form method="POST" action="insert.php">
              <div class="mb-3">
                <label for="Email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name ="email" />
              </div>
              <div class="mb-3">
                <label for="Name" class="form-label">Full name</label>
                <input type="text" class="form-control" id="name" name ="name" />
              </div>
              <div class="mb-3">
                <label for="Pesan" class="form-label">Message</label>
                <textarea name="pesan" class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" name="aksi" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#71dfe7"
          fill-opacity="1"
          d="M0,320L34.3,288C68.6,256,137,192,206,160C274.3,128,343,128,411,144C480,160,549,192,617,208C685.7,224,754,224,823,192C891.4,160,960,96,1029,96C1097.1,96,1166,160,1234,176C1302.9,192,1371,160,1406,144L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer id="footer" class="text-white text-center p-3">
      <p>Project KK4A | XI RPL 3 | Kelompok 10 | <a href="https://www.youtube.com/watch?v=iik25wqIuFo" class="text-white fw-bold">Jawa 4 U</a></p>
    </footer>
    <!-- Akhir Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      var nav = document.querySelector("nav");

      window.addEventListener("scroll", function () {
        if (window.pageYOffset > 100) {
          nav.classList.add("bg-dark", "shadow");
        } else {
          nav.classList.remove("bg-dark", "shadow");
        }
      });
    </script>
  </body>
</html>