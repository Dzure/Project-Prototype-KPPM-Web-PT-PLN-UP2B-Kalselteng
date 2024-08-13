<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProfilUP2B;

class ProfilUP2BSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh: Menambahkan data dummy ke dalam tabel profilup2b
        ProfilUP2B::create([
            'description' => 'Deskripsi contoh',
            'image' => 'uploads/profilup2b/denahup2b.jpg',
        ]);
    }
}
