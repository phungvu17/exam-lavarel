<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
    <thead>

    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">address</th>
        <th scope="col">telephone</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        @foreach($student as $item )
        <th scope="row">{{$item->id}}</th>
        <td>{{$item-> name}}</td>
        <td>{{$item -> age}}</td>
        <td>{{$item ->address}}</td>
        <td>{{$item ->telephone}}</td>
    </tr>

    @endforeach

    </tbody>
</table>
<button  type="submit" class="btn btn-primary" >add</button>

</body>
</html>
