@extends('layouts.admin')
<?php 
	$link 			= "Back";
	$prefixTitle 	= "Add New";
?>
@section('header')
@if($controllerName == "products" || $controllerName == "projects" || $controllerName == "contents" )
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>
		tinymce.init({
		  selector: '#textarea',
		  height: 250,
		  menubar: false,
		  plugins: [
		    'advlist autolink lists link image charmap print preview anchor',
		    'searchreplace visualblocks code fullscreen',
		    'insertdatetime media table contextmenu paste code'
		  ],
		  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		  content_css: '//www.tinymce.com/css/codepen.min.css'
		});
	</script>
@endif
@stop
@section('content')
<div class="container">
	<div class="table-wrapper with-bg mdc-elevation--z7">
		@include('admin.partials.form')
	</div>
</div>
@stop
@section('footer')

@stop