<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    protected $table = 'MEJA'; // Make sure it matches your actual table name
    protected $primaryKey = 'NOMOR_MEJA'; // Assuming NOMOR_MEJA is the primary key

    // Define the fillable fields if you want to use mass assignment
    protected $fillable = [
        'NOMOR_MEJA',
        'JUMLAH_KURSI',
        'TERISI',
    ];

    // You may also define relationships here if applicable
}
