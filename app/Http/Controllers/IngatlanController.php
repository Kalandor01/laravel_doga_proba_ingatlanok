<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ingatlanok;
use App\Models\Kategoriak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
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
        $ingatlan->hirdetesDatuma = $request->hirdetesDatuma == null ? Date::now() : $request->hirdetesDatuma;
        $ingatlan->tehermentes = $request->has("tehermentes") ? 1 : 0;
        // $ingatlan->tehermentes = $request->tehermentes;
        $ingatlan->ar = $request->ar;
        $ingatlan->kepUrl = $request->kepUrl;
        $ingatlan->save();
        return redirect("/ingatlanok");
    }

    public function destroy($id)
    {
        Ingatlanok::find($id)->delete();
    }


    public function listView()
    {
        $ingatlanok = IngatlanController::indexFull();
        return view("ingatlanok.list", ["ingatlanok" => $ingatlanok]);
    }

    public function newView()
    {
        $kategoriak = Kategoriak::all();
        return view("ingatlanok.new", ["kategoriak" => $kategoriak]);
    }
}
