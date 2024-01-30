<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .active {
            color: green;
        }
        .inactive {
            
            color: red;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Status</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($readdata as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->depertment}}</td>
                <td>{{ $data->created_at->format('Y-m-d') }}</td>
                <td class="{{ $data->status == 'active' ? 'active' : 'inactive' }}">{{ $data->status }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    <h1>gfhfh</h1>
</body>
</html>
