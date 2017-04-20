<div class="row gray full-width page-header vertical-align-table">
		<div class="row full-width padding-top-bottom-50 vertical-align-cell">
			<div class="row">
				<div class="page-header-left">
					<h1>{{$name}}</h1>
				</div>
				<div class="page-header-right">
					<div class="bread-crumb-container">
						<label>YOU ARE HERE:</label>
						<ul class="bread-crumb">
							<li>
								<a title="Home" href="{{url('/')}}">
									HOME
								</a>
							</li>
							<li class="separator">
								&#47;
							</li>
							@if(!empty($title))
								<li>
									<a title="{{$name}}" href="{{url('/'.$controllerName.'')}}">
									{{$name}}
									</a>
								</li>
								<li class="separator">
									&#47;
								</li>
								<li>
									{{$title}}
								</li>
							@else
								<li>
									{{$name}}
								</li>
							@endif

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix">