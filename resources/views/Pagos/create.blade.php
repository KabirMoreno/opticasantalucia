@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Opticas Santa Lucia')

@section('content_header')
    <h1>Ingresar pago</h1>
@stop

@section('content')
<div class="container">
  <div class="card-body">
   <form method="POST" action="{{ route('pagos.store') }}">

@csrf
<div class="container">
  <div class="card-body">
  <div class="mb-3">
<label for="" class"form-label">Interes</label>
<input id="Interes" name="Inte" type="text" class="form-control" placeholder="Interes" >
</div>
<div class="mb-3">
<label for="" class"form-label">Subtotal</label>
<input id="Subtotal"  name="Sub" type="text" class="form-control" placeholder="Subtotal" >
</div>
<div class="mb-3">
<label for="" class"form-label">Total</label>
<input id="Total"  name="Tot" type="text" class="form-control" placeholder="Total" >
</div>
<div class="mb-3">
<label for="" class"form-label">Tipo de pago</label>
<select name="Tip_pago" class="form-select" aria-label="Default select example">
  <option selected>Seleccionar metodo de pago</option>
  <option value="T">Transaccion</option>
  <option value="CH">Cheque</option>
  <option value="E">Efectivo</option>
</select>
</div>
<div class="mb-3">
<label for="" class"form-label">Descripcion</label>
<input id="Descripcion" name="Descr" type="text" class="form-control" placeholder="Descripcion" >
</div>
<a href="/admin/pagos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</div>
</form>
</div>
</div>
   
</div>
</div>


 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop