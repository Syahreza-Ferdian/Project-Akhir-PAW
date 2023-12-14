<?php

namespace App\Http\Controllers;

use App\Models\MenuReviewModel;
use Carbon\Carbon;
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

        $formattedDate = Carbon::parse($review->posted_at)->format('d-m-Y h:i:s');
        $review->posted_at = $formattedDate;

        return response()->json(['review' => $review]);
    }
}
