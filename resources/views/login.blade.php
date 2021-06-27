@extends('plantilla')

@section('contenido')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center mt-5">
            
            <div class="col-8  text-center">
                <h2  class="font-weight-bold">Login</h2>
                    
            </div>
            
            <div class="col-8 shadow-sm p-5">
                <form action="#" method="POST">
                    @csrf
                    
                    <div class="form-group px-5">
                        <label for="" class="font-weight-bold">Usuario</label>
                        <input 
                            type="text" 
                            name="email" 
                            class="form-control bg-light p-4 shadow-sm border-0 form-control-lg" 
                            autofocus>
                    </div>

                    <div class="form-group px-5">
                        <label for="" class="font-weight-bold">Contraseña</label>
                        <input 
                            type="password" 
                            name="password" 
                            class="form-control bg-light p-4 shadow-sm border-0 form-control-lg">
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-success">
                            <i class="fa fa-door-open fa-2x"></i>
                        </button>
                    </div>
                
                </form>
            </div>
        </div>
    </div>
@endsection