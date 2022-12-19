@section('footer')
    <footer id="footer" class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer__top__info">
                            <a title="Logo" href="{{route('home')}}" class="footer__top__info__logo"><img src="{{asset('/images/assets/logo.png')}}" alt="Национальный парк"></a>


                        </div>
                    </div>
                    <div class="col-lg-3">
                        <aside class="footer__top__nav">
                            <h3>О парке</h3>
                            <ul>
                                <li><a title="About Us" href="{{route('contact')}}">Контакты</a></li>
                                <li><a title="Blog" href="{{route('contact')}}">Новости</a></li>
                                <li><a title="Faqs" href="15_faqs.html">Faqs</a></li>
                                <li><a title="Contact" href="{{route('base-places')}}">Туризм</a></li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-lg-3">
                        <aside class="footer__top__nav footer__top__nav--contact">
                            <h3>Наши контакты</h3>
                            <p>Email: support@domain.com</p>
                            <p>Телефон: +375 (29) 312-42-32</p>
                            <ul>
                                <li class="facebook">
                                    <a title="Facebook" href="#">
                                        <i class="la la-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a title="Twitter" href="#">
                                        <i class="la la-twitter"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a title="Youtube" href="#">
                                        <i class="la la-youtube"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a title="Instagram" href="#">
                                        <i class="la la-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div><!-- .top-footer -->
            <div class="footer__bottom">
                <p class="footer__bottom__copyright">2022 &copy; <a title="Andrew Kostukevich" href="#">Костюкевич Андрей</a>. Все права защищены.</p>
            </div><!-- .top-footer -->
        </div><!-- .container -->
    </footer><!-- site-footer -->
