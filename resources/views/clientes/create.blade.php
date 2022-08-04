@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Optica Santa Lucia')

@section('content_header')
    <h1>Ingresar Cliente</h1>
@stop

@section('content')


<div class="container">
  <div class="card-body">
    <form method="POST" action="{{route('clientes.store')}}">
@csrf
<div class="mb-3">
<label for="" class"form-label">Codigo de la empresa</label>
<input id="Dias credito" name="Cod_empresa" type="text" class="form-control" placeholder="Codigo de la empresa">
</div>
<div class="mb-3">
<label for="" class"form-label">Codigo de persona</label>
<input id="Descripcion" name="Cod_persona" type="text" class="form-control" placeholder="Codigo de persona">
</div>
<div class="mb-3">
<label for="" class"form-label">Usuario que lo registra</label>
<input id="Descripcion" name="Usr_registro" type="text" class="form-control" placeholder="Usuario que lo registra">
</div>
<a href="/admin/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</div>
</form>

</div>
</div>
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
) </script>
@stop