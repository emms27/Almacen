<?php  ?>
@extends('layouts.principal')
@section('title', 'Crear Almacén - Almacén')

@section('content')
<h3 class="page-header page-header-top">Agregar Almacén<small> </small></h3>

@if(count($errors)>0)
  @include('alerts.error')
@endif

{!!Form::open(['route'=>'almacenes.store','method'=>'POST'])!!}
@include('almacenes.forms.product')
{!!Form::close()!!}
@stop
