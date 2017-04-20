@if(isset($data))
    {!! Form::model($data, ['route' => ['admin.'.$controllerName.'.update' , $data->id], 'method' => 'PUT', 'files' => 'true']) !!}
@else
    {!! Form::open(['route' => 'admin.'.$controllerName.'.store', 'method' => 'POST', 'files' => 'true']) !!}
@endif
    @if($controllerName == "products" || $controllerName == "projects" || $controllerName == "contents")
        @include('admin.products._form')
    @endif
@if($controllerName == "ratings")
	@include('admin.ratings._form')
@endif
@if($controllerName == "clients")
    @include('admin.clients._form')
@endif
@if($controllerName == "faqs")
    @include('admin.faqs._form')
@endif
@if($controllerName == "banners")
    @include('admin.banners._form')
@endif

   
<button type="submit" class="mdc-button mdc-button--raised mdc-button--primary">
    Submit
</button>
<a class="mdc-button mdc-button--raised mdc-button--accent" href="{{ route('admin.'.$controllerName.'.index') }}">
    Cancel
</a>

{!! Form::close() !!}
