@if(count($data['clients']) > 0)
<div class="row full-width top-border page-margin-top-section padding-bottom-50">
    <div class="row">
        <div class="our-clients-list-container page-margin-top">
            <ul class="our-clients-list">
                @foreach($data['clients'] as $data)
                <li>
                    {{Html::image($data->logo, $data->name)}}
                </li>
                @endforeach
            </ul>
            <div class="our-clients-pagination"></div>
        </div>
    </div>
</div>
@else
<br><br>
@endif