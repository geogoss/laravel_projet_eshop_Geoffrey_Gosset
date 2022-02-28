<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    public function index () {
        return view('layouts.app');
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
        return redirect()->back();
    }

}
