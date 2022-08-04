@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Opticas Santa Lucia')

@section('content_header')
    <h1>Registro de creditos</h1>
@stop

@section('content')
    <a href="{{route('creditos.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>

<div class="card">
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Tipo credito</th>
          <th scope="col">Dias credito</th>
          <th scope="col">Descripcion</th>     
          <th scope="col">Accion</th>        
        </tr>
    </thead>
    <tbody>
   
        @foreach ($resultado as $credito)
        <tr>
                <td>{{$credito["Cod_credito"]}}</td>
                <td>{{$credito["Tip_credito"]}}</td>
                <td>{{$credito["Dia_credito"]}}</td>
                <td>{{$credito["Descr"]}}</td>
                <td>
                    <a href="{{route('creditos.edit',$credito["Cod_credito"])}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                  
                    <form  method="POST" action="{{route('creditos.destroy',$credito["Cod_credito"])}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>

                    </form >
               
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