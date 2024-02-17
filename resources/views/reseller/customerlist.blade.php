


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive & Colorful Bootstrap Conversion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        body {
            background-color: #f8f9fa;
        }
        #bb{
            margin-top: 100px;
            margin-left:200px;
        }

        .balance {
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .balance h1 {
            font-size: 36px;
            font-weight: bold;
            color: #066903;
        }

        .search-box {
            width: 100%;
            max-width: 300px;
        }

        .src_button {
            min-width: 120px;
        }

        .search-container {
            position: relative;
            display: flex;
        }

        .search-input {
            flex: 1;
            padding: 10px;
            border: 2px solid #3391e9;
            border-radius: 5px 0 0 5px;
            color: #3391e9;
        }

        .search-btn {
            background-color: #3391e9;
            color: #fff;
            border: none;
            border-radius: 0 5px 5px 0;
            padding: 0px 25px;
            cursor: pointer;
        }

        .search-btn:hover {
            background-color: #0053ec;
        }

        .table thead th {
            background-color: #0672d6;
            color: #fff;
        }

        /* Responsive styles */
        @media (max-width: 576px) {
            .src_nav {
                flex-direction: column;
                align-items: flex-start;
            }

            .src_nav .customer_search {
                margin-bottom: 10px;
            }

            .src_nav .button_continer {
                margin-top: 10px;
            }
        }

        .form-container {
        max-width: 500px;
        margin: 0 0;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    /* Style for form labels */
    .form-container label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }

    /* Style for form inputs */
    .form-container input[type="text"],
    .form-container select {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Style for submit button */
    .form-container input[type="submit"] {
        width: 100%;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 0;
        cursor: pointer;
    }

    /* Style for submit button on hover */
    .form-container input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .active button {
            font-size: 13px;
            display: inline-block;
            padding: 10px 20px;
            background: rgb(0, 133, 18);
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;

        }
        .inactive button {
            font-size: 10px;
            display: inline-block;
            padding: 10px 20px;
            background: rgb(255, 0, 0);
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;

        }

        #actios_btn button{

            display: inline-block;
            padding: 10px 20px;
			background: linear-gradient(45deg, #6d5ef1, #004480);
            
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 12px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
            
        }
        #actios_btn button:hover {
			background: #2300be;
        }

        #actios_btn {
            display: flex;
            align-items: center;
        }
        .active button {
            font-size: 13px;
            display: inline-block;
            padding: 10px 20px;
            background: rgb(0, 133, 18);
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;

        }
        .inactive button {
            font-size: 10px;
            display: inline-block;
            padding: 10px 20px;
            background: rgb(255, 0, 0);
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;

        }

    </style>
</head>

<body>

    @extends('layout.sellermaster')


    <div id="bb">
        <div class="container mt-4" >
            <div class="row">
                
            </div>
            <div class="row" >
                <div class="col-md-10 mx-auto"  >
                    <div class="src_nav d-flex justify-content-between align-items-center" >
                        <div id="search" style="margin-left: 12px">
                            <form method="GET" action="{{ route('search.customers') }}">
                                <input type="text" name="search" placeholder="Search...id or user name" style="width: 180px; border-color:#0f0097; border-radius:8px; height: 38px;">
                                <input type="submit" value="Search"class='btn btn-primary' style="background-color: #009c41">
                            </form>
                        </div>
                        <div class="button_continer">
                            <button type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#addemployeeModal">
                                Add Customer
                              </button>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-left:-75px; width:1200px;">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead id="haed">
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                 
                                    <th>Zone</th>
                                    <th>Package</th>
                                    <th>Sale Price</th>
                                    <th>Mobile</th>
                                    <th>Expire Date</th>
                                    <th>Pay Status</th>
                                    <th>Actions</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($read as $data)
                                <tr>
                                    <td style="font-size: 15px">{{ $data->id }}</td>
                                    <td style="font-size: 15px">{{ $data->username }}</td>
                                    <td style="font-size: 15px">{{ $data->zone }}</td>
                                    <td style="font-size: 15px">{{ $data->package }}</td>
                                    <td style="font-size: 15px">{{ $data->sale_price }}</td>
                                    <td style="font-size: 15px">{{ $data->mobile }}</td>
                                    <td style="font-size: 15px">{{ $data->expire_Date }}</td>
                                    
                                    <td class="{{ $data->pay_status == 'Paid' ? 'Paid' : 'Unpaid' }}">
                                        <button style="background-color: {{ $data->pay_status == 'Unpaid' ? 'red' : 'inherit' }}; color: {{ $data->pay_status == 'Unpaid' ? 'white' : 'inherit' }}">
                                            {{ $data->pay_status }}
                                        </button>
                                    </td>
                                    
                            
                                    <td id="actios_btn">
                                        <a href="{{route('go.editcustomer', $data->id)}}"> <button>Edit</button></a> 
                                                    
                                        <form method="POST" action="{{route('go.deletecustomer')}}">
                                            @method('DELETE')
                                            @csrf
                                            <input type="text" name="passing_id" value="{{$data->id}}" hidden>
                                            <button style="background: #b61e1e">Delete</button>
                                        </form> 
                                    </td>
                                </tr>
                                @endforeach
                               
                                <!-- Add more rows as needed -->
                            </tbody>
                            {{-- <tfoot>
                                <tr>
                                    <th colspan="8">Total</th>
                                    <td>$50.00</td> <!-- Adjust the total amount based on your data -->
                                </tr>
                            </tfoot> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
    
    
        <!-- addemployeeModal -->
    <div class="modal fade" id="addemployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
    
                <div>
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>    
    
    
                <div class="form-container">
                    <form  method="post" action="{{route('go.storecustomer')}}">
                        @csrf 
                        @method('post')

                        <div>
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Username" required/>
                        </div>
    
                        <div>
                            <label >Zone</label>
                            <select class="form-control" id="zone" name="zone">
                                <option value="">Select zone</option>
                                @foreach($readzone as $data)
                                    <option value="{{ $data->zone_name }}">{{ $data->zone_name }}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <div>
                            <label >Package</label>
                            <select class="form-control" id="Package" name="package">
                                <option value="">Select Package</option>
                                @foreach($readpackage as $data)
                                    <option value="{{ $data->name }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label>sale price</label>
                            <input type="text" id="sale_price" name="sale_price" placeholder="sale_price" required />
                        </div>

    
                        <div>
                            <label for="Mobile">Mobile</label>
                            <input type="text" id="mobile" name="mobile" placeholder="mobile no" required />
                        </div>

                        <div>
                            <label for="expire_Date">Expire Date</label>
                            <input type="text" id="expire_Date" name="expire_Date" placeholder="expire_Date" required />
                        </div>
                        
                        <div>
                            <label for="pay_status">Pay Status:</label>
                            <select class="form-control" id="pay_status" name="pay_status"> <!-- Add name attribute here -->
                                <option value="Paid">Paid</option>
                                <option value="Unpaid">Unpaid</option>
                            </select>
                        </div>

                        
                        
                
                        <div>
                            <input type="submit" value="Add a New Customer" />
                        </div>
                    </form>
                    
                </div>
                
                
                
                
            </div>
          </div>
        </div>

    </div>

    

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#Package').change(function () {
                var selectedPackage = $(this).val();
                
                $.ajax({
                    url: '/get-sale-price/' + selectedPackage, 
                    type: 'GET',
                    success: function (response) {
                        $('#sale_price').val(response.sale_price); 
                    },
                    error: function (xhr) {
                        // Handle error
                    }
                });
            });
        });
    </script>

</body>

</html>

