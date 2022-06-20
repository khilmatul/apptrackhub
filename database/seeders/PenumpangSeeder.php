<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenumpangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penumpangs')->insert([
            'kode' => '02001',
            'nama_lengkap' => 'Khilmatul Karima',
            'tanggal_lahir' => '2012-10-20',
            'alamat' => 'Banyuwangi',
            'no_telepon' => '08213456790',
            'asal_sekolah' => 'Man 3 Banyuwangi',
            'qr_code' => 'jhsaucsuids'
        ]);
    }
}
