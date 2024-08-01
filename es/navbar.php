<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portafolio de Proyectos</title>
  <link rel="stylesheet" href="../estilo.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

       <?php require '../esoren.php'; ?>

        <figure class="avatar-box">
          <img src="../img/yo.jpeg" alt="Tatiana Jimenez" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Tatiana Jimenez">Tatiana Jimenez </h1>

          <p class="title">Administrador de Bases de Datos</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Mostrar contactos</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Correo</p>

              <a href="mailto:espinozabrendaly38@gmail.com" class="contact-link">espinozabrendaly38@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Télefono</p>

              <a href="tel:+526951226772" class="contact-link">+52 6951226772</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Fecha de Nacimiento</p>

              <time datetime="2003-07-01">01 de Julio, 2003</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Ubicación</p>

              <address>Escuinapa Sinaloa, México</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          

          <li class="social-item">
  <a href="#" class="social-link">
    <img src="../img/mysql.png" alt="MySQL Logo" width="24" height="24">
  </a>
</li>

<li class="social-item">
  <a href="#" class="social-link">
    <img src="../img/mongodb.jpeg" alt="MySQL Logo" width="24" height="24">
  </a>
</li>


<li class="social-item">
  <a href="#" class="social-link">
    <img src="../img/procedimientos.png" alt="MySQL Logo" width="24" height="24">
  </a>
</li>

        </ul>

      </div>
     
    </aside>

    <!-- <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Blog</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav> -->



  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>