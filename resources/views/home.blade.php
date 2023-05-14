@extends('layouts/main')

@section('content')
<div class="container-fluid">
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Data di partenza</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Codice Treno</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($trains as $train)
            <td>{{$train->azienda}}</td>
            <td>{{$train->stazione_partenza}}</td>
            <td>{{$train->stazione_arrivo}}</td>
            <td>{{$train->data_partenza}}</td>
            <td>{{$train->orario_partenza}}</td>
            <td>{{$train->orario_arrivo}}</td>
            <td>{{$train->codice_treno}}</td>
            <td>{{$train->in_orario ? 'Si' : 'No'}}</td>
            <td>{{$train->cancellato ? 'Si' : 'No'}}</td>
          </tr>
            @endforeach
        </tbody>
      </table>
            
</div>
@endsection