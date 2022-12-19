<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PlaceLiveFormRequest;
use App\Models\PlacesLive;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $places = PlacesLive::orderBy("id", "DESC")->paginate(10);


        return view('admin.places.index', [
            "places" => $places,
        ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.places.create", []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PlaceLiveFormRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(PlaceLiveFormRequest $request)
    {
        $data = $request->validated();
        if ($request->has("all_images")) {
            foreach ($request->all_images as $singleImage) {
                $singleImage->store('places_live/' . $data['id']);
            }
        }
        if ($request->has("images")) {
            $image = $request->file('images')->store('places_live');
            $data['images'] = $image;
        }
        $place = PlacesLive::create($data);
        return redirect(route('admin.places-live.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $place = PlacesLive::findOrFail($id);
        return view("admin.places.create", ['place' => $place]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PlaceLiveFormRequest $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(PlaceLiveFormRequest $request, $id)
    {
        $place = PlacesLive::findOrFail($id);
        $data = $request->validated();
        if ($request->has("all_images")) {
            foreach ($request->all_images as $singleImage) {
                $singleImage->store('places_live/' . $id);
            }
        }
        if ($request->has("images")) {
            $image = $request->file('images')->store('places_live');
            $data['images'] = $image;
        }

        $place->update($data);

        return redirect(route('admin.places-live.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        PlacesLive::destroy($id);
        return redirect(route('admin.places_live'));
    }
}
