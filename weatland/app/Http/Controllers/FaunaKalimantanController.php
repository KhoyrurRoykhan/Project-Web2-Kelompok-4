<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\FaunaKalimantan;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class FaunaKalimantanController extends Controller
{
    public function index()
    {
        $items = FaunaKalimantan::all();
        return view('fauna.faunakalimantan', [
            'items' => $items
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('faunakalimantan', 'public');
        FaunaKalimantan::create($data);
        session()->flash('success', 'Artike Berhasil Ditambahkan');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $fauna = FaunaKalimantan::find($id);
        if ($fauna->image) {
            Storage::delete('public/' . $fauna->image);
        }
        $fauna->delete();
        session()->flash('success', 'Artikel berhasil dihapus.');
        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $fauna = FaunaKalimantan::find($id);
        $validasiData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|max:1024',
            'description' => 'required',
        ]);

        $file = $request->file('image');
        if ($file) {
            if ($fauna->image) {
                Storage::delete('public/' . $fauna->image);
            }
            $filename = 'faunakalimantan-' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/faunakalimantan', $filename);
            $validasiData['image'] = $filename;
        }

        $fauna->update($validasiData);
        session()->flash('success', 'Artikel berhasil diupdate.');
        return redirect()->back();
    }

    public function readmore($id)
    {
        $item = FaunaKalimantan::find($id); // Retrieve the item based on the given ID

        return view('fauna.readmore', compact('item'));
    }
}
