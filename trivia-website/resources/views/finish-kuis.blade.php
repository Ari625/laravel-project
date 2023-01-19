@extends('layouts.sign')
@section('container')
<div class="position-relative">
   <div class="card position-absolute top-50 start-50 translate-middle-x border border-0 mt-4" style="width: 60rem;">

   <h3 class="text-center mb-3 mt-2">Kuis Completed</h3>
   {{-- <h5 class="text-center mb-3 mt-2">Congratulation</h5> --}}
   <h5 class="text-center mb-3 mt-4">You Got </h5>
   <h2 class="text-primary fw-bolder text-center mb-3 mt-2">{{ $poin_user }} Points</h2>
      <a href="/" class="btn btn-white mb-3 mt-2">Back</a>

   </div>
</div>

@endsection