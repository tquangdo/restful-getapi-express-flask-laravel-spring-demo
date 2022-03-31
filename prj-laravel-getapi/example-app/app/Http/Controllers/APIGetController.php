<?php

namespace App\Http\Controllers;

class APIGetController extends Controller
{
    public function _apiGet()
    {
        return response()->json([
            "key" => "value",
        ]);
    }
}
