<?php  ?>
@extends('layouts.principal')
@section('title', 'Crear Productos - Almacen')

@section('content')
<h3 class="page-header page-header-top">Editar Producto<small></small></h3>
@if(count($errors)>0)
  @include('alerts.error')
@endif

{!!Form::model($row,['route'=>['products.update',$row->id],'method'=>'PUT'])!!}
@include('productos.forms.product')
{!!Form::close()!!}
@stop
