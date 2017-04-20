 <div class="header-container">
<!--<div class="header-container sticky">-->
    <div class="vertical-align-table column-1-1">
        <div class="header clearfix">
            <div class="logo vertical-align-cell">
                <h1><a href="{{url('/')}}" title="Sthung Engineering Pvt. Ltd">{{Html::image('images/sthung.jpg', 'Sthung Engineering Pvt. Ltd', array('height' => '60px', 'width' => '60px'))}} <span>Sthung Engineering</span></a></h1>
            </div>
            <a href="index.html#" class="mobile-menu-switch vertical-align-cell">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </a>
            <div class="menu-container clearfix vertical-align-cell">
                <nav>
                    <ul class="sf-menu">
                        @include('layouts.partials._nav_partials')
                    </ul>
                </nav>
                <div class="mobile-menu-container">
                    <div class="mobile-menu-divider"></div>
                    <nav>
                        <ul class="mobile-menu collapsible-mobile-submenus">
                            @include('layouts.partials._nav_partials')
                        </ul>
                    </nav>
                </div>                      
            </div>
        </div>
    </div>
</div><!-- Slider Revolution -->