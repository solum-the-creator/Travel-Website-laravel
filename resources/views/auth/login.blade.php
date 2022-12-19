@extends('layouts.app')

@section('title-block','Авторизация')

@section('content')

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-lg-6 ">
            <aside class="widget widget-shadow widget-reservation">
                <h3>Вход</h3>
                <form action="{{route('login_process')}}" method="POST" class="billingForm login-form">
                    @csrf

                    <div class="field-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="field-input">
                                    <label class="text-xl-start" for="email">Email</label>
                                    <input type="text" class="@error('email') border-danger @enderror" placeholder="Эл.Почта" value="" name="email" id="email">
                                    @error('email')
                                    <p class="text-danger text-lg-start">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="field-input">
                                    <label class="text-xl-start" for="email">Пароль</label>
                                    <input type="password" class="@error('password') border-danger @enderror" placeholder="Пароль" value="" name="password">
                                    @error('password')
                                    <p class="text-danger text-lg-start">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div><!-- .field-group -->



                    <div class="field-submit">
                        <a title="Forgot password" class="forgot_pass" href="{{route('register')}}">Регистрация</a>

                        <a title="Forgot password" class="forgot_pass" href="#">Забыли пароль</a>
                        <input type="submit" name="submit" class="btn" value="Войти">

                    </div>
                </form><!-- .billingForm -->
            </aside><!-- .widget-reservation -->

        </div>
    </div>



</div>


</div>
@endsection
