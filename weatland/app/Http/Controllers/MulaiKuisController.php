<?php

namespace App\Http\Controllers;

use App\Models\MulaiKuis;
use Illuminate\Http\Request;

class MulaiKuisController extends Controller
{
    public function index()
    {
        $items = MulaiKuis::all();
        return view('kuis.mulaikuis', [
            'items' => $items
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        MulaiKuis::create($data);
        session()->flash('success', 'Soal Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $kuis = MulaiKuis::find($id);
        $kuis->delete();
        session()->flash('success', 'Kuis berhasil dihapus.');
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $kuis = MulaiKuis::find($id);
        $validasiData = $request->validate([
            'soal' => 'required|max:255',
            'option_a' => 'required|max:255',
            'option_b' => 'required|max:255',
            'option_c' => 'required|max:255',
            'option_d' => 'required|max:255',
            'Jawaban' => 'required|max:255'
        ]);


        $kuis->update($validasiData);
        session()->flash('success', 'Soal berhasil diupdate.');
        return redirect()->back();
    }
}
