<?php  ?>
@extends('layouts.principal')
@section('title', 'Crear Almacen - Almacen')

@section('content')
<h3 class="page-header page-header-top">Editar Almacen<small></small></h3>
@if(count($errors)>0)
  @include('alerts.error')
@endif
{!!Form::model($row,['route'=>['almacenes.update',$row->id],'method'=>'PUT'])!!}
@include('almacenes.forms.product')
{!!Form::close()!!}
@stop
