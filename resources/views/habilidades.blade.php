@extends('plantilla')

@section('contenido')
<div class="container">
    <div class="row d-flex justify-content-center mt-3">
        <div class="col-6">
            <div class="card ">
                <div class="card-header bg-primary text-white text-center font-weight-bold h4">Agregar Skills</div>
                <div class="card-body">
                <form action="{{route('habilidades.store')}}" method="POST" >
                    @csrf
                        
                            <div class="form-group">
                                <label for="">Titulo</label>
                                <input 
                                    type="text" 
                                    name="nombre" 
                                    class="form-control bg-light border-0 p-4 font-weight-bold shadow-sm"
                                    autofocus    >
                            </div>
                        
                        
                            <div class="form-group">
                                <label for="">Color de fondo</label>
                                <input type="color" name="color" class="form-control">
                            </div>
                        
                        
                            <div class="form-group">
                                <label>Icono</label>
                                <select class="browser-default custom-select mb-4" id="select" name="icono" required>
                                    @forelse ($iconos as $iconoItem)
                                        <option 
                                            value="{{$iconoItem->icono}}">{{$iconoItem->nombre}}
                                        </option>
                                    @empty
                                    <option value="">vacio</option>  
                                    @endforelse                       
                                </select>
                            </div>
                            <div class="form-group text-center h1 font-weight-bold" id="previa_icono">

                            </div>
                        
                        
                           <div class="form-group">
                            <button class="btn btn-success btn-block btn-sm" type="submit"><h6>Guardar</h6></button>
                           </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection