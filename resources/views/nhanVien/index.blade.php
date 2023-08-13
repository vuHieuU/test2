<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="container">
<h3 class="mb-3">Danh sách nhân viên</h3>
<div class="">
    <a href="/add" class="btn btn-primary mb-3">Add</a>
    <form class="d-flex mb-3" action="/search" role="search" method="get">
        <input class="form-control me-2 w-25" type="text" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>
      @if ($nhanVien->isEmpty())
      <h2>Không tìm thấy nhân viên</h2>
       
        @else
        <table class="table bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Action</th>
            </tr>
            </thead>
            <thead>
            @foreach($nhanVien as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->tel}}</td>
                    <td>
                        <a href="/update/{{$item->id}}" class="btn btn-danger">Edit</a>
                    </td>
                </tr>
            @endforeach
            </thead>
        </table>
        @endif
{{$nhanVien->links()}}
</body>
</html>
