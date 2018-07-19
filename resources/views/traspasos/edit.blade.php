<?php  ?>
@extends('layouts.principal')
@section('title', 'Editar Traspaso - Almacén')

@section('content')
<h3 class="page-header page-header-top">Editar Traspaso<small> </small></h3>

@if(count($errors)>0)
  @include('alerts.error')
@endif
{!!Form::model($row,['route'=>['traspasos.update',$row->id],'method'=>'PUT'])!!}
@include('traspasos.forms.salida')
{!!Form::close()!!}
@stop
