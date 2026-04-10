<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
       $users = [
    [
        'nama'     => 'Admin',
        'alamat'   => 'Semarang',
        'no_ktp'   => '3374010101010001',
        'no_hp'    => '081234567890',
        'no_rm'    => '-', // Jangan null, isi dengan strip
        'role'     => 'admin',
        'id_poli'  => null,
        'email'    => 'admin@gmail.com',
        'password' => Hash::make('admin'),
    ],
    [
        'nama'     => 'Dokter Budi',
        'alamat'   => 'Jl. Nakula, Semarang',
        'no_ktp'   => '3374010101010002',
        'no_hp'    => '081234567891',
        'no_rm'    => '-', // Jangan null
        'role'     => 'dokter',
        'id_poli'  => null, 
        'email'    => 'dokter@gmail.com',
        'password' => Hash::make('dokter'),
    ],
    [
        'nama'     => 'Pasien Ghulam',
        'alamat'   => 'Pekalongan',
        'no_ktp'   => '3374010101010003',
        'no_hp'    => '081234567892',
        'no_rm'    => '202604-001',
        'role'     => 'pasien',
        'id_poli'  => null,
        'email'    => 'pasien@gmail.com',
        'password' => Hash::make('pasien'),
    ],
];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}