<?php
	if(false != empty($prefixTitle))
	{
		$prefixTitle = '';
	}
?>
<header class="mdc-toolbar mdc-elevation--z4">
	@if(false == empty($link))
		<a class="mdc-list-item" href="{{ route('admin.'.$controllerName.'.index') }}">
			<i class="material-icons">keyboard_backspace</i>&nbsp; <span>Back</span>
		</a>
	@endif

	<section class="mdc-toolbar__section mdc-toolbar__section--align-center">
		@if(false == empty($headerTitle))
	  		<span class="mdc-toolbar__title">{{$prefixTitle}} {{$headerTitle}}</span>
		@else
			<span class="mdc-toolbar__title">Untitled</span>
		@endif
	</section>
</header>