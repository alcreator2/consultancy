@extends('layouts.admin')
@section('header')
	<script>
	$(document).ready(function() {
		$('#example').DataTable( {
			columnDefs: [
				{
					targets: [ 0, 1, 2 ],
					className: 'mdl-data-table__cell--non-numeric'
				}
			]
		} );
	} );
</script>
@stop
@section('content')
<div class="container">
	<div class="table-wrapper mdc-elevation--z3 bg-white">
		<table id="example" class="mdl-data-table" cellspacing="0" width="100%">
		   @include('admin.'.$controllerName.'._index')
		</table>
	</div><br><br>
	@if($controllerName != "enquiries")
     <a class="mdc-fab material-icons add-icon" href="{{route('admin.'.$controllerName.'.create')}}" aria-label="Add" data-demo-no-js>
        <span class="mdc-fab__icon">
          add
        </span>
      </a>
    @endif
</div>
@stop
@section('footer')
		<script>
		   $(document).on("change", "#basic-switch", function(){
	        	$(this).parents("form:first").submit();
	       });
		</script>
@stop