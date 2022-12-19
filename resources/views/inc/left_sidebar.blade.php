<div class="col-lg-3">
    <div class="sidebar">
        <div class="sidebar--border">
            <aside class="widget widget-shadow-left widget-category">
                <h3 class="widget-title @if(Route::is('about')) active @endif "><a href="{{route('about')}}">О парке</a></h3>
                <div class="widget-content">
                    <ul>
                        <li @if(Route::is('goals')) class="active" @endif><a href="{{route('goals')}}">Цели и задачи</a></li>
                        <li @if(Route::is('nature')) class="active" @endif><a href="{{route('nature')}}">Природа</a></li>
                        <li @if(Route::is('activity')) class="active" @endif><a href="{{route('activity')}}">Научная деятельность</a></li>
                    </ul>
                </div>
            </aside><!-- .widget-category -->

        </div>


    </div><!-- .sidebar -->
</div>
