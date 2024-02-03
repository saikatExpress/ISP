@extends('layout.adminmaster')

@section('content')
<div class="card-body">
    <h2 class="text-center mb-4">Loan Sheet</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th style="background-color: rgb(45, 255, 227)">Id</th>
                    <th style="background-color: rgb(45, 255, 227)">Name</th>
                    <th style="background-color: rgb(45, 255, 227)">Department</th>
                    <th style="background-color: rgb(45, 255, 227)">Position</th>
                    <th style="background-color: rgb(45, 255, 227)">Salary</th>
                    <th style="background-color: rgb(45, 255, 227)">Loan</th>
                    <th style="background-color: rgb(45, 255, 227)">Final Salary</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($reademployeeloan as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->depertment }}</td>
                    <td>{{ $data->position }}</td>
                    <td>{{ $data->salary }}</td>
                    
                    <td style="background-color: rgb(255, 172, 172)">{{ $data->loan}}</td>
                    
                    <td style="background-color: rgb(128, 255, 156)">{{ $data->salary - $data->loan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


