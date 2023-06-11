<?php

namespace App\Http\Controllers;

use App\Models\Tari;
use App\Models\Flora;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FloraController extends Controller
{
    public function index()
    {
        $items = Flora::all();
        return view('layout/flora', [
            'items' => $items
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('flora', 'public');
        Flora::create($data);
        session()->flash('success', 'Artikel Berhasil Ditambahkan');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $flora = Flora::find($id);
        if ($flora->image) {
            Storage::delete('public/' . $flora->image);
        }
        $flora->delete();
        session()->flash('success', 'Artikel berhasil dihapus.');
        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $flora = Flora::find($id);
        $validasiData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|max:1024',
            'description' => 'required',
        ]);

        $file = $request->file('image');
        if ($file) {
            if ($flora->image) {
                Storage::delete('public/' . $flora->image);
            }
            $filename = 'flora/' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/', $filename);
            $validasiData['image'] = $filename;
        }

        $flora->update($validasiData);
        session()->flash('success', 'Artikel berhasil diupdate.');
        return redirect()->back();
    }
    public function readmore($id)
    {
        $item = Flora::find($id); // Retrieve the item based on the given ID

        return view('flora.readmore', compact('item'));
    }
}
