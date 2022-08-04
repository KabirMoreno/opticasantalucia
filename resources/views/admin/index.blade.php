@extends('adminlte::page')

@section('title', 'Hospital Clinicas y Optica Santa Lucia')

@section('content_header')
    <h1>Hospital Clinicas y Optica Santa Lucia</h1>



@stop

@section('content')

<div class="card-header">
<div class="card">
<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>128</h3>
<p>Personas</p>
</div>
<div class="icon">
<i class="fas fa-users"></i>
</div>
<a href="admin/personas" class="small-box-footer">Mas Informacion<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3>53<sup style="font-size: 20px">%</sup></h3>
<p>Empresas</p>
</div>
<div class="icon">
<i class="fas fa-building"></i>
</div>
<a href="admin/empresas" class="small-box-footer">Mas Informacion<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">
<h3>44</h3>
<p>Creditos</p>
</div>
<div class="icon">
<i class="fas fa-wallet"></i>
</div>
<a href="#" class="small-box-footer">Mas Informacion<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h3>65</h3>
<p>Cobros</p>
</div>
<div class="icon">
<i class="fas fa-clipboard-list"></i>
</div>
<a href="admin/cobro" class="small-box-footer">Mas Informacion<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

</div>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>

    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@stop