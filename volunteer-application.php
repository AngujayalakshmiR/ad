<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Volunteer Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/logo.png"
      type="image/x-icon"
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
            <a href="volunteer-dashboard.php" class="logo">
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
                <a href="volunteer-dashboard.php">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                  <!-- <span class="badge badge-success">4</span> -->
                </a>
              </li>
              <li class="nav-item active">
                <a href="Volunteer-application.php">
                  <i class="fas fa-user-check"></i>
                  <p>Applied</p>
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
              <a href="volunteer-dashboard.php" class="logo">
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
                <h1>List of Applied Volunteering events</h1><br>
                <div class="row g-4">
                
                <!-- Repeat for each card -->
                <div class="col-md-4">
                    <div class="card">
                    <img src="assets/img/profile.jpg" style="height:200px;" class="card-img-top" alt="...">
                    <button class="btn-view-more">View More</button>
                    <div class="card-body">
                        <h5 class="card-title">Beach Cleanup Drive</h5>

                        <div class="d-flex justify-content-between mb-2">
                            <p class="card-text mb-0"><strong>Venue:</strong> Beach</p>
                            <p class="card-text mb-0"><strong>Date:</strong> June 12, 2025</p>
                        </div>

                        <p class="card-text"><strong>Organizer:</strong> EcoVolunteers</p>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-danger w-100">Not Approved</button>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <img src="assets/img/profile.jpg" style="height:200px;" class="card-img-top" alt="...">
                    <button class="btn-view-more">View More</button>
                    <div class="card-body">
                        <h5 class="card-title">Beach Cleanup Drive</h5>

                        <div class="d-flex justify-content-between mb-2">
                            <p class="card-text mb-0"><strong>Venue:</strong> Park</p>
                            <p class="card-text mb-0"><strong>Date:</strong> June 12, 2025</p>
                        </div>

                        <p class="card-text"><strong>Organizer:</strong> EcoVolunteers</p>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-warning w-100">Applied</button>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <img src="assets/img/profile.jpg" style="height:200px;" class="card-img-top" alt="...">
                    <button class="btn-view-more">View More</button>
                    <div class="card-body">
                        <h5 class="card-title">Beach Cleanup Drive</h5>

                        <div class="d-flex justify-content-between mb-2">
                            <p class="card-text mb-0"><strong>Venue:</strong> aaa</p>
                            <p class="card-text mb-0"><strong>Date:</strong> June 12, 2025</p>
                        </div>

                        <p class="card-text"><strong>Organizer:</strong> EcoVolunteers</p>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-success w-100">Approved</button>
                    </div>
                    </div>
                </div>

                <!-- Repeat other cards... -->

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
