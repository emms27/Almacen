<?php  ?>
<div class="form-group">
  <?php echo Form::label('almacene_id', 'Almacén Salida'); ?>
  <select name="almacensalida_id" class="form-control select-chosen">
    <!-- <option value="">Selecciona una opción</option> -->
    @foreach ($almacenes as $row)
        <option value="{{ $row->id }}">{{ $row->nombre}}</option>
    @endforeach
</select>
</div>
<div class="form-group">
  <?php echo Form::label('almacene_id', 'Almacén Entrada'); ?>
  <select name="almacenentrada_id" class="form-control select-chosen">
    <!-- <option value="">Selecciona una opción</option> -->
    @foreach ($almacenes as $row)
        <option value="{{ $row->id }}">{{ $row->nombre}}</option>
    @endforeach
</select>
</div>
<div class="form-group">
  <?php echo Form::label('product_id', 'Producto'); ?>
  <select name="product_id" class="form-control select-chosen">
    <!-- <option value="">Selecciona una opción</option> -->
    @foreach ($products as $row)
        <option value="{{ $row->id }}">{{ $row->nombre}}</option>
    @endforeach
</select>
</div>
<div class="form-group">
  <?php echo Form::label('notas', 'Notas'); ?>
  <?php echo Form::textarea('notas',null,['class'=>'ckeditor']);  ?>
</div>
<?php echo Form::submit('Guardar',null,['class'=>'btn btn-successs']);  ?>
