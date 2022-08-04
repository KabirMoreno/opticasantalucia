@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Optica Santa Lucia')

@section('content_header')
    <h1>Resgistro de personas</h1>
@stop

@section('content')
    <a href="{{route('personas.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>

<div class="card">
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Identidad</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Direccion</th>
          <th scope="col">Tipo de sexo</th>   
          <th scope="col">Tipo de registro</th>  
          <th scope="col">Fecha de registro</th>  
          <th scope="col">Accion</th>        
        </tr>
    </thead>
    <tbody>
        @foreach ($personas as $persona)
            <tr>
                <td>{{$persona->Cod_persona}}</td>
                <td>{{$persona->DNI}}</td>
                <td>{{$persona->Nom}}</td>
                <td>{{$persona->Ape}}</td>
                <td>{{$persona->Dir}}</td>
                <td>{{$persona->Tip_sexo}}</td>
                <td>{{$persona->Tip_registro}}</td>
                <td>{{$persona->Fec_registro}}</td>
                <td>
                
                    <a class="btn btn-info"><i class="fas fa-edit"></i></a>
                  
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