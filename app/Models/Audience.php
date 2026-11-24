<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'nama',
    'nim',
    'email',
    'whatsapp',
    'kategori',
    'tanggal_pertemuan',
    'format',
    'topik',
    'status',
    'catatan_admin',
])]
class Audience extends Model
{
    use HasFactory;

    public const STATUSES = [
        'baru' => 'Baru',
        'diproses' => 'Diproses',
        'dijadwalkan' => 'Dijadwalkan',
        'selesai' => 'Selesai',
        'ditolak' => 'Ditolak',
    ];

    public const KATEGORI = [
        'capstone' => 'Bimbingan Tugas Akhir & Proyek Terapan',
        'akademik' => 'Konsultasi Studi, Beban SKS & Praktikum Lab',
        'robotika' => 'Bimbingan Praktik Pemrograman & Jaringan',
        'industri' => 'Kemitraan Industri & Layanan Teknis IT',
        'lainnya' => 'Konsultasi Karier, Wirausaha & Sertifikasi',
    ];

    public const FORMATS = [
        'luring' => 'Tatap Muka di Ruang Kaprodi / Sekretariat Prodi',
        'daring' => 'Daring via Zoom / Google Meet Resmi',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_pertemuan' => 'date',
        ];
    }

    public function kategoriLabel(): string
    {
        return self::KATEGORI[$this->kategori] ?? ucfirst($this->kategori);
    }

    public function formatLabel(): string
    {
        return self::FORMATS[$this->format] ?? ucfirst($this->format);
    }

    public function statusLabel(): string
    {
        return self::STATUSES[$this->status] ?? ucfirst($this->status);
    }
}
