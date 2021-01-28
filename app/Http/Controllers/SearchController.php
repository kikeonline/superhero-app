<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function search($query) {

        $search_query = trim($query);

        if (!$search_query == "") {

            $super_APIKEY = env('SUPER_APIKEY');
            $search_response = Http::get("https://superheroapi.com/api/" . $super_APIKEY . "/search/" . $search_query );

            if ($search_response['response'] == 'success') {
                return view('search', [
                    'search_query' => $search_query,
                    'superheroes' => $search_response['results']
                ]);
            }
            if ($search_response['response'] == 'error') {
                if ($search_response['error'] == 'character with given name not found') {
                    return view('search', [
                        'search_query' => $search_query,
                        'superheroes' => false,
                        'error_type' => 'no results'
                    ]);
                } else {
                    return view('search', [
                        'search_query' => $search_query,
                        'superheroes' => false,
                        'error_type' => 'API ERROR',
                        'api_error' => $search_response['error']
                    ]);
                }
            }

        } else {
            return view('index');
        }

    }
    public function searchpost(Request $query) {

        $query = trim($query->input('query'));
        // dd($query);
        if (!$query == "") {
            return redirect('search/' . $query);
        } else {
            return redirect()->route('index');
        }

    }
}
