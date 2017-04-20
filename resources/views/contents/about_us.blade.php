@extends('app')
@section('content')
	@include('layouts.partials.breadcumb',['name' => 'ABOUT US'])
	@include('layouts.partials.overview')
	@include('layouts.partials.gallery')
	@include('layouts.partials.explore')
	@include('layouts.partials.mission')
	@include('layouts.partials.clients')
@stop