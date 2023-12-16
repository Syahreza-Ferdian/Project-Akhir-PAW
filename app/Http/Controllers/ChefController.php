<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChefModel;

class ChefController extends Controller
{
    //
    function index() {
        $data = [
            'page_title'    => 'Chef Page',
            'chef'          => ChefModel::all()
        ];

        return view('chef')->with('data', $data);
    }
    function cariChef(Request $request) {
        $param = $request->input('cari_chef');

        $data = [
            'page_title'    => 'Search result of ' . $param,
            'chef'  => ChefModel::cariChef($param)
        ];

        return view('chef')->with('data', $data);
    }
}
