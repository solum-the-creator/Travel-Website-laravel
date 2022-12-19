@extends('layouts.page')

@section('title-block','Экотуризм')





@section('content')
    <main id="main" class="site-main">
        <div class="page-title page-title--small page-title--blog align-left" style="background-image: url(images/bg/bg-blog.png);">
            <div class="container">
                <div class="page-title__content">
                    <h1 class="page-title__name">Экотуризм</h1>
                    <p class="page-title__slogan">Отдыхайте с пользой</p>
                </div>
            </div>
        </div><!-- .page-title -->
        <section class="featured-home featured-wrap">
            <div class="container">
                <div class="title_home ">
                    <h2>Доступные виды отдыха</h2>
                    <p>Рассмотретите места для вашего путешествия по категориям</p>
                </div>
                <div class="featured-inner ">
                    <div class="item">
                        <div class="flex">
                            <div class="flex-col ">
                                <div class="cities ">
                                    <div class="cities-inner">
                                        <a href="{{route('base-places')}}" class="hover-img">
                                            <span class="entry-thumb"><img src="{{asset('/images/nature/nature3.jpg')}} " alt="Проживание"></span>
                                            <span class="entry-details">
													<h3>Проживание</h3>
												    <span>17 мест</span>
												</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-col">
                                <div class="cities">
                                    <div class="cities-inner">
                                        <a href="{{route('base-places')}}" class="hover-img">
                                            <span class="entry-thumb"><img src="{{asset('/images/nature/nature4.jpg')}}" alt="Питание"></span>
                                            <span class="entry-details">
													<h3>Питание</h3>
												    <span>12 мест</span>
												</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="cities">
                                    <div class="cities-inner">
                                        <a href="{{route('base-places')}}" class="hover-img">
                                            <span class="entry-thumb"><img src="{{asset('/images/nature/nature1.jpg')}}" alt="Турмаршруты"></span>
                                            <span class="entry-details">
                                                    <h3>Турмаршруты</h3>
                                                    <span>4 места</span>
                                                </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-col">
                                <div class="cities">
                                    <div class="cities-inner">
                                        <a href="{{route('base-places')}}" class="hover-img">
                                            <span class="entry-thumb"><img src="{{asset('/images/nature/nature5.jpg')}}" alt="Экскурсии"></span>
                                            <span class="entry-details">
                                                    <h3>Экскурсии</h3>
                                                    <span>7 мест</span>
                                                </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="cities">
                                    <div class="cities-inner">
                                        <a href="{{route('base-places')}}" class="hover-img">
                                            <span class="entry-thumb"><img src="{{asset('/images/nature/nature6.jpg')}}" alt="Активынй отдых"></span>
                                            <span class="entry-details">
													<h3>Активынй отдых</h3>
												    <span>5 мест</span>
												</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .featured-inner -->
            </div><!-- .container -->
        </section><!-- .featured-wrap -->
    </main><!-- .site-main -->

@endsection


