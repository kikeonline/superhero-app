<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetailsController extends Controller
{
    //
    public function details($id) {

        $super_APIKEY = env('SUPER_APIKEY');
        $details = Http::get("https://superheroapi.com/api/" . $super_APIKEY . "/" . $id );

        if ($details['response'] == 'success') {
            return view('details', [
                'details' => $details
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


    }
}
