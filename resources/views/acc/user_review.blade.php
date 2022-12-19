@extends('layouts.page')

@section('title-block','Профиль')





@section('content')
    <main id="main" class="site-main">
        <div class="site-content owner-content">
            <div class="member-menu">
                @include('acc.menu_profile')
            </div>
            <div class="container">
                <div class="member-place-wrap">
                    <div class="member-wrap-top">
                        <h2>Ваш список отзывов</h2>

                    </div><!-- .member-wrap-top -->
<!--                    <div class="member-filter">
                        <div class="mf-left">
                            <form action="#" method="GET">
                                <div class="field-select">
                                    <select name="place_cities">
                                        <option value="20">Show 20</option>
                                        <option value="40">Show 40</option>
                                    </select>
                                    <i class="la la-angle-down"></i>
                                </div>
                                <div class="field-select">
                                    <select name="place_cities">
                                        <option value="0">All status</option>
                                        <option value="approve">Approve</option>
                                        <option value="pending">Pending</option>
                                        <option value="cancel">Cancel</option>
                                    </select>
                                    <i class="la la-angle-down"></i>
                                </div>
                            </form>
                        </div>&lt;!&ndash; .mf-left &ndash;&gt;
                        <div class="mf-right">
                            <form action="#" class="site__search__form" method="GET">
                                <div class="site__search__field">
										<span class="site__search__icon">
											<i class="la la-search"></i>
										</span>&lt;!&ndash; .site__search__icon &ndash;&gt;
                                    <input class="site__search__input" type="text" name="s" placeholder="Search">
                                </div>&lt;!&ndash; .search__input &ndash;&gt;
                            </form>&lt;!&ndash; .search__form &ndash;&gt;
                        </div>&lt;!&ndash; .mf-right &ndash;&gt;
                    </div>&lt;!&ndash; .member-filter &ndash;&gt;-->
                    <table class="member-place-list owner-booking table-responsive">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Оценка</th>
                            <th>Дата добавления</th>
                            <th>Текст отзыва</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reviews as $review)
                            <tr>
                                <td data-title="ID">1</td>
                                <td data-title="Reviews"><b>{{$review->mark}}</b></td>
                                <td data-title="Booking at">{{$review->created_at}}</td>
                                <td data-title="Booking at">{{$review->review_text}}</td>
                                <td data-title="" class="place-action">
                                    <a href="#" class="cancel" title="Cancel">Удалить</a>
                                    <a href="#" class="detail" title="Detail">Подробнее</a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    <div class="pagination align-left">
                        <div class="pagination__numbers">
                            <span>1</span>
                            <a title="2" href="#">2</a>
                            <a title="3" href="#">3</a>
                            <a title="Next" href="#">
                                <i class="la la-angle-right"></i>
                            </a>
                        </div>
                    </div><!-- .pagination -->
                </div><!-- .member-place-wrap -->
            </div>
        </div><!-- .site-content -->
    </main><!-- .site-main -->

@endsection


