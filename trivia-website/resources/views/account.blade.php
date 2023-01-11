@extends('layouts.sign')

@section('container')
<div class="container">

   <div align="center">
      <h2 class="text-primary fw-bolder">ACCOUNT</h2>
   </div>

   <a href="/settings" class="btn text-grey">
      <h4>
         <i class="bi bi-arrow-left-short">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="26" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
            </svg>
         </i> 
      Back
      </h4>
   </a>

   <div class="position-relative">
      <div class="card mt-5 position-absolute top-50 start-50 translate-middle-x border border-0" style="width: 60rem;"> 
         <div class="card-header rounded-2 mb-2 mt-3 border border-light-subtle">
            {{ auth()->user()->name }}
         </div>
         <div class="card-header rounded-2 mb-2 mt-3 border border-light-subtle">
            {{ auth()->user()->username }}
         </div>
         <div class="card-header rounded-2 mb-2 mt-3 border border-light-subtle">
            {{ auth()->user()->email }}
         </div>
      </div>
   </div>
</div>
@endsection