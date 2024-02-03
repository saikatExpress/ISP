

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Include Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Employee Attendance</title>
    <style>

      body{

        background-color: #f3f3f3
      }
        /* Custom styles for buttons */

        .table-dark {
    --bs-table-color: #fff;
    --bs-table-bg: #09008a;
    --bs-table-border-color: #373b3e;
    --bs-table-striped-bg: #2c3034;
    --bs-table-striped-color: #fff;
    --bs-table-active-bg: #373b3e;
    --bs-table-active-color: #fff;
    --bs-table-hover-bg: #323539;
    --bs-table-hover-color: #fff;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
}
        .submit-btn {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #218838;
        }

        .new-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 7px 20px;
            border-radius: 10px;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .new-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
   
  <div class="container mt-3">
    <div class="row">
        <div class="col text-center">
            <h1>Yearly Salary Sheet</h1>
        </div>
    </div>
</div>
    <form action="{{ route('salaryattendance.store') }}" method="post">
        @csrf
        <div class="card mt-5 mx-auto" style="max-width: 1500px; margin-top=200px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <td colspan="5">
                                <td colspan="{{ count($dates) + 3 }}">
                                    <button type="submit" class="btn btn-success">Submit Salary</button>
                                    <a href="{{route('go.dashboard')}}"><button type="button" class="new-btn">Go To Dashboard</button></a>
                                  
                            </td>
                          
                            <tr>
                                <th>Employee ID</th>
                                <th>Employee Name</th>
                                <th>Employee Position</th>
                                <th>Loan</th>
                                <th>Salary</th>
                                <th>Final salary</th>
                                
                                @foreach ($dates as $date)
                                    <th>{{ $date }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->position }}</td>
                                    <td>{{ $employee->loan }}</td>
                                    <td>{{ $employee->salary }}</td>
                                    <td>{{ $employee->salary - $employee->loan }}</td>
                                    
                                    @foreach ($dates as $date)
                                        <td>
                                            @php
                                                $attendance = \App\Models\Salaryattendance::where('emp_name', $employee->name)
                                                    ->where('attendance_month', $date)
                                                    ->first();
                                                $checked = $attendance && $attendance->status == 1 ? 'checked' : '';
                                            @endphp
                                            <div class="form-check form-check-inline">
                                                @if (!$checked)
                                                    <input class="form-check-input" type="checkbox"
                                                        name="attd[{{ $date }}][{{ $employee->name }}]" value="1" {{ $checked }}>
                                                @else
                                                <i class="fa-solid fa-check" style="color: green; font-size: 20px;"></i>

                                                @endif
                                                <input type="hidden" class="attendance-status" data-empid="{{ $employee->name }}" data-date="{{ $date }}" value="{{ $checked }}">
                                            </div>
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>

    <!-- Include Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
    const submitButton = document.querySelector('.btn-success');
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            checkSubmitButton();
        });
    });

    function checkSubmitButton() {
        let checked = false;
        checkboxes.forEach(function (checkbox) {
            if (checkbox.checked) {
                checked = true;
            }
        });

        if (checked) {
            submitButton.removeAttribute('disabled');
        } else {
            submitButton.setAttribute('disabled', 'disabled');
        }
    }

    // Call the function initially to set the button state
    checkSubmitButton();
});

  </script>
  
</body>
</html>
