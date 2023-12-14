<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackModel extends Model
{
    use HasFactory;

    protected $table = 'feedback';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'email',
        'subject',
        'phone',
        'message'
    ];
}
