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
<h3 class="mb-3">Sửa thông tin nhân viên</h3>
<form action="/update/{{$nhanVien->id}}" method="post" >
      @error('name')
      <span class="text-danger">{{$message}}</span> <br>
    @enderror
    @error('email')
    <span class="text-danger">{{$message}}</span> <br>
    @enderror
    @error('tel')
    <span class="text-danger">{{$message}}</span> <br>
    @enderror
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{$nhanVien->name}}">
        {{-- @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror --}}
    </div>
    <div class="mb-3">
        <label class="form-label">email</label>
        <input type="text" class="form-control" name="email" value="{{$nhanVien->email}}">
                {{-- @error('email')
                  <span class="text-danger">{{$message}}</span>
                @enderror --}}
    </div>
    <div class="mb-3">
        <label class="form-label">tel</label>
        <input type="text" class="form-control" name="tel" value="{{$nhanVien->tel}}">
                {{-- @error('tel')
                  <span class="text-danger">{{$message}}</span>
                @enderror --}}
    </div>
    <button type="submit" class="btn btn-success">Edit</button>
    <a href="/" class="btn btn-success">Back</a>
    @csrf
</form>
</body>
</html>
