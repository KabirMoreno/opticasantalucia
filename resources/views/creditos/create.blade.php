@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Opticas Santa Lucia')

@section('content_header')
    <h1>Ingresar credito</h1>
@stop

@section('content')
    <form method="POST" action="{{route('creditos.store')}}">
@csrf
<div class="mb-3">
<label for="" class"form-label">Tipo de credito</label>
<select name="Tip_credito" class="form-select" aria-label="Default select example">
  <option selected>Seleccionar el plazo</option>
  <option value="C">Corto</option>
  <option value="M">Mediano</option>
  <option value="L">Largo</option>
</select>
</div>
<div class="mb-3">
<label for="" class"form-label">Dias del credito</label>
<input id="Dias credito" name="Dia_credito" type="text" class="form-control" placeholder="Dias del credito">
</div>
<div class="mb-3">
<label for="" class"form-label">Descripcion</label>
<input id="Descripcion" name="Descr" type="text" class="form-control" placeholder="Descripcion">
</div>
<a href="/admin/creditos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop