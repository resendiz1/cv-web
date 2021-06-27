@extends('plantilla')
@section('contenido')

<div class="container-fluid">

    <div class="row d-flex justify-content-around mt-5 border p-5">
        <div class="col-12 text-center mb-4">
              <h3 class="font-weight-bold">Mensajes recibidos</h3>  
        </div>
        @forelse ($mensajes as $mensajeItem)
            <div class="col-lg-3 col-md-6 col-sm-12 bg-white shadow p-4 text-center">
                
                <h3 class="font-weight-bold">
                    {{$mensajeItem->nombre}}
                </h3>
                
                <p>
                    {{$mensajeItem->mensaje}}
                </p>

                <strong>
                    {{$mensajeItem->correo}}
                </strong> <br>
                <small >
                    {{$mensajeItem->created_at->diffForHumans()}}
                </small>
            </div>       
        @empty
        <h3>Cero mensaje compa</h3>
        @endforelse    
    </div>
    
</div>

@endsection








