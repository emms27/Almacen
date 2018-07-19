<?php  ?>
<div class="form-group">
  <?php echo Form::label('codigo', 'Código'); ?>
  <?php echo Form::text('codigo',null,['class'=>'form-control','placeholder'=>'escribir código']);  ?>
</div>
<div class="form-group">
  <?php echo Form::label('nombre', 'Nombre'); ?>
  <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'escribir nombre']);  ?>
</div>
<div class="form-group">
  <?php echo Form::label('precio', 'Precio'); ?>
  <?php echo Form::text('precio',null,['class'=>'form-control','placeholder'=>'escribir precio']);  ?>
</div>
<div class="form-group">
  <?php echo Form::label('stock', 'Stock'); ?>
  <?php echo Form::text('stock',null,['class'=>'form-control','placeholder'=>'escribir el número de stock']);  ?>
</div>
<div class="form-group">
  <?php echo Form::label('stock', 'Notas'); ?>
  <?php echo Form::textarea('notas',null,['class'=>'ckeditor']);  ?>
</div>

<?php echo Form::submit('Guardar',null,['class'=>'btn btn-successs']);  ?>
