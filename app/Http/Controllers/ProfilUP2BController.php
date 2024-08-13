<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilUP2B;
use Illuminate\Support\Facades\File;

class ProfilUP2BController extends Controller
{
    // Menampilkan halaman profil UP2B
    public function profilup2b()
    {
        // Ambil data profil UP2B dari database (misal menggunakan model ProfilUP2B)
        $profilUP2B = ProfilUP2B::first();
        return view('profilup2b.profilup2b', compact('profilUP2B'));
    }

    // Menampilkan halaman create profil UP2B
    public function create()
    {
        return view('profilup2b.createprofil');
    }

    // Store profil UP2B
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3648',
        ]);

        if ($request->has('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            
            $path = 'uploads/profilup2b/';
            $file->move($path, $filename);

            ProfilUP2B::create([
                'description' => $request->description,
                'image' => $path.$filename,
            ]);
        }
        return redirect()->route('profilup2b');
    }

    // Menampilkan halaman edit profil UP2B
    public function editProfilup2b($id)
    {
        // Ambil data profil UP2B dari database
        $profilUP2B = ProfilUP2B::find($id);
        return view('profilup2b.editprofil', compact('profilUP2B'));
    }

    // Mengupdate profil UP2B
    public function updateProfilup2b($id, Request $request)
    {   
        $profilUP2B = ProfilUP2B::find($id);
        // Validasi input
        $request->validate([
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Update deskripsi
        $profilUP2B->description = $request->description;

        // Jika ada foto yang diupload, simpan foto tersebut
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/profilup2b/';

            // Hapus foto lama jika ada
            if ($profilUP2B->image && File::exists(public_path($profilUP2B->image))) {
                File::delete(public_path($profilUP2B->image));
            }

            $file->move(public_path($path), $filename);
            $profilUP2B->update(['image' => $path.$filename]);
        }

        // Simpan perubahan ke database
        $profilUP2B->save();

        // Redirect kembali ke halaman profil UP2B dengan pesan sukses
        return redirect('/admin/profilup2b')->with('success', 'Profil UP2B berhasil diperbarui');
    }

    public function index()
    {
        $profilUP2B = ProfilUP2B::first();
        return view('profilup2b.index', compact('profilUP2B'));
    }
}
