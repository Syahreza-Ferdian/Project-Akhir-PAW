<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    use HasFactory;

    protected $table = 'menu';

    protected $fillable = [
        'nama',
        'short-desc',
        'id_category',
        'tags',
        'long-desc',
        'picture',
        'harga'
    ];

    static function getSpecificCategory($category_id) {
        return self::where('id_kategori', $category_id)->get();
    }
}
