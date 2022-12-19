@extends('layouts.page')

@section('title-block','Профиль')





@section('content')
    <main id="main" class="site-main">
        <div class="site-content owner-content">
            <div class="member-menu">
                @include('acc.menu_profile')
            </div>
            <div class="container">

                <div class="member-wrap">
                    <div class="member-wrap-top">
                        <h2>Добро пожаловать, {{$user->name}}!</h2>
                    </div><!-- .member-wrap-top -->
                    <div class="owner-top">
                        <div class="container">
                            <div class="owner-top-inner">
                                <div class="owner-top-info">
                                    <div class="avatar"><img src="{{\Illuminate\Support\Facades\Storage::url($user->user_img)}}" alt="Roman"></div>
                                    <div class="info">
                                        <h3>{{$user-> name}} {{$user->second_name}}</h3>
                                        <p>{{$user->email}}</p>
                                        <p>На сайте с {{$user->created_at->format('d.m.Y')}}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- .owner-top -->
                    <div class="member-statistical">
                        <div class="row">
                            <div class="col-lg-4 col-6">
                                <div class="item blue">
                                    <h3>Понравившиеся</h3>
                                    <span class="number">0</span>
                                    <span class="line"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6">
                                <div class="item green">
                                    <h3>Бронирований</h3>
                                    <span class="number">{{$user->countReserve()}}</span>
                                    <span class="line"></span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6">
                                <div class="item yellow">
                                    <h3>Всего отзывов</h3>
                                    <span class="number">{{$user->countReview()}}</span>
                                    <span class="line"></span>
                                </div>
                            </div>

                        </div>
                    </div><!-- .member-statistical -->
                    <div class="owner-box">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ob-item">
                                    <div class="ob-head">
                                        <h3>Последние бронирования</h3>
                                        <a href="{{route('profile-reserve')}}" class="view-all" title="View All">Смотреть все</a>
                                    </div>
                                    <div class="ob-content">
                                        <ul>
                                            @foreach($reserves as $reserve)
                                                <li class=" @if($reserve->getBookingStatus()->id == 1) pending @elseif($reserve->getBookingStatus()->id == 2) approve @else cancel  @endif   ">
                                                    <p class="date"><b>Дата:</b>{{date("d.m.Y", strtotime($reserve->reservation_date))}}</p>
                                                    <p class="place"><b>Место:</b>{{$reserve->getBasePlace()->name}}</p>
                                                    <p class="status"><b>Статус:</b><span>{{$reserve->getBookingStatus()->name}}</span></p>
                                                    <a href="{{route('thanks_reservation', $reserve->id)}}" title="Подробнее" class="more"><i class="las la-angle-right"></i></a>
                                                </li>
                                            @endforeach





                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ob-item">
                                    <div class="ob-head">
                                        <h3>Ваши отзывы</h3>
                                        <a href="{{route('profile-review')}}" class="view-all" title="Смотреть все">Смотреть все</a>
                                    </div>
                                    <div class="ob-content">
                                        <ul class="place__comments">
                                            @foreach($reviews as $review)
                                                <li>
                                                    <div class="place__author">
                                                        <div class="place__author__avatar">
                                                            <a title="Name" href="#"><img src="{{\Illuminate\Support\Facades\Storage::url($user->user_img)}}" alt=""></a>
                                                        </div>
                                                        <div class="place__author__info">
                                                            <div>
                                                                <a title="Sebastian" href="#">{{$user->name}} {{$user->second_name}}</a>

                                                            </div>
                                                            <div class="place__author__star">
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>

                                                                <span style="width:{{$review->getPercentMark()}}%">
																<i class="la la-star"></i>
																<i class="la la-star"></i>
																<i class="la la-star"></i>
																<i class="la la-star"></i>
																<i class="la la-star"></i>
															</span>
                                                            </div>
                                                            <span class="time">{{date("d.m.Y G:i", strtotime($review->created_at))}}</span>
                                                        </div>
                                                    </div>
                                                    <p class="place"><b>Место:</b>{{$review->getBasePlace()->name}}</p>

                                                    <div class="place__comments__content">
                                                        <p>{{$review->review_text}}</p>
                                                    </div>
                                                    <a href="{{route('single-base-place', $review->getBasePlace()->id)}}" title="Подробнее" class="more"><i class="las la-angle-right"></i></a>

                                                </li>

                                            @endforeach


                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- .owner-box -->
                </div><!-- .member-wrap -->

            </div>
        </div><!-- .site-content -->
    </main><!-- .site-main -->

@endsection


