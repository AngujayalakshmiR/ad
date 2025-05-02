<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Organiser Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/logo.png"
      type="image/x-icon"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  rel="stylesheet"
/>


    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
    <style>
     .card {
  position: relative;
  border: none;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  border-radius: 12px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  animation: fadeInUp 0.6s ease forwards;
  opacity: 0;
}

.card:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.card img {
  transition: transform 0.4s ease;
  object-fit: cover;
  width: 100%;
}

.card:hover img {
  transform: scale(1.05);
}

.btn-view-more {
  position: absolute;
  top: 10px;
  right: 10px;
  background-color: #5867dd;
  color: white;
  border: none;
  padding: 6px 12px;
  font-size: 13px;
  border-radius: 6px;
  z-index: 10;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn-view-more:hover {
  background-color: #4756c5;
  transform: scale(1.05);
}

.card-title {
  color: #5867dd;
  font-weight: 600;
  font-size: 1.25rem;
}

.card-text {
  font-size: 14px;
  color: #555;
}

/* Animation */
@keyframes fadeInUp {
  from {
    transform: translateY(20px);
    opacity: 0;
  }
  to {
    transform: translateY(0px);
    opacity: 1;
  }
}

    </style>
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="assets/img/logo.png"
                alt="navbar brand"
                class="navbar-brand"
                height="120"
                width="150"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              
            <li class="nav-item ">
                <a href="organiser-dashboard.php">
                  <i class="fas fa-desktop"></i>
                  <p>Add Events</p>
                  <!-- <span class="badge badge-success">4</span> -->
                </a>
              </li>
              <li class="nav-item active">
                <a href="registrations.php">
                  <i class="fas fa-file"></i>
                  <p>Registrations</p>
                  <!-- <span class="badge badge-secondary">1</span> -->
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
                
              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
              

              <li class="nav-item">
  <a class="btn btn-danger btn-sm nav-link text-white" href="#" role="button">
    Logout
  </a>
</li>



              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div><br><br>

        <div class="container mt-4">
            <div class="page-inner">
            <div class="card-body p-0">
                    <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Name</th>
                            <th scope="col" >Place</th>
                            <th scope="col" >Skills</th>
                            <th scope="col">Available time & date</th>
                            <th scope="col" >Concern</th>
                            <th scope="col">Action</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">
                              
                              1
                            </th>
                            <td >Durga</td>
                            <td >Karur</td>
                            <td>Core PHP</td>
                            <td>
                              3-05-2025 / 10 AM</td>
                            <td>NIL</td>
                            <td>
                            <button class="btn btn-success btn-sm me-2">
                                <i class="bi bi-check-lg"></i>
                            </button>
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-x-lg"></i>
                            </button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              
                              2
                            </th>
                            <td >Bhuvaneshwari</td>
                            <td >Karur</td>
                            <td>Content Writing</td>
                            <td>
                              3-05-2025 / 10 AM</td>
                            <td>NIL</td>
                            <td>
                            <button class="btn btn-success btn-sm me-2">
                                <i class="bi bi-check-lg"></i>
                            </button>
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-x-lg"></i>
                            </button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              
                              3
                            </th>
                            <td >Angu</td>
                            <td >Karur</td>
                            <td>Document Preparation</td>
                            <td>
                              3-05-2025 / 10 AM</td>
                            <td>NIL</td>
                            <td>
                            <button class="btn btn-success btn-sm me-2">
                                <i class="bi bi-check-lg"></i>
                            </button>
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-x-lg"></i>
                            </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>
        </div>

        <footer class="footer">
          <div class="container-fluid d-flex justify-content-center">
 
            <div class="copyright">
              @ 2025, Developed by
              <a href="#">Septignite</a>
            </div>

          </div>
        </footer>
      </div>


      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
  </body>
</html>
