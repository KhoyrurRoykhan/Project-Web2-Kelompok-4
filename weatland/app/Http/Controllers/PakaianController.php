<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pakaian;
use Illuminate\Support\Facades\Storage;

class PakaianController extends Controller
{
    public function index()
    {
        $items = Pakaian::all();
        return view('budaya.pakaian', [
            'items' => $items
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('pakaian', 'public');
        Pakaian::create($data);
        session()->flash('success', 'Artikel Berhasil Ditambahkan');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $pakaian = Pakaian::find($id);
        if ($pakaian->image) {
            Storage::delete('public/' . $pakaian->image);
        }
        $pakaian->delete();
        session()->flash('success', 'Artikel berhasil dihapus.');
        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $pakaian = Pakaian::find($id);
        $validasiData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|max:1024',
            'description' => 'required',
        ]);

        $file = $request->file('image');
        if ($file) {
            if ($pakaian->image) {
                Storage::delete('public/' . $pakaian->image);
            }
            $filename = 'pakaian-' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/pakaian', $filename);
            $validasiData['image'] = $filename;
        }

        $pakaian->update($validasiData);
        session()->flash('success', 'Artikel berhasil diupdate.');
        return redirect()->back();
    }
    public function readmore($id)
    {
        $item = Pakaian::find($id); // Retrieve the item based on the given ID

        return view('budaya.readmore', compact('item'));
    }
}
