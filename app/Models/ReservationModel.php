<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationModel extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $primaryKey = 'id_reservasi';

    protected $fillable = [
        'NAMA',
        'NO_TELP',
        'JUMLAH_ROMBONGAN',
        'TANGGAL',
        'JAM',
        'NOMOR_MEJA' // Add a closing quote here
    ];

    public function meja()
    {
        return $this->belongsTo(Meja::class, 'NOMOR_MEJA', 'NOMOR_MEJA');
    }
}
