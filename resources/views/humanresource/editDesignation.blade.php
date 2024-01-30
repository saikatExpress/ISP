<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .edit{
        display: flex;
            justify-content: center;
            align-items: center;
            
            height: 100vh;
            margin-top: 10px;
            padding-left: 100px;
    }
.form-container {
            max-width: 700px;
            margin: auto;
            padding: 80px;
            border: 4px solid #878fff;
            border-radius: 30px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-container label {
            font-weight: bold;
        }
        .form-container input[type="text"],
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s ease-in-out;
        }
        .form-container input[type="text"]:focus,
        .form-container select:focus {
            outline: none;
            border-color: #4dabf7;
        }
        .form-container input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
</style>
<body>
    @extends('layout.adminmaster')
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>    

    <div class="edit">
        

        <div class="form-container">
            <div><h3>Update Designation</h3></div>
            <div>  </div>
            <div>  </div>
            <form method="post" action="{{route('go.editstoredesignation')}}">
                @csrf 
                @method('post')
                <input type="text" name='pass_id' hidden value="{{$pass->id}}">

                
                <div>
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name" value="{{$pass->name}}" />
                </div>
                <div>
                    <label>Department</label>
                    <input type="text" name="depertment" placeholder="Department" value="{{$pass->depertment}}"/>
                </div>
        
                <div>
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status">
                        <option value="active" {{$pass->status == 'active' ? 'selected' : ''}}>Active</option>
                        <option value="inactive" {{$pass->status == 'inactive' ? 'selected' : ''}}>Inactive</option>
                    </select>
                </div>
                
                
        
                <div>
                    <input type="submit" value="Update" />
                </div>
            </form>
        </div>


    </div>
    
</body>
</html>