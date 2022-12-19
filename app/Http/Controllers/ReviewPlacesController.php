<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use App\Models\ReviewRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewPlacesController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  ReviewRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(ReviewRequest $request, $id)
    {
        $data = $request->validated();
        $user = Auth::user();
        $data['user_id'] = $user->id;
        $data['base_place_id'] = $id;
        $review = Review::create($data);
        return back();
    }

    public function storeRouteReview(ReviewRequest $request, $id)
    {
        $data = $request->validated();
        $user = Auth::user();
        $data['user_id'] = $user->id;
        $data['route_id'] = $id;
        $review = ReviewRoute::create($data);
        return back();
    }


}
