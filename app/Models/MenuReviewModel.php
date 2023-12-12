<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuReviewModel extends Model
{
    use HasFactory;

    protected $table = 'menu_review';
    public $timestamps = false;

    protected $fillable = [
        'posted_at',
        'poster_name',
        'message',
        'menu_id',
        'rating'
    ];

    static function getReviewFromMenu($id) {
        return self::select('posted_at', 'poster_name', 'message', 'rating')->where('menu_id', $id)->get();
    }

    static function getTotalUlasan($id) {
        return self::where('menu_id', $id)->count();
    }

    static function getAverageRating($id) {
        return self::where('menu_id', $id)->avg('rating');
    }
}