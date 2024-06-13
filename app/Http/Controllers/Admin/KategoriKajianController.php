<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TopikKajian;
class KategoriKajianController extends Controller
{

    // only admin
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topik_kajian = TopikKajian::all();
        return view('admin.kategori_kajian.kategori_kajian', compact('topik_kajian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $is_edit = false;
        return view('admin.kategori_kajian.kategori_kajian_form', compact('is_edit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|unique:topik_kajian',
        ]);

        TopikKajian::create($request->all());

        return redirect()->route('admin.kategori_kajian.index')
            ->with('success', 'Kategori Kajian berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $is_edit = true;

        $kategori_kajian = TopikKajian::findOrFail($id);

        return view(
            'admin.kategori_kajian.kategori_kajian_form', 
            compact('is_edit', 'kategori_kajian')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|unique:topik_kajian,nama,' . $id,
        ]);

        $kategori_kajian = TopikKajian::findOrFail($id);
        $kategori_kajian->update($request->all());

        return redirect()->route('admin.kategori_kajian.index')
            ->with('success', 'Kategori Kajian berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori_kajian = TopikKajian::findOrFail($id);
        $kategori_kajian->delete();

        return redirect()->route('admin.kategori_kajian.index')
            ->with('success', 'Kategori Kajian berhasil dihapus');
    }
}
