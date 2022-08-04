@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Opticas Santa Lucia')

@section('content_header')
    <h1>Crear gestion clientes</h1>
@stop

@section('content')

<div class="container">
  <div class="card-body">
   <form method="POST" action="{{route('gestion.store')}}">
@csrf
<div class="mb-3">
<label for="" class"form-label">Codigo del cliente</label>
<input id="Tipo de credito" name="Cod_Cliente" type="text" class="form-control" placeholder="Codigo del cliente">
</div>
<div class="mb-3">
<label for="" class"form-label">Fecha de gestion</label>
<input id="Dias credito" name="Fec_Gestion" type="text" class="form-control" placeholder="Fecha de gestion">
</div>
<div class="mb-3">
<label for="" class"form-label">Fecha de expirado</label>
<input id="Descripcion" name="Fec_Expirado" type="text" class="form-control" placeholder="Fecha de expirado">
</div>
<div class="mb-3">
<label for="" class"form-label">Fecha de ultimo pago</label>
<input id="Descripcion" name="Fec_Ultimo_Pago" type="text" class="form-control" placeholder="Fecha de ultimo pago">
</div>
<div class="mb-3">
<label for="" class"form-label">Numero de cuotas</label>
<input id="Descripcion" name="Num_Cuotas" type="text" class="form-control" placeholder="Numero de cuotas">
</div>
<div class="mb-3">
<label for="" class"form-label">Cuotas pendientes del Cliente</label>
<input id="Descripcion" name="Cuo_Pendiente_Cl" type="text" class="form-control" placeholder="Cuotas pendientes del Cliente">
</div>
<div class="mb-3">
<label for="" class"form-label">Cuotas pendientes en LPS</label>
<input id="Descripcion" name="Cuo_Pendientes_Lps" type="text" class="form-control" placeholder="Cuotas pendientes en LPS">
</div>
<div class="mb-3">
<label for="" class"form-label">Codigo del credito</label>
<input id="Descripcion" name="Cod_Credito" type="text" class="form-control" placeholder="Codigo del credito">
</div>
<div class="mb-3">
<label for="" class"form-label">Colaborador 1</label>
<input id="Descripcion" name="Col_Uno" type="text" class="form-control" placeholder="Colaborador 1">
</div>
<div class="mb-3">
<label for="" class"form-label">Colaborador 2</label>
<input id="Descripcion" name="Col_Dos" type="text" class="form-control" placeholder="Colaborador 2">
</div>
<a href="/admin/gestion" class="btn btn-secondary" tabindex="5">Cancelar</a>
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