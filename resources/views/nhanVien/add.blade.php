@extends('welcome')
@section('content')
<h3 class="mb-3">Đăng kí nhân viên mới</h3>
             
        <form action="/add" method="post" >
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
                <input type="text" class="form-control" name="name">
              
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="text" class="form-control" name="email">
                
            </div>
            <div class="mb-3">
                <label class="form-label">tel</label>
                <input type="text" class="form-control" name="tel">
              
            </div>
            <button type="submit" class="btn btn-success">Register</button>
            <a href="/" class="btn btn-success">Back</a>
            @csrf
        </form>
        @endsection