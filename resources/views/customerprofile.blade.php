<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile View</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS */
    #profile-img {
      font-size: 5rem; /* Increase icon size */
      color: #007bff; /* Change icon color */
    }
    .profile-card {
      margin-top: 50px; /* Adjust margin-top for centering */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
      transition: 0.3s; /* Add smooth transition effect */
      display: flex; /* Use flexbox */
      justify-content: center; /* Center horizontally */
      align-items: center; /* Center vertically */
      background-color: #f8f9fa; /* Background color */
      border-radius: 10px; /* Rounded corners */
      padding: 20px; /* Add padding */
      width: 350px; /* Adjust width */
      height: 400px; /* Adjust height */
    }
    .profile-card:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Add larger shadow on hover */
    }
    .card-title {
      color: #333; /* Title color */
      margin-bottom: 10px; /* Add some space below title */
    }
    .card-text {
      color: #666; /* Text color */
    }
    .btn-primary {
      background-color: #007bff; /* Button background color */
      border-color: #007bff; /* Button border color */
    }
    .btn-primary:hover {
      background-color: #0056b3; /* Button background color on hover */
      border-color: #0056b3; /* Button border color on hover */
    }
  </style>
</head>
<body>
    @extends('layout.customermaster')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card profile-card">
        <i class="fas fa-user-circle fa-5x" id="profile-img"></i> <!-- Changed icon to user-circle -->
        <div class="card-body text-center">
          
          <h5 class="card-title">Name: {{$name}}</h5>
          

          <h6 class="card-text">ID: {{$id}}</h6>
          <!-- You can add more details here -->
         
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
