<?php

use Illuminate\Support\Facades\Route;

/*use Illuminate\Support\Facades\Auth;

Auth::routes([
    'reset'=>false,
    'confirm'=>false,
    'verify'=>false,
]);*/

/*Auth::routes();*/


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/contact', [App\Http\Controllers\ContactController::class, 'showContact'])->name('contact');


Route::get('/about-park', [App\Http\Controllers\AboutController::class, 'showAbout'])->name('about');
Route::get('/goals-park', [App\Http\Controllers\AboutController::class, 'showGoals'])->name('goals');
Route::get('/nature-park', [App\Http\Controllers\AboutController::class, 'showNature'])->name('nature');
Route::get('/scientific-activity-park', [App\Http\Controllers\AboutController::class, 'showActivity'])->name('activity');


/*Route::get('/tourism', function () {
    return view('tourism');
})->name('tourism');*/

Route::get('/tourism-categories/places-live', [\App\Http\Controllers\PlacesLiveController::class, 'allPlaces'])->name('tourism');

Route::get('/tourism-categories/base-places', [\App\Http\Controllers\PlacesLiveController::class, 'allBasePlaces'])->name('base-places');

Route::get('/tourism-categories', [\App\Http\Controllers\TourismController::class, 'showTourismCategories'])->name('tourism-categories');


Route::get('/tourism-categories/base-places/base-name/{id}', [\App\Http\Controllers\PlacesLiveController::class, 'showSinglePlace'])->name('tourism-single-place');

Route::get('/tourism-categories/base-places/{id}', [\App\Http\Controllers\PlacesLiveController::class, 'showSingleBasePlace'])->name('single-base-place');
Route::get('/get-rooms-form', [\App\Http\Controllers\PlacesLiveController::class, 'getRoomsForm']);

Route::get('/get-date-house-form', [\App\Http\Controllers\PlacesLiveController::class, 'getDateHouseForm']);
Route::get('/get-date-room-form', [\App\Http\Controllers\PlacesLiveController::class, 'getDateRoomForm']);
Route::get('/sort-base-place', [\App\Http\Controllers\PlacesLiveController::class, 'sortBasePlace']);
Route::get('/filter-route', [\App\Http\Controllers\RoutesController::class, 'filterRoute']);


Route::post('/search', [\App\Http\Controllers\SearchController::class, 'showSearchResult'])->name('search-form');

Route::get('/tourism-categories/routes', [\App\Http\Controllers\RoutesController::class, 'showRoutes'])->name('routes');
Route::get('/tourism-categories/routes/{id}', [\App\Http\Controllers\RoutesController::class, 'showSingleRoute'])->name('single-route');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware("auth")->group(function () {
    Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    Route::get('/profile-settings', [App\Http\Controllers\ProfileController::class, 'showProfile'])->name('profile-settings');
    Route::post('/profile-update-basic', [App\Http\Controllers\ProfileController::class, 'updateProfile'])->name('profile-update-basic');

    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'showUserProfile'])->name('profile');
    Route::get('/profile-reserve', [App\Http\Controllers\ProfileController::class, 'showReserveProfile'])->name('profile-reserve');
    Route::get('/profile-review', [App\Http\Controllers\ProfileController::class, 'showReviewProfile'])->name('profile-review');

    Route::post('/reservation_place', [App\Http\Controllers\ReservationPlacesController::class, 'showReservationForm'])->name('reservation_place');
    Route::get('/reserv_place', [App\Http\Controllers\ReservationPlacesController::class, 'showReserv'])->name('reservation');
    Route::post('/create_reservation_place', [App\Http\Controllers\ReservationPlacesController::class, 'createReservation'])->name('create_reservation');

    Route::get('/thanks_reservation_place/{id}', [App\Http\Controllers\ReservationPlacesController::class, 'showThanksReservation'])->name('thanks_reservation');

    Route::match(['get', 'post'], '/add_review/{id}', [App\Http\Controllers\ReviewPlacesController::class, 'store'])->name('add_review');
    Route::match(['get', 'post'], '/add_review_route/{id}', [App\Http\Controllers\ReviewPlacesController::class, 'storeRouteReview'])->name('add_review_route');



});


Route::middleware("guest")->group(function () {
    Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [App\Http\Controllers\AuthController::class, 'register'])->name('register_process');


    Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
});




