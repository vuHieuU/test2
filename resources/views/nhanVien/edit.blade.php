@extends('welcome')
@section('content')
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
@endsection