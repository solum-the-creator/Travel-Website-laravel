<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\Spot;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RoutesController extends Controller
{

    public function showRoutes(){
        $routes = new Route();
        $spots = Spot::all();


        return view('routes', ['routes' => $routes->all(), 'spots'=>$spots]);

    }

    public function showSingleRoute($id){

        $route = Route::find($id);
        $spots = $route->spots;
        $reviews = $route->find($id)->reviewRoutes;
        return view('single_route', ['route' => $route, 'spots' => $spots,'reviews' => $reviews]);

    }

    public function filterRoute(Request $request){

        $categoryId = $request->categoryValue;
        $spotId = $request->spotValue;

        if(!is_null($categoryId) && !is_null($spotId)){
            $filter_routes = "1";
            $filter_routes = "1";
        }
        elseif (!is_null($categoryId)){
            $filter_routes = Route::where('categories_id', $categoryId)->get();
        }
        elseif (!is_null($spotId)){

        }

        foreach ($filter_routes as $route) {
            $route->count_review = $route->reviewRoutes->count();
            $route->avg_mark = $route->getAverageMark();
            $route->category_name = $route->getCategory()->name;
        }


        return response()->json(['routes' => $filter_routes,]);

    }

}
