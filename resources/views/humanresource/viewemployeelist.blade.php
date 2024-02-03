<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px; /* Add space from the top */
        }

        .employee-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding-left: 100px;
        }

        .employee-card {
            background-color: #ffffff;
            border: 4px solid #28a745; /* Green border */
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* Light shadow */
            width: 400px; /* Increased card width */
            max-width: 100%; /* Allow card to be responsive */
            text-align: left; /* Align text to the left */
            margin-top: -100px;
        }

        .employee-card h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            text-align: center; /* Center the text */
        }

        .employee-card h3 {
            margin-bottom: 5px;
            font-size: 18px;
            color: #555;
        }

        .employee-card p {
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
        }

        /* Color variations */
        .employee-card.active {
            border-color: #8450ff;
        }

       

        .employee-details {
            margin-left: 20px; /* Add space between label and value */
        }
    </style>
</head>
<body>
    @extends('layout.adminmaster')
<div class="container">
    <div class="employee-container">
        <!-- Employee Card -->
        <div class="employee-card active">
            <h2>Employee Information</h2>
            <div class="employee-details">
                <h3>Name:</h3>
                <p>{{$pass->name}}</p>
                <h3>Department:</h3>
                <p>{{$pass->depertment}}</p>
                <h3>Position:</h3>
                <p>{{$pass->position}}</p>
                <h3>Loan:</h3>
                <p>{{$pass->loan}}</p>
                <h3>Salary:</h3>
                <p>{{$pass->salary}}</p>
                <h3>Hire Date:</h3>
                <p>{{$pass->hire_data}}</p>
                <h3>Status:</h3>
                <p>{{$pass->status}}</p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
