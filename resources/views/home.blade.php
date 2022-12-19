@extends('layouts.app')

@section('title-block','Национальный парк Браславские озера')

@section('content')
    <main id="main" class="site-main home-main overflow">
        <div class="site-banner hcg-banner">
            <div class="banner slick-sliders">
                <div class="banner-sliders slick-slider" data-item="1" data-arrows="false" data-dots="false" data-autoplay="autoplay" data-cssease="cubic-bezier(0.7, 0, 0.3, 1)" data-fade="true" data-infinite="true" data-speed="900">
                    <div class="item"><img src="public/images/bg/bg-hero-4.jpeg" alt="Banner"></div>
                    <div class="item"><img src="public/images/bg/bg-hero-5.jpeg" alt="Banner"></div>
                    <div class="item"><img src="public/images/bg/bg-hero-6.jpeg" alt="Banner"></div>
                </div>
            </div><!-- .banner -->
            <div class="container">
                <div class="site-banner__content">
                    <h1 class="site-banner__title">Браславские озёра</h1>
                    <p>Отдыхайте вместе с нами</p>
                    <form action="#" class="site-banner__search layout-02">
                        <div class="field-input">
                            <label for="s">Найти:</label>
                            <input class="site-banner__search__input open-suggestion" id="s" type="text" name="s" placeholder="маршрут, кафе" autocomplete="off">
                            <div class="search-suggestions name-suggestions">
                                <ul>
<!--                                    <li><a href="#"><i class="las la-utensils"></i><span>Restaurant</span></a></li>
                                    <li><a href="#"><i class="las la-spa"></i><span>Beauty</span></a></li>
                                    <li><a href="#"><i class="las la-dumbbell"></i><span>Fitness</span></a></li>
                                    <li><a href="#"><i class="las la-cocktail"></i><span>Nightlight</span></a></li>
                                    <li><a href="#"><i class="las la-shopping-bag"></i><span>Shopping</span></a></li>
                                    <li><a href="#"><i class="las la-film"></i><span>Cinema</span></a></li>-->
                                </ul>
                            </div>
                        </div><!-- .site-banner__search__input -->
                        <div class="field-input">
                            <label for="loca"></label>
                            <input class="site-banner__search__input open-suggestion" id="loca" type="text" name="where" placeholder="" autocomplete="off">
                            <div class="search-suggestions location-suggestions">
                                <ul>
                                    <li><a href="#"><i class="las la-location-arrow"></i><span>Ваше местоположение</span></a></li>
                                    <li><a href="#"><span>Ул. Октября</span></a></li>
                                </ul>
                            </div>
                        </div><!-- .site-banner__search__input -->
                        <div class="field-submit">
                            <button><i class="las la-search la-24-black"></i></button>
                        </div>
                    </form>
                </div><!-- .site-banner__content -->
            </div>
        </div><!-- .site-banner -->
        <div class="explore">
            <div class="container">
                <h2 class="title title-border-bottom align-center offset-item">Предоставляемые услуги</h2>
                <div class="slick-sliders offset-item">
                    <div class="slick-slider explore-slider slider-pd30" data-item="3" data-arrows="true" data-itemScroll="1" data-dots="true" data-centerPadding="30" data-tabletitem="2" data-mobileitem="1" data-mobilearrows="false">
                        <div class="slick-item">
                            <div class="explore-item dark-black">
                                <div class="explore-thumb">
                                    <a href="{{route('base-places')}}"><img src="{{asset('/images/nature/nature5.jpg')}}" alt=""></a>
                                </div>
                                <div class="explore-info">
                                    <h3><a href="{{route('base-places')}}">Активный отдых</a></h3>
                                    <span>16 мест</span>
                                </div>
                            </div>
                        </div>
                        <div class="slick-item">
                            <div class="explore-item dark-black">
                                <div class="explore-thumb">
                                    <a href="{{route('base-places')}}"><img src="{{asset('/images/nature/nature4.jpg')}}" alt=""></a>
                                </div>
                                <div class="explore-info">
                                    <h3><a href="{{route('tourism')}}">Питание</a></h3>
                                    <span>14 мест</span>
                                </div>
                            </div>
                        </div>
                        <div class="slick-item">
                            <div class="explore-item dark-black">
                                <div class="explore-thumb">
                                    <a href="{{route('base-places')}}"><img src="{{asset('/images/nature/nature3.jpg')}}" alt=""></a>
                                </div>
                                <div class="explore-info">
                                    <h3><a href="{{route('base-places')}}">Проживание</a></h3>
                                    <span>15 мест</span>
                                </div>
                            </div>
                        </div>
                        <div class="slick-item">
                            <div class="explore-item dark-black">

                                <div class="explore-thumb">
                                    <a href="{{route('base-places')}}"><img src="{{asset('/images/nature/nature1.jpg')}}" alt=""></a>
                                </div>
                                <div class="explore-info">
                                    <h3><a href="{{route('routes')}}">Турмаршруты</a></h3>
                                    <span>16 мест</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place-slider__nav slick-nav">
                        <div class="place-slider__prev slick-nav__prev">
                            <i class="la la-arrow-left"></i>
                        </div><!-- .place-slider__prev -->
                        <div class="place-slider__next slick-nav__next">
                            <i class="la la-arrow-right"></i>
                        </div><!-- .place-slider__next -->
                    </div><!-- .place-slider__nav -->
                </div>
            </div>
        </div>
        <div class="features-inner">
            <div class="container">
                <div class="title ld-title">
                    <h2 class="title--uniqe">Откройте для себя <br> Браславские озёра</h2>
                    <p>Уникальный комплекс естественных озёр, образовавшийся в результате тяния ледников.</p>
                </div><!-- .title -->
                <div class="features-item">
                    <div class="features-thumb">
                        <img src="public/images/scientific_activity.jpg" alt="Trending Ui/Ux Design">
                    </div>
                    <div class="features-info">
                        <h3>Научная  <span>деятельность</span></h3>
                        <p>Научно-исследовательская деятельность в учреждении «Национальный парк «Браславские озера» направлена на изучение природных объектов и комплексов, разработку и внедрение научных методов их сохранения. </p>
                        <a href="{{route('activity')}}" class="more" title="Read more">Подробнее</a>
                    </div>
                </div><!-- .features-item -->
                <div class="features-item">
                    <div class="features-thumb">
                        <img src="public/images/goals_bg2.jpg" alt="Bringing it all together">
                    </div>
                    <div class="features-info">
                        <h3>Основные <span>цели и задачи</span> парка</h3>
                        <p>Основная цель парка — сохранение уникальных природных комплексов и биологического разнообразия для будущих поколений.</p>
                        <a href="{{route('goals')}}" class="more" title="Read more">Подробнее</a>
                    </div>
                </div><!-- .features-item -->
                <div class="features-item">
                    <div class="features-thumb">
                        <img src="public/images/animals_bg3.jpg" alt="Keep your audience update">
                    </div>
                    <div class="features-info">
                        <h3> Особенности  <span>живой природы</span> </h3>
                        <p>Браславщина – один из красивейших природных уголков Беларуси, где  сочетаются необычный рельеф и водная гладь озёр с богатым растительным и животным миром.</p>
                        <a href="{{route('nature')}}" class="more" title="Подробнее">Подробнее</a>
                    </div>
                </div><!-- .features-item -->
            </div>
        </div><!-- .explore -->
        <div class="trending">
            <div class="container">
                <h2 class="title title-border-bottom align-center offset-item">Проживание в парке</h2>
                <div class="slick-sliders offset-item">
                    <div class="slick-slider trending-slider slider-pd30" data-item="4" data-arrows="true" data-itemScroll="1" data-dots="true" data-centerPadding="30" data-tabletitem="2" data-mobileitem="1" data-mobilearrows="false">
                        @foreach($places as $place)
                            <div class="place-item layout-02 place-hover">
                                <div class="place-inner">
                                    <div class="place-thumb hover-img">
                                        <a class="entry-thumb" href="{{route('single-base-place',$place->id)}}"><img src="{{\Illuminate\Support\Facades\Storage::url($place->images)}}" alt=""></a>
                                        <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>
                                        </a>
                                        <a class="entry-category rosy-pink" href="#">
                                            <i class="las la-utensils"></i><span>{{$place->getCategory()->name}}</span>
                                        </a>

                                    </div>
                                    <div class="entry-detail">
                                        <div class="entry-head">
                                            <div class="place-type list-item">
                                                <span>{{$place->getCategory()->name}}</span>
                                            </div>
                                            <div class="place-city">
                                                <a href="#">{{$place->address}}</a>
                                            </div>
                                        </div>
                                        <h3 class="place-title"><a href="{{route('single-base-place',$place->id)}}">{{$place->name}}</a></h3>
                                        <div class="open-now"><i class="las la-door-open"></i>Открыто</div>
                                        <div class="entry-bottom">
                                            <div class="place-preview">
                                                <div class="place-rating">
                                                    <span>5.0</span>
                                                    <i class="la la-star"></i>
                                                </div>
                                                <span class="count-reviews">(2 отзыва)</span>
                                            </div>
                                            <div class="place-price">
                                                <span>от {{$place->price}} BYN</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <div class="place-slider__nav slick-nav">
                        <div class="place-slider__prev slick-nav__prev">
                            <i class="la la-arrow-left"></i>
                        </div><!-- .place-slider__prev -->
                        <div class="place-slider__next slick-nav__next">
                            <i class="la la-arrow-right"></i>
                        </div><!-- .place-slider__next -->
                    </div><!-- .place-slider__nav -->
                </div>
            </div>
        </div><!-- .trending -->


        <div class="blogs">
            <div class="container">
                <h2 class="title title-border-bottom align-center offset-item">События</h2>
                <div class="news__content offset-item">
                    <div class="row">
                        <div class="col-md-4">
                            <article class="post hover__box">
                                <div class="post__thumb hover__box__thumb">
                                    <a title="The 8 Most Affordable Michelin Restaurants in Paris" href="blog-detail.html"><img src="public/images/blog/thumb-01.jpg" alt="The 8 Most Affordable Michelin Restaurants in Paris"></a>
                                </div>
                                <div class="post__info">
                                    <ul class="post__category">
                                        <li><a title="Paris" href="#">Новые</a></li>
                                        <li><a title="Food" href="#">Выставка</a></li>
                                    </ul>
                                    <h3 class="post__title"><a title="The 8 Most Affordable Michelin Restaurants in Paris" href="blog-detail.html">Мультимедийная выставка "Новая экология" </a></h3>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="post hover__box">
                                <div class="post__thumb hover__box__thumb">
                                    <a title="The 7 Best Restaurants to Try Kobe Beef in London" href="blog-detail.html"><img src="public/images/blog/thumb-02.jpg" alt="The 7 Best Restaurants to Try Kobe Beef in London"></a>
                                </div>
                                <div class="post__info">
                                    <ul class="post__category">
                                        <li><a title="London" href="#">Новые</a></li>
                                        <li><a title="Art & Decor" href="#">Форум</a></li>
                                    </ul>
                                    <h3 class="post__title"><a title="The 7 Best Restaurants to Try Kobe Beef in London" href="blog-detail.html">Экофомрум "Новый Мир"</a></h3>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="post hover__box">
                                <div class="post__thumb hover__box__thumb">
                                    <a title="The 8 Most Affordable Michelin Restaurants in Paris" href="blog-detail.html"><img src="public/images/blog/thumb-03.png" alt="The 8 Most Affordable Michelin Restaurants in Paris"></a>
                                </div>
                                <div class="post__info">
                                    <ul class="post__category">
                                        <li><a title="Paris" href="#">Новые</a></li>
                                        <li><a title="Stay" href="#">Собрание</a></li>
                                    </ul>
                                    <h3 class="post__title"><a title="The 8 Most Affordable Michelin Restaurants in Paris" href="blog-detail.html">Public Talk "Ответственное потребление"</a></h3>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="align-center button-wrap"><a href="#" class="btn btn-border">Посмотреть ещё</a></div>
                </div>
            </div>
        </div><!-- .blogs -->
    </main><!-- .site-main -->

@endsection

