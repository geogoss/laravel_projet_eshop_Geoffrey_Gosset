<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    public function index () {
        $trees = Tree::all();
        return view('pages.home', compact('trees'));
    }

    public function create () {
        return view('pages.newEssence');
    }

    public function store (Request $request) {
        $store = new Tree();
        $store->name = $request->name;
        $store->latin = $request->latin;
        $store->minLenger = $request->minLenger;
        $store->maxLenger = $request->maxLenger;
        $store->price = $request->price;
        $store->type = $request->type;
        $store->url = $request->url;
        $store->save();
        return redirect()->back();
    }

    public function destroy ($id) {
        $delete = Tree::find($id);
        $delete->delete();
        return redirect('/');
    }

    public function show ($id) {
        $show = Tree::find($id);
        return view('pages.show', compact('show'));
    }

    public function categorie () {
        return view('pages.categorie');
    }

    public function arbre () {
        $arbres = Tree::where('type', '=', 'arbre')->get();
        return view('pages.arbre', compact('arbres'));
    }
    public function arbuste () {
        $arbustes = Tree::where('type', '=', 'arbuste')->get();
        return view('pages.arbuste', compact('arbustes'));
    }
    public function fruitier () {
        $fruitiers = Tree::where('type', '=', 'fruitier')->get();
        return view('pages.fruitier', compact('fruitiers'));
    }


}
