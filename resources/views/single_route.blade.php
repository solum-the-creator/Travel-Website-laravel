@extends('layouts.page')

@section('title-block','Туристический маршрут')





@section('content')
    <main id="main" class="site-main">
        <div class="filter-group filter-business">


        </div><!-- .filter-group -->


        <div class="archive-city ">
            <div class="col-left route-left">

                <div class="main-primary">

                    <div class="route-slick slick-sliders">
                        <div class="banner-sliders slick-slider" data-item="1" data-arrows="false" data-dots="true">
                            @foreach(\Illuminate\Support\Facades\Storage::files('routes_img/') as $image)
                                <div class="item"><img src="{{\Illuminate\Support\Facades\Storage::url($image)}}" alt="slider-01"></div>

                            @endforeach

                        </div>
                    </div><!-- .banner -->

                    <div class="route__left">

                            <ul class="route__breadcrumbs breadcrumbs">
                                <li><a title="France" href="{{route('routes')}}">Все маршруты</a></li>
                                <li><a title="France" href="#">Велосипедный маршрут</a></li>
                            </ul><!-- .place__breadcrumbs -->

                        <div class="spots-box">
                            <h1>{{$route->name}}</h1>
                            <p class="spot-desc">{{$route->description}}</p>
                        </div>

                        <div class="spots-box">
                            <h3>Обзорные точки маршрута</h3>
                            <ul class="spot-list first-open">
                                @foreach($spots as $spot)
                                    <li>
                                        <h4 class="spot-title"><a href="#">{{$spot->getCategory()->name}}</a></h4>
                                        <div class="spot-content">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img  src="{{\Illuminate\Support\Facades\Storage::url($spot->image)}}" alt="">

                                                </div>
                                                <div class="col-lg-7 spot-right">
                                                    <h3>{{$spot->name}} </h3>
                                                    <p >{{$spot->description}}</p>

                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="spots-box">
                            <h3>Контактная информация</h3>
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="spots__contact">
                                        <li>
                                            <i class="la la-phone"></i>
                                            <a title="00 343 7859" href="tel:003437859">00 343 7859</a>
                                        </li>
                                        <li>
                                            <i class="la la-globe"></i>
                                            <a title="www.abcsite.com" href="www.abcsite.com">www.site.by</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="spots__contact">
                                        <li>
                                            <i class="la la-facebook-f"></i>
                                            <a title="fb.com/abc" href="fb.com/abc">facebook.com/</a>
                                        </li>
                                        <li>
                                            <i class="la la-instagram"></i>
                                            <a title="instagram.com/abc" href="instagram.com/abc">instagram.com/</a>
                                        </li>
                                    </ul>
                                </div>


                            </div>



                        </div><!-- .place__box -->
                        <div class="spots-box">
                            <h3>Часто задаваемые вопросы</h3>
                            <ul class="faqs-accordion">
                                <li>
                                    <h4>Правила отмены бронирования</h4>
                                    <div class="desc"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa deleniti eaque fugit quis repellat! A, aliquid distinctio earum enim, exercitationem fugit in ipsum magnam quidem quo ratione, saepe sit ullam!</p></div>
                                </li>
                                <li>
                                    <h4>Правила безопасности</h4>
                                    <div class="desc"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid at, aut, deserunt dolorem dolorum ducimus earum labore, magni optio quis quo sapiente sequi sunt temporibus ullam veritatis voluptas voluptates.</p></div>
                                </li>
                                <li>
                                    <h4>Публичный договор</h4>
                                    <div class="desc"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, aperiam atque exercitationem iure nostrum nulla repellendus tenetur. Accusamus aliquid dolores dolorum esse fugiat, fugit maxime officiis optio perspiciatis placeat voluptatibus.</p></div>
                                </li>
                            </ul>
                        </div><!-- .place__box -->
                        @include('inc.route_reviews')


                    </div>



                </div><!-- .main-primary -->
            </div><!-- .col-left -->
            <div class="col-right">
                <div class="filter-head">
                    <h2>Maps</h2>
                    <a href="#" class="close-maps">Close</a>
                </div>
                <div class="entry-map">
                    <div id="place-map-filter"></div>
                </div>
            </div><!-- .col-right -->
        </div><!-- .archive-city -->
    </main><!-- .site-main -->




@endsection

@section('map-script')

    <script type="text/javascript">


        var routes_data = [


            {id:'{{$route->id}}', images:'{{$route->images}}', start_point: '{{$route->start_point}}', end_point: '{{$route->end_point}}', points: '{{$route->points}}', name: '{{$route->name}}', category: '{{$route->getCategory()->name}}', price: '{{$route->price}}', },


        ];

        var spots_data = [
                @foreach ($spots as $spot)

            {id:'{{$spot->id}}', image:'{{$spot->image}}', coordinates: '{{$spot->coordinates}} ', name: '{{$spot->name}}', category: '{{$spot->getCategory()->name}}', },

            @endforeach
        ];




    </script>

    <script src="{{asset('/js/map-single-route.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhg-WuaaDabIe_9efqfolUCAbgrr98C4g&callback=initMap" async defer></script>

@endsection
