@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar pago</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('pagos.update',$pagos) }}">

@csrf
@method('PUT')
@foreach ($pagos as $pagos)

    <div class="mb-3">
<label for="" class"form-label">Interes</label>
<input id="Interes" name="Inte" type="text" class="form-control" placeholder="Interes" value="{{ $pagos->Inte }}" >
</div>
<div class="mb-3">
<label for="" class"form-label">Subtotal</label>
<input id="Subtotal"  name="Sub" type="text" class="form-control" placeholder="Subtotal" value="{{ $pagos->Sub }}">
</div>
<div class="mb-3">
<label for="" class"form-label">Total</label>
<input id="Total"  name="Tot" type="text" class="form-control" placeholder="Total" value="{{ $pagos->Tot }}" >
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
<input id="Descripcion" name="Descr" type="text" class="form-control" placeholder="Descripcion" value="{{ $pagos->Descr }}" >
</div>
<a href="/admin/pagos" class="btn btn-secondary" tabindex="5">Cancelar</a>
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