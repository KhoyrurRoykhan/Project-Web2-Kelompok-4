<?php

namespace App\Http\Controllers;

use App\Models\Tari;
use App\Models\Pakaian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class TariController extends Controller
{

    public function index()
    {
        $items = Tari::all();
        return view('budaya.tari', [
            'items' => $items
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('tari', 'public');
        Tari::create($data);
        session()->flash('success', 'Artikel Berhasil Ditambahkan');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $tari = Tari::find($id);
        if ($tari->image) {
            Storage::delete('public/' . $tari->image);
        }
        $tari->delete();
        session()->flash('success', 'Artikel berhasil dihapus.');
        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $tari = Tari::find($id);
        $validasiData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|max:1024',
            'description' => 'required',
        ]);

        $file = $request->file('image');
        if ($file) {
            if ($tari->image) {
                Storage::delete('public/' . $tari->image);
            }
            $filename = 'tari-' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/tari', $filename);
            $validasiData['image'] = $filename;
        }

        $tari->update($validasiData);
        session()->flash('success', 'Artikel berhasil diupdate.');
        return redirect()->back();
    }
    public function readmore($id)
    {
        $item = Tari::find($id); // Retrieve the item based on the given ID

        return view('budaya.readmore', compact('item'));
    }
}
