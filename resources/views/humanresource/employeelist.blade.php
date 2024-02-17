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
    @extends('layout.adminmaster')

@section('content')
    <div class="col-12 col-md-12 col-lg-12">

        
        <div class="card">

            <div class="card-header">
                <h4>Employee List</h4>
                <h1 style="padding-left: 40px"> </h1>
                
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addemployeeModal">
                    Add Employee
                  </button>


                
                
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Depertment</th>
                            <th>Position</th>
                            <th>Loan</th>
                            <th>Salary</th>
                            <th>Hire Data</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                        @foreach($readdata as $data)
            <tr>
                <td style="font-size: 15px">{{ $data->id }}</td>
                <td style="font-size: 15px">{{ $data->name }}</td>
                <td style="font-size: 15px">{{ $data->depertment }}</td>
                <td style="font-size: 15px">{{ $data->position }}</td>
                <td style="font-size: 15px">{{ $data->loan ? $data->loan : 'No loan' }}</td>
                <td style="font-size: 15px">{{ $data->salary }}</td>
                <td style="font-size: 15px">{{ $data->hire_data }}</td>

                <td class="{{ $data->status == 'active' ? 'active' : 'inactive' }}" style="font-size: 15px"><button>{{ $data->status }}</button></td>
                <td id="actios_btn">
                    <a href="{{route('go.viewemployeelist', $data->id)}}"> <button>View</button></a> 


                    <a href="{{route('go.editemployeelist', $data->id)}}"> <button style="font-size: 9px">Edit & Update Loan</button></a> 
                    
                    <form method="POST" action="{{route('go.deleteemployeelist')}}">
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
                <form  method="post" action="{{route('go.storeemployeelist')}}">
                    @csrf 
                    @method('post')
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Name" required/>
                    </div>
                    <div>
                        <label>Depertment</label>
                        <input type="text" name="depertment" placeholder="depertment" required/>
                    </div>

                    <div>
                        <label>Position</label>
                        <input type="text" name="position" placeholder="position" required />
                    </div>

                    <div>
                        <label for="loan">Loan</label>
                        <input type="text" id="loan" name="loan" placeholder="if no loan give 0'" required />
                    </div>

                    <div>
                        <label>Salary</label>
                        <input type="text" name="salary" placeholder="salary" required/>
                    </div>
                    <div>
                        <label>Hire Data</label>
                        <input type="text" name="hire_data" placeholder="hire date" required/>
                    </div>
                    

                   
            
                    <div>
                        <label for="status">Status:</label>
                        <select class="form-control" id="status" name="status"> <!-- Add name attribute here -->
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    
            
                    <div>
                        <input type="submit" value="Add a New Designation" />
                    </div>
                </form>
                
            </div>
            
            
            
            
        </div>
      </div>
    </div>




    <!-- edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Designation</h5>
          <h1>dfjfhjs</h1>
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


            {{-- <div class="form-container">
                <form  method="post" action="{{route('go.storeemployeelist')}}">
                    @csrf 
                    @method('post')
                    <input type="text" name='pass_id' hidden value="{{$pass->id}}">

                    <div>
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Name" value="{{$pass->name}}"/>
                    </div>
                    <div>
                        <label>Depertment</label>
                        <input type="text" name="depertment" placeholder="depertment" value="{{$pass->depertment}}"/>
                    </div>

                    <div>
                        <label>Position</label>
                        <input type="text" name="position" placeholder="position" value="{{$pass->position}}" />
                    </div>

                    <div>
                        <label>Salary</label>
                        <input type="text" name="salary" placeholder="salary" value="{{$pass->salary}}"/>
                    </div>
                    <div>
                        <label>Hire Data</label>
                        <input type="text" name="hire_data" placeholder="hire date" value="{{$pass->hire_data}}"/>
                    </div>
                    
            
                    <div>
                        <label for="status">Status:</label>
                        <select class="form-control" id="status" name="status">
                            <option value="active" {{$pass->status == 'active' ? 'selected' : ''}}>Active</option>
                            <option value="inactive" {{$pass->status == 'inactive' ? 'selected' : ''}}>Inactive</option>
                        </select>
                    </div>
                    
            
                    <div>
                        <input type="submit" value="Add a New Designation" />
                    </div>
                </form> --}}
                
            </div>
            
            
            
            
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