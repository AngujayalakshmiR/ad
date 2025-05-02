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
    }

    .btn-custom {
      background-color: #5867dd;
      color: white;
      font-size: 1.5rem; /* Make the button text larger */
      padding: 15px 30px; /* Increase padding to make the button bigger */
      width: 250px; /* Set a fixed width for the buttons */
    }

    .btn-custom-outline {
      background-color: transparent;
      border-color: #5867dd;
      color: #5867dd;
      font-size: 1.5rem;
      padding: 15px 30px;
      width: 250px;
    }

    /* Optional: Styling for the container to align buttons horizontally */
    .button-container {
      display: flex;
      gap: 20px; /* Add space between the buttons */
    }
  </style>
</head>
<body>

  <div class="container text-center" >
    <button class="btn btn-custom" onclick="window.location.href='organiser-dashboard.php';">Organiser</button>
    <button class="btn btn-custom-outline" onclick="window.location.href='volunteer-dashboard.php';">Volunteer</button>
  </div>

  <!-- Bootstrap 5 JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
