@extends('layouts.page')

@section('title-block','Контакты')





@section('content')
    <main id="main" class="site-main contact-main">
        <div class="page-title page-title--small align-left" style="background-image: url(images/bg/bg-about.png);">
            <div class="container">
                <div class="page-title__content">
                    <h1 class="page-title__name">Контакты</h1>
                    <p class="page-title__slogan">Узнайте, как с нами связаться</p>
                </div>
            </div>
        </div><!-- .page-title -->
        <div class="site-content site-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact-text ">
                            <h2>Контакты админстрации</h2>
                            <div class="row">
                                <div class="contact-box col-md-6">
                                    <h3>Адрес админимстрации</h3>
                                    <p>211970, Браслав, ул. Дачная, 1</p>

                                    <h3>Время работы</h3>
                                    <p>09:00 - 20:00</p>
                                    <p>ПН-ПТ</p>


                                </div>
                                <div class="contact-box col-md-6">
                                    <h3>Номер телефона</h3>
                                    <p>+375 29 22 62246</p>
                                    <h3>Мобильный номер телефона</h3>
                                    <p>+375 29 22 62246</p>
                                    <p>+375 29 22 62374</p>

                                </div>
                            </div>
                            <h2>Контакты админстрации</h2>
                            <div class="row">
                                <div class="contact-box col-md-6">
                                    <h3>Адрес админимстрации</h3>
                                    <p>211970, Браслав, ул. Дачная, 1</p>

                                    <h3>Время работы</h3>
                                    <p>09:00 - 20:00</p>
                                    <p>ПН-ПТ</p>


                                </div>
                                <div class="contact-box col-md-6">
                                    <h3>Номер телефона</h3>
                                    <p>+375 29 22 62246</p>
                                    <h3>Мобильный номер телефона</h3>
                                    <p>+375 29 22 62246</p>
                                    <p>+375 29 22 62374</p>

                                </div>
                            </div>




                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="contact-form">

                            <form action="#" method="POST" class="form-underline">
                                <h2>Свяжитесь с нами</h2>
                                <div class="field-inline">
                                    <div class="field-input">
                                        <input type="text" name="first_name" value="" placeholder="Имя">
                                    </div>
                                    <div class="field-input">
                                        <input type="text" name="last_name" value="" placeholder="Фамилия">
                                    </div>
                                </div>
                                <div class="field-input">
                                    <input type="email" name="email" value="" placeholder="Email">
                                </div>
                                <div class="field-input">
                                    <input type="tel" name="tel" value="" placeholder="Номер телефона">
                                </div>
                                <div class="field-textarea">
                                    <textarea name="message" placeholder="Ваше сообщение"></textarea>
                                </div>
                                <div class="field-submit">
                                    <input type="submit" value="Отправить" class="btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="place__box place__box-map">
                    <h3 class="place__title--additional">
                        Расположение на карте
                    </h3>
                    <div class="maps">
                        <div id="map"></div>
                    </div>

                </div><!-- .place__box -->
            </div>
        </div><!-- .site-content -->
    </main><!-- .site-main -->

@endsection

@section('map-script')

    <script src="{{asset('/js/map-single.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhg-WuaaDabIe_9efqfolUCAbgrr98C4g&callback=initMap" async defer></script>

@endsection
