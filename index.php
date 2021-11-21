<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400&display=swap" rel="stylesheet">

  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

  <!-- Torus Kit `.css` file -->
  <link rel="stylesheet" href="./assets/css/style.min.css">

  <!-- Torus Kit `.js` file -->
  <script src="./assets/js/toruskit.min.js"></script>

  <title>Portfolio - Resumer & Experiences BOUKIR Youssef</title>

</head>

<body class="">

  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <!-- Navigation -->
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

  <nav class="navbar navbar-expand-lg fixed-top bg-white">
    <div class="container">

      <!-- Logo -->
      <a class="navbar-brand" href="./">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" style="fill: rgba(222, 26, 83, 1);transform: ;msFilter:;">
          <path d="M13.131 21s-.63-.114-1.138-.114c-.457 0-1.142.114-1.142.114l.143-7.646C9.933 11.52 6.814 5.933 4.868 3c.979.223 1.391.209 2.374 0l.015.025c1.239 2.194 3.135 5.254 4.736 7.905C13.575 8.325 16.064 4.258 16.74 3c.765.201 1.536.193 2.392 0-.9 1.213-4.175 6.88-6.153 10.354L13.125 21h.006z"></path>
        </svg>
        <span style="color: black;font-size: larger;">.</span>
      </a>

      <!-- Togglers -->
      <div class="d-flex ms-auto order-lg-1">
        <!-- Top navigation toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-three-dots-vertical"></i>
        </button>

        <!-- Offscreen navigation toggler -->
        <button class="btn shadow-no position-relative center-both text-dark" id="off-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation" data-tor="click:class.toggle(active, {target: body})">
          <!-- <i class="bi bi-list h4 mb-0 z-index-1 center-both"></i> -->
          <i class="bi bi-arrow-left-short position-absolute d-flex" data-tor="hover(#off-toggler):reveal(left) delay(100ms) quad"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" data-tor-group="path => hover(#off-toggler):scaleX.to(0) originX(0%) quad delay(/+100ms/);">
            <path fill="currentColor" d="M2.5 4c0-.3.2-.5.5-.5h10c.3 0 .5.2.5.5s-.2.5-.5.5H3c-.3 0-.5-.2-.5-.5z" />
            <path fill="currentColor" d="M2.5 8c0-.3.2-.5.5-.5h10c.3 0 .5.2.5.5s-.2.5-.5.5H3c-.3 0-.5-.2-.5-.5z" />
            <path fill="currentColor" d="M2.5 12c0-.3.2-.5.5-.5h10c.3 0 .5.2.5.5s-.2.5-.5.5H3c-.3 0-.5-.2-.5-.5z" />
          </svg>
          <span class="circle circle-md position-absolute bg-opacity-10" data-tor="hover(#off-toggler):[bg(dark) scale.from(0)]"></span>
        </button>
      </div>

      <!-- Navigation -->
      <div class="collapse navbar-collapse small order-lg-0" id="topNavbar">
        <ul class="navbar-nav d-flex w-100 justify-content-evenly px-2 px-lg-7 links-dark">
          <li class="nav-item">
            <a class="nav-link" href="#">Call me (+212) 659-397-337</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">youssefboukir5@gmail.com</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Youssef-cv.pdf" download="Youssef-cv.pdf">Download CV
              <i class="bi bi-file-earmark-arrow-down-fill text-primary"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Let's chat
              <i class="bi bi-chat-dots-fill text-primary"></i>
            </a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
  <!-- Offscreen backdrop -->
  <div id="offscreen-backdrop" class="z-index-master w-h-100 fixed-top bg-black bg-opacity-50" data-tor="active(body):[fade.in @pointer-events(none;auto)] click:class.remove(active, {target: body})"></div>

  <!-- Offscreen navigation -->
  <nav id="offscreen-nav" class="overflow-auto position-fixed z-index-master end-0 bg-white shadow w-80 w-sm-auto p-5 pe-8 h-100" data-tor="active(body):pull.left(full)">
    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-tor="click:class.remove(active, {target: body})" aria-label="Close"></button>
    <ul class="nav flex-column links-dark nav-style-opacity nav-style-hover-primary" data-tor-group="
      .nav-item => active(body):[fade.in pull.left(sm)] delay(/25ms+25ms/) slow;
      .nav-link => hover:push.right(xs) quad;
    ">

      <li class="nav-item">
        <a class="nav-link transition-unset" href="#home">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link transition-unset" href="#services">Services</a>
      </li>

      <li class="nav-item">
        <a class="nav-link transition-unset" href="#skills">Skills</a>
      </li>

      <li class="nav-item">
        <a class="nav-link transition-unset" href="#experience">Experience</a>
      </li>

      <li class="nav-item">
        <a class="nav-link transition-unset" href="#portfolio">Portfolio</a>
      </li>



      <li class="nav-item">
        <a class="nav-link transition-unset" href="#work-process">Work Process</a>
      </li>

      <li class="nav-item">
        <a class="nav-link transition-unset" href="#contact">Contact</a>
      </li>

      <li class="nav-item">
        <a class="nav-link transition-unset" href="#stay-connected">Stay connected</a>
      </li>


    </ul>
  </nav>

  <main id="main-content">
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <!-- HERO-->
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <section id="home">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 center-v min-vh-100">

          <!-- left -->
          <div class="col my-3">
            <!-- Badge -->
            <div class="title-badge d-inline-block mb-6 bg-primary text-primary bg-opacity-10 px-3 small">Propos de moi</div>
            <!-- Title -->
            <h1 class="mb-5">
              <span data-tor="inview:reveal(up) bounce slow">Hi,</span>
              <br>
              <span data-tor="inview:reveal(up) bounce slow delay(.5s)">I'm</span>
              <span data-tor="inview:reveal(up) bounce slow delay(.6s)" class="text-primary">Youssef</span>
            </h1>
            <!-- Subtitle -->
            <h2 class="h3 font-sans-serif fw-normal text-secondary text-darken-xl mb-3">Developpeur web & Desktop</h2>
            <!-- Description -->
            <p class="text-body w-80 mb-6">
              Hé, vous cherchez un développeur pour créer votre <span class="text-secondary text-darken-xl">application et développer votre entreprise ?</span> puis serre-moi la main.
            </p>
            <!-- CTA -->
            <a class="btn btn-primary btn-arrow py-2 px-3 mb-4" href="#contact" data-tor="hover:[bg(transparent) text(primary)]">Hire me</a>
            <!-- Social icons -->
            <div class="social-icons">
              <a href="#" class="d-inline-block me-3">
                <img src="./assets/icons/messenger.svg" alt="icon" class="p-2">
              </a>
              <a href="#" class="d-inline-block me-3">
                <img src="./assets/icons/behance.svg" alt="icon" class="p-2">
              </a>
              <a href="#" class="d-inline-block">
                <img src="./assets/icons/instagram.svg" alt="icon" class="p-2">
              </a>
            </div>
          </div>
          <!-- end .col -->

          <!-- Right Illustration -->
          <div class="col">
            <img class="img-fluid border border-dark border-opacity-0" src="./assets/img/works/wfh_0.svg" alt="illustration">
            <style>
              .st0 {
                fill: #404040
              }
            </style>
            <path class="st0" d="M666.9 263c1.4-.3 3.9-.7 7.2-1.1-3.3.4-5.8.8-7.2 1.1zM737.1 318.7z" />
            <path class="st0" d="M1147.6 984.2H1129v-.1l-.2.1h-1.8c.7-1.9 1.3-4 1.7-6.2h.1c.3-1.7.5-3.5.6-5.3.2-4.4-3.3-8.1-7.7-8.3h-6.3v.1H1090c-2.6 0-5.1-1.2-6.7-3.2l-13.3-16.5c-8-10-21.1-14.3-33.5-11.2l-.1-.1-26.7 6.8v-.1c-2-2.8-48.3-69-90.2-115.2-2.4-2.7-5-5.2-7.7-7.7-.2-.1-.3-.3-.5-.4-.4-.4-.8-.7-1.2-1-.4-.4-.8-.7-1.2-1V595.1H951V570H824.7v-.1h26.6l7-30.6h13.5c7.6 0 13.7-6.1 13.7-13.7v-.9c0-7.7-6.1-13.8-13.7-13.8h-7l6.4-27.9c0-.1.1-.1.2-.2H811c-20.4-52.1-71.4-110.5-96-130.3 3.7-3.2 6.9-6.7 9.9-10.6 6.3-8.2 13.4-20.3 14-34.3v1.1c.1-.8.1-1.6.1-2.4 0 .4 0 .8-.1 1.3 0-1.1.1-2.2 0-3.3v2c.1-8.8-2.3-18.3-9-28-5.9-8.5-15.4-13-25.3-15.2 3.1.7 6.1 1.6 9 2.8-2.9-1.2-6-2.1-9-2.8-1.2-.3-2.4-.5-3.6-.7-17.7-2.9-35.4.8-35.4.8.3-3.4.7-8.5.8-14.4.1-13.2-1.8-31-11.7-45.9 2.1.3 4.3.5 6.5.5 26.5 0 47.9-21.4 47.9-47.9s-21.4-47.9-47.9-47.9c-25.5 0-46.3 19.9-47.8 45-6.1-9.2-12.7-15.6-17.5-12.1-8.4 6.2 5.1 24.5 18.9 37-14.9-2.5-29.6.6-40.7 6.5 1.4-.7 2.8-1.4 4.3-2.1-7.1 3-13 7.2-17.2 11.8-.5.5-.9 1-1.4 1.6-.4.5-.8 1-1.1 1.5-.1.2-.3.4-.4.6-.2.3-.5.7-.7 1-.1.2-.3.4-.4.6-.2.4-.4.7-.6 1.1l-.3.6c-.2.4-.5.9-.7 1.4-.1.1-.1.2-.2.4-.3.6-.6 1.2-.8 1.8-.1.1-.1.3-.2.4l-.6 1.5c-.1.2-.1.4-.2.6-.2.5-.3.9-.5 1.4-.1.2-.1.4-.2.6-.2.5-.3 1-.5 1.6 0 .1-.1.3-.1.4-.4 1.4-.8 2.8-1.1 4.2 0 .1-.1.3-.1.4-.1.6-.3 1.2-.4 1.9 0 .1 0 .2-.1.3-.3 1.5-.6 3.1-.8 4.6-.5 3.4-.9 6.8-1.2 10.3-8.4.1-16.1 6.7-18 16.2-2.1 10.7 4 20.8 13.6 22.7-.4 2.3-.7 4.5-.9 6.6-15.5 3.3-37.3 17.8-38.2 42.3-.6 17.8 8.6 28.4 17.1 34.4-24.7 16.5-54.9 51.3-76.3 78.2H332.8c-10 0-18.1 8.1-18.1 18.1 0 1.9.3 3.7.9 5.5l4.1 13-.3-.9c-11.7 5.8-17.5 15.6-17.5 22.4 0 9.9 10.1 11.8 10.1 11.8s-.3.5-.7 1.2l-.3.2c.1 0 .2-.1.3-.1-1.5 3.2-4.2 11.7 6.2 16.1h-.1.1s0 12.2 12.2 12.2c0 0-1.6 9.5 11.1 10.4.7 0 1.3.1 2 .1l4.2 13.4h-.1l1.1 3.4c.2.7.5 1.4.8 2.1 0 0 0 .1.1.1 0 .1.1.1.1.2 2.5 5 7.7 8.2 13.5 8.2h-44.6c0-10.7-7.1-20-17.4-22.8l-26.7-7.3v-186c8.6-3.5 14.6-12 14.6-21.8 0-2.4-.4-4.7-1-6.9l87.6-72.6 1-.8c.9 2.9 1.3 6 1 9.2l-2 29.2c-1 14.3 2.6 28.6 10.4 40.6l2.6 4 33-27.4c3.6 4.4 9.1 7.3 15.3 7.3 10.9 0 19.7-8.8 19.7-19.7 0-4.9-1.8-9.3-4.7-12.7l32.6-27.1-3.4-3.2c-10.4-9.8-23.8-16-38-17.7l-29.2-3.3c-6.3-.7-12.1-3.9-16.2-8.8l-8-9.7c-4.8-5.7-12.6-7.5-19.1-4.8l-4-4.8c-1.8-2.1-4.9-2.4-7-.6l-.2.2c-2.2 1.7-2.5 4.9-.7 7l4 4.8c-3.7 5.9-3.5 13.8 1.3 19.5l2.5 3-1 .9-.1-.2.1.2-88.8 73.6c-3.3-1.8-7.1-2.8-11.2-2.8-13 0-23.6 10.6-23.6 23.6 0 2.5.4 4.9 1.1 7.1l-62.8 52.1c-3.8 3.1-4.3 8.7-1.2 12.5l.2.3c3.1 3.8 8.7 4.3 12.4 1.2l63-52.3c.6.3 1.1.6 1.7.8v186.1l-26.6 7.3c-10.3 2.8-17.4 12.1-17.4 22.8h-35v25.1H219v99.1c-5.2.9-12.4 5.8-19.4 13.2-.1-11.8-3.2-20.6-8-21.2-6.1-.8-12.7 12.1-14.7 28.8-.6 4.8-.8 9.6-.4 14.3.6 7.9 2.6 13.9 5.6 16.1.1.1.2.2.4.3-9.7 11.6-16.9 27.3-22.1 42.2-1.2 1.5-1.6 2.9-1.3 3.9-2.6 8.1-4.7 15.9-6.2 22.6h-14.4c-.4-10.1-1.1-23-2.4-37 .5-.6.7-1.1.6-1.7-.1-.5-.4-.9-.9-1.3-2.1-21.8-5.7-45.6-11.6-64.1 3.7-1.1 7.8-6.1 11.2-13.4-.2-.1-.3-.3-.5-.4.2.2.5.3.7.5 2-4.2 3.5-8.6 4.7-13.1 4.1-16.3 2.7-30.7-3.3-32.2-4.7-1.2-10.7 5.8-15.1 16.8-5.3-13.3-13.1-22.1-18.3-20.4s-6.1 13.4-2.5 27.3C91 669.6 82 667.5 79 671.3c-3.9 4.8 3.6 17.2 16.6 27.7 3.7 3 7.7 5.7 11.9 7.9 6.9 3.6 12.9 5.1 16.4 3.8l7.7 62.4c-8-1.7-24.6-1.2-43.6 1.7-26.2 4-46.8 10.9-46.1 15.6.7 4.6 22.5 5.2 48.6 1.2 18.8-2.8 34.7-7.2 41.9-11.2l4.2 34.3H93.3c2.5 2.5 14.9 14.2 34.2 18.5-19.2-4.4-31.7-15.9-34.2-18.5l11.2 20.8c6 11.2 4.3 24.9-4.1 34.3l-13.2 14.8c-4.4 4.9-8.2 10.3-11.5 16 14.6 1 27.1 10.6 32 24.3 0 .1 0 .1-.1.2-4.8-13.8-17.3-23.3-31.9-24.3-8 14.2-12 30.3-11.6 46.6h.1c.5 23 9.8 45 26 61.3h104.2c13-13.2 21.6-30 24.7-48.1v48.2h24.6v-45.4l79.5 37.7c3.3 1.6 7.2.2 8.7-3.1 1.5-3.1.3-6.8-2.6-8.5l-2.8-1.6.3-.3-83.1-39.6 83.2 39.3c12.3-15 35.8-46.5 59.1-94.1l-71.1-33.5-21-9.9 21 9.9v-.1l71 33.1 11.7 5.5 3.3 1.5s15.6-20.2 23.7-46.6l.1.1c.6-1.9 1.2-3.8 1.7-5.8l-.1-.2c1.2-4.8 2.2-9.7 2.7-14.7.7-6.9 1.3-13.5 1.8-19.7l.2-.2c.2-2.6.4-5.2.6-7.7h-.2c1.9-25.2 3.4-44.6 12.7-58.6.9 15.1 2.3 31.9 4 50.8 3.9 43.7 9.1 77.7 11.1 103.3v.1c.1 1 .2 2 .2 3v.3c2.1 31.3-1.3 49.5-19.4 57.7-.5.2-.9.4-1.4.7 3.3-12.3 7.2-31.5-1-32.1-8.2-.5-10.2 27.8-10.8 38.4-18.1 11.1-25.8 23.7-26.3 35.8v1.3c0 1 0 2 .1 2.9H550c.4 0 .7 0 1.1-.1 3-.5 5.3-3.2 5.3-6.3 0-3.5-2.9-6.4-6.4-6.3h-2.5c3.5-11.6 8.3-31.6 10.8-62.1h39.3l-11 65.2c-.8 4.5 2.3 8.8 6.8 9.6.5.1.9.1 1.4.1 3.9 0 7.3-2.7 8.1-6.6l14.8-68.3h18.9l14.8 68.3c.8 3.8 4.2 6.6 8.1 6.6 4.6 0 8.3-3.7 8.3-8.3 0-.5 0-1-.1-1.4l-11-65.2h114l14.8 68.3c.3 1.2.8 2.3 1.5 3.2l.7 3.4h46.1v-7c0-9.4-7.6-17-17-17 0 0 23.1-17.3 37.1-34.3 0 0 11.5 14 29.9 21v37.3h24.6V975c1.2-.1 2.5-.2 3.7-.4l2.5 12c2.6 12.8 13.9 22.1 27.1 22.1h111.8c3.2 0 6.3 0 9.3-.1h105v-3.8c.3-11.4-8.9-20.6-20.2-20.6zM862.9 518.9h8.8c3.2 0 5.7 2.6 5.7 5.7v.9c0 3.2-2.6 5.7-5.7 5.7h-11.6l2.8-12.3zm-124-214.8c0-.4 0-.9-.1-1.3.1.5.1.9.1 1.3zm-.1-2.4c0-.4-.1-.8-.1-1.2 0 .4 0 .8.1 1.2zm-.4-3.2c0-.3-.1-.5-.1-.8 0 .3 0 .6.1.8zm-562 626.3c-6.6-19-27.4-29-46.4-22.4-7.2 2.5-13.3 7.2-17.6 13.2 9.1-12.9 26-18.8 41.7-13.3 10.5 3.7 18.7 11.9 22.4 22.3-.1.1-.1.1-.1.2zm42.7-10.7c-1.3.3-2.5.7-3.7 1.1-1.8-5.1-4-10-6.6-14.7-8.3.4-15.9 3.7-21.9 8.9 6-5.3 13.7-8.5 22-9-3.2-5.7-7-11.1-11.4-16l-13.4-14.8c-8.4-9.5-10-23.2-4-34.3l11.2-20.8c-3.1 3.2-21.4 20.2-49 20.2h-2.6 2.6c27.6 0 45.9-17 49-20.2h-35l8-20.4c7 .2 20.4-3.4 34.9-9.8 7.7-3.4 14.6-7 20-10.5v140.3zm0-155.1c-7.3 1.4-16.9 4.5-27.2 9-8.7 3.8-16.5 8.1-22.2 12l13.3-34c3.1 2.1 9.2 2.8 16.6 1.9.6-5.4-1.4-10.8-5.4-14.6 2.1 2 3.8 4.5 4.7 7.4.8 2.4 1 4.9.7 7.3 4.6-.6 9.1-1.6 13.6-3 2-.6 4-1.4 5.9-2.1V759zm-25.7-26.4c.2.2.5.4.7.6-.2-.2-.5-.4-.7-.6zm25.7-11.6c-.8.1-1.7.2-2.5.4.9-1.2 1.7-2.4 2.5-3.7v3.3zm24.6 212.6c14.4 2 36.3 3 36.4-7.1 0-4.9-6.5-6.6-14.6-6.7 8.2.1 14.8 1.8 14.8 6.7-.2 10.2-22.3 9.2-36.6 7.1zm195.6-329.9h-.1c-5.4 2-10.8 4.1-16.1 6.3-4.8 2-9.2 4-13.1 5.9-3.6 1.8-7 3.6-10.2 5.4-2.3 1.3-4.6 2.6-6.7 3.8v.1c-11.4 7-19.8 14-26.7 22.6-.2.3-.4.5-.6.8-2.5 3.2-4.8 6.7-7 10.5-1.4 2.2-2.5 4.2-3.2 5.7-7 15.2-14.3 36.2-23 62.7l-.1-.2c-2.5 7.8-5.3 16.3-8.3 25.5h.1c-1.4 4.4-2.9 8.9-4.5 13.6-11.2 33.8-18.8 61.5-26 83.3h.1c-.4 1.2-.8 2.3-1.2 3.5h.2c-12.1 36.1-23.2 54.9-48 57.6 7.3-10.2 15.5-24.1 8.7-27.3-2.8-1.3-6.3 1.5-9.8 6V595.1h220.5c-8.4 2.8-16.9 5.7-25 8.6zm92.4-48.4L513 496.4c12.1-13.5 20.1-25 21.1-26.5l13.9 39.8-16.3 45.6zm172.5-92.5l16.7 23c-6.4-1.1-12.7-2-18.7-2.8.6-6.5 1.3-13.3 2-20.2zM572.5 220.3c-.9.2-9.2 2-17 2 8.2 0 17-2 17-2zm28.2 695.2h-41.2c.2-4.8.4-9.8.5-15.1h18.5s9.5-44-1-83.2c-8.4-31.5-16.3-43-22.3-59.3h43.4l16.1 74.2-14 83.4zm21.1 0l5.5-25.5 5.5 25.5h-11zm-14.6-671.4c12.7-12.8 35.1-12.4 38.7 7-3.7-19.3-26.1-19.8-38.7-7zm46.7 671.4l-14-83.4 16.1-74.2h76.8L767 915.5H653.9zM773.6 829l-13.1-77.7c1.9-.9 3.8-1.9 5.6-3 14.7 21.9 18.5 47.9 18.6 66.1-4 4.2-7.8 9.1-11.1 14.6zm110.5-29.4c-21.8-9.8-46.3-12-67.8-5-10.3-35-22-47-35.1-58.8 7.2-7.9 12.5-17.6 15.3-28.5l16.1-62.9 10.2-40c.8-3.1 1.4-6.3 1.9-9.4h59.4v204.6z" />
            <path class="st0" d="M665.7 263.2s.4-.1 1.2-.2c-.7.1-1.1.2-1.2.2zM704.7 263zM580.5 181c.2-.1.3-.1.5-.2-.2 0-.3.1-.5.2zM578.5 181.8zM578.6 181.8c.6-.3 1.3-.5 1.9-.8-.6.2-1.3.5-1.9.8zM1036.3 933.5l-26.7 6.8 27.1-6.9zM739 306.2s0 .1 0 0c0 .1 0 0 0 0zM581 180.8c.7-.3 1.4-.5 2.1-.8-.7.2-1.4.5-2.1.8zM738.6 311.6c-.1.6-.2 1.3-.3 1.9.1-.6.2-1.2.3-1.9zM738.2 314.1c-.1.8-.3 1.6-.5 2.4.2-.8.3-1.6.5-2.4zM738.9 308.7v0zM738.3 313.5c0 .2-.1.4-.1.6 0-.2.1-.4.1-.6zM738.6 311.1c0 .2 0 .4-.1.6.1-.2.1-.4.1-.6zM738.8 309.1c-.1.7-.1 1.4-.2 2 .1-.7.2-1.4.2-2zM1036.7 933.4zM199.2 660.3c7.2-9.7 10.3-19.7 6.8-22.2s-12 3.3-19.2 13c-7.2 9.7-10.3 19.7-6.8 22.2 3.4 2.5 12-3.3 19.2-13zM58 755.4c21.9 9.8 42.9 10.6 46.9 1.7s-10.6-24.2-32.5-34c4.9 2.8 8 7.6 8.8 12.8-.8-5.4-4.1-10-8.8-12.7L58 755.4c-.1-.1 0-.1 0 0zm16.3-2.7c4.9-3.6 7.6-9.5 7-15.5h.1c.3 3.4-.4 6.8-2.2 10-1.3 2.3-3 4.1-4.9 5.5-1.7-.9-2.9-2.3-3.7-4 .8 1.6 2 3.1 3.7 4zM810.5 131.4c7 5 15 6 22 2 6-3 9-10 4.6-16.3-.1-.1-.3-.2-.4-.3 3.4-1.7 5.8-5.2 5.8-9.3 0-5.7-4.6-10.3-10.3-10.3s-10.3 4.6-10.3 10.3c0 .5 0 .9.1 1.4-5.5-4-10-9.2-15.5-6.5-12 6-5 22 4 29zM441.1 155.4c35.3 0 64-28.7 64-64 0-6.8-1.1-13.3-3-19.4 6.1-4.4 10.1-11.5 10.1-19.6 0-13.3-10.8-24.1-24.1-24.1-6.5 0-12.4 2.6-16.7 6.7-9-4.9-19.3-7.6-30.3-7.6-35.3 0-64 28.7-64 64s28.7 64 64 64z" />
            </svg>
          </div>
          <!-- end .col -->

        </div>
        <!-- end .row -->
      </div>
      <!-- .container -->
    </section>

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <!-- SERVICES -->
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <section id="services" class="py-5 py-lg-8 bg-light">
      <div class="container py-4">
        <!-- Title -->
        <div class="title-badge d-inline-block mb-3 bg-primary text-primary bg-opacity-10 px-3 small">Services</div>

        <div class="row row-cols-1 row-cols-md-2 mt-5 center-v">
          <!-- Illustration -->
          <div class="col my-3">
            <div class="pe-6">
              <img src="https://i.imgur.com/oOolv45.png">
              <style>
                .st0 {
                  fill: #404040
                }
              </style>
              <circle transform="rotate(-45.001 359.3 196.605)" class="st0" cx="359.3" cy="196.6" r="10.1" />
              <path class="st0" d="M838.1 826.5zM1096.8 578.3v-.1c4.4-.5 8.7-1.5 12.9-2.8 15.2-4.8 26.2-13.2 24.4-18.8-1.4-4.4-10.1-5.7-21.2-3.8 8-11 11.3-21.7 7.3-25.1s-14 1.8-23.3 11.7c-.1-11.2-3-19.6-7.6-20.2-5.8-.7-12.1 11.6-14 27.4-.6 4.5-.7 9.1-.4 13.7 8.9-2.8 18.3 2 21.2 10.9.6 1.8.9 3.8.8 5.7.1-5.2-2.1-10.1-6.1-13.4-4.4-3.7-10.4-4.9-15.9-3.1.5 7.5 2.4 13.3 5.3 15.5l.3.3c-9.2 11.1-16 25.8-20.9 40-1.3 1.6-1.8 3-1.4 4.1-1.9 5.9-3.5 11.5-4.8 16.7V386c0-29.1-15.4-54.7-38.5-68.9V33.3C1015 14.9 1000.1 0 981.7 0H621.1c-18.4 0-33.3 14.9-33.3 33.3v174.2c-5.1-3.1-9.2-4.3-11.5-2-5.6 5.6 9.5 23.7 10.5 25-4.3.1-20.5 1.1-23 8.7-2.9 8.7 3.8 15.4 3.8 15.4s-11.6 5.8-3.8 16.4c0 0-5.8 9.6 3.8 15.4 0 0-5.8 6.8 3.9 13.5 3.6 2.5 7.7 4.2 11.6 5.2H441.5v-56.5c0-18.4-14.9-33.3-33.3-33.3h-5.3v-43.2H470L441 62.4v-.2h-91.7l-.1.2c0 .1.1.2.1.3l-28.7 109.4h66.9v43.2H47.6c-18.4 0-33.3 14.9-33.3 33.3v360.6c0 17.7 13.9 32.2 31.4 33.2 8.3 16.6 21.7 25.4 36.2 29.7v68.5L0 815l1.9 2.3c2.2 2.7 5 4.8 8 6.4.3.2.7.3 1 .5 3.3 1.6 7.1 2.4 10.8 2.4h177.5v-.1h126.5c22.1 0 42.4-10 55.8-26.1l1.9 16.1c.7 5.7 5.5 10 11.3 10 5.8 0 10.6-4.3 11.4-10l8.3-69.9H430c1.7 2.7 3.5 5.4 5.2 8-4 3-6.6 6.6-8.2 11.2l24.4 11.4c2.6 3.4 5.2 6.8 7.9 10.1l8.4-2.5-8.3 2.5c.8 1.1 1.3 1.6 1.3 1.6-2.2 8.2-3.5 16.6-4 25.1-.3 4.2-.2 8.4.2 12.5h133l-.4-4.1c-.3-2.9-1-5.7-2.1-8.4h-.1c-2.5-6-7-11-12.6-14.3l-17.4-9.9c9.8-13.9 18.8-28.2 26.9-43.1 0 0 0-.1.1-.1h82.2c-1.5 14.1-6.5 23.8-17.4 31.2-23.4 15.6-31.7 25.4-30.5 38.8l58-.1s22.2-19.2 37.6-22.1c.8-.2 1.6-.3 2.4-.4-.8.1-1.6.3-2.3.4l-3.7 22h28.3s3.1-8.6 6.4-24.9h-1.1 1c2.3-11.3 4.7-26.4 6.3-44.9h67l8.3 69.9c.7 5.7 5.5 10 11.3 10 5.7 0 10.6-4.3 11.4-10l8.3-69.9h112c-1.6 7-2.3 14.1-2.1 21.3.5 22 9.4 43 24.8 58.7h99.3c15.4-15.6 24.3-36.6 24.8-58.5-3-.9-6-1.3-9.1-1.3-2.7 0-5.3.3-7.8.9 5.4-1.3 11.3-1.3 17 .3.4-15.6-3.4-31-11.1-44.5h.1c-3.1-5.5-6.7-10.6-10.9-15.3l-12.6-14.1c-8-9-9.6-22.1-3.8-32.7l10.7-19.9c-2.6 2.6-15.6 14.7-35.6 18.3 19.9-3.6 32.9-15.7 35.4-18.3h-33.4l7.6-19.3c6.7.2 19.4-3.2 33.2-9.3 19.1-8.4 33.1-18.7 31.2-23s-18.9-1-38 7.4c-8.3 3.7-15.6 7.7-21.1 11.4l12.6-32.2c2.9 2 8.7 2.6 15.8 1.8zM126 752.2zM211.2 363c9.2-6.8 16.2-16.2 20.1-27h.1c-3.9 10.8-11 20.2-20.2 27zm629.4-162.4s0 .1-.1.4v-.4s21-4.7 19.6-21.4c1.6 16.7-19.5 21.4-19.5 21.4zm55.2 51.2h.1c14.1 2.7 24 8.5 31.2 16.3-7.3-7.7-17.2-13.6-31.3-16.3-4.5 10.7-19.3 40.8-46.9 53.3h-.1c27.6-12.4 42.4-42.6 47-53.3zm49.1 53.3c-1.5-5.8-3.2-12.1-5.2-16.8-1.9-4.6-4.2-9.1-7-13.2 2.8 4.2 5.1 8.7 7.1 13.4 1.9 4.7 3.7 10.8 5.1 16.6zM932.7 275c-.4-.6-.9-1.3-1.3-1.9.4.7.9 1.3 1.3 1.9zm109.2 491.8h-.8.8zm-2 0h-.2.2zM591.7 33.3C591.7 17.1 604.8 4 621 4h360.6c16.2 0 29.3 13.1 29.3 29.3v281.4c-11.4-6.1-24.4-9.6-38.3-9.6h-2.7c5.7-7.7 9.6-18.5 6.5-33.1-6.9-32.8-42.4-31.8-42.4-31.8 3.5-16-1.2-32.6-12.5-44.3-5.7-5.9-12-9.4-18.1-11.3 0 0-.4-.1-1.1-.3-3.5-1-6.8-1.5-10-1.7-4.2-.3-9.2-.2-14.3 1-1.8.4-2.8.7-2.8.7v-.1c1-6 .8-12.4.1-18v-.3c-.9-7.6-2.7-13.7-3.1-15.1v-.2c-1.7-4.8-4-9.6-7.3-14.2 3.6 1 7.4 1.6 11.3 1.6 22.4 0 40.5-18.1 40.5-40.5S898.6 57 876.2 57c-22.1 0-40.1 17.7-40.5 39.7-5.6-9-11.9-16-16.4-12.7-7.4 5.4 5.2 21.9 17.3 32.4-21-5.9-42.7 2.4-51.9 13.9-4.7 5.9-7 13.8-8.4 22.4-2 12.7-1.9 26.8-4.2 38.2-3.9 19.3-1 31.8 10.6 38.6 10.5 6.1 22.6 2.7 24.7 2l.3-.1-2.9 17.4s-16.9 2-30.9 6.4c2.1 16.6 8.4 39.6 26.9 49.9h-.2c-18.3-10.4-24.6-33.3-26.7-49.8-.2.1-.4.1-.6.2v-.1c-2.7.8-5.4 1.9-8 3.1-10.2 4.8-49.9 30.5-72.6 45.3l.7 1.3h-.1l-.7-1.3c-.7.4-1.3.9-2 1.3h-20.9c-14.2-19.3-46.5-62.9-55.9-73.6-6.9-7.9-15.1-16-22.2-21.3V33.3zm-183.5 186c16.2 0 29.3 13.1 29.3 29.3v56.5h-34.6v-85.8h5.3zM18.3 609.2V248.6c0-16.2 13.1-29.3 29.3-29.3h339.9v85.8h-26.1c-44.7 0-80.9 36.2-80.9 80.9v65.7s-.1 0-.1-.1c-24.2-17.4-51.8-14.4-51.9-14.4l-1.2-10.7-.8-6.7c23.1 2.9 30.3-6.9 33.7-15.4 3.9-9.6 1.4-17.9-1.6-28.7 0 0 7.6-4.2 6.5-8.9-1-3.8-9.7-4.3-9.7-4.3-.3-1.7-.6-3.5-.9-5.3-1.9-13.5-4.8-21.2-4.8-21.2-3 .8-6.3 1.1-9.4 1.1 3 0 6.3-.3 9.3-1.1 0 0 14.5-4.8 13.5-16.4-1.3-15.5-25.1-8.7-25.1-8.7s-26-19.3-54-6.8c-29.8 13.4-32.7 40.5-30.8 58.8 1.1 10.5 4.1 34 6.5 52.2 8.9-3.2 25.8-10.9 32.1-24.2-10.6-1.9-26.4-19.6-15.4-33.7 3.6-4.6 7.8-6.4 11.9-6.4-4.1.1-8.3 1.8-11.8 6.4-11 14.2 4.8 31.8 15.4 33.7-6.3 13.3-23.3 21-32.1 24.2.5 4.2 1 8.1 1.5 11.4.3 2.5 1 7.3 1.7 12.6h-.1s-44.3 4.8-64.6 28c-18.5 21.1-76.1 118.8-54.6 171.1-14.3-1.8-25.4-14.1-25.4-29zm108 143.1c.5-.2 6.9-2.5 17.4-5.7h.1c-11 3.3-17.5 5.7-17.5 5.7zm882.8-5.7s0 .1 0 0c0 .1 0 0 0 0zm-33.2 20.2c14.6-.2 28.2 8.8 33.3 23.2 0 0 0 .1-.1.1-5-14.4-18.6-23.5-33.2-23.3zm68.3 0c3.1.2 6.1.8 9.2 1.9 10 3.5 17.8 11.3 21.4 21.3 0 0 0 .1-.1.1-4.7-13.5-17-22.3-30.5-23.3zm-1.5 0c.4 0 .9 0 1.3.1-.4-.1-.9-.1-1.3-.1zm54.5 1.6c.6-.2 1.3-.4 1.9-.5-.6.1-1.3.3-1.9.5zm-4.4 1.7zm2.5-1.1c.3-.1.5-.2.8-.3-.3.1-.5.2-.8.3zm9.1-45.4zm-29.6 23s0 .1-.1.1a34.71 34.71 0 00-21.2-21.3c9.9 3.4 17.7 11.3 21.3 21.2z" />
              <path class="st0" d="M1078 506.9c3.2 2.4 11.4-3.2 18.3-12.5s9.8-18.7 6.6-21.1c-3.2-2.4-11.4 3.2-18.3 12.5s-9.8 18.7-6.6 21.1z" />
              </svg>
            </div>
          </div>
          <!-- end .col -->

          <!-- Description -->
          <div class="col">

            <h2 class="mb-4 overflow-hidden mb-5" data-tor-group=".fx => scroll:[@width(0;auto) @visibility(hidden;visible), {start: /10+5/, end: /10+5/}];">
              Mes clients savent que je fournis tjrs des services de qualité |
              <span class="text-primary">

                <span class="text-nowrap"><span class="fx">s</span><span class="fx">e</span><span class="fx">r</span><span class="fx">v</span><span class="fx">i</span><span class="fx">c</span><span class="fx">e</span><span class="fx">s</span></span>

                <span class="text-body text-opacity-30 ms-n1" data-tor="loop:blink">|</span>
              </span>
            </h2>
            <div class="row row-cols-1 row-cols-md-2" data-tor-group=".circle => inview:[scale.from(0) rotate.from(20deg)] delay(/+50ms/) slow; h3 => inview:[pull.left(sm) fade.in] slow delay(/+50ms/);">

              <div class="col mb-5" data-tor-parent="hover">
                <a href="#" class="center-v">
                  <!-- Icon -->
                  <div class="circle p-4 bg-secondary me-3" data-tor="!hover(p):bg(primary)">
                    <i class="bi bi-phone text-white h3 mb-0"></i>
                  </div>
                  <!-- Heading -->
                  <h3 class="font-sans-serif h5 mb-0">Mobile apps</h3>

                  <i class="bi bi-arrow-right ms-auto text-body" data-tor="hover(p):[fade.in pull.right(sm)]"></i>
                </a>
              </div>

              <div class="col mb-5" data-tor-parent="hover">
                <a href="#" class="center-v">
                  <!-- Icon -->
                  <div class="circle p-4 bg-secondary me-3" data-tor="!hover(p):bg(primary)">
                    <i class="bi bi-globe text-white h3 mb-0"></i>
                  </div>
                  <!-- Heading -->
                  <h3 class="font-sans-serif h5 mb-0">Web Apps</h3>

                  <i class="bi bi-arrow-right ms-auto text-body" data-tor="hover(p):[fade.in pull.right(sm)]"></i>
                </a>
              </div>

              <div class="col mb-5" data-tor-parent="hover">
                <a href="#" class="center-v">
                  <!-- Icon -->
                  <div class="circle p-4 bg-secondary me-3" data-tor="!hover(p):bg(primary)">
                    <i class="bi bi-laptop text-white h3 mb-0"></i>
                  </div>
                  <!-- Heading -->
                  <h3 class="font-sans-serif h5 mb-0">Desktop Apps</h3>

                  <i class="bi bi-arrow-right ms-auto text-body" data-tor="hover(p):[fade.in pull.right(sm)]"></i>
                </a>
              </div>

              <div class="col mb-5" data-tor-parent="hover">
                <a href="#" class="center-v">
                  <!-- Icon -->
                  <div class="circle p-4 bg-secondary me-3" data-tor="!hover(p):bg(primary)">
                    <i class="bi bi-cloud text-white h3 mb-0"></i>
                  </div>
                  <!-- Heading -->
                  <h3 class="font-sans-serif h5 mb-0">Database</h3>

                  <i class="bi bi-arrow-right ms-auto text-body" data-tor="hover(p):[fade.in pull.right(sm)]"></i>
                </a>
              </div>

            </div>
          </div>
          <!-- end .col -->

        </div>
        <!-- end .row -->
      </div>
      <!-- end .container -->
    </section>
    <!-- end #services -->

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <!-- SKILLS -->
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <section id="skills" class="py-5 mt-3 py-lg-8">
      <div class="container">
        <!-- Badge -->
        <div class="title-badge d-inline-block mb-3 bg-primary text-primary bg-opacity-10 px-3 small">Skills</div>

        <div class="row row-cols-1 row-cols-md-2 mt-md-5 center-v">
          <!-- - - - - - - - -  -->
          <!-- Description -->
          <!-- - - - - - - - -  -->
          <div class="col">
            <!-- Title -->

            <h2 class="mb-4 w-80 overflow-hidden mb-5" data-tor-group=".fx => scroll:[@width(0;auto) @visibility(hidden;visible), {start: /10+5/, end: /10+5/}];">
              En tant qu'ingénieur logiciel j'améliore constamment mes
              <span class="text-primary">

                <span class="text-nowrap"><span class="fx">c</span><span class="fx">o</span><span class="fx">m</span><span class="fx">p</span><span class="fx">é</span><span class="fx">t</span><span class="fx">e</span><span class="fx">n</span><span class="fx">c</span><span class="fx">e</span><span class="fx">s</span></span>

                <span class="text-body text-opacity-30 ms-n1" data-tor="loop:blink">|</span>
              </span>
            </h2>

            <!-- Description -->
            <p class="mb-6">De nature Challengeus et avec une forte adaptabilité je suis à la recherche des nouvelles projets pour tester mes competence a la limite.</p>

            <!-- Skill progress -->
            <div id="skill-progress">

              <div class="skill mb-5">
                <h3 class="h6 small font-sans-serif mb-3">Web App </h3>
                <div class="progress rounded-pill ">
                  <div class="progress-bar bg-secondary rounded-pill" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" data-tor="inview:@width(0%;75%) exponential slower">
                    <span class="ms-auto me-3">90%</span>
                  </div>
                </div>
              </div>

              <div class="skill mb-5">
                <h3 class="h6 small font-sans-serif mb-3">Desktop App </h3>
                <div class="progress rounded-pill ">
                  <div class="progress-bar bg-secondary rounded-pill" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" data-tor="inview:@width(0%;85%) exponential slower">
                    <span class="ms-auto me-3">95%</span>
                  </div>
                </div>
              </div>

              <div class="skill mb-5">
                <h3 class="h6 small font-sans-serif mb-3">Mobile App</h3>
                <div class="progress rounded-pill ">
                  <div class="progress-bar bg-secondary rounded-pill" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-tor="inview:@width(0%;65%) exponential slower">
                    <span class="ms-auto me-3">80%</span>
                  </div>
                </div>
              </div>

              <div class="skill mb-5">
                <h3 class="h6 small font-sans-serif mb-3">Database </h3>
                <div class="progress rounded-pill ">
                  <div class="progress-bar bg-secondary rounded-pill" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" data-tor="inview:@width(0%;85%) exponential slower">
                    <span class="ms-auto me-3">95%</span>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- end .col -->

          <!-- - - - - - - - -  -->
          <!-- Illustration -->
          <!-- - - - - - - - -  -->
          <div class="col">
            <div class="px-4 ps-md-7 pe-md-0">
              <img src="https://i.imgur.com/hxXpPFE.png">
              <style>
                .st0 {
                  fill: #404040
                }
              </style>
              <circle class="st0" cx="539.6" cy="122.1" r="25.2" />
              <circle transform="rotate(-13.026 995.946 879.883)" class="st0" cx="996.1" cy="880" r="38.8" />
              <path class="st0" d="M213.5 366c3.4-10.7-15.3-26.1-41.7-34.4v.1l-12.1 38.7v.1c26.4 8.2 50.4 6.2 53.8-4.5zM184 346.5c-.1-.4-.2-.7-.2-1.1 0 .4.2.7.2 1.1zm-.9-.2c-4.7-.6-9.2 2.3-10.6 6.9-1.2 3.9.1 8.1 3.2 10.6-3.4-2.6-4.7-7.2-3.1-11.4 1.7-4.2 6-6.7 10.5-6.1zm-7.7-12.7s.1.1 0 0c.1.1 0 0 0 0zm8 10.6l.3.9-.3-.9zm-5.3 21c-.6.6-1.2 1.1-1.8 1.6.6-.5 1.2-1 1.8-1.6zm-4.3-32.5c-.1 0-.2-.1-.3-.1.1 0 .2 0 .3.1z" />
              <path class="st0" d="M930.6 460.3c-4.7 5.1-12.6 5.5-17.8.8-.2 2.7-1.4 5.3-3.2 7.4-4.1 4.4-10.6 5.3-15.6 2.4v-.1c1.6.9 3.3 1.4 5.2 1.6 6.9.6 13-4.5 13.6-11.4 3.5 3.2 8.6 4.1 13 2.4 2.9-1.1 5.3-3.3 6.7-6.1-6-17.1-13.7-33.6-21.2-47.7.3-.2.5-.5.8-.7 8.7-8.2 16.6-21.5 12.4-41.5-7.4-35.2-45.5-34.1-45.5-34.1 3.8-17.1-1.3-35-13.4-47.6-13.7-14.3-30.9-15.2-41.1-14-5.2.6-8.5 1.6-8.5 1.6v.4c-.1 0-.3.1-.4.1v-.4c1-12.4 3.1-44.5-23.8-64.1-26.9-19.6-61-9.3-73.4 6.2-4.8 6.4-7.3 14.9-8.7 24.2 1.6.3 3.2.4 4.9.4-1.7 0-3.5-.1-5-.4-1.4 8.8-1.8 18.4-2.6 27.4l-1.7.3c.5.1 1.1.2 1.6.2-.4 4.6-1 9-1.8 13-4 20.7-.9 34.2 11.5 41.4 12.1 7 26.1 2.3 26.8 2.1l.2-.1-3.2 18.8c-5.4 1.1-10.7 2.6-16 4.4v-.1c-7.5 2.6-16.2 6.3-23 11.4-8.3 6.1-20.9 16.7-33.4 27.5v-65.4c8.7 1.4 15.2.3 16.8-3.4 1.9-4.6-4.4-11.8-15-17.9 14.3-3.6 24.4-10.2 23.4-15.8-.9-5.3-11.7-7.9-25.2-6.7V274c6-8.3 8.4-15.8 5.4-19-1.2-1.2-3.1-1.7-5.4-1.5v-61.1C668 86.1 581.9 0 475.6 0h-13.5C355.9 0 269.8 86.1 269.7 192.4v241h-4.5c-2.3-11.9-6.1-30.4-11.4-50.5.5-.8.6-1.5.4-2.1-.2-.5-.6-1-1.3-1.3-6.5-24.3-14.9-50.5-25.1-70.3 0 0 .1 0 .1-.1 4-1.9 7.7-8.4 10.3-17.4h-.1c1.4-5.1 2.3-10.4 2.8-15.7 1.9-19.2-2.4-35.2-9.4-35.9-5.6-.5-11.1 8.6-14.1 21.8-8.5-14-18.9-22.6-24.5-19.7-5.6 2.9-4.5 16.4 2.2 31.4-12.6-5.1-23.2-5.7-26-.9-3.5 6.1 7.3 18.8 24 28.3 4.8 2.8 9.8 5 15 6.8.8-8.5 6.7-15.3 14.5-17.7-1.2.4-2.4.9-3.6 1.5-6.1 3.2-10.2 9.4-10.8 16.3 8.4 2.8 15.5 3.4 19.3 1.4l20.3 69.2c-9.4-.4-28.1 3.3-48.9 10.1-28.9 9.4-51 21.1-49.3 26.2 1.7 5.1 26.4 1.6 55.3-7.7 20.6-6.7 37.8-14.6 45.3-20.4l13.7 46.8h-21.3s7.5 16.8 27 17.7c-19.6-.8-27.1-17.7-27.1-17.7s-57.9 132.6-.9 202.3H179v-84.4c0-.3.1-.5.1-.8.1-1.2-.1-2.4-.6-3.6-3-6.8-15.8-7.8-28.6-2.3-11 4.8-18.3 12.9-18.3 19.4 0 1.1.2 2.1.6 3.1.9 2.1 2.8 3.7 5.4 4.7-2.6-1-4.5-2.6-5.5-4.8-.3-.9-.5-1.9-.6-3v26.1c-2.1-1.4-4.5-2.8-7.1-3.9-12.8-5.6-25.6-4.6-28.6 2.3-.5 1.2-.7 2.4-.6 3.6v43.6h36.3H0v225.8h45.4L29.8 909c-.3.8-.4 1.6-.4 2.4 0 4.2 3.4 7.7 7.7 7.7 2.8-.1 5.3-1.6 6.7-4l30-53.6H322l30 53.6c1.3 2.4 3.9 3.9 6.6 4 4.3 0 7.7-3.5 7.7-7.7 0-.8-.1-1.6-.4-2.4l-15.6-47.5h44.1V635.7h-93.8c22.5-27.5 27.1-64.7 24.4-99.8h217l8.4 26.6c1.9 6.1 7.6 10.3 14 10.3h63.9c-10.6 2.6-19.6 5.4-26.1 8.3 6.1 6.4 10 14.3 11.4 22.6-1.4-8.2-5.2-16-11.4-22.5l-.6.3c-18.1 8.4-29.4 16.6-38 28.2l-.1.1c-6.9 9.3-12.1 20.8-17.7 36.3h.1c-6.2 17.5-12.8 39.9-22.8 70.1-10.6 32.2-17.1 56.9-23.3 75.4-6.3 18.8-12.4 31.3-22.2 39-5.4 4.2-11.8 6.9-20.1 8.5 1.2 5.3 1.8 10.7 2 16.1-.1-5.4-.8-10.7-2-16l-1.2.2c-28.7 5-40.8 10-45.5 23l120.2 56c2.9 1.4 6.3.5 8.1-2.2 2.1-3 1.3-7-1.6-9.1l-.5-.2-.4-.3-2.9-1.4c5-7.2 12.6-18 20.4-30.4 9-14.2 18.5-30.5 25.2-46l.1-.2 13.1 6.2s10.8-11.7 19.8-30.1c.8 7.3 1.4 14 1.7 20.1 1.1 19.4-.3 33.2-7.3 43.5-2.9 4.2-6.6 7.8-10.9 10.5-1.6 1.2-3.1 2.2-4.5 3.3l-.1-.1c-20.7 14.4-28 24.1-26.8 37l132.7-.2c2.4 0 4.5-1.6 5.2-3.8.9-2.9-.7-6-3.6-6.9-.5-.2-1.1-.3-1.7-.3h-4.7c2.5-11.8 5.5-23.1 7.8-39.5 1.9-14.5 3-28.9 3.2-43.5h16.4v-.1s9.7-40.7-1.9-79.5c-7.6-25.2-18.1-43.1-18.3-63.9h27.1c-4.8 0-8.7 3.9-8.7 8.7s3.9 8.7 8.7 8.7h21.5v.3l-35.2 211.5c0 .4-.1.8-.1 1.2 0 4 3.3 7.3 7.3 7.3 3.4 0 6.4-2.4 7.2-5.8l15.6-71.7h129.4l15.7 71.7c.7 3.4 3.7 5.8 7.1 5.8.4 0 .8 0 1.2-.1 4-.7 6.7-4.4 6-8.4L867 698.7h21.4c4.8 0 8.7-3.9 8.7-8.7s-3.9-8.7-8.7-8.7h-71.7c42.7 0 63.7-25.3 71.8-55.3 3.7-13.6 4.8-28.3 4-41.9 18.7-3.5 36.5-13.3 46.3-35.3 11-24.8 5.2-59.2-6.2-91.4-.5 1-1.2 2-2 2.9zM224.3 289.7c-.2 0-.4.1-.5.1.2-.1.3-.1.5-.1zm-86 282.3c-.2-.1-.5-.2-.7-.2.3.1.5.1.7.2zm-24.8 39.1c-10.8-4.7-18-12.5-18.3-19 .3 6.4 7.6 14.3 18.3 19 6.4 2.7 12.8 3.9 18 3.4-5.2.5-11.6-.6-18-3.4zm344.8 260.1zm382.8-172.5L868.7 825H746.5l27.4-126h.1l.1-.3h67zM454.3 314h-48v-49.4h48V314zm345.2-44.3c0 4.8-1.7 8.5-4.1 11.5h-.1c2.5-3 4.3-6.8 4.2-11.5zM712 456.5c.1 1.1 1.4 10.3 7.8 21.2 2.5 4.3 7.5 12 12.9 20.3-5 .6-9.8 1.5-14.4 2.6-3 .7-5.7 1.4-8.2 2.2l-11.6-36.6c4.3-3.1 8.9-6.4 13.5-9.7zm119.4-111.8c2 .2 4 .5 5.9.9-2.6-.4-4.1-.6-4.1-.6-.6-.1-1.3-.2-1.9-.2l-9-1c-21.6-2.4-32.2-4.2-40.4-15.2-.8-1.1-1.5-2.2-2-3.4.6 1.2 1.3 2.3 2 3.3 8.2 11 18.8 12.8 40.4 15.2l9.1 1zm-32.2-78.5c-1.7-9.3-8.3-13.7-15.8-13.9 7.5.1 14.1 4.5 15.8 13.9zm-69.3-27.9c.1 0 .1 0 0 0 16 17.9 32.9 22.4 34.1 22.7 0 0-17.6-4.1-34.1-22.7zm25.8 149.4h2.6-2.6c-18.2 0-26-16.6-29.4-30.4 0-.2-.1-.3-.1-.5 3.3 13.9 11.2 30.9 29.5 30.9zm-30.6-36.2v-.2c-.3-1.5-.5-2.9-.6-4.1.1 1.4.3 2.8.6 4.3zM483.4 29.3C570.7 34 639 106 639 193.4v8.2h-80.1v33.9h-75.5V29.3zm75.5 235.3v35.1c-2.3 1.3-4.3 3.7-5.2 8.3 0 0-5.7 1.3-8.1 6h-62.2v-49.4h75.5zM454.3 29.3v206.2h-48v-86.7H304.9c18.7-66.1 77.6-115.6 149.4-119.5zM614 615.4v-.2.2zm.1-1.9v-.5.5zm.1-1.8v-.8.8zm-.3-6.1c-.1-.6-.2-1.3-.3-1.9.1.7.2 1.3.3 1.9zm.3 4.2c0-.7 0-1.3-.1-2 0 .7.1 1.3.1 2zm-.1-2.1c0-.6-.1-1.3-.2-1.9.1.6.1 1.3.2 1.9zm251.4 7.6c.7 1 1.4 1.9 2.2 2.8-.9-.9-1.6-1.9-2.2-2.8zm8.5 7.8c.7.4 1.4.7 2.1 1-.7-.3-1.4-.7-2.1-1z" />
              </svg>
            </div>
          </div>
          <!-- end .col -->

        </div>
      </div>
    </section>
    <!-- end #skills -->

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <!-- EXPERIENCE -->
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <section id="experience" class="py-5 py-lg-8 overflow-hidden bg-light">
      <div class="container py-4">
        <div class="row row-cols-1 row-cols-md-2">

          <!-- My education -->
          <div class="col" data-tor-group="
          .experience-box .date         => inview:reveal(up) delay(/+50ms/);
          .experience-box .description  => inview:[pull.left(md) fade.in] delay(/+50ms/) wait(100ms) slow;
        ">
            <!-- Badge -->
            <div class="title-badge d-inline-block mb-6 bg-primary text-primary bg-opacity-10 px-3 small">Qualification</div>
            <!-- Title -->
            <h2 class="ms-md-6 mb-5">Formation</h2>

            <div class="experience-box row mb-3">
              <div class="col-md-3 py-2 py-md-5">
                <small class="d-inline-block date">2019 - Présent</small>
              </div>
              <div class="description col-md-9 border-start py-md-5">
                <div class="mb-4">
                  <h5 class="text-primary font-sans-serif">Cycle d'ingénieur en génie informatique </h5>
                  <small class="text-secondary">Ecole des nouvelles sciences et ingénierie (ENSI) à Tanger</small>
                </div>
              </div>
            </div>

            <div class="experience-box row mb-3">
              <div class="col-md-3 py-2 py-md-5">
                <small class="d-inline-block date">2018 - 2019</small>
                <br><br>
                <small class="d-inline-block date">2015 - 2018</small>
              </div>
              <div class="description col-md-9 border-start py-md-5">
                <div class="mb-4">
                  <h5 class="text-primary font-sans-serif">Licenses en mathématiques et applications </h5>
                  <br>
                  <h5 class="text-primary font-sans-serif">DEUST </h5>
                  <small class="text-secondary">Faculté des sciences et techniques de Tanger</small>
                </div>
              </div>
            </div>

            <div class="experience-box row mb-3">
              <div class="col-md-3 py-2 py-md-5">
                <small class="d-inline-block date">2013</small>
              </div>
              <div class="description col-md-9 border-start py-md-5">
                <div class="mb-4">
                  <h5 class="text-primary font-sans-serif">Baccalauréat sciences physiques et chimie</h5>
                  <small class="text-secondary">Lycée Al Khawarizmi, Tanger</small>
                </div>
              </div>
            </div>

          </div>
          <!-- end .col -->

          <!-- My education -->
          <div class="col" data-tor-group="
          .experience-box .date         => inview:reveal(up) delay(/+50ms/);
          .experience-box .description  => inview:[pull.left(md) fade.in] delay(/+50ms/) wait(100ms) slow;
        ">
            <!-- Badge -->
            <div class="title-badge d-inline-block mb-6 bg-primary text-primary bg-opacity-10 px-3 small">Experience Professionelle</div>
            <!-- Title -->
            <h2 class="ms-6 mb-5">Mes Experiences</h2>

            <div class="experience-box row mb-3">
              <div class="col-md-3 py-2 py-md-5">
                <small class="d-inline-block date">05/07/2021 - Présent</small>
              </div>
              <div class="description col-md-9 border-start py-md-5">
                <div class="mb-4">
                  <h5 class="text-blue font-sans-serif">Stage d'application</h5>
                  <small class="text-secondary">Smart Automation Technology Tanger, Maroc</small>
                </div>
                <p class="small">Technologie: MEAN Stack
                <ul>
                  <li>Backend: Express JS, Node Js, Joi Validation, API, MVC.</li>
                  <li>Frontend: Angular, Primeng, Reactiveform</li>
                  <li>Microservice, Api Gateway</li>
                </ul>
                </p>
              </div>
            </div>

            <div class="experience-box row mb-3">
              <div class="col-md-3 py-2 py-md-5">
                <small class="d-inline-block date"></small>
              </div>
              <div class="description col-md-9 border-start py-md-5">
                <div class="mb-4">
                  <h5 class="text-magenta font-sans-serif">Freelance Tanger, Maroc</h5>
                  <h4 class="font-sans-serif">Réalisation des applications desktop</h4>
                  <small class="text-secondary">Technologie: Java</small>
                </div>
                <p class="small">Gestion Commercial
                <ul>
                  <li>Gestion Client</li>
                  <li>Gestion Stock</li>
                  <li>Gestion Vente</li>
                  <li>Gestion Fournisseur</li>
                  <li>Gestion Achat</li>
                  <li>Gestion Payement</li>
                  <li>Gestion des bons de commandes</li>
                  <li>Gestion des bons de livraison</li>
                </ul>
                </p>
              </div>
            </div>

          </div>
          <!-- end .col -->

        </div>
        <!-- end .row -->
      </div>
      <!-- end .container -->
    </section>
    <!-- end #experience -->

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <!-- PORTFOLIO -->
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <section id="portfolio" class="py-5 py-lg-8">
      <div class="container py-4">
        <!-- Title -->
        <div class="title-badge d-inline-block mb-6 bg-primary text-primary bg-opacity-10 px-3 small">Portfolio</div>

        <div class="row row-cols-1 row-cols-md-2 mb-7">
          <div class="col">

            <h2 class="mb-4 overflow-hidden mb-5" data-tor-group=".fx => scroll:[@width(0;auto) @visibility(hidden;visible), {start: /10+5/, end: /10+5/}];">
              Certaines de mes
              <span class="text-primary">

                <span class="text-nowrap"><span class="fx">p</span><span class="fx">r</span><span class="fx">o</span><span class="fx">j</span><span class="fx">e</span><span class="fx">t</span><span class="fx">s</span></span>
                <span class="text-body text-opacity-30 ms-n1" data-tor="loop:blink">|</span>
              </span>
            </h2>

            <p class="mb-6">En tant que developpeur, je travaille dans ce secteur et j'ai réalisé de nombreux projets web et desktop.</p>
            <a href="https://github.com/Youssefboukir" class="btn-link btn-arrow">Explore more</a>
          </div>
          <div class="col">
            <div class="row row-cols-md-2 mt-4">
              <!-- col -->
              <div class="col center-v">
                <div class="display-5 font-sans-serif text-primary me-4">8+</div>
                <h3 class="h5 mb-0 font-sans-serif w-md-30">Frameworks & Databases</h3>
              </div>
              <!-- end .col -->
              <!-- col -->
              <div class="col center-v">
                <div class="display-5 font-sans-serif text-primary me-4">12+</div>
                <h3 class="h5 mb-0 font-sans-serif w-md-30">Projects realiser</h3>
              </div>
              <!-- end .col -->
            </div>
          </div>
        </div>
        <div class="tor-slider" data-tor-slider="count(1 md::2) margin(80) indicators(true) add-trigger(active)" data-tor-group=".portfolio-item => active(p):[scale.from(80%) rotate.from(5deg)];">
          <img class="img-fluid border border-dark border-opacity-5 portfolio-item bg-white" src="https://i.postimg.cc/7ZnRQdvg/Untitled-11.png" alt="illustration">
          <img class="img-fluid border border-dark border-opacity-5 portfolio-item bg-white" src="./assets/img/works/page2.jpg" alt="illustration">
          <img class="img-fluid border border-dark border-opacity-5 portfolio-item bg-white" src="./assets/img/works/Capture 1.PNG" alt="illustration">
          <img class="img-fluid border border-dark border-opacity-5 portfolio-item bg-white" src="./assets/img/works/Capture 2.PNG" alt="illustration">
          <img class="img-fluid border border-dark border-opacity-5 portfolio-item bg-white" src="./assets/img/works/Capture 3.PNG" alt="illustration">
        </div>
      </div>
      <!-- end .container -->
    </section>
    <!-- end #portfolio -->

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <!-- TESTIMONIALS -->
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <!-- end #testimonials -->

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <!-- WEAPONS -->
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <!-- end #my-weapons -->

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <!-- WORK PROCESS -->
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <section id="work-process" class="py-5 py-md-8 border-bottom">
      <div class="container py-4">

        <div class="w-md-50">
          <!-- Badge -->
          <div class="title-badge d-inline-block mb-6 bg-primary text-primary bg-opacity-10 px-3 small">Work process</div>

          <h2 class="mb-4 overflow-hidden mb-5" data-tor-group=".fx => scroll:[@width(0;auto) @visibility(hidden;visible), {start: /10+4/, end: /10+4/}];">
            Vérifiez quelques détails sur mon
            <span class="text-primary">

              <span class="text-nowrap"><span class="fx">t</span><span class="fx">r</span><span class="fx">a</span><span class="fx">v</span><span class="fx">a</span><span class="fx">i</span><span class="fx">l</span><span class="fxd-inline"> </span><span class="fx">p</span><span class="fx">r</span><span class="fx">o</span><span class="fx">c</span><span class="fx">e</span><span class="fx">s</span><span class="fx">s</span></span>

              <span class="text-body text-opacity-30 ms-n1" data-tor="loop:blink">|</span>
            </span>
          </h2>

        </div>

        <div class="row row-cols-1 row-cols-md-3" data-tor-group=".fx => inview:[pull.up(md) fade.in] delay(/+100ms/) slow;">

          <div class="col">

            <div class="fx bg-primary rounded-xl p-6">
              <img class="w-20 mb-6" src="./assets/icons/coding.png" alt="icon">
              <h3 class="font-sans-serif text-white mb-4">Idée</h3>
              <p class="mb-4 text-body-light">Avant de commencer à travailler sur le projet, nous devons d'abord discuter des idées principales sur le projet.</p>
              <a href="#contact" class="btn btn-soft-light btn-arrow">Contact me</a>
            </div>

          </div>

          <div class="col">

            <div class="fx bg-secondary rounded-xl p-6">
              <img class="w-20 mb-6" src="./assets/icons/chat.png" alt="icon">
              <h3 class="font-sans-serif text-white mb-4">Conception</h3>
              <p class="mb-4 text-body-light">Après une longue discussion des idées, il est temps de les mettre en œuvre en utilisant des méthodes de conception.</p>
              <a href="#contact" class="btn btn-soft-light btn-arrow">Contact me</a>
            </div>

          </div>

          <div class="col">

            <div class="fx bg-warning bg-darken rounded-xl p-6">
              <img class="w-20 mb-6" src="./assets/icons/graph.png" alt="icon">
              <h3 class="font-sans-serif text-white mb-4">Developpement</h3>
              <p class="mb-4 text-body-light">Après la conception, nous devons développer votre projet à l'aide d'un langage de programmation.</p>
              <a href="#contact" class="btn btn-soft-light btn-arrow">Contact me</a>
            </div>

          </div>

        </div>
      </div>
      <!-- end .container -->
    </section>
    <!-- end #work-process -->

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <!-- CONTACT -->
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <section id="contact" class="py-5 py-md-8">
      <div class="container py-4">
        <div class="row row-cols-1 row-cols-md-2 center-v">

          <div class="col">
            <!-- Badge -->
            <div class="title-badge d-inline-block mb-6 bg-primary text-primary bg-opacity-10 px-3 small">Contact moi</div>

            <h2 class="mb-7 overflow-hidden mb-5" data-tor-group=".fx => scroll:[@width(0;auto) @visibility(hidden;visible), {start: /10+5/, end: /10+5/}];">
              Collaborons sur un <span style="color: brown;">projet</span>
              <span class="text-primary">


                <span class="text-body text-opacity-30 ms-n1" data-tor="loop:blink">|</span>
              </span>
            </h2>
            <?php echo $alert . '<br>'; ?>
            <form id="myForm" method="post" class="w-md-80 form-clean inputs-transparent" data-tor-group=".form-control => !focus:[border(dark) bg(light)];">
              <div class="mb-2">
                <label for="contact-name" class="form-label opacity-70">Votre Nom</label>
                <input type="text" class="form-control p-3 border-bottom" id="name" name="name" aria-describedby="contact-name">
              </div>
              <div class="mb-2">
                <label for="contact-email" class="form-label opacity-70">Votre email</label>
                <input type="email" class="form-control p-3 border-bottom" id="email" name="email" aria-describedby="contact-email">
              </div>
              <div class="mb-2">
                <label for="contact-message" class="form-label opacity-70">Message</label>
                <textarea class="form-control p-3 border-bottom" id="message" name="message" rows="2"></textarea>
              </div>
              <button type="submit" onclick="sendEmail()" name="submit" id="submit" class="btn btn-primary btn-arrow py-2 px-3 float-md-end w-100 w-md-auto">Envoyer</button>
            </form>
          </div>

          <div class="col">
            <div class="px-md-7 d-none d-md-block" data-tor-group="
            #vase-wfh-10_1_, #cupboard_1_ => inview:scale.from(0) originY(100%);
            #female-wfh-10_1_       => inview:[pull.right(md) fade.in];
            #computer-wfh-10_1_     => inview:[pull.left(md) fade.in] wait(300ms) click:class.toggle(active, {target: #illustration-contact});
            #message-wfh-10_1_      => active(#illustration-contact):scale.to(0) hover:scale.to(85%) slow;
            #message-head-wfh-10_1_ => active(#illustration-contact):scale.from(0) slow;
            #message-wfh-10_1_ .illustration-loop     => loop:glow(3rem, {color: --bs-blue, duration: 3s});

            .illustration-reveal    => delay(/+100ms/) slow;
            .illustration-interaction => mouseX:@parallax(/+3/);
          ">
              <img src="./assets/img/works/work.png" width="151%" />
              <style>
                .st0 {
                  fill: #404040
                }
              </style>
              <path class="st0" d="M688.2 605c9.7 16.6 4.1 37.9-12.5 47.5 22 35.1 48.3 70.2 65.6 99l83-42.2c-8.6-20.5-19-40.1-31.1-58.7-46-70.4-56.4-79-65.4-105.5.1 0 .1-.1.2-.1-.3-.8-.5-1.5-.8-2.3-8-24.7-8.3-125.9-40.1-180.4 13.8.4 44.6-1.2 55-22.6 15.5-35.7-13.5-83-19.3-93.7-14.5 12.6-74.4 29-93.7-33.8-24.8-11.3-31.3-29.8-31.3-45.9.1 16.1 6.5 34.5 31.3 45.8 19.3 62.8 79.2 46.3 93.7 33.8.5-.4 1.1-.9 1.7-1.4 6.1-5.1 11.4-11 15.7-17.7 23.1-37-7-75.7-35.8-82.2 5.8-55.1-48.3-58.9-48.3-58.9s-2.9-14.4-5.8-27c-4.2-18.1-10.3-45.5-41.9-55.4-17.3-5.4-32.5 0-42.3 5.5C549.9-10 518 3.6 525.7 28.6c4.2 13.7 19.6 21.1 19.6 21.1v.1c19.2 10.2 43.1 15.5 43.1 15.5s15.5-22.3 29-13.6c9.5 6.1 10.5 15.8 6.9 23.7 3.5-7.9 2.4-17.4-7-23.5-13.4-8.7-28.9 13.5-28.9 13.5s-23.9-5.3-43.1-15.5c-.6 5-1 10-1.1 15-.1 1.9-.1 3.7-.3 5.5 0 0-8.7 1.5-9.2 5.5-.6 4.9 7.5 8.2 7.5 8.2-1.7 11.2-3.2 19.8 1.8 29 4.4 8.1 12.9 17.1 35.7 11.4l.1 10.5h.1l.1 7s-37.9-1.3-56.2 22.8c-8.1 10.7-21.6 37.2-33.9 63.1v-69.3c0-17.9-14.5-32.4-32.4-32.4H184.4c-17.9.1-32.4 14.6-32.4 32.4v190.1c0 17.9 14.5 32.4 32.4 32.4h91.2v36.8c0 10.7 8.6 19.3 19.3 19.3h12.2-178.6c-11 0-20 9-20 20v81.4c-3.4 1.6-7.2 3.8-11 6.6-10.5 7.6-17.1 16.4-14.8 19.6 2.3 3.2 12.7-.3 23.3-8 .9-.7 1.8-1.3 2.6-2v78.4H61s9.2 20.7 33.3 20.7c5.5 0 10.2-1.1 14.2-2.7v.1c-4 1.7-8.8 2.8-14.3 2.8C70.1 654 61 633.3 61 633.3s-67.8 155-1.2 236.6h68.9l.1-.1H461v.1h133.3c.3 0 .6 0 .9-.1h25.2V549.1h.5c.6 0 1.1-.1 1.6-.1h.4c.5-.1.9-.1 1.4-.2h.2c1.1-.2 2.2-.6 3.2-1 1.3-.5 2.6-1.2 3.7-2.1-1.2.9-2.5 1.6-3.8 2.2 3.4 9.8 8.7 25.3 16.1 43 7.1 17.2 15.5 34 24.9 50 2.3 3.9 4.7 7.7 7.1 11.6 10.6-6.2 17.1-17.6 17-29.9 0-4.9-1-9.7-3-14.2-7.9-17.5-28.4-25.4-46-17.5 16.2-7.4 35.5-1.3 44.5 14.1zM181 323.3l-.1-82.5h.1v82.5zm388.5 113.9c12.4-29.9 16.4-75.7 17.6-95.6h.1c-1.2 19.9-5.1 65.7-17.7 95.6zm91.1 110.1zm8-7.7c.1-.1.1-.2.2-.3 1.7 3.4 4.5 6.2 7.9 7.9 4.8 2.4 10.1 2.4 14.7.6-8.5 3.5-18.4.1-22.8-8.2zm23.9 7.7zm34.6-1.6c-.1 0-.1 0 0 0-.1 0-.1 0 0 0zm-24.2-3c4.7 5.6 12 7.6 18.6 5.7-8.1 2.4-16.9-1.1-21-8.8.1-.1.1-.2.2-.3.6 1.2 1.3 2.3 2.2 3.4zm20 5.3c-.2.1-.4.1-.6.2.2-.1.4-.2.6-.2zM606.7 88.6c-6.2 14.6-6.9 31.1-1.8 46.2v.1h-.1c-5-15.2-4.4-31.6 1.9-46.3zm-61.8 210.5l7.6-18.5-7.5 18.5 2.9 42.5c-1 2-19 38.4-33.4 95.6H379.1h14.3c3.8 0 6.8-3.1 6.8-6.8 0-3.3-2.3-5.9-5.3-6.6 6.3-6.8 10.1-12.6 10.1-12.6s6.5-2.1 16.3-5.9l-.1-.1c21.9-8.4 60.6-25 81.2-44.3 28.9-27.1 42.5-61.8 42.5-61.8zM198.1 155.2c-9.4 0-17.1 7.7-17.1 17.2v64.4h-.1v-64.4c0-9.5 7.7-17.2 17.2-17.2zm438.6 384.4c.1-.1.1-.2.2-.3 1.7 3.4 4.5 6.2 7.9 7.9 4.8 2.4 10.1 2.4 14.7.6-8.5 3.5-18.4.1-22.8-8.2z" />
              <path class="st0" d="M862.1 802.6c-1.1-3.2-4.6-4.8-7.7-3.7l-74.1 37.9c0-.1-2-2.8-5.3-6.4 3.3 3.5 5.3 6.2 5.3 6.2l74.1-37.9c-.3.1-.5.2-.8.3l-2.5 1.2c.1.1-5.6-40.7-26.8-90.9l-83 42.2c12.9 21.5 20.8 39.7 18.1 51.7-1 4.2-2.4 8.3-4.3 12.2h.1c-9.2 19.3-25.4 31-14.1 54.5l118-59.9c2.7-1.4 4-4.5 3-7.4zM692.7 622.6z" />
              <ellipse transform="rotate(-69.341 39.348 589.985)" class="st0" cx="39.3" cy="590" rx="9.3" ry="41.9" />
              <path class="st0" d="M46.9 552.2s0-.1 0 0c13.3 6.3 29.2.8 35.6-12.5 3.4-7.1 3.5-15.5.2-22.7h.1c-6.2-13.4-22-19.3-35.4-13.1-13.4 6.2-19.3 22-13.1 35.4 2.5 5.7 7 10.2 12.6 12.9zM95.6 482.4zM48 466.7c.2 7.8 3.9 15.3 10.1 20.1 11.6 9.1 28.3 7.2 37.5-4.4-.4-.4-.7-.8-1.1-1.2.4.4.8.8 1.1 1.2 3.8-4.9 5.9-10.9 5.7-17.1-.3-14.7-12.5-26.4-27.3-26.1-14.7.3-26.4 12.5-26.1 27.2-.1 0-.3.1-.4.1l.5.2z" />
              </svg>
            </div>
          </div>

        </div>
      </div>
      <!-- end .container -->
    </section>
    <!-- end #work-process -->

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
    <!-- FOOTER -->
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <section id="stay-connected">
      <div class="container position-relative pb-1 overflow-hidden overflow-sm-visible">
        <div class="row">

          <div class="col-md-3 my-3">
            <div class="d-none d-md-block px-5">

              <img src="./assets/img/works/future.png" width="250%" />

              <style>
                .st0 {
                  fill: #404040
                }
              </style>
              <path class="st0" d="M176.9 1011.3V849.8L28.8 1259z" />
              <path class="st0" d="M660.2 532.8H542.9c0-.2.1-.4.2-.8h13.6l-.2-.4H559.8l-17.5-30.1c-1.1-3.4-2.5-6.5-4.2-8.8l56.7-119.5c.5-1 .7-2 .7-3.1 0-4-3.2-7.2-7.2-7.2H382c-3.6-24.3-12.5-57.2-34.5-77.3-20.1-18.3-56.9-32.9-71.1-38 .4-.1.8-.3 1.2-.4 16.3 0 40.6-29 51.4-58-.1 2.1.2 4.2.7 6.3 2 7.1 8.4 12 15.8 12 1.5 0 3-.2 4.5-.6 7.2-2 11.3-9.5 9.3-16.7-1.7-6-7.9-9.5-13.9-7.8-5 1.4-7.9 6.6-6.5 11.6 1.2 4.2 5.6 6.6 9.8 5.4 1.1-.3 1.7-1.4 1.4-2.5-.3-1.1-1.4-1.7-2.5-1.4-2 .6-4.2-.6-4.8-2.7-.8-2.9.8-5.9 3.7-6.7 3.9-1.1 7.9 1.1 9 5 1.4 5.1-1.5 10.3-6.6 11.8-6.6 1.9-13.5-2-15.4-8.6-1.5-5-.4-10.4 2.9-14.5 36.6.6 37.4-25.5 36.4-29.9-1-4.6-6.2-9.7.5-25.1 6.7-15.4-.6-28.7-8.8-36.4-8.2-7.7-1-13.4-5.5-24.1-4.5-10.7-18.6-13.3-18.6-13.3s5.6-8.1 0-14.3c-2.3-2.5-6.2-3.7-10.1-4.3.3-.1.6-.3.8-.5 7.3-5.3 7.1-13.3 4.6-18.9-2.3-5.2-8.2-7.6-13.5-5.6-2 .8-3.7 2.4-4.5 4.5-.8 2.1-.8 4.5.2 6.6 1.6 3.6 5.8 5.3 9.5 3.9 1-.4 1.5-1.6 1.1-2.6-.4-1-1.6-1.5-2.6-1.1-1.7.6-3.6-.2-4.4-1.9-.5-1-.5-2.3-.1-3.4s1.2-1.9 2.3-2.3c3.3-1.2 7 .3 8.4 3.5 1 2 3.4 9.1-3.3 14-2.7 1.9-6 2.8-9.3 2.5-.3-4-2.9-20.1-25.5-28.5-26.1-9.7-44.3 11.7-44.3 11.7s-19.9-14.1-41-6.4c-13.9 5-15.4 17.4-15.4 17.4-4.4-.7-8.9-.7-13.2.2-3 .7-5.8 2.1-8.1 4.1-1.9 1.7-3.4 3.8-4.3 6.2-1.2 3.4-1.8 7-1.6 10.7-7.9 2.8-12.3-3.2-13.5-5.1-1.8-3-1-6.9 1.8-8.9.9-.6 2.1-.8 3.2-.6 1.2.3 2.2 1 2.8 2 1 1.6.6 3.6-.9 4.7-.9.6-1.1 1.9-.5 2.8.6.9 1.9 1.1 2.8.5 3.3-2.3 4.2-6.7 2.1-10.1-1.2-1.9-3.2-3.3-5.4-3.8s-4.5-.1-6.3 1.2c-4.6 3.2-5.9 9.4-3 14.2.6 1 1.4 2 2.2 2.9-7.1-.2-15.3 1.5-24.3 6.3-34 18.3-16 56.1-16 56.1s-20 4-25.1 24.3c-4.3 17.1 6.3 32.8 11.1 38.9-3.2 6.4-9.4 11.8-15.1 12.1-6.9.4-12.8-4.8-13.2-11.7-.3-5.3 3.7-9.8 9-10.1 4-.3 7.5 2.8 7.7 6.8.2 3-2.1 5.5-5.1 5.7-2.1.1-4-1.5-4.1-3.7 0-1.1-1-2-2.1-1.9-1.1 0-2 1-1.9 2.1.3 4.4 4 7.8 8.4 7.5 5.2-.3 9.2-4.7 8.9-9.9-.4-6.2-5.7-10.9-11.9-10.6-7.5.4-13.2 6.8-12.8 14.3.5 8.7 7.7 15.5 16.4 15.5h1c2.5-.2 5-.9 7.2-2.2-2.2 5.3-3.1 12.7.2 22.6 8.2 25.1 48.7 23 48.7 23 3.4 7.3 10.4 9.9 17.1 10.5-23.5 3.3-60.3 12.6-93.9 39.2C19.3 314.5.2 352.4.2 352.4s11 2.6 26.8 9.6c-1.5 4.2-41.5 122-21.3 151 5.7 8.2 32.7 13 67.3 15.8l-4.5 21.8s8.8 4.9 27.9 9.9c-3 5.5-25.1 48.5-47 129.6-12.5 46.2 1.4 81.8 25.6 104.7h-3.3c-15.2 0-27.5 12.3-27.5 27.5s12.3 27.5 27.5 27.5h262.1c-9.7 72.3-.7 186.6 5.7 242.7.2 1.6-.1 3-.7 4.2-.1-.1-.1-.2-.1-.3 0 0-7.4.7-15.5 3.1l-90.4-249.7v161.5L380.9 1259l-13.5-37.4c4.8-4.8 10.2-14.9 2.7-33.9-1.6-4.1-7.8-18.9-7.8-18.9 4.8-45.5 20-102.1 36.3-154-2.5 65.2 10.2 136.7 21.8 186.3l-6.1 13.6c-.1 0-.2.1-.4.1 0 0-22.8 44.5 6 44.6 12.3 0 108-.3 108-.3s3.7-22.8-27.8-27.1c-4.4-.6-14.4-2-14.4-2s.1.2.3.5c-.2-.1-.2-.2-.2-.2-21.7-21.4-33.7-36.8-28.1-77.5 4.2-29.3 54-244.1 63.5-295.3 5.7-30.8-.1-81.1-40.9-81.7 5.7-17.1 10.2-30.5 11.2-34.5 5.5-21 3.2-60.6-19.5-66.8 2.3.3 3.6.8 3.6.8-34.7-19.8-81.3-37.7-188.3-44.3-10.5-27.5-11.5-50.2-13.5-70.5 1.3-.5 2.5-.9 3.6-1.4h382.8v-26.3zm-119.1 0h-21.5c.1-.2.1-.5.2-.8h18.9c.9.4 1.7.7 2.4.8zm-245.2-.8H514.2l2.1.8H295.7c.1-.3.1-.5.2-.8z" />
              </svg>
            </div>
          </div>

          <div class="col-md-4 offset-md-1 center-both my-3">
            <div class="text-center" data-tor-group=".fx => inview:reveal(up) delay(/+100ms/);">
              <h2 class="fx mb-5">Stay Connected</h2>

              <a href="mailto:#" class="fx text-dark h3 font-sans-serif d-block mb-3">youssefboukir5@gmail.com</a>
              <p class="fx">(+212) 659-397-337</p>
            </div>
          </div>
        </div>
        <!-- end .row -->

        <div class="position-absolute bottom-0 z-index-n1 w-100">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1363 74.1" class="w-100 overflow-visible" data-tor-group="path => mouseX:@parallax(/+3/);">
            <path d="M0 73.9s85-29 117-29 86 25 111 27 323 5 354-13 58.6-58 106-58c39.5 0 74 19.9 94 36 26.5 21.4 90 30 122 26s338.5 11 338.5 11H0z" fill="#f8e9de" />
            <path d="M208.1 74.1s81.9-27.9 127.1-30 84.1 11.3 123.1 15.4 76.9-29.8 112.9-33.9 92.3 9.2 134.4 24.6c42.1 15.4 96.4 34.9 142.6 13.3C894.3 42.1 916.8 0 1003 0s105.7 10.3 137.5 27.7 60.5 27.7 88.2 16.4c27.7-11.3 35.9-14.4 60.5 0s30.8 29.8 30.8 29.8l-1111.9.2z" fill="#f79682" />
            <path d="M283 73.9s77-28 121-30 82 11 120 15 75-29 110-33 90 9 131 24 94 34 139 13 67-62 151-62 103 10 134 27 59 27 86 16 35-14 59 0 29 30 29 30H283z" fill="#77acd7" />
          </svg>
        </div>

      </div>
      <!-- end .container -->
    </section>
    <!-- end #footer -->
  </main>

  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
  <!-- Scripts -->
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

  <!-- Bootstrap `.js` file -->
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    if (windows.history.replaceState) {
      windows.history.replaceState(null, null, window.location.href);
    }
  </script>
</body>

</html>