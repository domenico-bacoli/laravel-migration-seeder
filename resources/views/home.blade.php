@extends('layouts/main')

@section('content')
<div class="card">
    @foreach ($trains as $train)
        
    <div class="card-details">
      <h5 class="card-title">Azienda: {{$train->azienda}}</h5>
      <h6 class="card-subtitle">Stazione di partenza: {{$train->stazione_partenza}}</h6>
      <div class="card-text">Stazione di arrivo: {{$train->stazione_arrivo}}</div>
      <div class="card-text">Data di partenza: {{$train->data_partenza}}</div>
      <div class="card-text">Orario di partenza: {{$train->orario_partenza}}</div>
      <div class="card-text">Orario di arrivo: {{$train->orario_arrivo}}</div>
      <div class="card-text">Codice Treno: {{$train->codice_treno}}</div>
      <div class="card-text">In orario: {{$train->in_orario ? 'Si' : 'No'}}</div>
      <div class="card-text">Cancellato: {{$train->cancellato ? 'Si' : 'No'}}</div>

    </div>
    @endforeach
</div>
@endsection