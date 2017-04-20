<div class="mdc-textfield mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{Form::text('name', null, ['class' => 'mdc-textfield__input', 'placeholder' => 'Name*', 'aria-label' => 'Subject'])}}
    <p class="text-danger">{{$errors->first('name')}}</p>
</div><br>
<div class="mdc-textfield mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{Form::text('title', null, ['class' => 'mdc-textfield__input', 'placeholder' => 'Title For Banner', 'aria-label' => 'Subject'])}}
    <p class="text-danger">{{$errors->first('title')}}</p>
</div><br>
<div class="mdc-textfield mdc-textfield--multiline mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{Form::textarea('excerpt', null, ['class' => 'mdc-textfield__input', 'placeholder' => 'Excerpt', 'rows' => '2', 'aria-label' => 'Excerpt'])}}
</div><br>
<div class="mdc-textfield mdc-textfield--multiline mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{ Form::label('which_page', 'Select Banner For*')}}<br>
    {{Form::select('which_page', get_banner_type() ,null, ['placeholder' => 'Select Page', 'class' => 'mdc-select'])}}
    <p class="text-danger">{{$errors->first('which_page')}}</p>
</div><br>
<div class="mdc-textfield mdc-textfield--multiline mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{ Form::label('link', 'Button Link For')}}<br>
    {{Form::select('link', get_pages() ,null, ['placeholder' => 'Select Page', 'class' => 'mdc-select'])}}
</div><br>
<div class="mdc-textfield mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{Form::text('link_name', null, ['class' => 'mdc-textfield__input', 'placeholder' => 'Button Name', 'aria-label' => 'Subject'])}}
</div><br>
<div class="mdc-textfield mdc-textfield--multiline mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{ Form::label('which_theme', 'Pages')}}<br>
    {{Form::select('which_theme', get_theme() ,null, ['placeholder' => 'Select Theme', 'class' => 'mdc-select'])}}
</div><br>
<div class="mdc-textfield mdc-textfield--multiline mdc-textfield--fullwidth" data-demo-no-auto-js>
    {{ Form::label('path', 'Banner Image*')}}
    @if(!empty($data->path))
        <div class="mdc-ripple-surface mdc-elevation--z2" data-demo-no-js="" tabindex="0">
            {{ (Html::image(getThumbnails($data->path))) }}
        </div><br>
    @endif
        {{Form::file('path', null, ['placeholder' => 'Thumbnail Image'])}}
        <p class="text-danger">{{$errors->first('path')}}</p>
</div><br>