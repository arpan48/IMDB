<?php

namespace App\Http\Controllers;

use App\CategoriesLink;
use Illuminate\Http\Request;

class CategoriesLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $link = new CategoriesLink();
        $link->movie_id = $request->movie_id;
        $link->show_id = $request->show_id;
        $link->category_id = $request->category_id;
        $link->save();
        return back();


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = CategoriesLink::find($id);
        $link->destroy();
        return back();
    }
}
