<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChefModel extends Model
{
    use HasFactory;

    protected $table = 'chef';
    
    protected $fillable = [
        'id_chef',
        'nama',
        'picture',
        'jabatan',
        'short_desc',
        'email',
        'instagram',
        'experience',
    ];
    static function cariChef($param) {
        return self::where('nama', 'like', '%' . $param . '%')->get();
    }
    
    // public function index(): View
    // {
    //     return view('user.index', [
    //         'users' => DB::table('users')->paginate(6)
    //     ]);
    // }
}
