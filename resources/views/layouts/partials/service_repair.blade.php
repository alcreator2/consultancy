<div class="row full-width page-padding-top-section">
    <div class="row">
        <h2 class="box-header">{{$data['services']->title}}</h2>
        <p class="description align-center">{{$data['services']->excerpt}}</p>

        @if(count($data['serviceBanner']) > 0)
        <ul class="services-list clearfix page-margin-top">
            @foreach($data['serviceBanner'] as $service)
            <li>
                <a href="{{url('/services')}}" title="{{$service->title}}">
                    @if(!empty($service->path))
                        {{Html::image(getBanners($service->path), $service->title)}}
                    @else
                        <img src="images/samples/390x260/image_01.jpg" alt="">
                    @endif
                </a>
                <h4 class="box-header"><a href="{{ url('/services')}}" title="{{$service->title}}">{{$service->title}}<span class="template-arrow-menu"></span></a></h4>
            </li>
            @endforeach
        </ul>
        @endif
        <div class="align-center margin-top-40 padding-bottom-87">
            <a class="more" href="{{url('/services')}}" title="VIEW ALL SERVICES"><span>VIEW ALL SERVICES</span></a>
        </div>
    </div>
</div>