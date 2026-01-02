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

    public function adminIndex()
    {
        $umkm = Umkm::all();
        return view('admin.umkm.index', compact('umkm'));
    }

    public function create()
    {
        return view('admin.umkm.create');
    }

    public function store(Request $request)
    {
        Umkm::create($request->all());
        return redirect('/admin/umkm');
    }
}
