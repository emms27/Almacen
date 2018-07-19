<?php  ?>
@extends('layouts.principal')
@section('title', 'Crear Productos - Almacen')

@section('content')
<h3 class="page-header page-header-top">Agregar Producto<small> </small></h3>

@if(count($errors)>0)
  @include('alerts.error')
@endif
{!!Form::open(['route'=>'products.store','method'=>'POST'])!!}
@include('productos.forms.product')
{!!Form::close()!!}
@stop
