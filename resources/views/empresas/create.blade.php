@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Optica Santa Lucia')

@section('content_header')
    <h1>Ingresar empresa</h1>
@stop

@section('content')

<div class="container">
  <div class="card-body">
   <form method="POST" action="{{route('empresas.store')}}">
@csrf
<div class="mb-3">
<label for="" class"form-label">Nombre</label>
<input id="Dias credito" name="Nom_empresa" type="text" class="form-control" placeholder="Nombre">
</div>
<div class="mb-3">
<label for="" class"form-label">Telefono</label>
<input id="Descripcion" name="Tel_empresa" type="text" class="form-control" placeholder="Telefono">
</div>
<div class="mb-3">
<label for="" class"form-label">Direccion</label>
<input id="Descripcion" name="Dir_empresa" type="text" class="form-control" placeholder="Direccion">
</div>
<div class="mb-3">
<label for="" class"form-label">Contacto de la empresa</label>
<input id="Descripcion" name="Con_empresa" type="text" class="form-control" placeholder="Contacto de la empresa">
</div>
<a href="/admin/empresas" class="btn btn-secondary" tabindex="5">Cancelar</a>
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