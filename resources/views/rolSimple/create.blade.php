@extends('adminlte::page')
@section('title', 'Rol Simple')
@section('content_header')
    <!--<h1> Formulario de creación de roles simples</h1><hr>-->
    <div class="card">
        <div class="card-header">
            <div>
                <h1 class="card-title">Formulario de creación de roles simples</h1>
            </div>
        </div>
    </div>
@stop
@section('content')
<div class="card card-primary">
  <div class="card-header">
        
    <h3 class="card-title">Formulario de creación del rol</h3>

    <div class="card-tools">
      <!-- This will cause the card to maximize when clicked -->
      <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
      <!-- This will cause the card to collapse when clicked -->
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      <!-- This will cause the card to be removed when clicked -->
      <!--<button type="button" class="btn btn-tool" href="{{ route('home')}}" data-card-widget="remove"><i class="fas fa-times"></i></button>-->
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  @include('layouts.formError')
  <div class="card-body">
    <form action="{{ route('create.store') }}" method="POST" class="form-horizontal">
    {!! csrf_field() !!}
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Nombre Rol:</label>
            <div class="col-sm-10">
                <input class="form-control" id="name" name="name" type="text" maxlength="30"
                    pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-].{1,30}" aria-describedby="nameHelp" placeholder="ZT1_HCM_0000_ICITANTES" required  value="{{ old('name') }}"/>
                    <small id="nameHelp" class="form-text text-muted">Ingrese el nombre del rol con el siguiente formato ZT1_HCM_0000_ICITANTES</small>
            </div>
            <div><br></div>
            <label for="description" class="col-sm-2 control-label">Descripción Rol:</label>
            <div class="col-sm-10">
                <!--<input class="form-control" id="description" name="description" type="text" maxlength="150" required  value="{{ old('description') }}"/>-->
                <textarea class="form-control" id="description" name="description" rows="2" maxlength="150" required  value="{{ old('description') }}"></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-danger ">
                <i class="fa fa-save"></i> Guardar
            </button>
        </div>
    </form>
  <!-- /.card-body -->
</div>
<!-- /.card -->
@stop