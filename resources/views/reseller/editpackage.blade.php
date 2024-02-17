<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .edit {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin-top: 30px; /* Added margin top */
        padding-left: 100px;

    }

    .form-container {
        max-width: 300px; /* Reduced max width */
        margin: auto;
        padding: 15px; /* Reduced padding */
        border: 4px solid #878fff;
        border-radius: 15px; /* Reduced border radius */
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .form-container label {
        font-weight: bold;
    }

    .form-container input[type="text"],
    .form-container select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px; /* Reduced margin bottom */
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
    @extends('layout.sellermaster')
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
            <div><h3>Update Package</h3></div>
            <form method="post" action="{{route('go.editstorepackages')}}">
                @csrf 
                @method('post')
                <input type="text" name='pass_id' hidden value="{{$pass->id}}">

                <div>
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name" value="{{$pass->name}}" />
                </div>
                <div>
                    <label>Speed</label>
                    <input type="text" name="speed" placeholder="speed" value="{{$pass->speed}}"/>
                </div>
                <div>
                    <label>Buy Price</label>
                    <input type="text" name="buy_price" placeholder="buy_price" value="{{$pass->buy_price}}"/>
                </div>

                <div>
                    <label>Sale Price</label>
                    <input type="text" name="sale_price" placeholder="sale_price" value="{{$pass->sale_price}}"/>
                </div>

                <div>
                    <input type="submit" value="Update" />
                </div>
            </form>
        </div>
    </div>    
</body>
</html>
