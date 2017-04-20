<div class="mdc-textfield mdc-textfield--fullwidth" data-demo-no-auto-js>
	{{Form::text('question', null, ['class' => 'mdc-textfield__input', 'placeholder' => 'Question', 'aria-label' => 'Client Name'])}}
	<p class="text-danger">{{$errors->first('question')}}</p>
</div><br>
<div class="mdc-textfield mdc-textfield--fullwidth" data-demo-no-auto-js>
	{{Form::textarea('answer', null, ['class' => 'mdc-textfield__input', 'placeholder' => 'Answer', 'aria-label' => 'Client Name'])}}
	<p class="text-danger">{{$errors->first('answer')}}</p>
</div><br><br>
