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

         <form action="/kuis" method="post">
            @csrf
            <input type="text" value="{{ $no_kuis }}" >

            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left" style="height: 100px">
               <font class="mt-3 mb-2 fw-bolder">
                  {{ $data_kuis[$no_kuis]['questions'] }}
               </font>
            </div>

            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <input type="radio" value="{{ $data_kuis[$no_kuis]['option_a'] }}" name="answer_user" id="a" required>
            <label for="a">{{ $data_kuis[$no_kuis]['option_a'] }}</label>
            </div>

            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <input type="radio" value="{{ $data_kuis[$no_kuis]['option_b'] }}" name="answer_user" id="b" required>
            <label for="b">{{ $data_kuis[$no_kuis]['option_b'] }}</label>
            </div>
            
            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <input type="radio" value="{{ $data_kuis[$no_kuis]['option_c'] }}" name="answer_user" id="c"  required>
            <label for="c">{{ $data_kuis[$no_kuis]['option_c'] }}</label>
            </div>

            <div class="card-header mb-3 rounded-2 border border-light-subtle text-left">
            <input type="radio" value="{{ $data_kuis[$no_kuis]['option_d'] }}" name="answer_user" id="d" required>
            <label for="d">{{ $data_kuis[$no_kuis]['option_d'] }}</label>
            </div>

            <div class="btn btn-primary mb-2 mt-3">
                  <button class="btn btn-primary text-white" type="submit" style="width: 58rem;">Answer</button>
            </div>

         </form>
      <div class="btn btn-white mb-2 mt-3">
            <a href="/kuis/@if($no_kuis > 9)finish @else{{ $no_kuis += 1 }}
            @endif
            " 
            class="btn text-black">
               Next
            </a>
      </div>

      </div>
   </div>
</main>
@endsection