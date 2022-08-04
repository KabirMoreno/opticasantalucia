@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Opticas Santa Lucia')

@section('content_header')
    <h1>Registro de gestion clientes</h1>
@stop

@section('content')
 <a href="{{route('gestion.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>

<div class="card">
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Codigo del cliente</th>
          <th scope="col">Fecha de gestion</th>
          <th scope="col">Fecha de expiracion</th>
          <th scope="col">Fecha ultimo pago</th>
          <th scope="col">Numero de cuotas</th>
          <th scope="col">Cuotas pendientes cliente</th>
          <th scope="col">Cuotas pendiente en LPS</th>
          <th scope="col">Codigo del credito</th>
          <th scope="col">Colaborador 1</th>
          <th scope="col">Colaborador 2</th>    
          <th scope="col">Accion</th>        
        </tr>
    </thead>
    <tbody>
        @foreach ($gestiones as $gestion)
            <tr>
                <td>{{$gestion->Cod_Gestion}}</td>
                <td>{{$gestion->Cod_Cliente}}</td>
                <td>{{$gestion->Fec_Gestion}}</td>
                <td>{{$gestion->Fec_Expirado}}</td>
                <td>{{$gestion->Fec_Ultimo_Pago}}</td>
                <td>{{$gestion->Num_Cuotas}}</td>
                <td>{{$gestion->Cuo_Pendiente_Cl}}</td>
                <td>{{$gestion->Cuo_Pendientes_Lps}}</td>
                <td>{{$gestion->Cod_Credito}}</td>
                <td>{{$gestion->Col_Uno}}</td>
                <td>{{$gestion->Col_Dos}}</td>
                <td>
                
                    <a href="/creditos/{{$gestion->Cod_Gestion}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
                  
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