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
        if ($details['response'] == 'error') {
            if ($details['error'] == 'invalid id') {
                return view('errors.404');
            }
        }


    }
}
