@extends("cats/layout")
@section("maincontent")
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</script>
<body> 
<form action="" method="post">   
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">product name</th>
      <th scope="col">product price</th>
      <th scope="col">iamge</th>
      <th scope="col">Select Category</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($product as $p)
    <tr>
      <th>{{$p->id}}</th>
      <td>{{$p->pname}}</td>
      <td>{{$p->pprice}}</td>
      <td><img src="upload/img/{{$p->file}}" alt="" width="80" height="100"></td>
      <td>{{$p->scategory}}</td>
      
      <td> <button><a href="edit/{{$p->id}}">edit</a></button>  <button><a href="delete/{{$p->id}}">delete</a></button>  </td>
      @endforeach
    </tr>
  </tbody>
</table>
</form>
</body>
@endsection