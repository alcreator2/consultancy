<div class="row page-margin-top-section">
    <div class="column column-1-2">
        <h3 class="box-header">{{$data['mission']->title}}</h3>
        <p class="description">{{$data['mission']->excerpt}}</p>
        <p>{!! $data['mission']->description !!}</p>
        <div class="page-margin-top">
            <a class="more" href="{{Url('/about-us')}}" title="READ MORE"><span>READ MORE</span></a>
        </div>
    </div>
    <div class="column column-1-2">
        <h3 class="box-header">POPULAR QUESTIONS</h3>
        <ul class="accordion margin-top-40 clearfix">
            @foreach($data['faqs'] as $index => $faq)
            <li>
                @if($index == 0)
                    <div id="accordion-using-synthetic">
                        <h4>{{$faq->question}}</h4>
                    </div>
                    <p>{{$faq->answer}}</p>
                @elseif($index == 1)
                    <div id="accordion-parts-replacements">
                        <h4>{{$faq->question}}</h4>
                    </div>
                    <p>{{$faq->answer}}</p>
                @else
                    <div id="accordion-track-routine">
                        <h4>{{$faq->question}}</h4>
                    </div>
                    <p>{{$faq->answer}}</p>
                @endif

            </li>
            @endforeach
        </ul>
    </div>
</div>  