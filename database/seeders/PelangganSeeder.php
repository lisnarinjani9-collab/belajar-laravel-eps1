<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan::create([
            'nama_pelanggan' => 'Rajian Santriazi',
            'no_hp' => '083920192839',
            'alamat' => 'Jl. Bojongsoang No. 123, Bandung',
        ]);

        Pelanggan::create([
            'nama_pelanggan' => 'Rinjani Cantik',
            'no_hp' => '0832019283645',
            'alamat' => 'Jl. Sleman No. 456, Yogyakarta',
        ]);
    }
}
