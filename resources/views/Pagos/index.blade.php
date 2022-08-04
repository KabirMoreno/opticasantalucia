@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Opticas Santa Lucia')

@section('content_header')
    <h1>Registro de pagos</h1>
@stop

@section('content')
   <a href="{{route('pagos.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>

<div class="card">
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Interes</th>
          <th scope="col">Subtotal</th>
          <th scope="col">Total</th>
          <th scope="col">Tipo de pago</th>
          <th scope="col">Descripcion</th>     
          <th scope="col">Accion</th>        
        </tr>
    </thead>
    <tbody>
        @foreach ($pagos as $pago)
            <tr>
                <td>{{$pago->Cod_pago}}</td>
                <td>{{$pago->Inte}}</td>
                <td>{{$pago->Sub}}</td>
                <td>{{$pago->Tot}}</td>
                <td>{{$pago->Tip_pago}}</td>
                <td>{{$pago->Descr}}</td>
                <td>
                
                 <a  href="{{route ('pagos.edit',$pago->Cod_pago)}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                  
                 <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
               
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{--  <form action="{{route('credito.create')}}">  --}}

<br>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop