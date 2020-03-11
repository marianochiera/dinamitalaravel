@extends('layouts.app')

@section('content')


<div class="border rounded container margenContacto">
    <h5 class="my-3">
      Preguntas frecuentes sobre nuestros productos
    </h5>
    <p>
      <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseExample"
        aria-expanded="false" aria-controls="collapseExample">
        ¿Son productos originales?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample">
      <div class="card card-body">
        Son productos originales de excelente calidad
      </div>
    </div>
    <p>

      <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseExample2"
        aria-expanded="false" aria-controls="collapseExample2">
        ¿Cuanto demora el producto para llegar a mi casa?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample2">
      <div class="card card-body">
        Tiene una demora de 15-20 dias hábiles una vez realizada la compra
      </div>
    </div>
    <p>
      <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseExample3"
        aria-expanded="false" aria-controls="collapseExample3">
        ¿Desde donde los envian?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample3">
      <div class="card card-body">
        Desde EstadosUnidos
      </div>
    </div>
    <p>

      <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseExample4"
        aria-expanded="false" aria-controls="collapseExample4">
        ¿Tienen Stock?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample4">
      <div class="card card-body">
        Tenemos Stock de todos nuestros productos publicados
      </div>
    </div>
    <p>

      <button class="btn btn-outline-dark type="button" data-toggle="collapse" data-target="#collapseExample5"
        aria-expanded="false" aria-controls="collapseExample5">
        ¿Tienen cambio por falla del producto?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample5">
      <div class="card card-body">
        Cambio directo por 30 dias habiles
      </div>
    </div>
    <p>

      <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseExample6"
        aria-expanded="false" aria-controls="collapseExample6">
        ¿Aceptan cualquier tipo de tarjetas de credito o debito?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample6">
      <div class="card card-body">
        Todos los tipos de tarjetas , menos Naranja VISA
      </div>
    </div>
    <p>

      <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseExample7"
        aria-expanded="false" aria-controls="collapseExample7">
        ¿Que talles tienen?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample7">
      <div class="card card-body">
        Los publicados
      </div>
    </div>
    <p>

      <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseExample8"
        aria-expanded="false" aria-controls="collapseExample8">
        ¿Cuanto demora el producto para llegar a mi casa?
      </button>
    </p>
    <div class="collapse my-3" id="collapseExample8">
      <div class="card card-body">
        Tiene una demora de 15-20 dias hábiles una vez realizada la compra
      </div>
    </div>

    <form>
      <h5>
          Ayudanos a mejorar , Dejanos tu consulta.
      </h5>
        <div class="form-group">
          <label for="exampleFormControlInput1">Correo electronico</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@hotmail.com">
        </div>
        
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Tu consulta</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
        </div>
      </form>
      <button type="submit" class="btn btn-outline-dark mb-3">Enviar</button>

  </div>

@endsection