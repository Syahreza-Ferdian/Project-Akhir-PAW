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
        'short_desc',
        'id_kategori',
        'tags',
        'long_desc',
        'picture',
        'harga'
    ];

    static function getSpecificCategory($category_id) {
        return self::where('id_kategori', $category_id)->get();
    }

    public function category() {
        return $this->belongsTo(CategoryModel::class, 'id_kategori', 'id');
    }

    static function getSpecificMenuDetail($id) {
        return self::with('category')->where('id', $id)->first();
    }

    static function getAllMenuInCategory($category) {
        $id_category = -1;
        if ($category == 'appetizer') {
            $id_category = 1;
        } else if ($category == 'main_course') {
            $id_category = 2;
        } else if ($category == 'dessert') {
            $id_category = 3;
        }

        return self::where('id_kategori', $id_category)->get();
    }

    static function cariMenu($param) {
        return self::where('nama', 'like', '%' . $param . '%')->get();
    }
}
