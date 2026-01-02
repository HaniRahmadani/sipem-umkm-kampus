<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function landing()
    {
        $umkm = Umkm::all();
        return view('umkm.index', compact('umkm'));
    }

    public function show($id)
    {
        $data = Umkm::with('monitoring')->findOrFail($id);
        return view('umkm.detail', compact('data'));
    }

    public function index(Request $request)
    {
        $search = $request->search;

        $umkm = Umkm::where('nama_umkm', 'like', "%$search%")
                    ->orWhere('kategori', 'like', "%$search%")
                    ->paginate(5);

        return view('admin.umkm.index', compact('umkm', 'search'));
    }

    public function create()
    {
        return view('admin.umkm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_umkm' => 'required',
            'kategori' => 'required',
            'status' => 'required'
        ]);

        Umkm::create($request->all());

        return redirect('/admin/umkm')
            ->with('success', 'Data UMKM berhasil ditambahkan');
    }
}
