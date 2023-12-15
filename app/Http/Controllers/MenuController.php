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

    function categoryDetails($category) {
        $data = [
            'page_title' => ucwords($category),
            'menu'       => MenuModel::getAllMenuInCategory($category)
        ];

        return view('show_all_menu_in_category')->with('data', $data);
    }

    function cariMenu($param) {
        $data = [
            'page_title'    => 'A',
            'cari'  => MenuModel::cariMenu($param)
        ];

        return view('show_all_menu_in_category')->with('data', $data);
    }    
}
