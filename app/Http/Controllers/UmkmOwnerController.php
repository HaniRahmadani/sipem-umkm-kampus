<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmOwnerController extends Controller
{
    public function dashboard()
    {
        if (auth()->user()->role !== 'umkm') {
            abort(403);
        }

        // semua UMKM ditampilkan
        $umkms = Umkm::all();

        return view('umkm.dashboard', compact('umkms'));
    }

    public function index()
    {
        // HANYA UMKM MILIK USER LOGIN
        $umkms = Umkm::where('user_id', auth()->id())->get();

        return view('umkm.index', compact('umkms'));
    }

    // create, store, edit, update, destroy lanjutkan seperti biasa
}