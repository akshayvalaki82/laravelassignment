
<html>
<body>
    <form method="POST" action="{{URL::to('/update/'.$id )}}" enctype="multipart/form-data">
        <!-- <form action="upload.php" method="POST" enctype="multipart/form-data"> -->
        @csrf
        <h2>Product Name</h2>
        <input type="text" value="{{$row->pname}}" id="pname" name="pname">

        <h2>Product Price</h2>
        <input type="text" value="{{$row->pprice}}" id="pprice" name="pprice">

        <h2>Upload Image</h2>
        <input type="file" id="image" name="image">


        <h2>Select Category</h2>
        <select name="scategory" id="scategory" class="select category">
            <option value=" {{$row->scategory}}">{{$row->scategory}}</option>
            @foreach($scategory as $sc) 
            <option value="{{$sc->cname}}">{{$sc->cname}}</option>
            @endforeach
        </select>
        <br> <br>
        <button type="submit" name="submit">update</button>
        <button><a href="/productdisp">list Product</a></button>
        <!-- </form> -->
    </form>
</body>

</html>