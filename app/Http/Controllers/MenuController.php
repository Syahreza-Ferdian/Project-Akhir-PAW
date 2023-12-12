<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use App\Models\MenuReviewModel;
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

    function specificMenu($id) {
        $is_menu_valid = MenuModel::find($id);

        if(!$is_menu_valid) {
            return view('404_not_found');
        }

        $data = [
            'detail_menu'   => MenuModel::getSpecificMenuDetail($id),
            'review'        => MenuReviewModel::getReviewFromMenu($id),
            'total_review'  => MenuReviewModel::getTotalUlasan($id),
            'rating_menu'   => MenuReviewModel::getAverageRating($id)
        ];

        return view('menu_detail')->with('data', $data);
    }
}
