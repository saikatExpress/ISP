<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px; /* Added padding at the top */
        }
        .container {
            margin-top: 150px; /* Adjusted margin-top */
        }

        
        .search-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 100px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        .form-control-sm:(.form-control-lg) {
    font-size: 14px;
    padding: 20px 70px;
    height: 42px;
}
        .search-results {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        .search-results h2 {
            color: rgb(5, 138, 0);
            margin-bottom: 20px; /* Added margin at the bottom of the heading */
        }
        .list-group-item {
            font-size: 20px;
            padding: 10px 15px; /* Added padding to list items */
        }
        .no-results {
            color: #dc3545; /* Changed text color for no results message */
            margin: 20px 0; /* Added margin to the message */
        }
    </style>
</head>
<body>
    @extends('layout.adminmaster')

    

    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <div class="search-form">
                    <form action="{{ route('g.searching') }}" method="GET" class="form-inline justify-content-center">
                        <input type="search" name="query" class="form-control mr-sm-6" placeholder="Search Employee Name">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>

                <div class="search-results">
                    <h2>{{ is_array($query) ? 'Search Results' : $query . "'s Present Days" }}</h2>

                    @if ($results->isEmpty())
                        <p class="no-results"><i class="fa-solid fa-user-large-slash" style="font-size: 35px;"></i>__results not found. Please provide a valid Employee Name.</p>
                    @else
                        <ul class="list-group mt-3">
                            @foreach ($results as $result)
                                <li class="list-group-item">{{ $result->attendance_date }} -------> Present</li> <!-- Adjusted list item style -->
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
