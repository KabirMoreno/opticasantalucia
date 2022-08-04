@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Opticas Santa Lucia')

@section('content_header')
    <h1>Hospital Clinicas y Opticas Santa Lucia</h1>
@stop

@section('content')
    @foreach ($respuesta as $respuesta)
     <form method="POST" action="{{ route('creditos.update',$respuesta["Cod_credito"]) }}">

@csrf
@method('PUT')


    <div class="mb-3">
<label for="" class"form-label">Interes</label>
<input id="Interes" name="Tip_credito" type="text" class="form-control" placeholder="Interes" value="{{ $respuesta["Tip_credito"] }}" >
</div>
<div class="mb-3">
<label for="" class"form-label">Subtotal</label>
<input id="Subtotal"  name="Dia_credito" type="text" class="form-control" placeholder="Subtotal" value="{{ $respuesta["Dia_credito"] }}">
</div>
<div class="mb-3">
<label for="" class"form-label">Total</label>
<input id="Total"  name="Descr" type="text" class="form-control" placeholder="Total" value="{{$respuesta["Descr"] }}" >
</div>

<a href="/admin/creditos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</div>
</form>
@endforeach
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop