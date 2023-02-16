<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('cdn');
    <title>Bootstrap demo</title>

</head>

<body>

    <div class="container">
        <h1>Login and Upload  photo</h1>

       {{-- @if(session('name'))
        <h3>data saved for {{session('name')}}</h3>
       @endif --}}

        <form action="uploadfile" method="post" enctype="multipart/form-data">
            @csrf
            {{-- {{@method_field('delete')}} --}}
            <div class="form-group">
                <label for="exampleInputEmail1">name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                    placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" name="email" aria-describedby="emailHelp"
                    placeholder="Enter email">
            </div>
            <input type="file" name="file"> <br><br>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password"  placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>

    @include('footer');



