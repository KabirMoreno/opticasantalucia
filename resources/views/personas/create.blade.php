@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Optica Santa Lucia')

@section('content_header')
    <h1>Ingresar personas</h1>
@stop

@section('content')

<div class="container">
  <div class="card-body">
   <form method="POST" action="{{route('personas.store')}}">
@csrf
<div class="mb-3">
<label for="" class"form-label">Identidad</label>
<input id="Interes" name="DNI" type="text" class="form-control" placeholder="Identidad">
</div>
<div class="mb-3">
<label for="" class"form-label">Nombres</label>
<input id="Subtotal" name="Nom" type="text" class="form-control" placeholder="Nombres">
</div>
<div class="mb-3">
<label for="" class"form-label">Apellidos</label>
<input id="Total" name="Ape" type="text" class="form-control" placeholder="Apellidos">
</div>
<div class="mb-3">
<label for="" class"form-label">Direccion</label>
<input id="Total" name="Dir" type="text" class="form-control" placeholder="Direccion">
</div>
<div class="mb-3">
<label for="" class"form-label">Tipo de sexo</label>
<select name="Tip_sexo" class="form-select" aria-label="Default select example">
  <option selected>Seleccionar sexo</option>
  <option value="M">Masculino</option>
  <option value="F">Femenino</option>
</select>
</div>
<div class="mb-3">
<label for="" class"form-label">Tipo de registro</label>
<select name="Tip_registro" class="form-select" aria-label="Default select example">
  <option selected>Seleccionar registro</option>
  <option value="C">Cliente</option>
  <option value="E">Empleado</option>
</select>
</div>
<div class="mb-3">
<label for="" class"form-label">Fecha de registro</label>
<input id="Descripcion" name="Fec_registro" type="text" class="form-control" placeholder="Fecha de registro">
</div>
<div class="mb-3">
<label for="" class"form-label">Descripcion del telefono</label>
<input id="Descripcion" name="Descr" type="text" class="form-control" placeholder="Descripcion del telefono">
</div>
<div class="mb-3">
<label for="" class"form-label">Numero de telefono</label>
<input id="Descripcion" name="Num" type="text" class="form-control" placeholder="Numero de telefono">
</div>
<div class="mb-3">
<label for="" class"form-label">Tipo de telefono</label>
<select name="Tip_telefono" class="form-select" aria-label="Default select example">
  <option selected>Seleccionar registro</option>
  <option value="F">Fijo</option>
  <option value="C">Celular</option>
</select>
</div>
<a href="/admin/personas" class="btn btn-secondary" tabindex="5">Cancelar</a>
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