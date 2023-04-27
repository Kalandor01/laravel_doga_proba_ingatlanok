<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategoriak;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index()
    {
        return response()->json(Kategoriak::all());
    }

    public function show($id)
    {
        return response()->json(Kategoriak::find($id));
    }
}
