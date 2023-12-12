<?php

namespace App\Http\Controllers;

use App\Models\MenuReviewModel;
use Illuminate\Http\Request;

class MenuReviewController extends Controller
{
    //
    public function reviewBaru(Request $request) {
        $review = MenuReviewModel::create([
            'poster_name'   => $request->name ?? 'Anonim',
            'posted_at'     => $request->posted_at,
            'menu_id'       => $request->menu_id,
            'message'       => $request->review,
            'rating'        => $request->rating_input
        ]);

        return response()->json(['review' => $review]);
    }
}
