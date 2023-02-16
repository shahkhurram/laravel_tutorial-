<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('cdn');
    <title>Add users</title>

</head>
<style>
html, body {
    height: 100%;
    background-color: #68f1c8;;
    overflow: hidden;
}
</style>

<body>

    <div class="container ">
  

        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

        <h1>Add User To Database</h1>

        <h2><a href="list">View  Users List</a></h2>


       {{-- @if(session('name'))
        <h3>data saved for {{session('name')}}</h3>
       @endif --}}

        <form action="add" method="post" >
            @csrf
            {{-- {{@method_field('delete')}} --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp"
                    placeholder="Enter name"required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" name="email" aria-describedby="emailHelp"
                    placeholder="Enter email"required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone </label>
                <input type="text" class="form-control" name="phone" aria-describedby="emailHelp"
                    placeholder="Enter phone" required>
            </div>
            {{-- <input type="file" name="file"> <br><br> --}}
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password"  placeholder="Password" required>
            </div>
            <br>
     
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
