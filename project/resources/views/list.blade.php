<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('cdn');
    <title>list</title>

</head>
<style>
    html, body {
        height: 100%;
        background-color: rgb(186, 221, 234);
        overflow: hidden;
    }

    a{
        text-decoration: none;
       
    }
    </style>

<body>

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

   

    

    <div class="container">
        <h1>Users List</h1>
        <h2><a style="text-decoration:underline;" href="/add">Add User</a></h2>
        <table class="table table-bordered">
            <tr scope="row">
                <th scope="col">id</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Password</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>

            </tr>
            @foreach ($users as $user)
                <tr scope= "col">
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['phone'] }}</td>
                    <td>{{ $user['password'] }}</td>
                    <td><button class="btn btn-info"><a style="color:black" href="{{"edit/".$user['id']}}">Update</a></button></td>
                    <td><button class="btn btn-danger"><a style="color:black"href="{{"delete/".$user['id']}}">Delete</a></button></td>

                </tr>
            @endforeach
        </table>
        <div>
            {{ $users->links() }}
        </div>
        <style>
            .w-5 {
                display: none;
            }
        </style>
    </div>

</body>

@include('footer');
