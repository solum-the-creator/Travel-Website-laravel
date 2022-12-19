    <div class="col-lg-4">
        <div class="sidebar sidebar--shop sidebar--border">
            <div class="widget-reservation-mini">
                <h3>Забронировать</h3>
                <a href="#" class="open-wg btn">Забронировать</a>
            </div>
            <aside class="widget widget-shadow widget-reservation">
                @if(\Illuminate\Support\Facades\Route::is('single-base-place'))
                    <h3>База отдыха</h3>
                @endif

                    @if(\Illuminate\Support\Facades\Route::is('tourism-single-place'))
                        <h3>Дом базы отдыха</h3>
                    @endif
                <form action="{{route('reservation_place')}}" method="POST" class="form-underline">
                    @csrf

                    <div class="field-select has-sub field-house">
                        <select name="house" id="house" class="@error('house') border-danger @enderror">
                            <option value="" disabled selected hidden>Дома базы</option>
                            @if(\Illuminate\Support\Facades\Route::is('single-base-place'))
                                @foreach($houses_live as $house)

                                    <option data-reservation="{{$house->booking_types_id}}" value="{{$house->id}}">{{$house->name}}</option>
                                @endforeach
                            @endif

                            @if(\Illuminate\Support\Facades\Route::is('tourism-single-place'))
                                @foreach($houses_live as $house)
                                    @if($house->name == $place->name)
                                        <option data-reservation="{{$house->booking_types_id}}" value="{{$house->id}}" selected>{{$house->name}}</option>
                                    @else
                                        <option data-reservation="{{$house->booking_types_id}}" value="{{$house->id}}">{{$house->name}}</option>
                                    @endif


                                @endforeach
                            @endif

                        </select>
                        <span class="sl-icon"><i class="la la-home"></i></span>

                        <i class="la la-angle-down"></i>

                        <span class="sl-icon"><i class="la la-home"></i></span>
                        <i class="la la-angle-down"></i>
                        @error('house')
                        <p class="text-danger text-lg-start">{{$message}}</p>
                        @enderror

                    </div>


                            <div class="field-select has-sub field-type-reservation  @if(!isset($place->booking_types_id) || $place->booking_types_id==1) display-none  @endif">
                                <select name="type" id="type" class="@error('type') border-danger @enderror">
                                    <option value="0"  disabled hidden>Тип бронирования</option>

                                        <option value="1"  @if($place->booking_types_id==1) class="display-none" @endif>Номер</option>
                                        <option value="2" selected @if($place->booking_types_id==2) class="display-none" @endif>Коттедж</option>



                                </select>
                                <span class="sl-icon"><i class="la la-home"></i></span>

                                <i class="la la-angle-down"></i>
                                @error('type')
                                <p class="text-danger text-lg-start">{{$message}}</p>
                                @enderror

                            </div>




                    <div class="field-select has-sub field-room">
                        <select name="rooms" class="@error('rooms') border-danger @enderror" id="rooms">
                        </select>
                        <span class="sl-icon"><i class="la la-home"></i></span>

                        <i class="la la-angle-down"></i>
                        @error('rooms')
                        <p class="text-danger text-lg-start">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="field-select has-sub field-guest">
                        <span class="sl-icon"><i class="la la-user-friends"></i></span>
                        <input name="quantity"  type="text" class="@error('quantity') border-danger @enderror" placeholder="Гости" readonly>
                        <i class="la la-angle-down"></i>
                        <div class="field-sub">
                            <ul>
                                <li>
                                    <span>Взрослые</span>
                                    <div class="shop-details__quantity">
															<span class="minus">
																<i class="la la-minus"></i>
															</span>
                                        <input type="number" id="numberGuest" readonly  value="0" max="6" class="qty number_adults">
                                        <span class="plus">
                                            <i class="la la-plus"></i>
															</span>

                                    </div>
                                </li>
<!--                                <li>
                                    <span>Дети</span>
                                    <div class="shop-details__quantity">
															<span class="minus">
																<i class="la la-minus"></i>
															</span>
                                        <input type="number" name="quantity" value="0" class="qty number_childrens">
                                        <span class="plus">
																<i class="la la-plus"></i>
															</span>
                                    </div>
                                </li>-->
                            </ul>


                        </div>
                        @error('quantity')
                        <p class="text-danger text-lg-start">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="field-select field-date">
                        <span class="sl-icon"><i class="la la-calendar-alt"></i></span>
                        <input readonly name="start_date" type="text" placeholder="Дата заселения" id="date_timepicker_start" class="datepicker @error('start_date') border-danger @enderror" autocomplete="off">
                        <i class="la la-angle-down"></i>
                        @error('start_date')
                        <p class="text-danger text-lg-start">{{$message}}</p>
                        @enderror
                    </div>


                    <div class="field-select field-date">
                        <span class="sl-icon"><i class="la la-calendar-alt"></i></span>
                        <input readonly name="end_date" type="text" placeholder="Дата выезда" id="date_timepicker_end" class="datepicker @error('start_date') border-danger @enderror" autocomplete="off">
                        <i class="la la-angle-down"></i>
                        @error('start_date')
                        <p class="text-danger text-lg-start">{{$message}}</p>
                        @enderror
                    </div>


                    <input type="submit" name="submit" value="Забронировать">
                </form>
            </aside><!-- .widget-reservation -->
        </div><!-- .sidebar -->
    </div>
