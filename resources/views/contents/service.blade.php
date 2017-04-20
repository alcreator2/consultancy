@extends('app')
@section('content')
	@include('layouts.partials.breadcumb',['name' => 'Services'])
	@include('layouts.partials.services')
	@include('layouts.partials.gallery')
	@include('layouts.partials.explore')
	@include('layouts.partials.mission')
	@include('layouts.partials.clients')
@stop