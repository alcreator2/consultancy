<div class="mdc-textfield mdc-textfield--fullwidth" data-demo-no-auto-js>
		{{Form::text('full_name', null, ['class' => 'mdc-textfield__input', 'placeholder' => 'Client Name', 'aria-label' => 'Client Name'])}}
</div><br>
<div class="mdc-textfield mdc-textfield--multiline mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{Form::textarea('message', null, ['class' => 'mdc-textfield__input', 'placeholder' => 'Message', 'rows' => '2', 'aria-label' => 'Message'])}}
    <p class="text-danger">{{$errors->first('message')}}</p>
</div><br>
