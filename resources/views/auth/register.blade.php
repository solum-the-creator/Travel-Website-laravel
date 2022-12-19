@extends('layouts.app')

@section('title-block','Регистрация')

@section('content')

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 ">
                <aside class="widget widget-shadow widget-reservation">
                    <h3>Регистрация</h3>
                    <form action="{{route('register_process')}}" class="billingForm login-form" method="POST">
                        @csrf

                        <div class="field-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label class="text-xl-start" for="secondName">Фамилия</label>
                                        <input type="text" placeholder="Фамилия" class="@error('secondName') border-danger @enderror" value="" name="secondName" id="secondName">
                                        @error('secondName')
                                        <p class="text-danger text-lg-start">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-input">
                                        <label class="text-xl-start" for="firstName">Имя</label>
                                        <input type="text" placeholder="Имя" value="" class="@error('firstName') border-danger @enderror" name="firstName" id="firstName">
                                        @error('firstName')
                                            <p class="text-danger text-lg-start">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="field-input">
                                        <label class="text-xl-start" for="email">Email</label>
                                        <input type="text" placeholder="Логин или Эл.Почта" class="@error('email') border-danger @enderror" value="" name="email" id="email">
                                        @error('email')
                                        <p class="text-danger text-lg-start">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="field-input">
                                        <label class="text-xl-start" for="password">Пароль</label>
                                        <input type="password" placeholder="Пароль" class="@error('password') border-danger @enderror" value="" name="password">
                                        @error('password')
                                        <p class="text-danger text-lg-start">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="field-input">
                                        <label class="text-xl-start" for="password_confirmation">Подвердите пароль</label>
                                        <input type="password" placeholder="Повторите пароль" class="@error('password_confirmation') border-danger @enderror" value="" name="password_confirmation">
                                        @error('password_confirmation')
                                        <p class="text-danger text-lg-start">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div><!-- .field-group -->



                        <div class="field-submit">
                            <a title="Forgot password" class="forgot_pass" href="#">Забыли пароль</a>
                            <input type="submit" name="submit" class="btn" value="Зарегистрироваться">

                        </div>
                    </form><!-- .billingForm -->
                </aside><!-- .widget-reservation -->

            </div>
        </div>



    </div>


    </div>
@endsection
