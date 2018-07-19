<nav id="primary-nav">
<ul>
<li><a href="/" title="Inicio" class="active"><i class="fa fa-home"></i> Home</a></li>


	<li><a href="#"><i class="fa fa-file-text-o"></i> Almacenes</a>
	<ul>
	 <li><a href="<?php echo '/almacenes/create'; ?>">
	  <i class="fa fa-plus-square-o"></i>Agregar Almacen</a></li>
	 <li><a href="<?php echo '/almacenes'; ?>" ><i class="fa fa-search"></i> Buscar Almacen</a></li>
	 </ul>
	</li>

  <li><a href="#"><i class="fa fa-file-text-o"></i> Productos</a>
  <ul>
   <li><a href="<?php echo '/products/create'; ?>">
    <i class="fa fa-plus-square-o"></i>Agregar Producto</a>
  </li>
   <li> <a href="<?php echo '/products'; ?>" ><i class="fa fa-search"></i> Buscar Producto</a>   </li>
   </ul>
  </li>

  <li><a href="#"><i class="fa fa-file-text-o"></i> Traspasos</a>
  <ul>
   <li><a href="<?php echo '/traspasos/create'; ?>">
    <i class="fa fa-plus-square-o"></i>Agregar Traspaso</a>
  </li>
   <li> <a href="<?php echo '/traspasos'; ?>" ><i class="fa fa-search"></i> Buscar Traspaso</a>   </li>
   </ul>
  </li>


</ul>
</nav>

<div id="theme-options" class="text-left visible-md visible-lg">
 <a href="javascript:void(0)" class="btn btn-theme-options"><i class="fa fa-cog"></i> Theme Options</a>
 <div id="theme-options-content">
  <h5>Color Themes</h5>
  <ul class="theme-colors clearfix">
   <li class="active">
    <a href="javascript:void(0)" class="themed-background-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default"></a>
   </li>
   <li>
    <a href="javascript:void(0)" class="themed-background-deepblue themed-border-deepblue" data-theme="css/themes/deepblue.css" data-toggle="tooltip" title="DeepBlue"></a>
   </li>
   <li>
<a href="javascript:void(0)" class="themed-background-deepwood themed-border-deepwood" data-theme="css/themes/deepwood.css" data-toggle="tooltip" title="DeepWood"></a>
   </li>
   <li>
<a href="javascript:void(0)" class="themed-background-deeppurple themed-border-deeppurple" data-theme="	css/deeppurple.css" data-toggle="tooltip" title="DeepPurple"></a>
   </li>
   <li>
<a href="javascript:void(0)" class="themed-background-deepgreen themed-border-deepgreen" data-theme="css/themes/deepgreen.css'" data-toggle="tooltip" title="DeepGreen"></a>
   </li>
  </ul>



<h5>Header</h5>
<!--
<label id="topt-fixed-header-top" class="switch switch-success" data-toggle="tooltip" title="Top fixed header"><input type="checkbox"><span></span></label>
<label id="topt-fixed-header-bottom" class="switch switch-success" data-toggle="tooltip" title="Bottom fixed header"><input type="checkbox"><span></span></label>
<label id="topt-fixed-layout" class="switch switch-success" data-toggle="tooltip" title="Fixed layout (for large resolutions)"><input type="checkbox"><span></span></label>

-->
  <div id="topt-fixed-header-top" class="input-switch switch switch-success" data-toggle="tooltip" title="Top fixed header" data-on="success" data-off="danger" data-on-label="<i class='fa fa-check fa fa-white'></i>" data-off-label="<i class='fa fa-times'></i>">
   <input type="checkbox">
  </div>
  <div id="topt-fixed-header-bottom" class="input-switch switch switch-success" data-toggle="tooltip" title="Bottom fixed header" data-on="success" data-off="danger" data-on-label="<i class='fa fa-check fa fa-white'></i>" data-off-label="<i class='fa fa-times'></i>">
   <input type="checkbox">
  </div>

 </div>
</div>
