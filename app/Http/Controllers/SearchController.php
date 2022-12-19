<?php

namespace App\Http\Controllers;

use App\Models\BasePlace;
use App\Models\Route;
use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use App\Models\Search;

class SearchController extends Controller {

    public function showSearchResult(SearchRequest $req) {
        /*$validation = $req->validate([
               'where' => 'required|min:3'
        ]);*/
        $category = $req->category_search;


        if(!is_null($category))
        {
            if($category == "Маршруты"){

                $search_result = Route::query()->where('name','LIKE', "%{$req->text_search}%")->get();

            }
            else if ($category == "Проживание"){
                $search_result = BasePlace::query()->where('name','LIKE', "%{$req->text_search}%")->get();

            }
            else if ($category == "Места"){

            }
        }



        return view('search' ,['search_result' => $search_result]);


    }

    //
}
