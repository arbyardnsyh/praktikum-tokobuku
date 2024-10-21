<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return Kategori::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);

        return Kategori::create($request->all());
    }

    public function show($id)
    {
        return Kategori::find($id);
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->update($request->all());

        return $kategori;
    }

    public function destroy($id)
    {
        return Kategori::destroy($id);
    }
}

