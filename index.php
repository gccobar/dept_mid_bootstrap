<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>USC</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-vr {
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }
      .nav-pills .nav-link.active {
          background-color: white;
          color: black;
      }
    </style>
    <link href="css/sidebars.css" rel="stylesheet">
  </head>
  <body>
    <div class="row g-0">
      <div class="col-md-2">
        <main class="d-flex flex-nowrap">
        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 100%; background-color: #324A62;">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <img src="img/user_de.png" width="35" height="35">
            <span class="fs-4" style="margin-left: 5px;">Name</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="#" class="nav-link active" aria-current="page">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16" style="margin-right: 5px;">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                </svg> Home
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16" style="margin-right: 10px;">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg>About
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16" style="margin-right: 10px;">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
              </svg>Pages
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16" style="margin-right: 10px;">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>Contacts
              </a>
            </li>
          </ul>
          <hr>
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="img/user_de.png" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>Name</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
              <li><a class="dropdown-item" href="#">New project</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>
        <div class="b-example-vr"></div>
      </main>
      </div>
      <div class="col-md-10">
        <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/header.jpg" style="width: 100%; height: 350px; overflow: hidden;">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(255, 255, 255, 0.8); color: black; padding: 20px;">
              <h5>University of San Carlos</h5>
              <p>University of San Carlos (USC) is a Catholic educational institution administered since 1935 by Society of the Divine Word (SVD) missionaries. A University since 1948, USC offers the complete educational package from kindergarten, including a Montessori academy, to graduate school. Learn more about Education with a Mission and how we Witness to the Word.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div style="margin-top: 10px;">
        <center><h1 class="display-1">University of San Carlos</h1></center>
        <div class="container" style="margin-top: 50px;">
          <h1>Academics</h1>
          <blockquote class="blockquote">
            <p>The University of San Carlos offers a full complement of kindergarten, including a Montessori academy, grade school, high school including Senior High, and higher education. Prospective students can choose from 57 undergraduate and 74 graduate programs that are relevant and responsive to the demands of business and industry and sensitive to social needs.</p>
          </blockquote>
          <div class="row g-1">
              <div class="col-md-2">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="img/PE_building.jpg" style="width: 100%;"></a>
              </div>
              <div class="col-md-1">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="img/SED_building.jpg" style="width: 100%;"></a>
              </div>
              <div class="col-md-1">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="img/physics lab.jpg" style="width: 100%;"></a>
              </div>
              <div class="col-md-1">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="img/computer lab.jpg" style="width: 100%;"></a>
              </div>
              <div class="col-md-1">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="img/Pentagon.jpg" style="width: 100%;"></a>
              </div>
              <div class="col-md-1">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="img/LRC.jpg" style="width: 100%;"></a>
              </div>
              <div class="col-md-1">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="img/Museum.jpg" style="width: 100%;"></a>
              </div>
              <div class="col-md-1">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="img/USC Press.jpg" style="width: 100%;"></a>
              </div>
              <div class="col-md-1">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="img/students_USC.jpg" style="width: 100%;"></a>
              </div>
              <div class="col-md-1">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="img/physics lab.jpg" style="width: 100%;"></a>
              </div>
          </div>
          <footer class="footer" style="margin-top: 10px;">
            <span class="text-muted">© 2023 University of San Carlos. All rights reserved.</span>
          </footer>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <img src="img/PE_building.jpg" style="width: 100%;">
          </div>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/sidebars.js"></script></body>
</html>