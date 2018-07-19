<?php  ?>
<div class="form-group">
  <?php echo Form::label('nombre', 'Nombre'); ?>
  <?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'escribir nombre']);  ?>
</div>
<?php echo Form::submit('Guardar',null,['class'=>'btn btn-successs']);  ?>
