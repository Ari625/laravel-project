@extends('layouts.main-kuis')
@section('container')
<div class="position-relative">
   <div class="card position-absolute top-50 start-50 translate-middle-x border border-0" style="width: 60rem;">

      {{-- Progress --}}
      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60rem; height:5px;"> 
         <div class="progress-bar w-20" style="width: {{ $no_kuis }}0%"></div>
      </div>

   </div>
</div>

<main>
   <div class="position-relative">
      <div class="card mt-5 position-absolute top-50 start-50 translate-middle-x border border-0" style="width: 60rem;">

         <div class="card-header mb-3 rounded-2 border border-light-subtle text-left" style="height: 100px">
            <font class="mt-3 mb-2 fw-bolder">
               {{ $data_kuis[$no_kuis]['questions'] }}
            </font>
         </div>

         <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <font class="mt-3 mb-2">
               {{ $data_kuis[$no_kuis]['option_a'] }}
            </font>
         </div>

         <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <font class="mt-3 mb-2">
               {{ $data_kuis[$no_kuis]['option_b'] }}
            </font>
         </div>

         <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <font class="mt-3 mb-2">
               {{ $data_kuis[$no_kuis]['option_c'] }}
            </font>
         </div>

         <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <font class="mt-3 mb-2">
               {{ $data_kuis[$no_kuis]['option_d'] }}
            </font>
         </div>

         <div class="btn btn-primary">
            <a href="/kuis/{{ $no_kuis += 1 }}" class="btn ">Next</a>
         </div>
      </div>
   </div>
</main>
@endsection