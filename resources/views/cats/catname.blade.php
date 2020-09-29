@extends('cats/layout')
@section('maincontent')
<form method="post" action="create">
@csrf
    <!-- <form action="2insertcat.php" method="POST"> -->
        <label>
            <h1>Category Name</h1>
            <input id="cname" name="cname" type="text" placeholder="Enter Category Name" />
        </label>
        @error('cname')
        <div style="color:red;">{{$message}}</div>
        @enderror
        <br> <br>
        <button type="submit" name="submit" method="post"> submit</button>
       <button><a href="disp">Category list</a></button>
       <button><a href="product">product page</a></button>
        <!-- <button><a href="3displaycat.php">List Categories</a></button> -->
    <!-- </form> -->
</form>
@endsection