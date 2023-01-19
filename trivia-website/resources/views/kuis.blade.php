@extends('layouts.main-kuis')
@section('container')
<div class="position-relative">
   <div class="card position-absolute top-50 start-50 translate-middle-x border border-0" style="width: 60rem;">

      {{-- Progress --}}
      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60rem; height:5px;"> 
         <div class="progress-bar w-20" style="width: {{ $no_kuis  }}0%"></div>
      </div>

   </div>
</div>

<main>
   <div class="position-relative">
      <div class="card mt-5 position-absolute top-50 start-50 translate-middle-x border border-0" style="width: 60rem;">

         <form action="/kuis" method="POST">
            @csrf
            <input type="hidden" value="{{ $no_kuis }}" name="no_kuis">
            <input type="hidden" value="{{ $data_kuis[$no_kuis]['answer'] }}" name="answer">

            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left" style="height: 100px">
               <font class="mt-3 mb-2 fw-bolder">
                  {{ $data_kuis[$no_kuis]['questions'] }}
               </font>
            </div>

            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <input type="submit" value="{{ $data_kuis[$no_kuis]['option_a'] }}" name="answer_user" id="a" class="btn">
            </div>

            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <input type="submit" value="{{ $data_kuis[$no_kuis]['option_b'] }}" name="answer_user" id="b" class="btn">
            </div>
            
            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <input type="submit" value="{{ $data_kuis[$no_kuis]['option_c'] }}" name="answer_user" id="c" class="btn">
            </div>

            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <input type="submit" value="{{ $data_kuis[$no_kuis]['option_d'] }}" name="answer_user" id="d" class="btn">
            </div>

         </form>

         @if(session('correct'))
         <div class="card">
         <div class="card text-center alert alert-succses alert-dismissible fade show bg-green" role="alert" style = "width: 60rem; height: 6rem;">
            <font class="mb-3 mt-2 text-green">
               {{ session('correct') }}
            </font>
         </div>
         <div class="btn card btn-white mb-2 mt-3">
            <a href="/kuis/@if($no_kuis >= 9)finish @else{{ $no_kuis += 1 }} @endif" 
            class="btn text-black">
            @if($no_kuis > 9)FINISH @else NEXT @endif
            </a>
      </div>
         </div>
         @endif
   
         @if(session('wrong'))
         <div class="card">
         <div class="text-center alert alert-danger alert-dismissible fade show" role="alert" style = "width: 60rem; height: 6rem;">
            <font class="mb-3 mt-2">
               {{ session('wrong') }}
            </font>
         </div>
         <div class="btn card btn-white mb-2 mt-3">
            <a href="/kuis/@if($no_kuis >= 9)finish @else{{ $no_kuis += 1 }} @endif" 
            class="btn text-black">
            @if($no_kuis >= 9)FINISH @else NEXT @endif
            </a>
      </div>
   </div>
         @endif

      </div>
   </div>
</main>
@endsection

{{-- @if($no_kuis < 1) {{ auth()->user()->poin }} @else{{ $poin_user }} @endif  --}}