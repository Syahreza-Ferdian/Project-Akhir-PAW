<?php

namespace App\Http\Controllers;

use App\Models\FeedbackModel;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    function newFeedback(Request $request) {
        FeedbackModel::create([
            'nama'      => $request->name,
            'email'     => $request->email,
            'subject'   => $request->subject,
            'phone'     => $request->phone,
            'message'   => $request->message
        ]);

        return response()->json(['status' => 'success']);
    }
}
