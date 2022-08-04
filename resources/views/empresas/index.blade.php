@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Optica Santa Lucia')

@section('content_header')
    <h1>Registro de empresas</h1>
@stop

@section('content')
     <a href="{{route('empresas.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>

<div class="card">
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Nombre de la empresa</th>
          <th scope="col">Telefono</th>
          <th scope="col">Direccion</th> 
          <th scope="col">Contacto</th>       
          <th scope="col">Accion</th>        
        </tr>
    </thead>
    <tbody>
        @foreach ($empresas as $empresa)
            <tr>
                <td>{{$empresa->Cod_empresa}}</td>
                <td>{{$empresa->Nom_empresa}}</td>
                <td>{{$empresa->Tel_empresa}}</td>
                <td>{{$empresa->Dir_empresa}}</td>
                <td>{{$empresa->Con_empresa}}</td>
                <td>
                
                    <a href="/empresas/{{$empresa->Cod_empresa}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
                  
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