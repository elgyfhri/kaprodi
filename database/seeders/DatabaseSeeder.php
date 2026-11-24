<?php

namespace Database\Seeders;

use App\Models\Audience;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::query()->updateOrCreate(
            ['email' => 'admin@kaprodi.test'],
            [
                'name' => 'Administrator Kaprodi',
                'password' => 'password',
                'email_verified_at' => now(),
            ]
        );

        $samples = [
            [
                'nama' => 'Muhammad Farhan',
                'nim' => '20230001',
                'email' => 'farhan@mahasiswa.ac.id',
                'whatsapp' => '+62 812-3456-7890',
                'kategori' => 'capstone',
                'tanggal_pertemuan' => now()->addDays(3)->toDateString(),
                'format' => 'luring',
                'topik' => 'Konsultasi topik tugas akhir tentang aplikasi pendukung operasional berbasis web untuk UMKM.',
                'status' => 'baru',
            ],
            [
                'nama' => 'Siti Rahmawati',
                'nim' => '20230002',
                'email' => 'siti@mahasiswa.ac.id',
                'whatsapp' => '+62 813-2222-1111',
                'kategori' => 'akademik',
                'tanggal_pertemuan' => now()->addDays(5)->toDateString(),
                'format' => 'daring',
                'topik' => 'Konsultasi beban SKS semester depan dan pengambilan mata kuliah praktikum jaringan komputer.',
                'status' => 'diproses',
                'catatan_admin' => 'Menunggu konfirmasi jadwal dari sekretariat.',
            ],
            [
                'nama' => 'Bagas Prakoso',
                'nim' => '20230003',
                'email' => 'bagas@mahasiswa.ac.id',
                'whatsapp' => '+62 811-9876-5432',
                'kategori' => 'industri',
                'tanggal_pertemuan' => now()->addDays(7)->toDateString(),
                'format' => 'luring',
                'topik' => 'Diskusi peluang magang bidang IT support dan konfigurasi jaringan lokal bersama mitra industri.',
                'status' => 'dijadwalkan',
                'catatan_admin' => 'Dijadwalkan Kamis, 13.30 WIB di Ruang Kaprodi.',
            ],
        ];

        foreach ($samples as $sample) {
            Audience::query()->create($sample);
        }
    }
}
