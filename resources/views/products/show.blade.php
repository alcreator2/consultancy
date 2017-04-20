@extends('app')
@section('content')
	@include('layouts.partials.breadcumb',['name' => 'OUR PRODUCTS', 'title' => $data->title, 'controllerName' => 'products'])
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
									<a href="{{route('products.show', $list->slug)}}" title="{{$list->name}}">
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
										{{Html::image($data->thumbnail_image)}}
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