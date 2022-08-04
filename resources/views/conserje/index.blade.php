@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Opticas Santa Lucia')

@section('content_header')
    <h1>Registros de conserje</h1>
@stop

@section('content')
    <a href="{{route('conserje.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>

<div class="card">
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Codigo Gestion</th>
          <th scope="col">Observacion</th>
          <th scope="col">Imagen</th>     
          <th scope="col">Accion</th>        
        </tr>
    </thead>
    <tbody>
        @foreach ($conserjes as $conserje)
            <tr>
                <td>{{$conserje->Cod_Conserje}}</td>
                <td>{{$conserje->Cod_Gestion}}</td>
                <td>{{$conserje->Obs}}</td>
                <td>{{$conserje->Img}}</td>
                <td>
                
                    <a href="/conserje/{{$conserje->Cod_Conserje}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
                  
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