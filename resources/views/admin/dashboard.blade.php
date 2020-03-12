@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="border rounded offset-lg-0 border rounded col-12 col-lg-4">
            <div class="my-3">
                <div class="card-header">{{ __('Panel de Administrador') }}
                </div>

                <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <span class="subtitle">Hola:
                                {{ Auth::user()->name }}</span> 
                                <div class="email">
                                    Email: {{ Auth::user()->email }}
                                </div>
                                <div class="logout">
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection