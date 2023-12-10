<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    function index() {
        $data = [
            'appetizer'     => MenuModel::getSpecificCategory(1),
            'main_course'   => MenuModel::getSpecificCategory(2),
            'dessert'       => MenuModel::getSpecificCategory(3)
        ];

        return view('landing')->with('data', $data);
    }
}
