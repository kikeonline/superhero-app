<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexSearchController extends Controller
{
        /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function search()
    {
        $search_query = request()->query('s'); 

        if ($search_query) {

            $super_APIKEY = env('SUPER_APIKEY');
            $search_response = Http::get("https://superheroapi.com/api/" . $super_APIKEY . "/search/" . $search_query );
            // dd($search_response['results']);
            
            return view('index', [
                'superheroes' => $search_response['results']
            ]);
        }

        if ($search_query == null) {
            return view('index', [
                'superheroes' => false
            ]);
        }


    }
}
