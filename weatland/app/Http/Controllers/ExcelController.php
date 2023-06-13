<?php

namespace App\Http\Controllers;


use Excel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExcelController extends Controller implements FromCollection, WithHeadings

{
    //
    public function export()
    {

        return Excel::download($this, 'data_leaderboard.xlsx');
    }


    public function collection()
    {
        return DB::table("leaderboards")
            ->orderBy('skor', 'desc')
            ->select('id', 'nama', 'skor') // Hanya memilih kolom yang diinginkan
            ->get();
    }

    public function headings(): array
    {
        return [
            'id',
            'nama',
            'skor',
            // Tambahkan kolom sesuai dengan struktur tabel Anda
        ];
    }
}
