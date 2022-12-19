@extends('layouts.page')

@section('title-block',$place->name)

@section('content')
    <main id="main" class="site-main single single-02">
        <div class="place">
            <div class="slick-sliders">
                <div class="slick-slider" data-item="1" data-arrows="true" data-itemscroll="1" data-dots="true" data-infinite="true" data-centermode="true" data-centerpadding="418px" data-tabletitem="1" data-tabletscroll="1" data-tabletpadding="70px" data-mobileitem="1" data-mobilescroll="1" data-mobilepadding="30px">

                    @foreach(\Illuminate\Support\Facades\Storage::files('places_live/'.$place->id) as $image)
                        <div class="place-slider__item bd"><a title="Place Slider Image" href="#"><img src="{{\Illuminate\Support\Facades\Storage::url($image)}}" alt="slider-01"></a></div>

                    @endforeach


                </div><!-- .page-title -->
                <div class="place-share">
                    <a title="Save" href="#" class="add-wishlist">
                        <i class="la la-bookmark large"></i>
                    </a>
                    <a title="Share" href="#" class="share">
                        <i class="la la-share-square la-24"></i>
                    </a>
                    <div class="social-share"><div class="list-social-icon">
                            <a class="facebook" onclick="window.open('https://www.facebook.com/','sharer', 'toolbar=0,status=0');" href="javascript:void(0)"> <i class="fab fa-facebook-f"></i> </a>
                            <a class="twitter" onclick="popUp=window.open('https://twitter.com/','sharer','scrollbars=yes');popUp.focus();return false;" href="javascript:void(0)"> <i class="fab fa-twitter"></i> </a>
                            <a class="linkedin" onclick="popUp=window.open('http://linkedin.com/','sharer','scrollbars=yes');popUp.focus();return false;" href="javascript:void(0)"> <i class="fab fa-linkedin-in"></i> </a>
                            <a class="pinterest" onclick="popUp=window.open('http://pinterest.com/','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:void(0)"> <i class="fab fa-pinterest-p"></i> </a></div></div>
                </div><!-- .place-share -->
                <div class="place-slider__nav slick-nav">
                    <div class="place-slider__prev slick-nav__prev">
                        <i class="las la-angle-left"></i>
                    </div><!-- .place-slider__prev -->
                    <div class="place-slider__next slick-nav__next">
                        <i class="las la-angle-right"></i>
                    </div><!-- .place-slider__next -->
                </div><!-- .place-slider__nav -->
            </div><!-- .place-slider -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="place__left">
                            <ul class="place__breadcrumbs breadcrumbs">
                                <li><a title="France" href="#">Отдых</a></li>
                                <li><a title="Paris" href="#">Проживание</a></li>
                                <li><a title="Eat & Drink" href="#">{{$place->getCategory()->name}}</a></li>
                            </ul><!-- .place__breadcrumbs -->
                            <div class="place__box place__box--npd">
                                <h1>{{$place->name}}</h1>
                                <div class="place__meta">
                                    <div class="place__reviews reviews">
											<span class="place__reviews__number reviews__number">
												4.2
												<i class="la la-star"></i>
											</span>
                                        <span class="place__places-item__count reviews_count">(3 отзыва)</span>
                                    </div>
                                    <div class="place__currency">от {{$place->price}} BYN</div>
                                    <div class="place__category">
                                        <a title="{{$place->getCategory()->name}}" href="#">{{$place->getCategory()->name}}</a>


                                    </div>
                                </div><!-- .place__meta -->
                            </div><!-- .place__box -->
                            <div class="place__box place__box-hightlight">
                                <div class="hightlight-grid">
                                    <div class="place__amenities">
                                        <img src="{{asset('images/icons/amenities/wf.svg')}}" alt="Free wifi">
                                        <span>Wifi</span>
                                    </div>
                                    <div class="place__amenities">
                                        <img src="{{asset('images/icons/amenities/cld.svg')}}" alt="Бронирование">
                                        <span>Бронирование</span>
                                    </div>
                                    <div class="place__amenities">
                                        <img src="{{asset('images/icons/amenities/card.svg')}}" alt="Оплата картой">
                                        <span>Оплата картой</span>
                                    </div>
                                    <div class="place__amenities">
                                        <img src="{{asset('images/icons/amenities/smk.svg')}}" alt="Non smoking">
                                        <span>Некурящий</span>
                                    </div>
                                    <a href="#book-now" title="More" class="hightlight-count open-popup">+(4)</a>

                                    <div class="popup-wrap" id="book-now">
                                        <div class="popup-bg popupbg-close"></div>
                                        <div class="popup-middle">
                                            <a title="Close" href="#" class="popup-close">
                                                <i class="la la-times"></i>
                                            </a><!-- .popup-close -->
                                            <h3>Удобства</h3>
                                            <div class="popup-content">
                                                <div class="hightlight-flex">
                                                    <div class="place__amenities">
                                                        <img src="{{asset('images/icons/amenities/wf.svg')}}" alt="Free wifi">
                                                        <span>Wifi</span>
                                                    </div>
                                                    <div class="place__amenities">
                                                        <img src="{{asset('images/icons/amenities/cld.svg')}}" alt="Reservations">
                                                        <span>Бронирование</span>
                                                    </div>
                                                    <div class="place__amenities">
                                                        <img src="{{asset('images/icons/amenities/card.svg')}}" alt="Credit cards">
                                                        <span>Оплата картой</span>
                                                    </div>
                                                    <div class="place__amenities">
                                                        <img src="{{asset('images/icons/amenities/smk.svg')}}" alt="Non smoking">
                                                        <span>Некрящий</span>
                                                    </div>
                                                    <div class="place__amenities">
                                                        <img src="{{asset('images/icons/amenities/air.svg')}}" alt="Air conditioner">
                                                        <span>Кондиционер</span>
                                                    </div>
                                                    <div class="place__amenities">
                                                        <img src="{{asset('images/icons/amenities/car.svg')}}" alt="Car parking">
                                                        <span>Парковка</span>
                                                    </div>
                                                    <div class="place__amenities">
                                                        <img src="{{asset('images/icons/amenities/ct.svg')}}" alt="Cocktails">
                                                        <span>Коктейли</span>
                                                    </div>
                                                </div><!-- .hightlight-flex -->
                                            </div><!-- .popup-content -->
                                        </div><!-- .popup-middle -->
                                    </div><!-- .popup-wrap -->
                                </div>
                            </div><!-- .place__box -->
                            <div class="place__box place__box-overview">
                                <h3>Подробная информация</h3>
                                <div class="place__desc">{{$place->description}}</div><!-- .place__desc -->
                                <a href="#" class="show-more" title="Show More">Показать дальше</a>
                            </div>
                            @if(isset($rooms))
                            <div class="place__box">
                                <h3>Доступные номера</h3>
                                <ul class="faqs-accordion">

                                        @foreach($rooms as $room)
                                            <li>
                                                <h4>{{$room->name}}</h4>
                                                <div class="desc">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <img src="{{\Illuminate\Support\Facades\Storage::url($room->images)}}"  alt="">
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <p>{{$room->description}}</p>
                                                            <p>Количество одноместных кроватей: 0</p>
                                                            <p>Количество двухместных кроватей: 1</p>
                                                            <p>Максимальное количество человек: {{$room->num_seats}}</p>
                                                            <p>Цена за 1 человека: {{$room->price}} BYN</p>
                                                            <div class="field-submit">
                                                                <input type="submit" data-room="{{$room->id}}" class="btn btn-pick" value="Выбрать" name="submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach






                                </ul>
                            </div><!-- .place__box -->
                            @endif
                            <div class="place__box place__box-map">
                                <h3 class="place__title--additional">
                                   Расположение на карте
                                </h3>
                                <div class="maps">
                                    <div id="map"></div>
                                </div>
                                <div class="address">
                                    <i class="la la-map-marker"></i>
                                    {{$place->address}}

                                </div>
                            </div><!-- .place__box -->
                            <div class="place__box">
                                <h3>Контактная информация</h3>
                                <ul class="place__contact">
                                    <li>
                                        <i class="la la-phone"></i>
                                        <a title="00 343 7859" href="tel:003437859">00 343 7859</a>
                                    </li>
                                    <li>
                                        <i class="la la-globe"></i>
                                        <a title="www.abcsite.com" href="www.abcsite.com">www.site.by</a>
                                    </li>
                                    <li>
                                        <i class="la la-facebook-f"></i>
                                        <a title="fb.com/abc" href="fb.com/abc">facebook.com/</a>
                                    </li>
                                    <li>
                                        <i class="la la-instagram"></i>
                                        <a title="instagram.com/abc" href="instagram.com/abc">instagram.com/</a>
                                    </li>
                                </ul>
                            </div><!-- .place__box -->
                            <div class="place__box place__box-open">
                                <h3 class="place__title--additional">
                                    Время работы
                                </h3>
                                <table class="open-table">
                                    <tbody>


                                    <tr>
                                        <td class="day">Понедельник</td>
                                        <td class="time">8:00 - 22:00</td>
                                        <td class="day">Вторник</td>
                                        <td class="time">8:00 - 22:00</td>
                                    </tr>

                                    <tr>
                                        <td class="day">Среда</td>
                                        <td class="time">8:00 - 22:00</td>
                                        <td class="day">Четверг</td>
                                        <td class="time">8:00 - 22:00</td>
                                    </tr>

                                    <tr>
                                        <td class="day">Пятница</td>
                                        <td class="time">8:00 - 22:00</td>
                                        <td class="day">Суббота</td>
                                        <td class="time">8:00 - 22:00</td>
                                    </tr>

                                    <tr>
                                        <td class="day">Воскресенье</td>
                                        <td class="time">Закрыто</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- .place__box -->
                            <div class="place__box">
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


                        </div><!-- .place__left -->
                    </div>

                    @include('inc.booking')

                </div>
            </div>
        </div><!-- .place -->
        <div class="similar-places">
            <div class="container">
                <h2 class="similar-places__title title">Похожие места</h2>
                <div class="similar-places__content">
                    <div class="row">

                        @foreach($places as $single_place)

                            <div class="col-lg-3 col-md-6">
                                <div class="place-item layout-02 place-hover">
                                    <div class="place-inner">
                                        <div class="place-thumb">
                                            <a class="entry-thumb" href="{{route('tourism-single-place',$single_place->id)}}"><img src="{{\Illuminate\Support\Facades\Storage::url($single_place->images)}}" alt=""></a>
                                            <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>
                                            </a>
                                            <a class="entry-category purple" href="#">
                                                <i class="las la-spa"></i><span>{{$single_place->getCategory()->name}}</span>
                                            </a>
                                        </div>
                                        <div class="entry-detail">
                                            <div class="entry-head">
                                                <div class="place-type list-item">
                                                    <span>{{$single_place->getCategory()->name}}</span>
                                                </div>
                                                <div class="place-city">
                                                    <a href="#">Адрес</a>
                                                </div>
                                            </div>
                                            <h3 class="place-title"><a href="{{route('tourism-single-place',$single_place->id)}}">{{$single_place->name}}</a></h3>
                                            <div class="open-now"><i class="las la-door-open"></i>Открыто</div>
                                            <div class="entry-bottom">
                                                <div class="place-preview">
                                                    <div class="place-rating">
                                                        <span>5.0</span>
                                                        <i class="la la-star"></i>
                                                    </div>
                                                    <span class="count-reviews">(2 Отзыва)</span>
                                                </div>
                                                <div class="place-price">
                                                    <span>{{$single_place->price}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @endforeach


                    </div>
                </div>
            </div>
        </div><!-- .similar-places -->
    </main><!-- .site-main -->

@endsection

@section('map-script')

    <script src="{{asset('/js/map-single.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhg-WuaaDabIe_9efqfolUCAbgrr98C4g&callback=initMap" async defer></script>

@endsection
