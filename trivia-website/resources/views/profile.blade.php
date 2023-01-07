@extends('layouts.main')

@section('container')

   <div align="center" class="text-uppercase ">
      <h2 class="text-primary text-bolder">profile</h2>
   </div>

<div class="position-relative">
   <div class="card mt-5 position-absolute top-50 start-50 translate-middle-x border border-0" style="width: 60rem;"> 
      <div class="card-header rounded-2 mb-2 mt-3 border border-light-subtle">
         <font class="mt-3 mb-2" size="4"> {{ auth()->user()->username }}</font>
      </div> 

      {{-- <div class="position-relative"> --}}
         <div align="center" class="container px-4 text-center mt-3 mb-2">
            <div class="row gx-5">
               <div class="col">
                  <div class="p-3 border border-light-subtle rounded-2">
                     <h6 class="text-info fw-bolder">Questions has been answered</h6>
                     <h6>.</h6>
                     <h6>.</h6>
                     <h6>.</h6>
                     <h6>.</h6>
                  </div>
               </div>
               <div class="col">
                  <div class="p-3 border border-light-subtle rounded-2">
                     <h6 class="text-info fw-bolder">Percentage questions answered correctly</h6>
                     <h6>.</h6>
                     <h6>.</h6>
                     <h6>.</h6>
                     <h6>.</h6>
                  </div>
               </div>
            </div>
         </div>
      {{-- </div> --}}

      <div class="card-footer rounded-2 mb-2 mt-3 border border-light-subtle">
         <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn">
               Logout
            </button>
         </form>
      </div>
   </div>
</div>

{{-- <div class="container px-4 text-center">
   <div class="row gx-5">
      <div class="col-2">
         <div class="p-3 border border-light-subtle rounded-2">gutter</div>
      </div>
      <div class="col-2">
         <div class="p-3 border border-light-subtle rounded-2">gutter</div>
      </div>
   </div>
</div> --}}
@endsection