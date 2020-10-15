
@extends('adminlte::page')

@section('title', 'Admin - Blog')

@section('content_header')
    <h1>Usuario</h1>
@stop

@section('content')
    <p>welcome a la vista usuario</p>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="identificacion" class="col-4 col-form-label">Identificacion</label> 
    <div class="col-8">
      <input id="identificacion" name="identificacion" placeholder="identificacion" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nombres" class="col-4 col-form-label">Nombres</label> 
    <div class="col-8">
      <input id="nombres" name="nombres" placeholder="nombres" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="apellidos" class="col-4 col-form-label">Apellidos</label> 
    <div class="col-8">
      <input id="apellidos" name="apellidos" placeholder="apellidos" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="telefono" class="col-4 col-form-label">Telefono</label> 
    <div class="col-8">
      <input id="telefono" name="telefono" placeholder="telefono" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="direccion" class="col-4 col-form-label">Direccion</label> 
    <div class="col-8">
      <input id="direccion" name="direccion" placeholder="direccion" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@stop