@extends('layouts.main-kuis')
@section('container')
<div class="position-relative">
   <div class="card position-absolute top-50 start-50 translate-middle-x border border-0" style="width: 60rem;">

      {{-- Progress --}}
      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60rem; height:5px;"> 
         <div class="progress-bar w-20" style="width: 20%"></div>
      </div>

   </div>
</div>

{{-- $questions = DB::table('kuis' => 'questions'); --}}

<main>
   <div class="position-relative">
      <div class="card mt-5 position-absolute top-50 start-50 translate-middle-x border border-0" style="width: 60rem;">

@foreach ($data as $kuis)
         {{-- Question --}}
         <div class="card-header mb-3 rounded-2 border border-light-subtle bg-white" style="height: 100px" >
            <font class="mt-3 mb-2 fw-bolder">
               {{ $kuis['questions'] }}
            </font>
         </div>

         {{-- options --}}

         {{-- option A --}}
         <a href="#" role="button" class="btn">
         <div class="card-header mb-3 rounded-2 border border-light-subtle text-left" >
            <font class="mt-3 mb-2 " style="text-align: left" align="left">
               {{ $kuis['option_a'] }}
            </font>
         </div>
         </a>

          {{-- option B --}}
         <a href="#" role="button" class="btn ">
         <div class="card-header mb-3 rounded-2 border border-light-subtle text-left" >
            <font class="mt-3 mb-2" style="text-align: left" align="left">
              {{ $kuis['option_b'] }}
            </font>
         </div>
         </a>

          {{-- option C --}}
         <a href="#" role="button" class="btn">
         <div class="card-header mb-3 rounded-2 border border-light-subtle text-left" >
            <font class="mt-3 mb-2" style="text-align: left" align="left">
               {{ $kuis['option_c'] }}
            </font>
         </div>
         </a>

          {{-- option D --}}
         <a href="#" role="button" class="btn">
         <div class="card-header mb-3 rounded-2 border border-light-subtle text-left" >
            <font class="mt-3 mb-2" style="text-align: left" align="left">
               {{ $kuis['option_d'] }}
            </font>
         </div>
         </a>
@endforeach         
      </div>
   </div>
</main>
@endsection