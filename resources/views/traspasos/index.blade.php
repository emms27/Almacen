<?php $p=1; ?>
@extends('layouts.principal')
@section('title', 'Consulta de Traspasos - Almacén')
@section('content')

<?php $message=Session::get('message'); ?>
@if(Session::has('message'))
<div class="alert alert-block alert-success fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4 class="alert-heading">Success!</h4>
            <p>{{Session::get('message')}}</p>
</div>
@endif
<h3 class="page-header page-header-top">Consulta Traspasos<small> La consulta de traspasos te muestran una línea temporal de todos los productos dados de alta en el Sistema desde el principio de los tiempos.</small></h3>

<p class="well">» Total de registros encontrados: <strong>{!!$rows->total()!!}</strong>.</br> » Se mostrar&aacute; un total de {!!$rows->count()!!}<strong></strong> registros por p&aacute;gina.</br>
    » Usted se encuentra consultando la p&aacute;gina <strong>{!!$rows->currentPage()!!}</strong>.</p>
<table id="example-datatables" class="table table-striped table-bordered table-hover">
  <tr>
    <th>#</th>
    <th>Producto</th>
    <th>Almacén Salida</th>
    <th>Almacén Entrada</th>
    <th>Notas</th>
    <td></td>
    <th>Acción</th>
  </tr>
  @foreach ($rows as $row)
  <tr>
   	<td><?php echo $p; ?></td>
    <td>{{$row->product->nombre}}</td>
    @if(count($row->asalida)>0)
    <td>{{$row->asalida->nombre}}</td>
    @else
    <td></td>
    @endif
    <td>{{$row->aentrada->nombre}}</td>
    <td>
      <a href="#example-modal{{$row->id}}" class="btn btn-default" data-toggle="modal">ver notas</a>
      <div id="example-modal{{$row->id}}" class="modal" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Notas:</h4>
          </div>
          <div class="modal-body">
          <textarea class="ckeditor" name="notas" cols="50" rows="10" style="visibility: hidden; display: none;">
            {{$row->notas}}
          </textarea>
          </div>
          <div class="modal-footer">
          <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
          </div>
          </div>
      </div>
    </td>
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
      {!!link_to_route('traspasos.edit', $title = "&nbsp;", $parameters = $row->id,
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
