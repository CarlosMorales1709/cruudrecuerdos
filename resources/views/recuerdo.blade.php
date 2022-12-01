@extends('plantilla')

@section('contenido')


@if (session()->has('actualizado'))

{!!" <script>  Swal.fire(
  'Correcto',
  'Tu recuerdo se actualizo',
  ) </script>"!!}

 @endif
 
 @if (session()->has('eliminado'))

   {!!" <script>  Swal.fire(
    'Correcto',
    'Tu recuerdo se elimino',
    ) </script>"!!}

   @endif



    <h1 class="display-1 mt-4 mb-4 text-center"> Recuerdo </h1>

    @foreach ($consultarec as $consulta)

<div class="container col-md-6 mb-5">
      
      

 <div class="card text-center">

    <div class="card-header">
    <h5 class="card-title">{{ $consulta->fecha }} </h5>
    </div>

     <div class="card-body">
    <h5 class="card-title"> {{ $consulta->titulo }} </h5>
    <p class="card-text"> {{ $consulta->recuerdo }} </p>
    </div>

  
     <div class="card-footer text-muted">
     <a href="{{route('recuerdo.edit',$consulta->idRecuerdo)}}" class="btn btn-success">Actualizar </a> 
     <a href="{{route('recuerdo.show',$consulta->idRecuerdo)}}" class="btn btn-danger">Eliminar </a> 
    </div>
 </div>
    
</div>



    @endforeach
@endsection