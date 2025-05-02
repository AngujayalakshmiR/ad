<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Helpora Dashboard</title>

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: white;
      height: 100vh; /* Make the body take the full height of the viewport */
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .logo {
      max-width: 200px;
      margin-bottom: 30px;
    }

    .btn-custom {
      background-color: #5867dd;
      color: white;
      font-size: 1.5rem; /* Make the button text larger */
      padding: 15px 30px; /* Increase padding to make the button bigger */
      width: 100%; /* Make button width responsive */
    }

    .btn-custom-outline {
      background-color: transparent;
      border-color: #5867dd;
      color: #5867dd;
      font-size: 1.5rem;
      padding: 15px 30px;
      width: 100%; /* Make button width responsive */
    }

    .button-container {
      display: flex;
      flex-direction: column;
      gap: 20px; /* Add space between the buttons */
    }

    /* Responsive layout: Stack buttons on smaller screens */
    @media (max-width: 768px) {
      .button-container {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <div class="text-center">
    <!-- Logo -->
    <img src="assets/img/logo.png" alt="Helpora Logo" class="logo">

    <!-- Button Container -->
    <div class="button-container">
      <button class="btn btn-custom" onclick="window.location.href='organiser-dashboard.php';">Organiser</button>
      <button class="btn btn-custom-outline" onclick="window.location.href='volunteer-dashboard.php';">Volunteer</button>
    </div>
  </div>

  <!-- Bootstrap 5 JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
