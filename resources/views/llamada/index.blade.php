@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Opticas Santa Lucia')

@section('content_header')
    <h1>Registro de llamadas</h1>
@stop

@section('content')
    <a href="{{route('llamada.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>

<div class="card">
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Codigo Gestion</th>
          <th scope="col">Fecha de llamada</th>
          <th scope="col">Fecha proxima</th>
          <th scope="col">Colaborador</th>
          <th scope="col">Comentarios</th>
          <th scope="col">Accion</th>
          </tr>
    </thead>
    <tbody>
        @foreach ($llamadas as $llamada)
            <tr>
                <td>{{$llamada->Cod_Llamada}}</td>
                <td>{{$llamada->Cod_Gestion}}</td>
                <td>{{$llamada->Fec_Llamada}}</td>
                <td>{{$llamada->Fec_Proxima}}</td>
                <td>{{$llamada->Col}}</td>
                <td>{{$llamada->Com}}</td>
                <td>
                
                    <a href="/llamada/{{$llamada->Cod_Llamada}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
                  
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