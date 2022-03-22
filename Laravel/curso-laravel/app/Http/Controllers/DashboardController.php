<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        // Debug para la peticion
        // dd($request-> query('title', default:'Sin valor para la peticion'));
        return view('test', [
            'title' => $request->query('title', default:'Sin valor para la peticion')
        ]);
    }
}
