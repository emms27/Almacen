<?php  ?>
@extends('layouts.principal')
@section('title', 'Home - Almacen')
@section('content')

<h3 class="page-header page-header-top">Home<small> </small></h3>

<h5>Almacénes:</h5>
  @foreach ($rows as $row)
  <div class="col-sm-3">
  <div class="dash-tile {!!$row->color!!} clearfix animation-pullDown">
  <div class="dash-tile-header">{!!$row->nombre!!}  </div>
  <div class="dash-tile-text2">
    <br><br>
    <?php
    if ($reg[$row->id]['stock']=="Falta stock") {
      $class="label-danger";
    }else{
      $class="label-success";
    }
     ?>
      <small class="label {!!$class!!}">{!!$reg[$row->id]['stock']!!}</small>

  </div>
  </div>

  </div>
  @endforeach

@stop
