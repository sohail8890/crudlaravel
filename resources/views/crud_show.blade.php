<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Welcome to CrudApp</title>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">CrudApp Using Laravel</h1>
      <hr>
    <a href="crud_create"><button class="btn btn-primary">Insert a Record</button></a>
    <div>

      {{session('msg')}}
      {{session('msgd')}}
      
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">CreatedAt</th>
      <th scope="col">Action</th>
    </tr>
    @foreach($crudArr as $crud)
    <tr>
      <td scope="col"><?php echo $crud->id;?></td>
      <td scope="col">{{$crud->name}}</td>
      <td scope="col">{{$crud->created_at}}</td>
      <td scope="col">
        <a href="crud_delete/<?php echo $crud->id;?>"><button class="btn btn-danger">Delete</button></a>
        <a href="crud_edit/<?php echo $crud->id;?>"><button class="btn btn-warning">Edit</button></a>
      
      </td>
    </tr>
    
    @endforeach
  </thead>
  <tbody>
   
   
  </tbody>
</table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>