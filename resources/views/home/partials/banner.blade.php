<div class="revolution-slider-container">
    <div class="revolution-slider">
        <ul style="display: none;">
            @foreach($data['banners'] as $index => $banner)
            @if($index == 0)
            <li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
                <!-- MAIN IMAGE -->
                {{Html::image(getBanners($banner->path), 'slidebg1', array('data-bgfit' => 'cover'))}}
                <!-- LAYERS -->
                <!-- LAYER 01 -->
                <div class="tp-caption customin customout"
                    data-x="center"
                    data-y="97"
                    data-start="500"
                    data-transform_in="x:0;y:-40;o:0;s:1200;e:easeInOutExpo;"
                    data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                    >
                    <div class="hexagon"><div class="sl-small-lightbulb"></div></div>
                </div>
                <!-- LAYER 02 -->
                <div class="tp-caption customin customout"
                    data-x="center"
                    data-y="262"
                    data-start="900"
                    data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"
                    data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                    >
                    <h2><a target="_top" href="{{ getRoute($banner->link)}}" title="{{$banner->title}}" class="{{$banner->which_theme}}">{{ $banner->title }}</a></h2>
                </div>
                <!-- LAYER 03 -->
                <div class="tp-caption customin customout"
                    data-x="center"
                    data-y="343"
                    data-start="1100"
                    data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"
                    data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                    >
                    
                    <p class="description {{$banner->which_theme}}">{{ $banner->excerpt}}</p>
                </div>
                <!-- LAYER 04 -->
                <div class="tp-caption customin customout"
                    data-x="center"
                    data-y="441"
                    data-start="1300"
                    data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"
                    data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                    >
                    @if(!empty($banner->link))
                    <div class="align-center">
                        <a target="_top" class="more simple" href="{{ getRoute($banner->link)}}" title="{{$banner->link_name}}"><span>{{$banner->link_name}}</span></a>
                    </div>
                    @endif
                </div>
                <!-- / -->
            </li>
            @endif
            @if($index == 1)
            <li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
                <!-- MAIN IMAGE -->
                {{Html::image(getBanners($banner->path), 'slidebg1', array('data-bgfit' => 'cover'))}}
                <!-- LAYERS -->
                <div class="tp-caption customin customout"
                    data-x="center"
                    data-y="97"
                    data-start="500"
                    data-transform_in="x:0;y:-40;o:0;s:1200;e:easeInOutExpo;"
                    data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                    >
                    <div class="hexagon"><div class="sl-small-speed-gauge"></div></div>
                </div>
                <!-- LAYER 02 -->
                <div class="tp-caption customin customout"
                    data-x="center"
                    data-y="262"
                    data-start="900"
                    data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"
                    data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                    >
                    <h2><a target="_top" href="{{ getRoute($banner->link)}}" title="{{$banner->title}}" class="{{$banner->which_theme}}">{{$banner->title}}</a></h2>
                </div>
                <!-- LAYER 03 -->
                <div class="tp-caption customin customout"
                    data-x="center"
                    data-y="343"
                    data-start="1100"
                    data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"
                    data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                    >
                    <p class="description {{$banner->which_theme}}">{{$banner->excerpt}}</p>
                </div>
                <!-- LAYER 04 -->
                <div class="tp-caption customin customout"
                    data-x="center"
                    data-y="441"
                    data-start="1300"
                    data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"
                    data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                    >
                    @if(!empty($banner->link))
                    <div class="align-center">
                        <a target="_top" class="more simple" href="{{Url('/services')}}" title="{{$banner->link_name}}"><span>{{$banner->link_name}}</span></a>
                    </div>
                    @endif
                </div>
                <!-- / -->
            </li>
            @endif
            
            @if($index == 2)
            <li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
                {{Html::image(getBanners($banner->path), 'slidebg1', array('data-bgfit' => 'cover'))}}
                <div class="tp-caption customin customout"
                    data-x="center"
                    data-y="97"
                    data-start="500"
                    data-transform_in="x:0;y:-40;o:0;s:1200;e:easeInOutExpo;"
                    data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                    >
                    <div class="hexagon"><div class="sl-small-road"></div></div>
                </div>
                <div class="tp-caption customin customout"
                    data-x="center"
                    data-y="262"
                    data-start="900"
                    data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"
                    data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                    >
                    <h2><a target="_top" href="{{ getRoute($banner->link)}}" title="{{$banner->title}}" class="{{$banner->which_theme}}">{{$banner->title}}</a></h2>
                </div>
                <div class="tp-caption customin customout"
                    data-x="center"
                    data-y="343"
                    data-start="1100"
                    data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"
                    data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                    >
                    <p class="description {{$banner->which_theme}}">{{$banner->excerpt}}</p>
                </div>
                <!-- LAYER 04 -->
                <div class="tp-caption customin customout"
                    data-x="center"
                    data-y="441"
                    data-start="1300"
                    data-transform_in="x:0;y:40;o:0;s:1200;e:easeInOutExpo;"
                    data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;"
                    >
                    @if(!empty($banner->link))
                    <div class="align-center">
                        <a target="_top" class="more simple" href="{{Url('/services')}}" title="{{$banner->link_name}}"><span>{{$banner->link_name}}</span></a>
                    </div>
                    @endif
                </div>
                <!-- / -->
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</div>
<!--/-->