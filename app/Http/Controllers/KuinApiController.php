<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KuinApiController extends Controller
{
    public function get_request(Request $request)
    {
        $item_id = $request->input('item_id');

        if (isset($item_id)) {
            $api_url = 'kuin.summaict.nl/api/product/' . $item_id;
            $response = Http::withToken(env('API_TOKEN'))->get($api_url);
            #$response = $response['name'];
            return $response;
        }
    }
}
