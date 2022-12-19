@section('header')
<header id="header" class="site-header @if(Route::is('home')) home-header @endif">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 col-8">
                <div class="site">
                    <div class="site__menu">
                        <a title="Menu Icon" href="#" class="site__menu__icon">
                            <i class="las la-bars la-24-black"></i>
                        </a>
                        <div class="popup-background"></div>
                        <div class="popup popup--left">
                            <a title="Close" href="#" class="popup__close">
                                <i class="las la-times la-24-black"></i>
                            </a><!-- .popup__close -->
                            <div class="popup__content">
                                <div class="popup__user popup__box open-form">
                                    <a title="Login" href="#" class="open-login">Вход</a>
                                    <a title="Sign Up" href="#" class="open-signup">Регистрация</a>
                                </div><!-- .popup__user -->

                                <div class="popup__menu popup__box">
                                    <ul class="menu-arrow">
                                        <li>
                                            <a href="{{route('about')}}" title="О парке">О парке</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('goals')}}" title="Цели и задачи">Цели и задачи</a></li>
                                                <li><a href="{{route('nature')}}" title="Природа">Природа</a></li>
                                                <li><a href="{{route('activity')}}" title="Научная деятельность">Научная деятельность</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('tourism-categories')}}" title="Экотуризм">Экотуризм</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('goals')}}" title="Питание">Питание</a></li>
                                                <li><a href="{{route('base-places')}}" title="Проживание">Проживание</a></li>
                                                <li><a href="{{route('routes')}}" title="Турмаршруты">Турмаршруты</a></li>
                                                <li><a href="{{route('activity')}}" title="Экскурсии">Экскурсии</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}" title="Контакты">Контакты</a>

                                        </li>

                                    </ul>
                                </div><!-- .popup__menu -->
                            </div><!-- .popup__content -->
                            <!-- .popup__button -->
                        </div><!-- .popup -->
                    </div><!-- .site__menu -->
                    <div class="site__brand">
                        <a title="Logo" href="/" class="site__brand__logo"><img src="{{asset('/images/assets/logo.png')}}" alt="Национальный парк"></a>
                    </div><!-- .site__brand -->



                    @if(!Route::is('home'))

                        <div class="site__search layout-02">
                            <a title="Close" href="#" class="search__close">
                                <i class="la la-times"></i>
                            </a><!-- .search__close -->

                            <form action="{{route('search-form')}}" method="POST" class="site-banner__search layout-02">

                                <div class="field-input">
                                    <label for="category_search">Поиск:</label>
                                    <input class="site-banner__search__input open-suggestion" readonly id="s" type="text" name="category_search" placeholder="категория" autocomplete="off">
                                    <div class="search-suggestions name-suggestions">
                                        <ul>
                                                                                <li><a href="#"><i class="las la-utensils"></i><span>Проживание</span></a></li>
                                                                                <li><a href="#"><i class="las la-spa"></i><span>Маршруты</span></a></li>
                                                                                <li><a href="#"><i class="las la-dumbbell"></i><span>Экскурсии</span></a></li>
                                                                                <li><a href="#"><i class="las la-cocktail"></i><span>Места</span></a></li>
                                                                                <li><a href="#"><i class="las la-shopping-bag"></i><span>Питание</span></a></li>
                                        </ul>
                                    </div>
                                </div><!-- .site-banner__search__input -->
                                <div class="field-input">
                                    <label for="text_search"></label>
                                    <input class="site-banner__search__input open-suggestion" id="loca" type="text" name="text_search" placeholder="название" autocomplete="off">
                                    <div class="search-suggestions location-suggestions">

                                    </div>
                                </div><!-- .site-banner__search__input -->
                                <div class="field-submit">
                                    <button><i class="las la-search la-24-black"></i></button>
                                </div>
                                @csrf
                            </form>
                        </div><!-- .site__search -->
                    @endif




                </div><!-- .site -->
            </div><!-- .col-md-6 -->
            <div class="col-xl-5 col-4">
                <div class="right-header align-right">
                    <nav class="main-menu">
                        <ul>


                            <li>
                                <a href="{{route('about')}}" title="О парке">О парке</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('goals')}}" title="Цели и задачи">Цели и задачи</a></li>
                                    <li><a href="{{route('nature')}}" title="Природа">Природа</a></li>
                                    <li><a href="{{route('activity')}}" title="Научная деятельность">Научная деятельность</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('tourism-categories')}}" title="Экотуризм">Экотуризм</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('goals')}}" title="Питание">Питание</a></li>
                                    <li><a href="{{route('base-places')}}" title="Проживание">Проживание</a></li>
                                    <li><a href="{{route('routes')}}" title="Турмаршруты">Турмаршруты</a></li>
                                    <li><a href="{{route('activity')}}" title="Экскурсии">Экскурсии</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('contact')}}" title="Контакты">Контакты</a>
                            </li>

                            <li>




                                @auth("web")
<!--                                    <i class="las la-user user-icon la-24-black">-->
                                    <div class="user-block">
                                        <a title="Logout" href="{{route('profile')}}">

                                                <img src="{{\Illuminate\Support\Facades\Storage::url(\Illuminate\Support\Facades\Auth::user()->user_img)}}" alt="">
                                            </a>
                                    </div>
                                    <ul class="sub-menu sub-user-menu ">
                                        <li><a href="{{route('profile')}}" title="Цели и задачи">Аккаунт</a></li>
                                        <li><a href="{{route('profile-settings')}}" title="Цели и задачи">Настройки</a></li>
                                        <li><a href="{{route("logout")}}" title="Природа">Выход</a></li>
                                    </ul>

                                @endauth

                                @guest("web")
                                    <a title="Login" href="{{route("login")}}">Вход</a>

                                @endguest


                            </li>


                        </ul>
                    </nav>
                    <div class="right-header__login">

                    </div><!-- .right-header__login -->



<!--                    <div class="popup popup-form">
                        <a title="Закрыть" href="#" class="popup__close">
                            <i class="las la-times la-24-black"></i>
                        </a>&lt;!&ndash; .popup__close &ndash;&gt;
                        <ul class="choose-form">
                            <li class="nav-signup"><a title="Sign Up" href="#signup">Регистрация</a></li>
                            <li class="nav-login"><a title="Log In" href="#login">Вход</a></li>
                        </ul>
                        <p class="choose-more">Войти через <a title="Facebook" class="fb" href="#">Facebook</a> или <a title="Google" class="gg" href="#">Google</a></p>
                        <p class="choose-or"><span>Или</span></p>
                        <div class="popup-content">
                            <form action="#" class="form-sign form-content" id="signup" method="post">
                                <div class="field-inline">
                                    <div class="field-input">
                                        <input type="text" placeholder="Имя" value="" name="first_name">
                                    </div>
                                    <div class="field-input">
                                        <input type="text" placeholder="Фамилия" value="" name="last_name">
                                    </div>
                                </div>
                                <div class="field-input">
                                    <input type="email" placeholder="Эл.Почта" value="" name="email">
                                </div>
                                <div class="field-input">
                                    <input type="password" placeholder="Пароль" value="" name="password">
                                </div>
                                <div class="field-check">
                                    <label for="accept">
                                        <input type="checkbox" id="accept" value="">
                                        Примите <a title="Terms" href="#">условия</a> и <a title="Privacy Policy" href="#">политику конфиденциальности.</a>
                                        <span class="checkmark">
                                                    <i class="la la-check"></i>
                                                </span>
                                    </label>
                                </div>
                                <input type="submit" name="submit" value="Войти">
                            </form>


                            <form action="#" class="form-log form-content" id="login">
                                <div class="field-input">
                                    <input type="text" placeholder="Логин или Эл.Почта" value="" name="user">
                                </div>
                                <div class="field-input">
                                    <input type="password" placeholder="Пароль" value="" name="password">
                                </div>
                                <a title="Forgot password" class="forgot_pass" href="#">Забыли пароль</a>
                                <input type="submit" name="submit" value="Войти">
                            </form>
                        </div>
                    </div>&lt;!&ndash; .popup-form &ndash;&gt;-->


                    <div class="right-header__search">
                        <a title="Search" href="#" class="search-open">
                            <i class="las la-search la-24-black"></i>
                        </a>
                        <div class="site__search">
                            <a title="Close" href="#" class="search__close">
                                <i class="la la-times"></i>
                            </a><!-- .search__close -->
                            <form action="#" class="site__search__form" method="GET">
                                <div class="site__search__field">
                                            <span class="site__search__icon">
                                                <i class="las la-search la-24-black"></i>
                                            </span><!-- .site__search__icon -->
                                    <input class="site__search__input" type="text" name="s" placeholder="Найти места">
                                </div><!-- .search__input -->
                            </form><!-- .search__form -->
                        </div><!-- .site__search -->
                    </div>
                    <!-- .right-header__button -->
                </div><!-- .right-header -->
            </div><!-- .col-md-6 -->
        </div><!-- .row -->
    </div><!-- .container-fluid -->
</header><!-- .site-header -->
