@extends('layouts.sign')
@section('container')

<div class="row justify-content-center">
  <div class="col-md-4">
<main class="form-signin w-80 ">
<h2 class="text-center text-uppercase">registration</h2>
<form class="row g-3" action="/register" method="post">
  @csrf
   <div class="col-md-6">
     <label for="name" class="form-label @error('name') is-invalid @enderror">Name</label>
     <input type="name" class="form-control" id="name" name="name" required value="{{ old('name') }}">
      @error('name')
     <div class="invalid-feedback">
      {{ $message }}
     </div>
     @enderror
   </div>
   <div class="col-md-6">
     <label for="username" class="form-label" @error('username') is-invalid @enderror>Username</label>
     <input type="name" class="form-control" id="username" name="username" required value="{{ old('username') }}">
     @error('username')
     <div class="invalid-feedback">
      {{ $message }}
     </div>
     @enderror
   </div>
   <div class="col-md-6">
     <label for="email" class="form-label" @error('email') is-invalid @enderror>Email</label>
     <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
     @error('email')
     <div class="invalid-feedback">
      {{ $message }}
     </div>
     @enderror
   </div>
   <div class="col-md-6">
     <label for="password" class="form-label" @error('password') is-invalid @enderror>Password</label>
     <input type="password" class="form-control" id="password" name="password" required>
     @error('password')
     <div class="invalid-feedback">
      {{ $message }}
     </div>
     @enderror
   </div>
   {{-- <div class="col-md-6">
      <label for="password2" class="form-label" @error('password2') is-invalid @enderror>Password Confirmation</label>
      <input type="password" class="form-control" id="password2" name="password2" required>
      @error('password2')
     <div class="invalid-feedback">
      {{ $message }}
     </div>
     @enderror
    </div> --}}
   <div class="col-12">
     <button type="submit" class="btn btn-primary form-signin">Register</button>
   </div>
 </form>
 <h6 class="mt-3 ">Already registered? 
  <a href="/login" class="text">Login</a>
</h6>
</main>
  </div>
</div>
@endsection