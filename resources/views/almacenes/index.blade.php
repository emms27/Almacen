<?php $p=1; ?>
@extends('layouts.principal')
@section('title', 'Consulta de Almacenes - Almacen')
@section('content')

<?php $message=Session::get('message'); ?>
@if(Session::has('message'))
<div class="alert alert-block alert-success fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4 class="alert-heading">Success!</h4>
            <p>{{Session::get('message')}}</p>
</div>
@endif
<h3 class="page-header page-header-top">Consulta Almacenes<small> La consulta de productos te muestran una línea temporal de todos los productos dados de alta en el Sistema desde el principio de los tiempos.</small></h3>

<p class="well">» Total de registros encontrados: <strong>{!!$rows->total()!!}</strong>.</br> » Se mostrar&aacute; un total de {!!$rows->count()!!}<strong></strong> registros por p&aacute;gina.</br>
    » Usted se encuentra consultando la p&aacute;gina <strong>{!!$rows->currentPage()!!}</strong>.</p>
<table id="example-datatables" class="table table-striped table-bordered table-hover">
  <tr>
    <th>#</th>
    <th>Nombre</th>
    <th></th>
    <th>Acción</th>
  </tr>
  @foreach ($rows as $row)
  <tr>
   	<td><?php echo $p; ?></td>
    <td>{{$row->nombre}}</td>
    <td>
      @if($row->ver==1)
      <?php $sclass="fa fa-check text-success"; ?>
      @else
      <?php $sclass="fa fa-times text-danger"; ?>
      @endif
      <i class="<?php echo $sclass;  ?>"></i>
    </td>

    <td class="text-center">
<div class="btn-group">
      {!!link_to_route('almacenes.edit', $title = "&nbsp;", $parameters = $row->id,
        $attributes = [
          'class'=>'btn btn-xs btn-warning fa fa-pencil',
          "data-toggle"=>"tooltip","title"=>"Editar Registro"
        ])
        !!}
</div>
    </td>
   </tr>
  </tr>
  <?php $p++; ?>
  @endforeach
</table>
@stop
