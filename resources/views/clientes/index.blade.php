@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Optica Santa Lucia')

@section('content_header')
    <h1>Registro de clientes</h1>
@stop

@section('content')

<div class="container">
<a href="{{route('clientes.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
  <div class="card-body">
 
  <table id="cliente" class="table table-bordered table-striped">
    <thead>
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Cod. empresa</th>
          <th scope="col">Cod. persona</th>
          <th scope="col">Usuario que lo registro</th> 
          <th scope="col">Accion</th> 
         </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente->Cod_cliente}}</td>
                <td>{{$cliente->Cod_empresa}}</td>
                <td>{{$cliente->Cod_persona}}</td>
                <td>{{$cliente->Usr_registro}}</td>
                <td>
                
                    <a href="/clientes/{{$cliente->Cod_cliente}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
                  
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
               
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{--  <form action="{{route('credito.create')}}">  --}}
<br>
</form>
  

</div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')
    <script> $(document).ready( function () {
    $('#cliente').DataTable();
} ); </script>
@stop