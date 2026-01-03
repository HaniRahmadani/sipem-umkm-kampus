<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUmkmRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    /** 
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

        public function rules()
    {
        return [
        'nama_umkm' => 'required|string|max:255',
        'kategori'  => 'required|string|max:100',
        'status'    => 'required|in:AKTIF,TIDAK AKTIF',
    ];
}
    }

