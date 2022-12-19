@extends('layouts.page')

@section('title-block','Туристические маршруты')





@section('content')
    <main id="main" class="site-main">
        <div class="filter-group filter-business">
            <div class="categoryes-filter">
                <div class="filter layout-02">
                    <div class="select-group">
                        <div class="select-box select-country">

                            <select name="Categories" class="Categories" id="filter-route">
                                <option value="">Обзорные точки</option>
                                @foreach($spots as $spot)
                                    <option value="{{$spot->id}}" class="option">{{$spot->name}}</option>
                                @endforeach

                            </select>

                            <div class="filter-control" tabindex="0">
                                <span class="current">Обзорные точки</span>
                                <ul class="list spot-filter">
                                    @foreach($spots as $spot)
                                        <li data-value="{{$spot->id}}" class="option selected focus">{{$spot->name}}</li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                        <div class="select-box select-cat">

                            <select name="Categories" class="Categories" id="filter-route-category">
                                <option value="">Категории</option>
                                <option value="1" class="option">Пеший</option>
                                <option value="2" class="option">Велосипедный</option>
                                <option value="3" class="option">Водный</option>
                            </select>

                            <div class="filter-control" tabindex="0">
                                <span class="current">Категории</span>
                                <ul class="list">
                                    <li data-value="1" class="option">Пеший</li>
                                    <li data-value="2" class="option">Велосипедный</li>
                                    <li data-value="3" class="option">Водный</li>
                                </ul>
                            </div>
                        </div>



                        <a href="#" class="clear-filter">Очистить фильтры</a>
                    </div>

                </div><!-- .filter -->
            </div>
        </div><!-- .filter-group -->


        <div class="archive-city">
            <div class="col-left">

                <div class="main-primary">
                    <div class="filter-mobile">
                        <ul>
                            <li><a class="mb-filter mb-open" href="#filterForm">Filter</a></li>
                            <li><a class="mb-sort mb-open" href="#sortForm">Sort</a></li>
                        </ul>
                        <div class="mb-maps"><a class="mb-maps" href="#"><i class="las la-map-marked-alt"></i></a></div>
                    </div>
                    <div class="top-area top-area-filter">
                        <div class="filter-left">
                            <!--                            <span class="result-count"><span class="count">4</span> результата</span>
                                                        <a href="#" class="clear">Clear filter</a>-->
                        </div>
                        <div class="filter-center">
                            <div class="place-layout">
                                <a class="active" href="#" data-layout="layout-grid"><i class="las la-border-all icon-large"></i></a>
                                <a class="" href="#" data-layout="layout-list"><i class="las la-list icon-large"></i></a>
                            </div>
                        </div>
                        <div class="filter-right">
                            <div class="select-box">
                                <select name="sort_by" class="sort-by">
                                    <option value="">Сортировать по</option>
                                    <option value="newest">Newest</option>
                                    <option value="rating">Average rating</option>
                                    <option value="featured">Featured</option>
                                </select>
                                <div class="filter-control" tabindex="0">
                                    <span class="current">Сортировать по</span>
                                    <ul class="list">
                                        <li data-value="" class="option selected focus">Sort by</li>
                                        <li data-value="newest" class="option">Newest</li>
                                        <li data-value="rating" class="option">Average rating</li>
                                        <li data-value="featured" class="option">Featured</li>
                                    </ul>
                                </div>
                            </div><!-- .select-box -->

                            <div class="show-map">
                                <span>Карта</span>
                                <a href="#" class="icon-toggle"></a>
                            </div><!-- .show-map -->
                        </div>
                    </div>
                    <div class="area-places">

                        @foreach($routes as $route)


                            <div class="place-item layout-02 place-hover" data-maps_name="{{$route->id}}">
                                <div class="place-inner">
                                    <div class="place-thumb">
                                        <a class="entry-thumb" href="{{route('single-route',$route->id)}}"><img src="{{\Illuminate\Support\Facades\Storage::url($route->images)}}" alt="{{$route->images}}"></a>
                                        <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>
                                        </a>

                                            @if($route->getCategory()->id == 1)
                                            <a class="entry-category purple-light" href="#">
                                                <i class="las la-walking"></i><span>{{$route->getCategory()->name}}</span>

                                            @elseif($route->getCategory()->id == 2)
                                                    <a class="entry-category green-light" href="#">
                                                <i  class="las la-biking"></i><span>{{$route->getCategory()->name}}</span>

                                            @else
                                                            <a class="entry-category blue-light" href="#">
                                                <i  class="las la-ship"></i><span>{{$route->getCategory()->name}}</span>

                                            @endif
                                        </a>
                                    </div>
                                    <div class="entry-detail">
                                        <div class="entry-head">
                                            <div class="place-type list-item">
                                                <span>{{$route->getCategory()->name}}</span>
                                            </div>

                                        </div>
                                        <h3 class="place-title"><a href="{{route('single-route',$route->id)}}">{{$route->name}}</a></h3>

                                        <div class="entry-bottom">
                                            <div class="place-preview">
                                                <div class="place-rating">
                                                    <span>{{$route->getAverageMark()}}</span>
                                                    <i class="la la-star"></i>
                                                </div>
                                                <span class="count-reviews">({{$route->reviewRoutes->count()}} отзыва)</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                    @endforeach




<!--                        <div class="place-item layout-02 place-hover" data-maps_name="retro_fitness">
                            <div class="place-inner">
                                <div class="place-thumb">
                                    <a class="entry-thumb" href="single-1.html"><img src="images/listing/02.jpg" alt=""></a>
                                    <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>
                                    </a>
                                    <a class="entry-category blue" href="#">
                                        <i class="las la-dumbbell"></i><span>Gym</span>
                                    </a>
                                    <a href="#" class="author" title="Author"><img src="images/avatars/male-2.jpg" alt="Author"></a>
                                </div>
                                <div class="entry-detail">
                                    <div class="entry-head">
                                        <div class="place-type list-item">
                                            <span>Gym</span>
                                        </div>
                                        <div class="place-city">
                                            <a href="#">Bordeaux</a>
                                        </div>
                                    </div>
                                    <h3 class="place-title"><a href="single-1.html">Retro Fitness</a></h3>
                                    <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
                                    <div class="entry-bottom">
                                        <div class="place-preview">
                                            <div class="place-rating">
                                                <span>5.0</span>
                                                <i class="la la-star"></i>
                                            </div>
                                            <span class="count-reviews">(2 Reviews)</span>
                                        </div>
                                        <div class="place-price">
                                            <span>$$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-item layout-02 place-hover" data-maps_name="body_spa">
                            <div class="place-inner">
                                <div class="place-thumb">
                                    <a class="entry-thumb" href="single-1.html"><img src="images/listing/03.jpg" alt=""></a>
                                    <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>
                                    </a>
                                    <a class="entry-category purple" href="#">
                                        <i class="las la-spa"></i><span>Massage</span>
                                    </a>
                                    <a href="#" class="author" title="Author"><img src="images/avatars/female-1.jpg" alt="Author"></a>
                                </div>
                                <div class="entry-detail">
                                    <div class="entry-head">
                                        <div class="place-type list-item">
                                            <span>Massage</span>
                                        </div>
                                        <div class="place-city">
                                            <a href="#">Lyon</a>
                                        </div>
                                    </div>
                                    <h3 class="place-title"><a href="single-1.html">Renew Body Spa</a></h3>
                                    <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                    <div class="entry-bottom">
                                        <div class="place-preview">
                                            <div class="place-rating">
                                                <span>5.0</span>
                                                <i class="la la-star"></i>
                                            </div>
                                            <span class="count-reviews">(2 Reviews)</span>
                                        </div>
                                        <div class="place-price">
                                            <span>$$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-item layout-02 place-hover" data-maps_name="antoinette">
                            <div class="place-inner">
                                <div class="place-thumb">
                                    <a class="entry-thumb" href="single-1.html"><img src="images/listing/04.jpg" alt=""></a>
                                    <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>
                                    </a>
                                    <a class="entry-category charcoal-purple" href="#">
                                        <i class="las la-shopping-bag"></i><span>Clothing Shop</span>
                                    </a>
                                    <a href="#" class="author" title="Author"><img src="images/avatars/female-2.jpg" alt="Author"></a>
                                </div>
                                <div class="entry-detail">
                                    <div class="entry-head">
                                        <div class="place-type list-item">
                                            <span>Clothing Shop</span>
                                        </div>
                                        <div class="place-city">
                                            <a href="#">Nantes</a>
                                        </div>
                                    </div>
                                    <h3 class="place-title"><a href="single-1.html">Antoinette</a></h3>
                                    <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                    <div class="entry-bottom">
                                        <div class="place-preview">
                                            <span class="no-reviews">(no reviews)</span>
                                        </div>
                                        <div class="place-price">
                                            <span>$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-item layout-02 place-hover" data-maps_name="vago_restaurant">
                            <div class="place-inner">
                                <div class="place-thumb">
                                    <a class="entry-thumb" href="single-1.html"><img src="images/listing/05.jpg" alt=""></a>
                                    <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>
                                    </a>
                                    <a class="entry-category rosy-pink" href="#">
                                        <i class="las la-utensils"></i><span>Restaurant</span>
                                    </a>
                                    <a href="#" class="author" title="Author"><img src="images/avatars/male-3.jpg" alt="Author"></a>
                                </div>
                                <div class="entry-detail">
                                    <div class="entry-head">
                                        <div class="place-type list-item">
                                            <span>Restaurant</span>
                                        </div>
                                        <div class="place-city">
                                            <a href="#">Paris</a>
                                        </div>
                                    </div>
                                    <h3 class="place-title"><a href="single-1.html">Vago Restaurant</a></h3>
                                    <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                    <div class="entry-bottom">
                                        <div class="place-preview">
                                            <span class="no-reviews">(no reviews)</span>
                                        </div>
                                        <div class="place-price">
                                            <span>$$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-item layout-02 place-hover" data-maps_name="kathay_cinema">
                            <div class="place-inner">
                                <div class="place-thumb">
                                    <a class="entry-thumb" href="single-1.html"><img src="images/listing/06.jpg" alt=""></a>
                                    <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>
                                    </a>
                                    <a class="entry-category green" href="#">
                                        <i class="las la-film"></i><span>Cinema</span>
                                    </a>
                                    <a href="#" class="author" title="Author"><img src="images/avatars/female-3.jpg" alt="Author"></a>
                                </div>
                                <div class="entry-detail">
                                    <div class="entry-head">
                                        <div class="place-type list-item">
                                            <span>Cinema</span>
                                        </div>
                                        <div class="place-city">
                                            <a href="#">Paris</a>
                                        </div>
                                    </div>
                                    <h3 class="place-title"><a href="single-1.html">Kathay Cinema</a></h3>
                                    <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                    <div class="entry-bottom">
                                        <div class="place-preview">
                                            <div class="place-rating">
                                                <span>5.0</span>
                                                <i class="la la-star"></i>
                                            </div>
                                            <span class="count-reviews">(2 Reviews)</span>
                                        </div>
                                        <div class="place-price">
                                            <span>$$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-item layout-02 place-hover" data-maps_name="jardin_club">
                            <div class="place-inner">
                                <div class="place-thumb">
                                    <a class="entry-thumb" href="single-1.html"><img src="images/listing/07.jpg" alt=""></a>
                                    <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>
                                    </a>
                                    <a class="entry-category orange" href="#">
                                        <i class="las la-cocktail"></i><span>Nightlife</span>
                                    </a>
                                    <a href="#" class="author" title="Author"><img src="images/avatars/male-4.jpg" alt="Author"></a>
                                </div>
                                <div class="entry-detail">
                                    <div class="entry-head">
                                        <div class="place-type list-item">
                                            <span>Nightlife</span>
                                        </div>
                                        <div class="place-city">
                                            <a href="#">Bordeaux</a>
                                        </div>
                                    </div>
                                    <h3 class="place-title"><a href="single-1.html">Jardin Club</a></h3>
                                    <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                    <div class="entry-bottom">
                                        <div class="place-preview">
                                            <div class="place-rating">
                                                <span>5.0</span>
                                                <i class="la la-star"></i>
                                            </div>
                                            <span class="count-reviews">(2 Reviews)</span>
                                        </div>
                                        <div class="place-price">
                                            <span>$$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-item layout-02 place-hover" data-maps_name="vivi">
                            <div class="place-inner">
                                <div class="place-thumb">
                                    <a class="entry-thumb" href="single-1.html"><img src="images/listing/08.jpg" alt=""></a>
                                    <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>
                                    </a>
                                    <a class="entry-category purple" href="#">
                                        <i class="las la-spa"></i><span>Massage</span>
                                    </a>
                                    <a href="#" class="author" title="Author"><img src="images/avatars/female-4.jpg" alt="Author"></a>
                                </div>
                                <div class="entry-detail">
                                    <div class="entry-head">
                                        <div class="place-type list-item">
                                            <span>Massage</span>
                                        </div>
                                        <div class="place-city">
                                            <a href="#">Lyon</a>
                                        </div>
                                    </div>
                                    <h3 class="place-title"><a href="single-1.html">Vivi Body Spa</a></h3>
                                    <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                    <div class="entry-bottom">
                                        <div class="place-preview">
                                            <div class="place-rating">
                                                <span>5.0</span>
                                                <i class="la la-star"></i>
                                            </div>
                                            <span class="count-reviews">(2 Reviews)</span>
                                        </div>
                                        <div class="place-price">
                                            <span>$$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
<!--                    <div class="pagination">
                        <div class="pagination__numbers">
                            <span>1</span>
                            <a title="2" href="#">2</a>
                            <a title="3" href="#">3</a>
                            <a title="Next" href="#">
                                <i class="la la-angle-right"></i>
                            </a>
                        </div>
                    </div>-->
                </div><!-- .main-primary -->
            </div><!-- .col-left -->
            <div class="col-right">
                <div class="filter-head">
                    <h2>Карта</h2>
                    <a href="#" class="close-maps">Закрыть</a>
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
                @foreach ($routes as $route)

            {id:'{{$route->id}}', images:'{{$route->images}}', start_point: '{{$route->start_point}}', end_point: '{{$route->end_point}}', points: '{{$route->points}}', name: '{{$route->name}}', category: '{{$route->getCategory()->name}}', price: '{{$route->price}}', },

            @endforeach
        ];




    </script>

    <script src="{{asset('/js/map-route.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhg-WuaaDabIe_9efqfolUCAbgrr98C4g&callback=initMap" async defer></script>

@endsection
