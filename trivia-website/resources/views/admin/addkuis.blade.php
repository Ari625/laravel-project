@extends('layouts.main-kuis')
@section('container')
@if(session()->has('input_succses'))
   <div class="alert alert-succses alert-dismissible fade show" role="alert">
      {{ session('input_succses') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      </button>
   </div>
   @endif
<div class="row justify-content-center">
   <div class="col-md-6">
 <main class="form-signin w-80 ">
 <h2 class="text-center text-uppercase text-primary">Add Kuis</h2>
 <form class="row g-3" action="/addkuis" method="post">
   @csrf
    <div class="col-md-6">
      <label for="questions" class="form-label @error('questions') is-invalid @enderror">Questions</label>
      <input type="text" class="form-control" id="questions" name="questions" required value="{{ old('questions') }}">
       @error('questions')
      <div class="invalid-feedback">
       {{ $message }}
      </div>
      @enderror
    </div>
    <div class="col-md-6">
      <label for="answer" class="form-label" @error('answer') is-invalid @enderror>Answer</label>
      <input type="text" class="form-control" id="answer" name="answer" required value="{{ old('answer') }}">
      @error('answer')
      <div class="invalid-feedback">
       {{ $message }}
      </div>
      @enderror
    </div>
    <div class="col-md-6">
      <label for="option_a" class="form-label" @error('option_a') is-invalid @enderror>option_a</label>
      <input type="text" class="form-control" id="option_a" name="option_a" required value="{{ old('option_a') }}">
      @error('option_a')
      <div class="invalid-feedback">
       {{ $message }}
      </div>
      @enderror
    </div>
    <div class="col-md-6">
      <label for="option_b" class="form-label" @error('option_b') is-invalid @enderror>option_b</label>
      <input type="text" class="form-control" id="option_b" name="option_b" required>
      @error('option_b')
      <div class="invalid-feedback">
       {{ $message }}
      </div>
      @enderror
    </div>
    <div class="col-md-6">
      <label for="option_c" class="form-label" @error('option_c') is-invalid @enderror>option_c</label>
      <input type="text" class="form-control" id="option_c" name="option_c" required value="{{ old('option_c') }}">
      @error('option_c')
      <div class="invalid-feedback">
       {{ $message }}
      </div>
      @enderror
    </div>
    <div class="col-md-6">
      <label for="option_d" class="form-label" @error('option_d') is-invalid @enderror>option_d</label>
      <input type="text" class="form-control" id="option_d" name="option_d" required>
      @error('option_d')
      <div class="invalid-feedback">
       {{ $message }}
      </div>
      @enderror
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary form-signin" style="width: 42rem">Add</button>
    </div>
  </form>
@endsection