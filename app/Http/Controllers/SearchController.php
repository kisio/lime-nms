<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index(Request $request){
        $query=$request->get('query');

        $users=DB::table('users')->where('name','like','%'. $query .'$');

    }
}
