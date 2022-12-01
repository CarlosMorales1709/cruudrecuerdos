@extends('plantilla')

@section('contenido')

  

 <div class="container col-md-6 mb-5">
 <h1 class="display-1 mt-4 mb-4 text-center"> Eliminar Recuerdo </h1>


 <div class="card text-center mb-5">
 <div class="card-header">
   Eliminar Recuerdo
 </div>

   <div class="card-body">
    <h5 class="text-primary text center"> {{ $consultaId->fecha }} </h5>
    </div>
    
    <div class="card-body">
    <h5 class="card-title">{{ $consultaId->titulo }}</h5>
    <p class="card-text">{{ $consultaId->recuerdo }}</p>
    </div>

  
     
 <form action="{{ route('recuerdo.destroy', $consultaId->idRecuerdo) }}" method="post">
    @csrf
    @method('delete')
    <div class="card-footer">
    <button type="submit" class="btn btn-danger"> Eliminar </button>
    <a  href="{{route('recuerdo.index')}}" type="button" class="btn btn-warning" > Cancelar </a> 
    
     
    </div>
  
 </div>
    
</div>

