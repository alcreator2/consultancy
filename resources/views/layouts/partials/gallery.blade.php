<div class="row full-width page-margin-top-section">
    <ul class="galleries-list clearfix page-margin-top">
        @foreach($data['projects'] as $data)
        <li>
            <a href="{{route('projects.show',$data->slug)}}" title="{{$data->title}}">
                @if(!empty($data->thumbnail_image))
                    {{Html::image($data->thumbnail_image)}}
                @else
                    <img src="images/samples/480x320/image_07.jpg" alt="">
                @endif
            </a>
            <div class="view align-center">
                <div class="vertical-align-table">
                    <div class="vertical-align-cell">
                        <p class="description">{{$data->title}}</p>
                        <a class="more simple" href="{{route('projects.show',$data->slug)}}" title="{{$data->title}}">READ MORE</a>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>