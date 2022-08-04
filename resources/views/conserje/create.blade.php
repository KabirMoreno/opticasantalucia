@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Opticas Santa Lucia')

@section('content_header')
    <h1>Ingresar gestion conserje</h1>
@stop

@section('content')

<div class="container">
  <div class="card-body">
  <form method="POST" action="{{route('conserje.store')}}">
@csrf
<div class="mb-3">
<label for="" class"form-label">Codigo de gestion</label>
<input id="Tipo de credito" name="Cod_Gestion" type="text" class="form-control" placeholder="Codigo de gestion">
</div>
<div class="mb-3">
<label for="" class"form-label">Observacion</label>
<input id="Dias credito" name="Obs" type="text" class="form-control" placeholder="Observacion">
</div>
<div class="mb-3">
<label for="" class"form-label">Imagen</label>
<input id="Descripcion" name="Img" type="text" class="form-control" placeholder="Imagen">
</div>
<a href="/admin/conserje" class="btn btn-secondary" tabindex="5">Cancelar</a>
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