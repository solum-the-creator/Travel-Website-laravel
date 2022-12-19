@extends('layouts.page')

@section('title-block',$place->name)

@section('content')
    <main id="main" class="site-main single single-02">
        <div class="place">
            <div class="slick-sliders">
                <div class="slick-slider" data-item="1" data-arrows="true" data-itemscroll="1" data-dots="true" data-infinite="true" data-centermode="true" data-centerpadding="418px" data-tabletitem="1" data-tabletscroll="1" data-tabletpadding="70px" data-mobileitem="1" data-mobilescroll="1" data-mobilepadding="30px">

                    @foreach(\Illuminate\Support\Facades\Storage::files('base_places/'.$place->id) as $image)
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
                            <a class="facebook" onclick="window.open('https://www.facebook.com/sharer.php?u=https%3A%2F%2Fwp.getgolo.com%2Fplace%2Fthe-louvre%2F','sharer', 'toolbar=0,status=0');" href="javascript:void(0)"> <i class="fab fa-facebook-f"></i> </a>
                            <a class="twitter" onclick="popUp=window.open('https://twitter.com/share?url=https%3A%2F%2Fwp.getgolo.com%2Fplace%2Fthe-louvre%2F','sharer','scrollbars=yes');popUp.focus();return false;" href="javascript:void(0)"> <i class="fab fa-twitter"></i> </a>
                            <a class="linkedin" onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fwp.getgolo.com%2Fplace%2Fthe-louvre%2F&amp;title=The+Louvre','sharer','scrollbars=yes');popUp.focus();return false;" href="javascript:void(0)"> <i class="fab fa-linkedin-in"></i> </a>
                            <a class="pinterest" onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwp.getgolo.com%2Fplace%2Fthe-louvre%2F&amp;description=The+Louvre&amp;media=https://wp.getgolo.com/wp-content/uploads/2019/10/ef3cc68f-2e02-41cc-aad6-4b301a655555.jpg','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:void(0)"> <i class="fab fa-pinterest-p"></i> </a></div></div>
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
                                <li><a title="Eat & Drink" href="#">База отдыха</a></li>
                            </ul><!-- .place__breadcrumbs -->
                            <div class="place__box place__box--npd">
                                <h1>{{$place->name}}</h1>
                                <div class="place__meta">
                                    <div class="place__reviews reviews">
											<span class="place__reviews__number reviews__number">
												{{$place->getAverageMark()}}
												<i class="la la-star"></i>
											</span>
                                        <span class="place__places-item__count reviews_count">({{$place->reviews->count()}} отзыва)</span>
                                    </div>
                                    <div class="place__currency">от {{$place->minPrice()}} BYN</div>
                                    <div class="place__category">
                                        <a title="База отдыха" href="#">База отдыха</a>


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
                            <div class="featured-cities">
                                <div class="">
                                    <h2 class="title offset-item">Доступные дома</h2>
                                    <div class="slick-sliders offset-item">
                                        <div class="slick-slider featured-slider slider-pd30" data-item="2" data-arrows="true" data-itemScroll="1" data-centerPadding="30" data-tabletitem="2" data-tabletscroll="1" data-mobileitem="1"  data-mobilescroll="1" data-mobilearrows="false">

                                            @foreach($houses_live as $house)
                                                <div class="slick-item">
                                                    <div class="cities__item hover__box explore-item dark-black">
                                                        <a title="London" href="{{route('tourism-single-place',$house->id)}}">
                                                        <div class="cities__thumb hover__box__thumb house-card">

                                                                <img src="{{\Illuminate\Support\Facades\Storage::url($house->images)}}" alt="{{$house->name}}">

                                                        </div>
                                                        </a>
                                                        <h4 class="cities__name">{{$house->name}}</h4>
                                                        <div class="cities__info">
                                                            <h3 class="cities__capital">от {{$house->price}} BYN</h3>
                                                            <p class="cities__number">кол-во мест</p>
                                                        </div>
                                                    </div><!-- .cities__item -->
                                                </div>
                                            @endforeach



                                        </div>
                                        <div class="place-slider__nav slick-nav">
                                            <div class="place-slider__prev slick-nav__prev">
                                                <i class="las la-angle-left"></i>
                                            </div><!-- .place-slider__prev -->
                                            <div class="place-slider__next slick-nav__next">
                                                <i class="las la-angle-right"></i>
                                            </div><!-- .place-slider__next -->
                                        </div><!-- .place-slider__nav -->
                                    </div>
                                </div>
                            </div><!-- .featured-cities -->

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
                                        <div class="desc"><p>*При отмене заказа после указанного срока предусмотрен штраф, равный полной стоимости бронирования.</p></div>
                                    </li>
                                    <li>
                                        <h4>Правила безопасности</h4>
                                        <div class="desc"><p>Не накрывайте включенные торшеры и настольные лампы предметами из горючего материала. Запрещается хранение в номере взрыво - и пожароопасных веществ и материалов. Если Вы прибыли в отель впервые, постарайтесь хорошо запомнить расположение выходов и лестниц, ознакомьтесь с планом эвакуации и местонахождением первичных средств пожаротушения.</p></div>
                                    </li>
                                    <li>
                                        <h4>Публичный договор</h4>
                                        <div class="desc"><p>Арендодатель обязан передать прокатное имущество арендатору во временное владение и пользование и имеет право на получение от арендатора прокатной платы. При этом состояние передаваемого имущества должно соответствовать его назначению и условиям договора. </p></div>
                                    </li>
                                </ul>
                            </div><!-- .place__box -->
                            @include('inc.reviews') <!-- .place__box -->
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
                                            <a class="entry-thumb" href="{{route('single-base-place',$single_place->id)}}"><img src="{{\Illuminate\Support\Facades\Storage::url($single_place->images)}}" alt=""></a>
                                            <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
											<span class="icon-heart">
												<i class="la la-bookmark large"></i>
											</span>
                                            </a>
                                            <a class="entry-category purple" href="#">
                                                <i class="las la-spa"></i><span>База отдыха</span>
                                            </a>
                                        </div>
                                        <div class="entry-detail">
                                            <div class="entry-head">
                                                <div class="place-type list-item">
                                                    <span>База отдыха</span>
                                                </div>
                                                <div class="place-city">
                                                    <a href="#">Адрес</a>
                                                </div>
                                            </div>
                                            <h3 class="place-title"><a href="{{route('single-base-place',$single_place->id)}}">{{$single_place->name}}</a></h3>
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
                                                    <span>Цена</span>
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
