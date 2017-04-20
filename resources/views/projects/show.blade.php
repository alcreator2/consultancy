@extends('app')
@section('content')
	@include('layouts.partials.breadcumb',['name' => 'OUR PROJECTS', 'title' => $data->title, 'controllerName' => 'projects'])
		<div class="row">
			<div class="row page-margin-top-section">
			    <div class="row">
			        <h2 class="box-header">{{$data->title}}</h2>
			        <p class="description align-center">{{$data->excerpt}}</p>
			    </div>
			    <div class="row">
			    	<div class="row margin-top-70">
						<div class="column column-1-4">
							<h6 class="box-header page-margin-top">Other Products</h6><br>
							<ul class="vertical-menu">
								@foreach($all as $list)
								<li {{menuParamSelected($list->slug)}}>
									<a href="{{route('projects.show', $list->slug)}}" title="{{$list->name}}">
										{{$list->title}}
										<span class="template-arrow-menu"></span>
									</a>
								</li>
								@endforeach
							</ul>
						</div>
						<div class="column column-3-4">
							<div class="row">
								<div class="column column-1-2">
									@if(!empty($data->thumbnail_image))
										{{Html::image($data->thumbnail_image)}}
									@endif
								</div>
							</div>
							<div class="row page-margin-top">
								<div class="column-1-1">
									<p class="margin-top-20">{!! $data->description !!}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><br>
		@include('layouts.partials.explore')

@stop