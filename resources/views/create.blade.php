<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}">

    <title>Document</title>
</head>
<body>
    <form action="save" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
                @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        <button type="submit" class="btn btn-success">Create</button>
    </form>

</body>
</html>