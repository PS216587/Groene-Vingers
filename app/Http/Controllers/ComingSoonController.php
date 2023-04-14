<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComingSoonController extends Controller
{
    public function index(Request $request)
    {
        $KuinController = new KuinApiController();
        $response = $KuinController->get_request($request);
        return view('ComingSoon.index', ['result' => $response]);
    }
}
