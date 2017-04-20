<div class="row full-width gray flex-box page-margin-top-section">
    @if(!empty($data['productBanner']))
    <div class="column column-1-2 background-1" style="background-image: url('{{ asset(getBanners($data['productBanner']->path)) }}')">
    @else
     <div class="column column-1-2 background-1">
    @endif    
        <a class="flex-hide" href="{{ url('/products')}}">
            @if(!empty($data['productBanner']))
                {{Html::image(getBanners($data['productBanner']->path), $data['productBanner']->name)}}
            @else
                <img src="images/samples/960x680/image_01.jpg" alt="">
            @endif
        </a>
    </div>
    <div class="column column-1-2 padding-bottom-66">
        <div class="row padding-left-right-100">
            <h2 class="box-header page-margin-top-section">OUR PRODUCTS</h2>
            <div class="row margin-top-30">
                <div class="column column-1-3">
                    <ul class="list">
                    @foreach( $data['products'] as $index => $product)
                        @if($index < 5 )
                            <li class="template-bullet">{{$product->title}}</li>
                        @endif
                    @endforeach
                    </ul>
                </div>
                <div class="column column-1-3">
                    <ul class="list">
                    @foreach( $data['products'] as $index => $product)
                        @if($index >= 5 && $index < 9)    
                            <li class="template-bullet">{{$product->title}}</li>
                        @endif
                    @endforeach
                    </ul>
                </div>
                <div class="column column-1-3">
                    <ul class="list">
                    @foreach( $data['products'] as $index => $product)
                        @if($index >= 9 && $index < 14)    
                            <li class="template-bullet">{{$product->title}}</li>
                        @endif
                    @endforeach
                    </ul>
                </div>
            </div>
            <div class="align-center margin-top-67 padding-bottom-20">
                <a class="more simple" href="{{Url('/products')}}" title="VIEW FULL LIST"><span>VIEW FULL LIST</span></a>
            </div>
        </div>
    </div>
</div>  