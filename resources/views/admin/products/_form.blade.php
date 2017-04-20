<div class="mdc-textfield mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{Form::text('title', null, ['class' => 'mdc-textfield__input', 'placeholder' => 'Title', 'aria-label' => 'Subject'])}}
    <p class="text-danger">{{$errors->first('title')}}</p>
</div><br>
<div class="mdc-textfield mdc-textfield--multiline mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{Form::textarea('excerpt', null, ['class' => 'mdc-textfield__input', 'placeholder' => 'Excerpt', 'rows' => '2', 'aria-label' => 'Excerpt'])}}
</div><br>
@if($controllerName == "products")
<div class="mdc-textfield mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{Form::text('code', null, ['class' => 'mdc-textfield__input', 'placeholder' => 'Product ID', 'aria-label' => 'Subject'])}}
</div><br>
@endif
<div class="mdc-textfield mdc-textfield--multiline mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{ Form::label('description', 'Description')}}
    {{Form::textarea('description', null, ['placeholder' => 'Description', 'id' => 'textarea'])}}
</div><br>
@if($controllerName == "contents")
	<div class="mdc-textfield mdc-textfield--multiline mdc-textfield--fullwidth" data-demo-no-auto-js>
	{{ Form::label('which_page', 'Pages')}}<br>
    {{Form::select('which_page', get_pages() ,null, ['placeholder' => 'Select Page', 'class' => 'mdc-select'])}}
	</div><br>
@endif
<div class="mdc-textfield mdc-textfield--multiline mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{ Form::label('thumbnail_image', 'Thumbnail Image')}}
    @if(!empty($data->thumbnail_image))
    	<div class="mdc-ripple-surface mdc-elevation--z2" data-demo-no-js="" tabindex="0">
    		{{Html::image($data->thumbnail_image)}}
    	</div><br>
    @endif
    	{{Form::file('thumbnail_image', null, ['placeholder' => 'Thumbnail Image'])}}
      	<p class="text-danger">{{$errors->first('thumbnail_image')}}</p>
</div><br>