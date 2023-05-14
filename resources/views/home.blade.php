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
          </tr>
        </thead>
        <tbody>
        @foreach ($trains as $train)
          <tr class="{{$train->cancellato == true ? ' cancelled' : ''}}">
            <td>{{$train->azienda}}</td>
            <td>{{$train->stazione_partenza}}</td>
            <td>{{$train->stazione_arrivo}}</td>
            <td>{{$train->data_partenza}}</td>
            <td>{{$train->cancellato == true ? 'cancellato' : $train->orario_partenza}}</td>
            <td>{{$train->cancellato == true ? 'cancellato' : $train->orario_arrivo}}</td>
            <td>{{$train->cancellato == true ? 'cancellato' : $train->codice_treno}}</td>
            @if ($train->cancellato == true)
            <td>{{$train->in_orario = 'cancellato'}}</td>
            @else
            <td>{{$train->in_orario ? 'in orario' : 'in ritardo'}}</td>
            @endif
          </tr>
        @endforeach
        </tbody>
      </table>
            
</div>
@endsection