@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Opticas Santa Lucia')

@section('content_header')
    <h1>Crear cobro</h1>
@stop

@section('content')


<div class="container">
  <div class="card-body">
  <form method="POST" action="{{route('cobro.store')}}">
@csrf
<div class="mb-3">
<label for="" class"form-label">Codigo de Gestion</label>
<input id="Tipo de credito" name="Cod_Gestion" type="text" class="form-control" placeholder="Codigo de Gestion">
</div>
<div class="mb-3">
<label for="" class"form-label">Fecha de Expiracion</label>
<input id="Dias credito" name="Fec_Expiracion" type="text" class="form-control" placeholder="Fecha de Expiracion">
</div>
<div class="mb-3">
<label for="" class"form-label">Interes</label>
<input id="Descripcion" name="Inte" type="text" class="form-control" placeholder="Interes">
</div>
<div class="mb-3">
<label for="" class"form-label">Subtotal</label>
<input id="Descripcion" name="Sub" type="text" class="form-control" placeholder="Subtotal">
</div>
<div class="mb-3">
<label for="" class"form-label">Total</label>
<input id="Descripcion" name="Tot" type="text" class="form-control" placeholder="Total">
</div>
<div class="mb-3">
<label for="" class"form-label">Pagado</label>
<input id="Descripcion" name="Pag" type="text" class="form-control" placeholder="Pagado">
</div>
<a href="/admin/cobro" class="btn btn-secondary" tabindex="5">Cancelar</a>
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