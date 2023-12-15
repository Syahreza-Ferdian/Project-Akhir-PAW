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
        $id = MenuModel::getIdMenuByCategoryName($category);
        $isAvail = MenuModel::find($id);

        if(!$isAvail) {
            exit();
        }

        $menus = MenuModel::getAllMenuInCategory($category);
        foreach($menus as $menu) {
            $rating[$menu->id] = MenuReviewModel::getAverageRating($menu->id);
        }

        $data = [
            'page_title'    => ucwords($category) . ' Category',
            'category'      => $category,
            'menu'          => MenuModel::getAllMenuInCategory($category),
            'rating'        => $rating
        ];

        return view('show_all_menu_in_category')->with('data', $data);
    }

    function cariMenu(Request $request, $category) {
        $param = $request->input('cari_menu');

        $menus = MenuModel::searchMenu($category, $param);
        $rating = [];

        if (!$menus) {
            exit();
        }

        foreach($menus as $menu) {
            $rating[$menu->id] = MenuReviewModel::getAverageRating($menu->id);
        }

        $data = [
            'page_title'    => 'Search result of ' .$param,
            'category'      => $category,
            'menu'          => $menus,
            'rating'        => $rating
        ];

        return view('show_all_menu_in_category')->with('data', $data);
    }    
}
