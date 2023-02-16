<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('cdn');
    <title>Edit users</title>

</head>
<style>
    html, body {
        height: 100%;
        background-color: #06c6f6;;
        overflow: hidden;
    }
    </style>

<body>

    <div class="container">

        {{-- @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif --}}

        {{-- <h1><a href="{{"list",'list'}}">View Added User</a></h1> --}}

        <h1>Edit User</h1>

       {{-- @if(session('name'))
        <h3>data saved for {{session('name')}}</h3>
       @endif --}}

        <form action="/edit" method="post" >
            @csrf
            {{-- {{@method_field('delete')}} --}}
            <div class="form-group">
                {{-- <label for="exampleInputEmail1">Id</label> --}}
                <input type="hidden" class="form-control" name="id" value={{$data['id']}}>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="username" value="{{$data['username']}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" name="email"  value="{{$data['email']}}" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone </label>
                <input type="text" class="form-control" name="phone"  value="{{$data['phone']}}">
            </div>
            {{-- <input type="file" name="file"> <br><br> --}}
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password"  value="{{$data['password']}}">
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
