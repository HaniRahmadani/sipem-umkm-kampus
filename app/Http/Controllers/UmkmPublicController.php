<?php

namespace App\Http\Controllers;

use App\Models\Umkm;

class UmkmPublicController extends Controller
{
    // HALAMAN LIST UMKM (PUBLIK)
    public function index()
    {
        $umkms = Umkm::all();
        return view('umkm.index', compact('umkms'));
    }

    // DETAIL UMKM
    public function show($id)
    {
        $umkm = Umkm::findOrFail($id);
        return view('umkm.detail', compact('umkm'));
    }
}