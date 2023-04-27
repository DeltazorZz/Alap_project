<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index(){
        $kategoriak =  Kategoria::all();
        return $kategoriak;
    }

    public function store(Request $request)
    {
        $kategoria = new Kategoria();
   	    $kategoria->nev = $request->nev;
        $kategoria->save();
    }

    public function update(Request $request, $id)
    {
        $kategoria = Kategoria::find($id);
        $kategoria->nev = $request->nev;
        $kategoria->save();
        return Kategoria::find($kategoria->id);
    }

    public function destroy($id)
    {
        $kategoria = Kategoria::find($id)->delete();
        $kategoria = Kategoria::all();
        return $kategoria;
    }

}
