<?php

namespace App\Http\Controllers;

use App\Models\ReservationModel;
use App\Models\Meja;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function displayFormReservasi()
    {
        return view('reservasi');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'guests' => 'required|integer|min:1|max:8',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        $nomorMeja = $this->cariMejaTersedia(
            $request->input('guests'),
            $request->input('date'),
            $request->input('time')
        );

        if ($nomorMeja != null) {
            $reservasiId = DB::table('reservations')->insertGetId([
                'NAMA' => $request->input('name'),
                'NO_TELP' => $request->input('phone'),
                'JUMLAH_ROMBONGAN' => $request->input('guests'),
                'TANGGAL' => $request->input('date'),
                'JAM' => $request->input('time'),
                'NOMOR_MEJA' => $nomorMeja,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Meja::where('NOMOR_MEJA', $nomorMeja)
                ->update([
                    'TERISI' => true,
                    'TANGGAL' => $request->input('date'),
                    'JAM' => $request->input('time'),
                ]);

            return redirect('/reservasi')->with('success', 'Reservasi berhasil! Nomor meja: ' . $nomorMeja);
        } else {
            return redirect('/reservasi')->with('error', 'Maaf, meja tidak tersedia pada waktu tersebut.');
        }
    }

    private function cariMejaTersedia($jumlah_rombongan, $tanggal, $jam)
    {
        $waktuMulai = strtotime($tanggal . ' ' . $jam);
        $waktuAkhir = $waktuMulai + 7200; 

        $mejaTersedia = Meja::where('TERISI', false)
            ->where('JUMLAH_KURSI', '>=', $jumlah_rombongan)
            ->where('TANGGAL', null)
            ->where('JAM', null)
            ->get();


        foreach ($mejaTersedia as $meja) {
            $waktuMejaMulai = strtotime($meja->TANGGAL . ' ' . $meja->JAM);
            $waktuMejaAkhir = $waktuMejaMulai + 7200; 
            if (
                ($waktuMulai >= $waktuMejaMulai && $waktuMulai <= $waktuMejaAkhir) ||
                ($waktuAkhir >= $waktuMejaMulai && $waktuAkhir <= $waktuMejaAkhir)
            ) {
                return null;
            }
        }

        return $mejaTersedia->isNotEmpty() ? $mejaTersedia->first()->NOMOR_MEJA : null;
    }

}