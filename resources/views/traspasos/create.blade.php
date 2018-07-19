<?php  ?>
@extends('layouts.principal')
@section('title', 'Crear Traspaso - Almacén')

@section('content')
<h3 class="page-header page-header-top">Agregar Traspaso<small> </small></h3>

@if(count($errors)>0)
  @include('alerts.error')
@endif

{!!Form::open(['route'=>'traspasos.store','method'=>'POST'])!!}
@include('traspasos.forms.entrada')
{!!Form::close()!!}
@stop
