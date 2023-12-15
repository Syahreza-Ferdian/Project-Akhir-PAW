<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        return self::select('menu.*')
                ->leftJoin('menu_review', 'menu.id', '=', 'menu_review.menu_id')
                ->where('menu.id_kategori', $category_id)
                ->orderByDesc(DB::raw('COALESCE(AVG(menu_review.rating), 0)'))
                ->groupBy('menu.id', 'menu.nama', 'menu.short_desc', 'menu.id_kategori', 'menu.tags', 'menu.long_desc', 'menu.picture', 'menu.harga')
                ->take(4)
                ->get();
    }

    public function category() {
        return $this->belongsTo(CategoryModel::class, 'id_kategori', 'id');
    }

    static function getSpecificMenuDetail($id) {
        return self::with('category')->where('id', $id)->first();
    }

    static function getIdMenuByCategoryName($category) {
        switch($category) {
            case 'appetizer':
                return 1;
            case 'main_course':
                return 2;
            case 'dessert':
                return 3;
            default:
                return -1;
        }
    }

    static function getAllMenuInCategory($category) {
        $id_category = self::getIdMenuByCategoryName($category);

        return self::with('category')->where('id_kategori', $id_category)->paginate(4);
    }

    static function searchMenu($category, $param) {
        $id_category = self::getIdMenuByCategoryName($category);

        return self::with('category')
                    ->where('id_kategori', $id_category)
                    ->where(function ($query) use ($param) {
                        $query->where('nama', 'like', '%' . $param . '%')
                        ->orWhere('tags', 'like', '%' . $param . '%');
                    })->paginate(4);
    }
}
