<?php

namespace App\Http\Controllers;

use App\Models\QuestionModel;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    function index() {
        $data = [
            'page_title'    => 'FAQ and Feedback | Makan Mania',
            'questions'     => QuestionModel::all()  
        ];

        return view('feedback')->with('data', $data);
    }
}