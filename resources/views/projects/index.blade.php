@extends('app')
@section('content')
	@include('layouts.partials.breadcumb',['name' => 'PROJECTS'])
	<div class="clearfix">
		<div class="row">
			<ul class="galleries-list isotope">
				@foreach($projects as $project)
				<li class="transmission">
					<a href="{{ route('projects.show', $project->slug)}}" title="{{$project->title}}">
						@if(false == empty($project->thumbnail_image))
							{{ Html::image($project->thumbnail_image) }}
						@else
							<img src="images/samples/270x180/image_01.jpg" alt="">
						@endif
					</a>
					<div class="view align-center">
						<div class="vertical-align-table">
							<div class="vertical-align-cell">
								<p class="description">{{$project->title}}</p>
								<a class="more simple" href="{{ route('projects.show', $project->slug)}}" title="READ MORE">READ MORE</a>
							</div>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
	<br><br><br>
@stop