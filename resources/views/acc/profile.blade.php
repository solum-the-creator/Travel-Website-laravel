@extends('layouts.page')

@section('title-block','Настройки профиля')





@section('content')
    <main id="main" class="site-main">
        <div class="site-content owner-content">
            <div class="member-menu">
                @include('acc.menu_profile')
            </div>
            <div class="container">
                <div class="member-wrap">
                    <div class="member-wrap-top">
                        <h2>Настройки профиля</h2>
                    </div><!-- .member-wrap-top -->
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="{{route('profile-update-basic')}}" enctype="multipart/form-data" method="POST" class="member-profile form-underline widget-shadow-left">
                            @csrf
                                <h3>Основная информация</h3>
                                <div class="member-avatar">
                                    <img id="member_avatar" src="{{\Illuminate\Support\Facades\Storage::url($user->user_img)}}" alt="Изображение пользователя">
                                    <label for="user_img" >
                                        <input id="user_img" type="file" name="user_img" placeholder="Обновить изображение" value="{{\Illuminate\Support\Facades\Storage::url($user->user_img)}}">
                                        Обновить изображение профиля
                                    </label>


                                </div>
                                <div class="field-input">
                                    <label for="first_name">Имя</label>
                                    <input type="text" name="name" placeholder="{{$user->name}}" value="{{$user->name}}" id="first_name">
                                </div>
                                <div class="field-input">
                                    <label for="last_name">Фамилия</label>
                                    <input type="text" name="second_name" placeholder="{{$user->second_name}}" value="{{$user->second_name}}" id="last_name">
                                </div>
                                <div class="field-input">
                                    <label for="email">Адрес эл. почты</label>
                                    <input type="email" name="email" placeholder="{{$user->email}}" value="{{$user->email}}" id="email">
                                </div>
                                <div class="field-input">
                                    <label for="phone">Номер телефона</label>
                                    <input type="tel" name="phone" placeholder="{{$user->phone}}" value="{{$user->phone}}" id="phone">
                                </div>

                                <div class="field-submit">
                                    <input type="submit" value="Изменить">
                                </div>
                            </form><!-- .member-profile -->

                        </div>
                        <div class="col-lg-6 ">





                                <form action="#" class="member-password form-underline widget-shadow-left">
                                    @csrf
                                    <h3>Изменение пароля</h3>
                                    <div class="field-input">
                                        <label for="old_password">Текущий пароль</label>
                                        <input type="password" name="old_password" placeholder="Введите текущий пароль" id="old_password">
                                    </div>
                                    <div class="field-input">
                                        <label for="new_password">Новый пароль</label>
                                        <input type="password" name="new_password" placeholder="Введите новый пароль" id="new_password">
                                    </div>
                                    <div class="field-input">
                                        <label for="re_new">Пвоторите новый пароль</label>
                                        <input type="password" name="re_new" placeholder="Введите новый пароль" id="re_new">
                                    </div>
                                    <div class="field-submit">
                                        <input type="submit" value="Изменить">
                                    </div>
                                </form>



                        </div>

                    </div>
                </div><!-- .member-wrap -->
            </div>
        </div><!-- .site-content -->
    </main><!-- .site-main -->

@endsection


