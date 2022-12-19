@extends('layouts.page')

@section('title-block','Бронирование места')





@section('content')
    <main id="main" class="site-main">
        <div class="page-title page-title--small align-left" style="background-image: url({{asset('images/bg/bg-shop.png')}});">
            <div class="container">
                <div class="page-title__content">
                    <h1 class="page-title__name">Бронирование</h1>
                </div>
            </div>
        </div><!-- .page-title -->
        <div class="site-content">
            <div class="checkout-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="billing-form">
                                <h2>Оформление бронирования</h2>
                                <form action="{{route('create_reservation')}}" method="POST" class="billingForm reservationForm">
                                    @csrf

                                    <div class="field-group listing-box">
                                        <h3>Контактная инфомрация</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="field-input ">
                                                    <label for="first_name">Фамилия <span class="required">*</span></label>
                                                    <input type="text" class="@error('second_name') border-danger @enderror" placeholder="Введите вашу фамилию" value="{{\Illuminate\Support\Facades\Auth::user()->second_name}}" name="second_name" id="second_name">
                                                    @error('second_name')
                                                    <p class="text-danger text-lg-start">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="field-input ">
                                                    <label for="last_name">Имя <span class="required">*</span></label>
                                                    <input type="text" class="@error('first_name') border-danger @enderror" placeholder="Введите ваше имя" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" name="first_name" id="first_name">
                                                    @error('first_name')
                                                    <p class="text-danger text-lg-start">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="field-input">
                                                    <label for="email">Электронная почта <span class="required">*</span></label>
                                                    <input type="email" class=" @error('email') border-danger @enderror" placeholder="Введите вашу почту" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" name="email" id="email">
                                                    @error('email')
                                                    <p class="text-danger text-lg-start">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="field-input ">
                                                    <label for="phone">Номер телефона <span class="required">*</span></label>
                                                    <input type="text" class="@error('phone') border-danger @enderror" placeholder="Введите ваш номер телефона" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" name="phone" id="phone">
                                                    @error('phone')
                                                    <p class="text-danger text-lg-start">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="field-group field-select ">
                                                    <label for="gender">Пол <span class="required">*</span></label>
                                                    <select name="gender" id="gender" class="@error('gender') border-danger @enderror">
                                                        <option value="" disabled selected hidden>Выберите пол</option>
                                                        <option value="male">Мужской</option>
                                                        <option value="female">Женский</option>
                                                    </select>
                                                    <i class="la la-angle-down"></i>

                                                </div>
                                                @error('gender')
                                                <p class="text-danger text-lg-start">{{$message}}</p>
                                                @enderror
                                            </div>
<!--                                            <div class="col-md-6">
                                                <div class="field-inline field-3col"></div>
                                                <div class="field-group field-select ">
                                                    <label for="gender">Гражданство <span class="required">*</span></label>
                                                    <select name="gender" id="gender">
                                                        <option value="" disabled selected hidden>Выберите гражданство</option>
                                                        <option value="">Беларусь</option>
                                                        <option value="">Россия</option>
                                                        <option value="">Украина</option>
                                                        <option value="">Казахстан</option>
                                                    </select>
                                                    <i class="la la-angle-down"></i>

                                                </div>
                                            </div>-->
                                            <div class="col-md-6">
                                                <div class="field-select field-date ">
                                                    <label for="birthday_date">Дата рождения <span class="required">*</span></label>
                                                    <input readonly name="birthday_date" type="text" placeholder="Дата рождения" class="datepicker_reserve @error('birthday_date') border-danger @enderror" autocomplete="off">
                                                    <i class="la la-angle-down"></i>
                                                    @error('birthday_date')
                                                    <p class="text-danger text-lg-start">{{$message}}</p>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <label for="birthday_date">Комментарий к заказу </label>

                                                <div class="field-textarea">

                                                    <textarea name="comment_order" placeholder="Ваш комментарий"></textarea>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- .field-group -->
                                    <div class="field-group">
                                        <h3>Способ оплаты</h3>
                                        <div class="field-select @error('payment_method_id') border-danger @enderror">
                                            <div id="select-box">
                                                <input type="checkbox"  id="options-view-button" value="">
                                                <div id="select-button" class="brd">
                                                    <div id="selected-value">
                                                        <img src="" alt=""><span>&nbsp;Выберите способ оплаты</span>
                                                    </div>
                                                    <div id="chevrons">
                                                        <i class="las la-angle-down"></i>
                                                    </div>
                                                </div>
                                                <div id="options">
                                                    <div class="option o-paypal">
                                                        <input class="s-c" type="radio" name="payment_method_id" value="1">
                                                        <img src="images/assets/cash.png" alt="">
                                                        <span class="label"><span>Наличные</span></span>
                                                        <span class="opt-val"><img src="images/assets/cash.png" alt=""><span>Наличные</span></span>
                                                    </div>
                                                    <div class="option o-stripe">
                                                        <input class="s-c" type="radio" name="payment_method_id" value="2">
                                                        <img src="images/assets/master-card.png" alt="">
                                                        <span class="label"><span>Visa/Master Card</span></span>
                                                        <span class="opt-val"><img src="images/assets/master-card.png" alt=""><span>Visa/Master Card</span></span>
                                                    </div>

                                                    <div id="option-bg"></div>
                                                </div>
                                                @error('payment_method_id')
                                                <p class="text-danger text-lg-start">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                    </div><!-- .field-group -->
<!--                                    <div class="field-group">
                                        <h3>Итоговая стоимость</h3>
                                        <h2> 100 BYN</h2>
                                    </div>&lt;!&ndash; .field-group &ndash;&gt;-->

                                    <div class="field-submit">
                                        <input type="submit" name="submit" value="Забронировать" class="btn">
                                    </div>
                                </form><!-- .billingForm -->
                            </div><!-- .checkout-form -->
                        </div>
                        <div class="col-lg-4">
                            <div class="package-review">
                                <h2>Детали заказа</h2>
                                <div class="pricing-item place-item layout-02">
                                        <div class="place-inner-booking">
                                            <div class="place-thumb">
                                                <a class="entry-thumb" href="{{route('single-base-place',session('currentBase')->id)}}"><img src="{{\Illuminate\Support\Facades\Storage::url(session('currentBase')->cover_image)}}" alt=""></a>


                                            </div>
                                            <div class="entry-detail-booking">
                                                <div class="entry-head">
                                                    <div class="place-type list-item">
                                                        <span>База отдыха</span>
                                                    </div>
                                                    <div class="place-city">
                                                        <a>{{session('currentBase')->address}}</a>
                                                    </div>
                                                </div>
                                                <h3 class="place-title"><a href="{{route('single-base-place',session('currentBase')->id)}}">{{session('currentBase')->name}}</a></h3>

                                                <h4 class="place-title"><a href="{{route('tourism-single-place',session('currentHouse')->id)}}">{{session('currentHouse')->name}}</a></h4>
                                                @if(session()->has('currentRoom'))
                                                <h4 class="place-title"><a href="{{route('tourism-single-place',session('currentHouse')->id)}}">{{session('currentRoom')->name}}</a></h4>
                                                @endif
                                                <div class="booking-table">
                                                    <table class="open-table">
                                                        <tbody>
                                                        <tr>
                                                            <td class="booking-title">Тип размещения:</td>
                                                            @if(session('preReservation')['type'] == 1)
                                                            <td class="booking-info">номер</td>
                                                                @else
                                                                <td class="booking-info">коттедж</td>
                                                                @endif
                                                        </tr>
                                                        <tr>
                                                            <td class="booking-title">Стоимость номера:</td>
                                                            @if(session('preReservation')['type'] == 1)
                                                                <td class="booking-info">{{session('currentRoom')->price}} BYN</td>
                                                            @else
                                                                <td class="booking-info">{{session('currentHouse')->price}} BYN</td>
                                                            @endif

                                                        </tr>
                                                        <tr>
                                                            <td class="booking-title">Количество гостей:</td>
                                                            <td class="booking-info">{{session('preReservation')['quantity']}} взрослых</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="booking-title">Дата заезда:</td>
                                                            <td class="booking-info">{{session('preReservation')['start_date']}}</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="booking-title">Дата выезда:</td>
                                                            <td class="booking-info">{{session('preReservation')['end_date']}}</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>


<!--                                                <div class="entry-bottom">
                                                    <div class="place-preview">
                                                        <div class="place-rating">
                                                            <span>5.0</span>
                                                            <i class="la la-star"></i>
                                                        </div>

                                                    </div>
                                                    <div class="place-price">
                                                        <span>от Цена BYN</span>
                                                    </div>
                                                </div>-->
                                                <div class="total">
                                                    <h4>Итоговая стоимость</h4>
                                                    @if(session('preReservation')['type'] == 1)
                                                        <span>{{session('fullPrice')}} BYN</span>
                                                    @else
                                                        <span>{{session('fullPrice')}} BYN</span>
                                                    @endif

                                                </div>
                                            </div>

                                        </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .checkout-area -->
        </div><!-- .site-content -->
    </main><!-- .site-main -->

@endsection




