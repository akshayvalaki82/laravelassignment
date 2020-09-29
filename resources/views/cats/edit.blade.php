<!-- {{$row->cname}} -->
 <!-- {{$id}} -->
<html>
<body>
<form method="post" action="{{URL::to('/submit/'.$id)}}">
@csrf
    <!-- <form action="2insertcat.php" method="POST"> -->
        <label>
            <h1>Category Name</h1>
            <input type="hidden" name="id" value="{{$id}}">
            <input id="cname" name="cname" type="text" value="{{$row->cname}}" />
        </label><br> <br>
        <button type="submit" name="submit"> submit</button>
        <!-- <button><a href="3displaycat.php">List Categories</a></button> -->
    <!-- </form> -->
</form>
</body>
</html>