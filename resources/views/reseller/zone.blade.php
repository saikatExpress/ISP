<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
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
        
        
</style>
<body>
    @extends('layout.sellermaster')

@section('content')
    <div class="col-12 col-md-12 col-lg-12">

        
        <div class="card">

            <div class="card-header">
                <h4>Zone List</h4>
                <h1 style="padding-left: 40px"> </h1>
                
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addemployeeModal">
                    Add Zone
                  </button>

                

                  <div id="search" style="margin-left: 12px">
                    <form method="GET" action="{{ route('search.zones') }}">
                        <input type="text" name="search" placeholder="Search..." style="width: 180px; border-color:#0f0097; border-radius:8px;">
                        <input type="submit" value="Search"class='btn btn-primary' style="background-color: #009c41">
                    </form>
                </div>


                
                
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            
                            <th>Zone Id</th>
                            <th>Zone Name</th>
                            <th>Zone Address</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($read as $data)
                        <tr>
                            <td style="font-size: 15px">{{ $data->zone_id }}</td>
                            <td style="font-size: 15px">{{ $data->zone_name }}</td>
                            <td style="font-size: 15px">{{ $data->zone_address }}</td>
                        
                            <td id="actios_btn">
                                <a href="{{route('go.editzone', $data->id)}}"> <button>Edit</button></a> 
                                            
                                <form method="POST" action="{{route('go.deletezone')}}">
                                    @method('DELETE')
                                    @csrf
                                    <input type="text" name="passing_id" value="{{$data->id}}" hidden>
                                    <button style="background: #b61e1e">Delete</button>
                                </form> 
                            </td>
                        </tr>
                        @endforeach



            
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection


<!-- addemployeeModal -->
<div class="modal fade" id="addemployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Designation</h5>
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
                <form  method="post" action="{{route('go.storezone')}}">
                    @csrf 
                    @method('post')
                    <div>
                        <label>Zone Id</label>
                        <input type="text" name="zone_id" placeholder="Name" required/>
                    </div>
                    <div>
                        <label>Zone Name</label>
                        <input type="text" name="zone_name" placeholder="speed" required/>
                    </div>

                    <div>
                        <label>Zone Address</label>
                        <input type="text" name="zone_address" placeholder="zone_address" required />
                    </div>


                    
            
                    <div>
                        <input type="submit" value="Add a New Zone" />
                    </div>
                </form>
                
            </div>
            
            
            
            
        </div>
      </div>
    </div>




    
  
  <!-- Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  
</body>
</html>