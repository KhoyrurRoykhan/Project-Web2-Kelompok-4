<?php

namespace App\Http\Controllers;

use App\Models\Tari;
use App\Models\Benda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BendaController extends Controller
{

    public function index()
    {
        $items = Benda::all();
        return view('budaya.benda', [
            'items' => $items
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('benda', 'public');
        Benda::create($data);
        session()->flash('success', 'Artikel Berhasil Ditambahkan');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $benda = Benda::find($id);
        if ($benda->image) {
            Storage::delete('public/' . $benda->image);
        }
        $benda->delete();
        session()->flash('success', 'Artikel berhasil dihapus.');
        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $benda = Benda::find($id);
        $validasiData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|max:1024',
            'description' => 'required',
        ]);

        $file = $request->file('image');
        if ($file) {
            if ($benda->image) {
                Storage::delete('public/' . $benda->image);
            }
            $filename = 'benda-' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/benda', $filename);
            $validasiData['image'] = $filename;
        }

        $benda->update($validasiData);
        session()->flash('success', 'Artikel berhasil diupdate.');
        return redirect()->back();
    }
}
