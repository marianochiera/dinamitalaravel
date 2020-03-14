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
            <form action="{{ route('perfil.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="avatar" class="col-md-4 col-form-label text-md-right">avatar</label>

                <div class="col-md-6">
                    <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar"
                        value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>

                    @error('avatar')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            agregar avatar
                        </button>
                    </div>
                </div>
            
            
            </form>
        </div>
    </div>


</div>

   @endsection