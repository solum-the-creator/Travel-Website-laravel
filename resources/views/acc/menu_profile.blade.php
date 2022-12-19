<div class="container">
    <ul>
        <li @if(Route::is('profile')) class="active" @endif><a href="{{route('profile')}}">Профиль</a></li>
        <li @if(Route::is('profile-reserve')) class="active" @endif><a  href="{{route('profile-reserve')}}">Бронирования</a></li>
        <li @if(Route::is('profile-review')) class="active" @endif><a href="{{route('profile-review')}}">Отзывы</a></li>




        <li @if(Route::is('profile-settings')) class="active" @endif><a href="{{route('profile-settings')}}">Настройки</a></li>
    </ul>
</div>
