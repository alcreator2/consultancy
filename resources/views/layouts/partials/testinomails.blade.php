@if(false == empty(getBanners($data['testimonial'])))
    <div class="row full-width padding-top-70 padding-bottom-66 parallax parallax-1 {{$data['testimonial']->which_theme}}" style="background-image: url('{{ asset(getBanners($data['testimonial']->path)) }}')">
@else
    <div class="row full-width padding-top-70 padding-bottom-66 parallax parallax-1">
@endif   
    <div class="row testimonials-container">
        <a href="#" class="slider-control left template-arrow-left-1"></a>
        <ul class="testimonials-list">
            @foreach($data['ratings'] as $rating)
                <li>
                    <div class="hexagon small"><div class="sl-small-pen"></div></div>
                    <p>"{{$rating->message}}"</p>
                    <h6>{{$rating->full_name}}</h6>
                    <!--<div class="author-details">CEO OF NEW PORT COMPANY</div>-->
                </li>
            @endforeach
        </ul>
        <a href="#" class="slider-control right template-arrow-left-1"></a>
    </div>
</div>