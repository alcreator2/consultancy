<thead>
	<tr>
		<td>S.No.</td>
		<td>Image</td>
		<td>Title</td>
		<td>Status</td>
		<td>Action</td>
	</tr>
</thead>
<tbody>
	@foreach($data as $index => $value)
		<tr>
			<td>{{$index+1}}</td>
			<td>
				@if(!empty($value->thumbnail_image))
					{{ Html::image($value->thumbnail_image, null, ['height' => '50px'])}}
				@else
					<i class="material-icons md-center">camera_alt</i>
				@endif
			</td>
			<td>{{$value->title}}</td>
			<td>
				{{ Form::model($value, ['method' => 'PUT', 'route' => ['admin.'.$controllerName.'.change_status', $value->id], 'class' => 'inline']) }}
				<div class="mdc-switch">    
					@if($value->status == '0')
					  	<input type="checkbox" id="basic-switch" name="status" value="1" class="mdc-switch__native-control" />
			        @else
	        			<input type="checkbox" id="basic-switch" checked="checked" name="status" value="0" class="mdc-switch__native-control" />	
	        		@endif
        			<div class="mdc-switch__background">
	            		<div class="mdc-switch__knob"></div>
	          		</div>
        		</div>
        		{{ Form::close() }}
        	</td>
        	<td>
        		<a href="{{ route('admin.'.$controllerName.'.edit', $value->id) }}">
        			 <div class="mdc-ripple-surface demo-surface material-icons" data-mdc-ripple-is-unbounded
               			aria-label="Edit" tabindex="0">
           			 	mode_edit
          			</div>
        		</a>
        	</td>
		</tr>
	@endforeach
</tbody>