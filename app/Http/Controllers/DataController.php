<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = "Ini Adalah Data";
        return response()->json($data, 200);
    }
}
