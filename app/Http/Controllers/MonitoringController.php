<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use App\Models\Umkm;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function create(Umkm $umkm)
    {
        return view('admin.monitoring.create', compact('umkm'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'umkm_id' => 'required',
            'tanggal' => 'required|date',
            'catatan' => 'required'
        ]);

        Monitoring::create($request->all());

        return redirect('/admin/umkm')->with('success', 'Monitoring ditambahkan');
    }
}
