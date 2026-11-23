<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    // 1. Route Publik (Root Path)
    public function welcome()
    {
        // Mengambil data pertama dari tabel biodatas
        $biodata = Biodata::first();
        return view('welcome', compact('biodata'));
    }

    // 2. Route Admin: Menampilkan Form Edit
    public function edit()
    {
        $biodata = Biodata::first();
        return view('admin.edit', compact('biodata'));
    }

    // 3. Route Admin: Memproses Pembaruan Data
    public function update(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'pekerjaan' => 'required',
            'tentang' => 'required',
            'keahlian' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
        ]);

        // Cari data pertama atau buat baru jika belum ada
        $biodata = Biodata::first();
        if ($biodata) {
            $biodata->update($request->all());
        } else {
            Biodata::create($request->all());
        }

        return redirect()->route('welcome')->with('success', 'Biodata berhasil diperbarui!');
    }
}