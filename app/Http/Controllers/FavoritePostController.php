<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritePostController extends Controller

{
    public function store(Request $request, $id)
    {
        \Auth::favorittings()->favorite($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::favorittings()->unfavorite($id);
        return redirect()->back();
    }
}