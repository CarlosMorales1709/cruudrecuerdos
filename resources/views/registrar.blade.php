@extends('plantilla')

@section('contenido')

      @if (session()->has('confirmacion'))

      {!!" <script>  Swal.fire(
        'Correcto',
        'Tu recuerdo se Guardo',
        )  </script>"!!}

      @endif


        <div class="container mt-5 col-md-7">

            <h1 class="display-2 text-center mb-5"> Registrar Recuerdo</h1>

            
            @if ($errors->any())

            @foreach ($errors->all() as $error)
                            
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong> {{$error}} </strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endforeach
            @endif

            <div class="card text-center mb-5">
                <div class="card-header">
                  Querido Diario !!!
                </div>
                <div class="card-body">

                    <form class="m-4" method="POST" action="{{route('recuerdo.store')}}">
                        @csrf
                        
                        <input type="text" class="form-control mb-3" name="txttitulo"  value="{{old('txttitulo')}}" placeholder="Titulo">
                        <p class="text-danger fst-italic">{{$errors->first('txttitulo')}}</p>

                        <input type="text" class="form-control mb-3" name="txtrecuerdo" value="{{old('txtrecuerdo')}}"placeholder="Recuerdo">
                        <p class="text-danger fst-italic">{{$errors->first('txtrecuerdo')}}</p>
      
                        

                </div>
                <div class="card-footer">

                    <button type="submit" class="btn btn-outline-secondary m-1"> Guardar Recuerdo </button>

                    </form>
             
                </div>
              </div>

                           

        </div>
@endsection