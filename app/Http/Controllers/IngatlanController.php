<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ingatlanok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngatlanController extends Controller
{
    public function index()
    {
        return response()->json(Ingatlanok::all());
    }

    public function indexFull()
    {
        $select = DB::table("ingatlanoks as i")
        ->join("kategoriaks as k", "k.id", "=", "i.kategoria")
        ->get(["i.id", "k.nev", "i.leiras", "i.hirdetesDatuma", "i.tehermentes", "i.ar", "i.kepUrl"]);
        return $select;
    }

    public function show($id)
    {
        return response()->json(Ingatlanok::find($id));
    }

    public function store(Request $request)
    {
        $ingatlan = new Ingatlanok();
        $ingatlan->kategoria = $request->kategoria;
        $ingatlan->leiras = $request->leiras;
        $ingatlan->hirdetesDatuma = $request->hirdetesDatuma;
        $ingatlan->tehermentes = $request->tehermentes;
        $ingatlan->ar = $request->ar;
        $ingatlan->kepUrl = $request->kepUrl;
        $ingatlan->save();
    }

    public function destroy($id)
    {
        Ingatlanok::find($id)->delete();
    }
}
