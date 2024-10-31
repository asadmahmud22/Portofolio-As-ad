<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>asad mahmud akram</title>

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- box icons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- custom css-->
    <link rel="stylesheet" href="style.css" />
    <!-- icon website -->
    <link rel="website icon" type="png" href="images/a3.png" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body>
    <!-- <script>
      Swal.fire({
        title: "Do you want to save the changes?",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "LOGIN",
        <!-- denyButtonText: `NO` -->
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          Swal.fire("Saved!", "", "success");
        } else if (result.isDenied) {
          Swal.fire("Changes are not saved", "", "info");
        }
      });
    </script> -->

    <!-- alert("Silakan menekan OK di bawah untuk memunculkan isi halaman ini"); -->

    <!-- header design -->
    <header class="header">
      <a href="#" class="logo"></a>
      <img src="images/a3.png" alt="" />
      <p>asadmhd05@gmail.com</p>

      <i class="bx bx-menu" id="menu-icon"></i>
      <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#services">Skills</a>
        <a href="#tools">Tools</a>
        <a href="#portfolio">Project</a>
        <a href="#contact">Contact</a>
      </nav>
    </header>

    <!-- home section design -->
    <section class="home" id="home">
      <div class="home-content">
        <h3>Hello, It's Me</h3>
        <h1>As'ad Mahmud Akram</h1>
        <!-- <h3>
          And I'm a <span>Frontend Developer,Photographer, Graphic Design</span>
        </h3> -->
        <!-- class="multipe-text" -->
        <div class="home-content">
          <span class="multiple-text"></span>
        </div>
        <p>
          I am a student at the Indonesian University of Digital Technology.<br />
          I majored in Computer Technology.
        </p>

        <div class="social-media">
          <a href="https://www.facebook.com/profile.php?id=100004658626947"
            ><i class="bx bxl-facebook"></i
          ></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.instagram.com/asadmhdd/"
            ><i class="bx bxl-instagram"></i
          ></a>
          <a href="https://www.linkedin.com/in/as-ad-mahmud-5695962a4/"
            ><i class="bx bxl-linkedin"></i
          ></a>
          <a href="https://github.com/asadmahmud22"
          <i class='bx bxl-github'></i></a>
        </div>
        <a href="cv/Surat-Lamaran-Kerja.pdf" class="btn">Download CV</a>
      </div>

      <div class="home-img">
        <img src="images/home-img2.png" alt="" />
      </div>
    </section>

    <!-- about section design -->
    <section class="about" id="about">
      <div class="about-img">
        <img src="images/home-img2.png" alt="" />
      </div>

      <div class="about-content">
        <h2 class="heading">ABOUT <span> ME</span></h2>
        <h3>Frontend Developer</h3>
        <p>
          Hello everyone! Let me introduce myself.<br />
          My name is As'ad Mahmud Akram. <br>
          can call me As'ad.<br />
          I am from Klaten. I live in Pandes, Wedi, Klaten.<br />
          I am 19 years old, I am an only child .<br />
          I was born on Klaten, 22 January 2005.<br />
          I am a student now.<br />
          I study at Indonesian University of Digital Technology.<br />
          My major is Computer Tecnology.<br />
          My hobby is futsal and traveling.
        </p>

          <a href="https://www.linkedin.com/in/as-ad-mahmud-5695962a4/"
       class="btn">Read More</a>
      </div>
    </section>

    <!-- services section design -->
    <section class="services" id="services">
      <h2 class="heading">MY<span> SKILLS</span></h2>

      <div class="services-container">
        <div class="services-box">
          <i class="bx bx-code-alt"></i>
          <h3>Front-end </h3>
          <p>Front-end </p>
          <a href="#portfolio" class="btn">Read More</a>
        </div>

        <div class="services-box">
          <i class="bx bxs-paint"></i>
          <h3>Design UI UX</h3>
          <p>Design UI UX</p>
          <a
            href="https://www.gramedia.com/best-seller/desain-grafis/"
            class="btn"
            >Read More</a
          >
        </div>

        <div class="services-box">
          <i class="bx bx-wifi"></i>
          <h3>Networking</h3>
          <p>Networking</p>
          <a
            href="https://dailysocial.id/post/digital-marketing-adalah"
            class="btn"
            >Read More</a
          >
        </div>
      </div>
    </section>

      <!-- tools -->
      <section class="tools" id="tools">
        <h2 class="heading">TECH <span> STACK</span></h2>
  
        <div class="tools-container">
          <div class="tools-box">
            <img src="images/tools/1.png" alt="" />
            <div class="tools-layer">
              <h4>HTML</h4>
              <p></p>
              <a href="PWC-UTS/index.html"><i class="bx bx-link-external"></i></a>
            </div>
          </div>
  
          <div class="tools-box">
            <img src="images/tools/2.png" alt="" />
            <div class="tools-layer">
              <h4>CSS</h4>
              <p></p>
              <a href="DIY/index.html"><i class="bx bx-link-external"></i></a>
            </div>
          </div>
  
          <div class="tools-box">
            <img src="images/tools/3.png" alt="" />
            <div class="tools-layer">
              <h4>JAVASCRIPT</h4>
              <p></p>
              <a href="WEB BARU/index.html"><i class="bx bx-link-external"></i></a>
            </div>
          </div>
  
          <div class="tools-box">
            <img src="images/tools/4.png" alt="" />
            <div class="tools-layer">
              <h4>FIGMA</h4>
              <p></p>
              <a href="PWC-KELOMPOK/registrasi.html"
                ><i class="bx bx-link-external"></i
              ></a>
            </div>
          </div>

          <div class="tools-box">
            <a href=""></a>
            <img src="images/tools/5.png" alt="" />
            <div class="tools-layer">
              <h4>COREL DRAW</h4>
              <p></p>
              <a href="kopi-senja/index.html"
                ><i class="bx bx-link-external"></i
              ></a>
            </div>
          </div>

          <div class="tools-box">
            <img src="images/tools/6.png" alt="" />
            <div class="tools-layer">
              <h4>CANVA</h4>
              <p></p>
              <a href="https://asadmahmud.000webhostapp.com/"
                ><i class="bx bx-link-external"></i
              ></a>
            </div>
          </div>
        </div>
      </section>

    <!-- portofolio section design -->
    <section class="portfolio" id="portfolio">
      <h2 class="heading">PROJECT<span> ME</span></h2>

      <div class="portfolio-container">
        <div class="portfolio-box">
          <img src="images/portofolio-1.png" alt="" />
          <div class="portfolio-layer">
            <h4>Web Khursus</h4>
            <p></p>
            <a href="PWC-UTS/index.html"><i class="bx bx-link-external"></i></a>
          </div>
        </div>

        <div class="portfolio-box">
          <img src="images/portofolio-2.jpeg" alt="" />
          <div class="portfolio-layer">
            <h4>Web DIY</h4>
            <p></p>
            <a href="DIY/index.html"><i class="bx bx-link-external"></i></a>
          </div>
        </div>

        <div class="portfolio-box">
          <img src="images/portofolio-3.jpeg" alt="" />
          <div class="portfolio-layer">
            <h4>Web New</h4>
            <p></p>
            <a href="WEB BARU/index.html"><i class="bx bx-link-external"></i></a>
          </div>
        </div>

        <div class="portfolio-box">
          <img src="images/portofolio-4.png" alt="" />
          <div class="portfolio-layer">
            <h4>Form Pendaftaran</h4>
            <p></p>
            <a href="PWC-KELOMPOK/registrasi.html"
              ><i class="bx bx-link-external"></i
            ></a>
          </div>
        </div>

        <div class="portfolio-box">
          <a href=""></a>
          <img src="images/portofolio-5.png" alt="" />
          <div class="portfolio-layer">
            <h4>Kopi Senja</h4>
            <p></p>
            <a href="kopi-senja/index.html"
              ><i class="bx bx-link-external"></i
            ></a>
          </div>
        </div>

        <div class="portfolio-box">
          <img src="images/kuliner-jogja.png" alt="" />
          <div class="portfolio-layer">
            <h4>Web Penjualan</h4>
            <p></p>
            <a href="https://asadmahmud.000webhostapp.com/"
              ><i class="bx bx-link-external"></i
            ></a>
          </div>
        </div>
      </div>
    </section>

    <!-- contact section design -->
    <section class="contact" id="contact">
      <h2 class="heading">CONTACT <span> ME</span></h2>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7906.813642871229!2d110.58564959999995!3d-7.7466009999999965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1708240643628!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>
        <form action="">
          <div class="input-box">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-box">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-box">
            <i data-feather="phone"></i>
            <input type="number" placeholder="nomer hp" />
          </div>
          <div class="">
            <textarea
              name="message"
              id="message"
              cols="30"
              rows="10"
              placeholder="Your Message"
            ></textarea>
          </div>

          <input type="submit" value="Send Message" class="btn" />
        </form>
      </div>
    </section>

    <!-- footer design -->
    <footer class="footer">
      <div class="footer-text">
        <p>Copyright &copy; 2024 by Codegal | All Rights Reserved.</p>
      </div>

      <div class="footer-iconTop">
        <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
      </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>
  </body>
</html>