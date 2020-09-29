@extends('cats/layout')
@section("maincontent")
<body>
    <form method="POST" action="{{URL::to('/submit')}}" enctype="multipart/form-data">
        <!-- <form action="upload.php" method="POST" enctype="multipart/form-data"> -->
        @csrf
        <h2>Product Name</h2>
        <input type="text" id="pname" name="pname" value="{{old('pname')}}">
        @error('pname')
        <div style="color:red;">{{$message}}</div>
        @enderror

        <h2>Product Price</h2>
        <input type="text" id="pprice" name="pprice" value="{{old('pprice')}}">
        @error('pprice')
        <div style="color:red;">{{$message}}</div>
        @enderror

        <h2>Upload Image</h2>
        <input type="file" id="image" name="image">
        @error('image')
        <div style="color:red;">{{$message}}</div>
        @enderror
        <br><br><br>                
        <h2>Select Category</h2>
        <select name="scategory" id="scategory" class="" value="{{old('scategory')}}">
            <option value="select">select</option>
            @foreach($scategory as $sc) 
            <option value="{{$sc->cname}}">{{$sc->cname}}</option>
            @endforeach
            @error('scategory')
            <div style="color:red;">{{$message}}</div>
            @enderror
        </select>
        <br> <br>
        <button type="submit" name="submit">Submit</button>
        <button><a href="/productdisp">list Product</a></button>
        <!-- </form> -->
    </form>
</body>
@endsection