<div class="mdc-textfield mdc-textfield--fullwidth" data-demo-no-auto-js>
	{{Form::text('name', null, ['class' => 'mdc-textfield__input', 'placeholder' => 'Client Name', 'aria-label' => 'Client Name'])}}
	<p class="text-danger">{{$errors->first('name')}}</p>
</div><br>
<div class="mdc-textfield mdc-textfield--multiline mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{ Form::label('logo', 'Logo')}}<br>
    @if(!empty($data->logo))
    	<div class="mdc-ripple-surface mdc-elevation--z2" data-demo-no-js="" tabindex="0">
    		{{Html::image($data->logo)}}
    	</div><br>
    @endif
    	{{Form::file('logo', null, ['placeholder' => 'Logo'])}}
      	<p class="text-danger">{{$errors->first('logo')}}</p>
</div><br>