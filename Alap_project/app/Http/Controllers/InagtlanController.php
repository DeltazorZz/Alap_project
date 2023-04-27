<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ingatlanok;
use App\Models\Kategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InagtlanController extends Controller
{
    public function index(){
        $ingatlanok =  Ingatlanok::all();
        return $ingatlanok;
    }

    public function store(Request $request)
    {
        $ingatlan = new Ingatlanok();
   	    $ingatlan->kategoria = $request->kategoria;
        $ingatlan->lairas = $request->leiras;
        $ingatlan->hirdetesDatuma = $request->hirdetesDatuma;
        $ingatlan->tehermentes = $request->tehermentes;
        $ingatlan->ar = $request->ar;
        $ingatlan->kepUrl = $request->kepUrl;
        $ingatlan->save();
    }

    public function update(Request $request, $id)
    {
        $ingatlan = Ingatlanok::find($id);
        $ingatlan->kategoria = $request->kategoria;
        $ingatlan->lairas = $request->leiras;
        $ingatlan->hirdetesDatuma = $request->hirdetesDatuma;
        $ingatlan->tehermentes = $request->tehermentes;
        $ingatlan->ar = $request->ar;
        $ingatlan->kepUrl = $request->kepUrl;
        $ingatlan->save();
        return Ingatlanok::find($ingatlan->id);
    }

    public function destroy($id)
    {
        $ingatlan = Ingatlanok::find($id)->delete();
        $ingatlan = Ingatlanok::all();
        return $ingatlan;
    }

    public function osszesIngatlanKatnev()
    {
        $ingatlanok = DB::select(DB::raw("
        select * 
        from ingatlanoks i, kategorias k
        where i.kategoria = k.kateg_id
        "));
        return $ingatlanok;
    }


}
