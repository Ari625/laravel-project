@extends('layouts.sign')

@section('container')
   <main class="form-signin w-80 m-auto">
      <form>
      <h1 class="h3 mb-3 fw-normal text-center text-primary text-shadow">LOGIN</h1>
   
      <div class="form-floating">
         <input type="email" class="form-control form-control-sm" id="floatingInput" placeholder="name@example.com">
         <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating mt-1">
         <input type="password" class="form-control form-control-sm" id="floatingPassword" placeholder="Password">
         <label for="floatingPassword">Password</label>
      </div>
   
      <div class="checkbox mb-3">
         <label>
            <input type="checkbox" value="remember-me" class="mt-2"> Remember me
         </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
      </form>
   </main>
@endsection