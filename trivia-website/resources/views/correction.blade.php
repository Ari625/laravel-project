@extends('layouts.sign')
@section('container')

    <div class="mt-3 mb-2">
      
      @if(session('correct'))
      <div class="card text-center alert alert-succses alert-dismissible fade show bg-green" role="alert" style = "width: 60rem; height: 6rem;">
         <font class="mb-3 mt-2 text-green">
            {{ session('correct') }}
         </font>
      </div>
      <div class="btn card btn-white mb-2 mt-3">
         <a href="/kuis/{{ $no_kuis += 1 }}" 
         class="btn text-black">
         @if($no_kuis >= 9)FINISH @else NEXT @endif
         </a>
   </div>
      @endif

      @if(session('wrong'))
      <div class="text-center alert alert-danger alert-dismissible fade show" role="alert" style = "width: 60rem; height: 6rem;">
         <font class="mb-3 mt-2">
            {{ session('wrong') }}
         </font>
      </div>
      <div class="btn card btn-white mb-2 mt-3">
         <a href="/kuis/{{ $no_kuis += 1 }}" 
         class="btn text-black">
         @if($no_kuis >= 9)FINISH @else NEXT @endif
         </a>
   </div>
      @endif

      
    </div>
@endsection
{{-- @if($no_kuis >= 9)finish @else{{ $no_kuis += 1 }} @endif --}}