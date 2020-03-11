@extends('layouts.app')

@section('content')
<div class="container margenContacto border rounded">
<h5 class="my-3">Contacto</h5>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Nombre">Nombre</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Ingrese su nombre">
                </div>
                <div class="form-group col-md-6">
                    <label for="Apellido">Apellido</label>
                    <input type="text" class="form-control" id="inputddress" placeholder="Ingrese su apellido">
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Email</label>
                            <input  type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputCity">Mensaje</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-outline-dark" style="margin: 0 auto;">Enviar</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://previews.123rf.com/images/antonbrand/antonbrand1111/antonbrand111100010/11271467-ilustraci%C3%B3n-de-dinamita-con-cron%C3%B3metro-aislado.jpg" class="d-block w-50" alt="Aceptamos todas las tarjetas">
                                    <div class="carousel-caption d-none d-md-block">                                        
                                    </div>
                                </div>                           
                            </div>                            
                       </div>
                    </div>
                </div>
            </div>
</div>

@endsection