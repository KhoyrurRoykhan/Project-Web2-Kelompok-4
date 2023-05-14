<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class ArticleController extends Controller
{
    public function index()
    {
        $items = Article::all();
        return view('budaya.rumahadat', [
            'items' => $items
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('article', 'public');
        Article::create($data);
        session()->flash('success', 'Artike Berhasil Ditambahkan');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $article = Article::find($id);
        if ($article->image) {
            Storage::delete('public/' . $article->image);
        }
        $article->delete();
        session()->flash('success', 'Artikel berhasil dihapus.');
        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $validasiData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|max:1024',
            'description' => 'required',
        ]);

        $file = $request->file('image');
        if ($file) {
            if ($article->image) {
                Storage::delete('public/' . $article->image);
            }
            $filename = 'article-' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/article', $filename);
            $validasiData['image'] = $filename;
        }

        $article->update($validasiData);
        session()->flash('success', 'Artikel berhasil diupdate.');
        return redirect()->back();
    }
}
