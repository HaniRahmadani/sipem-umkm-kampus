<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    protected $fillable = ['umkm_id','tanggal','catatan'];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }
}
