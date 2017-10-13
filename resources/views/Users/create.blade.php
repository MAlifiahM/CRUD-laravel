<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
    <link rel="stylesheet" href="{{asset('css/app.css'}}">
</head>
<body>
    <div class="container">
        <h2>Create User</h2>
        <br>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br>
        @endif
        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success')}}</p>
        </div>
        <br>
        @endif
        <form action="{{url('users)}}'" method="post">
        {{csrf_field()}}
        <form method="post">
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="email">Email:</label>
            <input type="text" name="email" class="form-control">
        </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="password">Password:</label>
            <input type="text" name="password" class="form-control">
        </div>
        </div>
        </form>
    </div>    
</body>
</html>