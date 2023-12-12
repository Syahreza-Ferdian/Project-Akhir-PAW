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
}
