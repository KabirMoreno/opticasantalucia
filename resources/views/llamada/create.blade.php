@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Opticas Santa Lucia')

@section('content_header')
    <h1>Ingresar Nueva Llamada</h1>
@stop

@section('content')

<div class="container">
  <div class="card-body">
  <form method="POST" action="{{route('llamada.store')}}">
@csrf
<div class="mb-3">
<label for="" class"form-label">Tipo de credito</label>
<input id="Tipo de credito" name="Cod_Gestion" type="text" class="form-control" placeholder="Codigo Gestion">
</div>
<div class="mb-3">
<label for="" class"form-label">Dias del credito</label>
<input id="Dias credito" name="Fec_Llamada" type="text" class="form-control" placeholder="Fecha de llamada">
</div>
<div class="mb-3">
<label for="" class"form-label">Descripcion</label>
<input id="Descripcion" name="Fec_Proxima" type="text" class="form-control" placeholder="Fecha proxima">
</div>
<div class="mb-3">
<label for="" class"form-label">Descripcion</label>
<input id="Descripcion" name="Col" type="text" class="form-control" placeholder="Colaborador">
</div>
<div class="mb-3">
<label for="" class"form-label">Descripcion</label>
<input id="Descripcion" name="Com" type="text" class="form-control" placeholder="Comentarios">
</div>
<a href="/admin/llamada" class="btn btn-secondary" tabindex="5">Cancelar</a>
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
    <script> console.log('Hi!'); </script>
@stop