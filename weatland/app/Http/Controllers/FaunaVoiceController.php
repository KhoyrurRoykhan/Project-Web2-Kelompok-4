<?php

namespace App\Http\Controllers;

use App\Models\FaunaVoice;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class FaunaVoiceController extends Controller
{
    public function index()
    {
        $items = FaunaVoice::all();
        return view('fauna.faunavoice', [
            'items' => $items
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('public/faunavoice');
        $data['audio'] = $request->file('audio')->store('public/faunavoice');

        FaunaVoice::create($data);
        session()->flash('success', 'Artike Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $faunavoice = FaunaVoice::find($id);
        if ($faunavoice->image) {
            Storage::delete('public/' . $faunavoice->image);
        }
        $faunavoice->delete();
        session()->flash('success', 'Artikel berhasil dihapus.');
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $faunavoice = FaunaVoice::find($id);
        $validasiData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|max:1024',
            'audio' => 'required',
        ]);

        $file = $request->file('image');
        if ($file) {
            if ($faunavoice->image) {
                Storage::delete('public/' . $faunavoice->image);
            }
            $filename = 'faunavoice-' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/faunavoice', $filename);
            $validasiData['image'] = $filename;
        }

        $faunavoice->update($validasiData);
        session()->flash('success', 'Artikel berhasil diupdate.');
        return redirect()->back();
    }
}
