@extends('plantilla')
@section('contenido')

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-5">
                <div class="card">
                    <div class="card-header font-weight-bold text-center h4 bg-default text-white">AGREGAR ICONO</div>
                    <div class="card-body">
                    <form action="{{route('iconos.store')}}" method="POST">
                        @csrf    
                
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        name="nombre">
                                </div>
            
                                <div class="form-group">
                                    <label for="icono"><i class='fas fa-icons mr-2'></i>Inserta tu icono aqui</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="icono" 
                                        name="icono" 
                                        placeholder="Insert your icon here ->">
                                </div>

                                <div class="form-group text-center h1" id="area">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success btn-sm btn-block" type="submit">ADD</button>
                                </div>
            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


@endsection