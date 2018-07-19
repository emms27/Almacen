<?php
/**
* @version 1.0
* @author L.I. Emmanuel Sanchez Carreon
* @email carreon.emmanuel@gmail.com
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') | Grupo Más</title>
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	{!! Html::style('themes/uadmin/2.1/css/bootstrap.css') !!}
	{!! Html::style('themes/uadmin/2.1/css/plugins.css') !!}
	{!! Html::style('themes/uadmin/2.1/css/main.css') !!}
	{!! Html::style('themes/uadmin/2.1/css/themes.css') !!}

	{!! Html::style('themes/uadmin/paginacion.css') !!}
	{!! Html::style('themes/uadmin/2.1/css/fonts.css') !!}
	{!! Html::style('fonts/awesome/4.3.0/css/font-awesome.css') !!}
	{!! Html::style('themes/uadmin/jgritter/css/jquery.gritter.css') !!}
	{!! Html::style('themes/uadmin/alertify/css/alertify.core.css') !!}
	{!! Html::style('themes/uadmin/alertify/css/alertify.default.css') !!}


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	{!! Html::script('themes/uadmin/alertify/js/alertify.js') !!}
	<!-- <link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
	<link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
	<link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
	<link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
	<link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
	<link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
 	<link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152"> -->
</head>
<body>
 <div id="page-container">
	@include('widgets.tools', array('header'=>true, 'as'=>'pane3'))
  <div id="inner-container">
   <aside id="page-sidebar" class="collapse navbar-collapse navbar-main-collapse">		 
		@include('widgets.menu', array('header'=>true, 'as'=>'pane3'))
   </aside>
   <div id="page-content">
	 			@yield('content')
   </div>
	 @include('widgets.footer', array('header'=>true, 'as'=>'pane3'))
</div>
</div>
<a href="javascript:void(0)" id="to-top"><i class="fa fa-chevron-up"></i></a>
@include('widgets.avisos', array('header'=>true, 'as'=>'pane3'))
{!! Html::script('themes/uadmin/2.1/js/bootstrap3.3.1.js') !!}
{!! Html::script('themes/uadmin/1.6/js/plugins.1-6.js') !!}
{!! Html::script('themes/uadmin/1.6/js/main.1-6-1.js') !!}
{!! Html::script('themes/uadmin/Editores/CKEditor/ckeditor4.3.3standard/ckeditor.js') !!}
{!! Html::script('themes/uadmin/jgritter/js/jquery.gritter.min.js') !!}
{!! Html::script('themes/uadmin/2.1/js/modernizr-responsive.js') !!}
</body>
</html>
