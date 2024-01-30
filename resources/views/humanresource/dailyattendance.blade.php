<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daily Attendance</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .attendance-container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-top: 40px;
      margin-left: 100px;
    }

    .employee-list {
      list-style: none;
      padding: 0;
    }

    .employee-list li {
      background-color: #f8f9fa;
      border-radius: 5px;
      margin-bottom: 10px;
      padding: 10px;
    }

    .employee-list li:last-child {
      margin-bottom: 0;
    }

    .employee-name {
      font-weight: bold;
    }

    .custom-checkbox input[type="checkbox"] {
      position: absolute;
      opacity: 0;
    }

    .custom-control-indicator{
        font-size: 20px;
    }

    .custom-checkbox .custom-control-indicator {
      position: relative;
      display: inline-block;
      vertical-align: middle;
      width: 36px;
      height: 30px;
      background: #fff;
      border: 2px solid #adb5bd;
      border-radius: 4px;
      cursor: pointer;
    }

    .custom-checkbox .custom-control-indicator::after {
      content: '\2714';
      display: none;
      position: absolute;
      top: 0;
      left: 4px;
      color: #00ca43;
    }

    .custom-checkbox input[type="checkbox"]:checked + .custom-control-indicator::after {
      display: block;
    }

    .submit-btn {
      background-color: #007bff;
      border: none;
    }

    .submit-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
    @extends('layout.adminmaster')


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="attendance-container">
        <h2 class="text-center mb-4">Daily Attendance</h2>
        <form>
          <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date">
          </div>
          <ul class="list-group employee-list">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span class="employee-name">Employee 1</span>
              <label class="custom-checkbox">
                <input type="checkbox" class="form-check-input" id="employee1" name="attendance">
                <span class="custom-control-indicator"></span>
              </label>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span class="employee-name">Employee 2</span>
              <label class="custom-checkbox">
                <input type="checkbox" class="form-check-input" id="employee2" name="attendance">
                <span class="custom-control-indicator"></span>
              </label>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span class="employee-name">Employee 2</span>
                <label class="custom-checkbox">
                  <input type="checkbox" class="form-check-input" id="employee2" name="attendance">
                  <span class="custom-control-indicator"></span>
                </label>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span class="employee-name">Employee 2</span>
                <label class="custom-checkbox">
                  <input type="checkbox" class="form-check-input" id="employee2" name="attendance">
                  <span class="custom-control-indicator"></span>
                </label>
              </li>

             
              
             
            <!-- Add more employees as needed -->
          </ul>
          <button type="submit" class="btn btn-primary btn-block mt-4 submit-btn">Submit Attendance</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
