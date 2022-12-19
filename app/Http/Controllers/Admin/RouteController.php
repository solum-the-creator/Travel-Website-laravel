<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PlaceLiveFormRequest;
use App\Http\Requests\Admin\RouteFormRequest;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

        $routes = Route::orderBy("id", "DESC")->paginate(10);


        return view('admin.routes.index', [
            "routes" => $routes,
        ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.routes.create", []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RouteFormRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(RouteFormRequest $request)
    {
        $data = $request->validated();

        if ($request->has("images")) {
            $image = $request->file('images')->store('routes_img');
            $data['images'] = $image;
        }
        $route = Route::create($data);

        return redirect(route('admin.routes.index'));
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
        $route = Route::findOrFail($id);
        return view("admin.routes.create", ['route' => $route]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RouteFormRequest $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(RouteFormRequest $request, $id)
    {
        $route = Route::findOrFail($id);
        $data = $request->validated();

        if ($request->has("images")) {
            $image = $request->file('images')->store('routes_img');
            $data['images'] = $image;
        }

        $route->update($data);

        return redirect(route('admin.routes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Route::destroy($id);
        return redirect(route('admin.routes'));
    }
}
