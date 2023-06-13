<?php

namespace App\Http\Controllers;


use PDF;
use App\Models\MulaiKuis;
use App\Models\Leaderboard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Pagination\LengthAwarePaginator;


class QuisController extends Controller
{
    public function index()
    {
        return view('layout/quis');
    }

    public function startkuis()
    {
        $item = MulaiKuis::all();
        return view('kuis/startkuis', ['items' => $item]);
    }

    public function store_leaderboard(Request $request)
    {
        $data = $request->all();
        Leaderboard::create($data);
        // session()->flash('success', 'Artikep Berhasil Ditambahkan');
        return view('layout/quis');
    }

    public function viewleaderboard()
    {
        $items = Leaderboard::orderBy('skor', 'desc')->simplePaginate(7);
        return view('kuis.leaderboard', ['items' => $items]);
    }


    public function exportPDF()
    {
        $data = DB::table("leaderboards")
            ->orderBy('skor', 'desc')
            ->get();

        $pdf = PDF::loadView('export', compact('data'));
        return $pdf->download('data_leaderboard.pdf');
    }
}
