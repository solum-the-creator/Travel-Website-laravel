<div class="place__box place__box--reviews">
    <h3 class="place__title--reviews">
        Отзывы ({{$place->reviews->count()}})
        <span class="place__reviews__number">
											{{$place->getAverageMark()}}
											<i class="la la-star"></i>
										</span>
    </h3>
    <ul class="place__comments">
        @foreach($reviews as $review)

            <li>
                <div class="place__author">
                    <div class="place__author__avatar">
                        <a title="Sebastian" href="#"><img src="{{\Illuminate\Support\Facades\Storage::url($review->getUser()->user_img)}}" alt=""></a>
                    </div>
                    <div class="place__author__info">
                        <div>
                            <a title="Имя" href="#">{{$review->getUser()->name}} {{$review->getUser()->second_name}}</a>

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
                        <span class="time">{{$review->created_at}}</span>
                    </div>
                </div>
                <div class="place__comments__content">
                    <p>{{$review->review_text}}</p>
                </div>


            </li>
        @endforeach


    </ul>
    @auth('web')
        <div class="review-form">
            <h3>Написать отзыв</h3>
            <form action="{{route('add_review',$place->id)}}" method="POST">

                @csrf
                <div class="rate ">
                        <div class="star_title">
                            <span>Поставить рейтинг:</span>
                        </div>



                    <div class="stars rating-area">
                        <input type="radio" id="star-5" name="mark" value="5">
                        <label for="star-5" title="Оценка «5»"><i class="la la-star"></i></label>
                        <input type="radio" id="star-4" name="mark" value="4">
                        <label for="star-4" title="Оценка «4»"><i class="la la-star"></i></label>
                        <input type="radio" id="star-3" name="mark" value="3">
                        <label for="star-3" title="Оценка «3»"><i class="la la-star"></i></label>
                        <input type="radio" id="star-2" name="mark" value="2">
                        <label for="star-2" title="Оценка «2»"><i class="la la-star"></i></label>
                        <input type="radio" id="star-1" name="mark" value="1">
                        <label for="star-1" title="Оценка «1»"><i class="la la-star"></i></label>
<!--                        <a href="#" title="star-1">
                            <i class="la la-star"></i>
                        </a>
                        <a href="#"  title="star-2">
                            <i class="la la-star"></i>
                        </a>
                        <a href="#"  title="star-3">
                            <i class="la la-star"></i>
                        </a>
                        <a href="#"  title="star-4">
                            <i class="la la-star"></i>
                        </a>
                        <a href="#"  title="star-5">
                            <i class="la la-star"></i>
                        </a>-->
                    </div>
                </div>
                <div class="field-textarea">
                    <img class="author-avatar" src="{{\Illuminate\Support\Facades\Storage::url(\Illuminate\Support\Facades\Auth::user()->user_img)}}" alt="">
                    <textarea name="review_text" placeholder="Написать отзыв"></textarea>
                </div>
                <div class="field-submit">
                    <input type="submit" class="btn" value="Отправить" name="submit">
                </div>
            </form>
        </div>
    @endauth


    @guest('web')
        <div class="review-form">
            <h3>Написать отзыв</h3>
            <form action="{{route('add_review',$place->id)}}" method="POST">
                @csrf
                <div class="rate">
                    <span>Поставить рейтинг</span>
                    <div class="stars">
                        <a href="#" title="star-1">
                            <i class="la la-star"></i>
                        </a>
                        <a href="#"  title="star-2">
                            <i class="la la-star"></i>
                        </a>
                        <a href="#"  title="star-3">
                            <i class="la la-star"></i>
                        </a>
                        <a href="#"  title="star-4">
                            <i class="la la-star"></i>
                        </a>
                        <a href="#"  title="star-5">
                            <i class="la la-star"></i>
                        </a>
                    </div>
                </div>
                <div class="field-textarea">

                    <textarea name="review_text" placeholder="Написать отзыв"></textarea>
                </div>
                <div class="field-submit">
                    <input type="submit" class="btn" value="Отправить" name="submit">
                </div>
            </form>
        </div>
    @endguest

</div>
