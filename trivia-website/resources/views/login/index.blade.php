@extends('layouts.sign')

@section('container')
   <div class="row justify-content-center">
   <div class="col-md-4">

   @if(session()->has('succses'))
   <div class="alert alert-succses alert-dismissible fade show" role="alert">
      {{ session('succses') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      </button>
   </div>
   @endif
   @if(session()->has('LoginError'))
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      </button>
   </div>
   @endif

   <main class="form-signin">
      <form action="/login" method="post">
         @csrf
      <h1 class="h3 mb-3 fw-normal text-center text-primary text-shadow">LOGIN</h1>
   
      <div class="form-floating">
         <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" autofocus required >
         <label for="email">Email address</label>
         @error('email')
         <div class="invalid-feedback">
            {{ $message }}
         </div>
         @enderror
      </div>
      <div class="form-floating mt-1">
         <input type="password" class="form-control form-control-sm" id="password" placeholder="Password" name="password" required value="{{ old('email') }}">
         <label for="password">Password</label>
      </div>
   
      <div class="checkbox mb-3">
         <label>
            <input type="checkbox" value="remember-me" class="mt-2"> Remember me
         </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      <h6 class="text-center mt-2">
         <a href="/register" >No have account? Register</a>
      </h6>
      <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
      </form>
   </main>
   </div>
   </div>
@endsection