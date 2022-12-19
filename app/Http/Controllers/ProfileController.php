<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function showProfile(){
        $user = Auth::user();
        return view('acc.profile', ['user' => $user]);
    }

    public function showUserProfile(){
        $user = Auth::user();
        $reserves = $user->reserves()->orderBy('id','desc')->take(4)->get();
        $reviewss = $user->reviews()->orderBy('id','desc')->take(4)->get();

        return view('acc.user_profile', ['user' => $user, 'reserves' => $reserves, 'reviews' => $reviewss]);
    }

    public function showReserveProfile(){
        $user = Auth::user();
        $reserves = $user->reserves;

        return view('acc.user_reserve', ['user' => $user, 'reserves' => $reserves]);
    }

    public function showReviewProfile(){
        $user = Auth::user();
        $reviews = $user->reviews;

        return view('acc.user_review', ['user' => $user, 'reviews' => $reviews]);
    }

    public function updateProfile(Request $request){


        $user = User::find(Auth::user()->id);
        Storage::delete($user->user_img);
        $params = $request->all();
        if ($request->hasFile('user_img')){
            $path = $request->file('user_img')->store('avatars');
            $params['user_img'] = $path;
        }

        $user->update($params);


        return redirect()->route('profile-settings');

    }

}
