@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Opticas Santa Lucia')

@section('content_header')
    <h1>Registro de cobros</h1>
@stop

@section('content')
    <a href="{{route('cobro.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>

<div class="card">
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Codigo gestion</th>
          <th scope="col">Fecha Expiracion</th>
          <th scope="col">Interes</th> 
          <th scope="col">Subtotal</th> 
          <th scope="col">Total</th>    
          <th scope="col">Pagado</th>     
          <th scope="col">Accion</th>        
        </tr>
    </thead>
    <tbody>
        @foreach ($cobros as $cobro)
            <tr>
                <td>{{$cobro->Cod_Cobro}}</td>
                <td>{{$cobro->Cod_Gestion}}</td>
                <td>{{$cobro->Fec_Expiracion}}</td>
                <td>{{$cobro->Inte}}</td>
                <td>{{$cobro->Sub}}</td>
                <td>{{$cobro->Tot}}</td>
                <td>{{$cobro->Pag}}</td>
                <td>
                
                    <a href="/cobro/{{$cobro->Cod_Cobro}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
                  
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