@extends('layouts.main')
@section('container')
    
<div class="card rounded-3 shadow-sm p-3 mb-3 bg-body-tertiary rounded border border-2" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title text-uppercase">Kuis harian</h5>
    <h6 class="card-subtitle  text-muted mt-3">Jumlah Pertanyaan</h6>
    <h6 class="card-subtitle  text-muted">Poin</h6>
      <a href="/kuis" class="card-link btn btn-primary mt-4 fw-bolder" role="button" align="right">Mulai</a>
  </div>
</div>

    <div class="text-primary">
      <div class="card rounded-3 shadow-sm p-3 mb-3 bg-body-tertiary rounded border border-2 " style="width: 25rem;">
        <a href="/addkuis" class="card-link btn btn-primary fw-bolder" role="button" align="right">Tambah Kuis</a>
      </div>
    </div>

@endsection