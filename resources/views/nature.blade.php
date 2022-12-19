@extends('layouts.page')

@section('title-block','О парке')





@section('content')
    <main id="main" class="site-main">
        <div class="page-title page-title--small page-title--blog align-left" style="background-image: url(images/bg/bg-blog.png);">
            <div class="container">
                <div class="page-title__content">
                    <h1 class="page-title__name">Природа парка</h1>
                    <p class="page-title__slogan">Узнайте в деталях про парк</p>
                </div>
            </div>
        </div><!-- .page-title -->
        <div class="page-content page-content-sidebar">
            <div class="container">
                <div class="row">
                @include('inc.left_sidebar')
                <!--                    <div class="col-lg-3">
                        <div class="sidebar">
                            <div class="sidebar&#45;&#45;border">
                                <aside class="widget widget-shadow-left widget-category">
                                    <h3 class="widget-title"><a href="">О парке</a></h3>
                                    <div class="widget-content">
                                        <ul>
                                            <li><a href="#">Цели и задачи</a></li>
                                            <li><a href="#">Природа</a></li>
                                            <li><a href="#">Научная деятельность</a></li>
                                        </ul>
                                    </div>
                                </aside>&lt;!&ndash; .widget-category &ndash;&gt;

                            </div>


                        </div>&lt;!&ndash; .sidebar &ndash;&gt;
                    </div>-->
                    <div class="col-lg-9">
                        <div class="place__right">
                            <div class="blog-left">

                                <div class="entry-content">
                                    <h1>Особенности природы национального парка</h1>
                                    <!--                                    <ul class="entry-meta">
                                                                            <li>
                                                                                by <a title="Ben Cobb" href="#">Ben Cobb</a>
                                                                            </li>
                                                                            <li>22 July 2019</li>
                                                                            <li>3 comments</li>
                                                                        </ul>-->
                                    <div class="entry-desc">
                                        <p>
                                            Государственное природоохранное учреждение «Национальный парк «Бра́славские озера» располагается на северо-западе Беларуси на территории Браславского административного района Витебской области.
                                            <br>Браславский район, на территории которого располагается национальный парк, является пограничным районом и граничит на севере и западе с Латвийской и Литовской республиками.
                                        <blockquote>
                                            <p>Площадь парка &mdash;  64 216,33 га</p>
                                            <p>Протяженность с севера на юг &mdash; 55 км</p>
                                            <p>Протяженность с запада на восток &mdash; от 9 до 29 км</p>
                                        </blockquote>

                                        <p>В границах Национального парка находятся 74 озера общей площадью 12590 гектаров, что составляет примерно 17% всей его территории.</p>

                                        <p class="entry-image columns-2">
                                            <img src="{{asset('images/blog/lake1.jpg')}}" alt="Blog detail 01">
                                            <img src="{{asset('images/blog/lake3.jpg')}}" alt="Blog detail 02">
                                        </p>
                                        <p>Национальный парк выполняет природоохранную, научную, туристическую, рекреационную, оздоровительную, и хозяйственные виды деятельности, в том числе ведение лесного, охотничьего, сельского и рыбного хозяйства, осуществление побочного пользования лесом, переработку древесины, а также содержание и использование объектов по приему официальных делегаций, отдыха и туризма.</p>
                                        <p>
                                            В зависимости от особенностей и ценности природных комплексов на территории национального парка выделены функциональные зоны с соответствующим режимом охраны природы:

                                            <br><br> <span> &ndash;  заповедная </span> зона (3407,2 га) предназначена для сохранения в естественном состоянии ценных природных комплексов и объектов, обеспечения естественного течения природных процессов.

                                            <br>&ndash; зона регулируемого использования (44 814,1 га) предназначена для сохранения и восстановления (воспроизводства) ценных природных комплексов и объектов.

                                            <br>&ndash; рекреационная зона (2974,8 га) предназначена для осуществления рекреации, туризма, отдыха и оздоровления граждан.

                                            <br>&ndash; хозяйственная зона (13020,23 га) предназначена для обеспечения функционирования национального парка.
                                        </p>
                                        <p>
                                            Для предотвращения и смягчения вредных воздействий на ценные природные комплексы и объекты, расположенные в границах национального парка, установлена охранная зона площадью 84224,16 га.
                                        </p>
                                        <iframe width="100%" height="476" src="https://www.youtube.com/embed/D3YhtuGganw?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div><!-- .entry-desc -->

                                </div><!-- .entry-content -->


                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main><!-- .site-main -->

@endsection


