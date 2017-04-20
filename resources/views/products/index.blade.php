@extends('app')
@section('content')
	@include('layouts.partials.breadcumb',['name' => 'OUR PRODUCTS'])
		<div class="row">
			<ul class="services-list clearfix padding-top-70">
				@foreach($products as $product)
				<li>
					<a href="{{ route('products.show', $product->slug)}}" title="Engine Diagnostics">
						@if(!empty($product->thumbnail_image))
							{{Html::image($product->thumbnail_image, $product->title)}}
						@endif
					</a>
					<h4 class="box-header"><a href="{{ route('products.show', $product->slug)}}" title="{{$product->title}}">{{ $product->title }}<span class="template-arrow-menu"></span></a></h4>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@stop