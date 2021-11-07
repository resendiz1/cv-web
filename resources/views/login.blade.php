@extends('plantilla')

@section('contenido')
    <div class="container mt-5 bg-light">
        <div class="row d-flex justify-content-center mt-5 border-2 bg-white">
            
            <div class="col-8  text-center">
            </div>
            
            <div class="col-auto shadow-lg border-0 border-success p-5 ">
                <h2  class="font-weight-bold text-center">
                    Login
                </h2>
                <form action="#" method="POST">
                    @csrf
                    
                    <div class="form-group px-5">
                        <label for="" class="font-weight-bold h3">Email</label>
                        <input 
                            type="email" 
                            name="email" 
                            class="form-control bg-light shadow-sm border-0"
                            style="width: 400px" 
                            autofocus>
                            @error('email')
                                {{$message}}
                            @enderror
                    </div>

                    <div class="form-group px-5">
                        <label for="" class="font-weight-bold h3">Contraseña</label>
                        <input 
                            type="password" 
                            name="password" 
                            class="form-control bg-light shadow-sm border-0 ">
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