@extends('layouts.app')

@section('content')

<div class="border rounded container margenContacto">
    <div class="row my-3">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Perfil</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#carrito" data-toggle="tab" class="nav-link">Carrito</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Editar Perfil</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">Perfil</h5>
                    <div class="row">
                        <div class="col-md-6">
                            
                            <h6 class="subtitle">Nombre:
                                {{ Auth::user()->name }}</h6> 
                            
                            <h6 class="subtitle">Email:
                                {{ Auth::user()->email}}</h6> 
                        </div>
                        <div class="col-md-12">
                            <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span>Últimas
                                compras</h5>
                            <table class="table table-sm table-hover table-striped">
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>Vans</strong>Zapatillas super flamas<strong>$ 2.400</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Vans</strong>Zapatillas super flamas<strong>$ 2.400</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Vans</strong>Zapatillas super flamas<strong>$ 2.400</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="logout">
                    <a  href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                <button type="button" class="btn btn-outline-dark mt-3">Cerrar sesion</button></a>
            </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <img src="img/perfil.jpg" style="border-radius: 50%; width: 150px; height: 150px;" class="mx-auto img-fluid img-circle d-block" alt="avatar">
            <label class="custom-file">
                <input type="file" id="file" class="custom-file-input">
                <button class="btn"><span class="custom-file-control">Elegir foto</span></button>
            </label>
        </div>
    </div>


</div>

   @endsection