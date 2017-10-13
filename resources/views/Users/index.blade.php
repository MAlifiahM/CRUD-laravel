<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Index</title>
    <link rel="stylesheet" href="{{asset('css/app.css')">
</head>
<body>
    <div class="container">
    <h2>User Index</h2>
    <br>
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success')}}</p>
    </div>
    <br>
    @endif
        <table class="table table-striped">
        <thead>
         <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th colspan="2">ACTION</th>
         </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user['id]}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['password']}}</td>
                <td><a href="{{action('UserController@edit', $user['id'])}}" class="btn btn-success">Edit</td>
                <td>
                    <form action="{{action('UserController@destroy', $user['id])}}'"method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
        <a href="user/create" class="btn btn-primary" style="margin-left:20px">Create</a>
    </div>
</body>
</html>