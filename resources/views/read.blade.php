<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}">
    <title>Document</title>
</head>
<body>
  
    <div class='row'>
        <a href="/create" class="btn btn-success">Add</a href="/create">
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
      @foreach ($data as $a)
    <tr>
      <th scope="row">{{$a->id}}</th>
      <td>{{$a->name}}</td>
      <td>
        <a class='btn btn-danger' href="update/{{$a->id}}">Edit</a>
        <a class='btn btn-primary' href="delete/{{$a->id}}">Delete</a>
      </td>
    </tr>
    @endforeach 
  </tbody>
</table>
</body>
</html> -->