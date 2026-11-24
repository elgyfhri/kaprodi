<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AudienceController extends Controller
{
    /**
     * Simpan permohonan audiensi baru dari halaman publik.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:150'],
            'nim' => ['required', 'string', 'max:60'],
            'email' => ['required', 'email', 'max:150'],
            'whatsapp' => ['required', 'string', 'max:30'],
            'kategori' => ['required', 'in:'.implode(',', array_keys(Audience::KATEGORI))],
            'tanggal_pertemuan' => ['required', 'date', 'after_or_equal:today'],
            'format' => ['required', 'in:'.implode(',', array_keys(Audience::FORMATS))],
            'topik' => ['required', 'string', 'max:2000'],
        ], [
            'nama.required' => 'Nama lengkap wajib diisi.',
            'nim.required' => 'NIM / NIP / institusi asal wajib diisi.',
            'email.required' => 'Email resmi wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'whatsapp.required' => 'Nomor WhatsApp aktif wajib diisi.',
            'kategori.required' => 'Pilih kategori pertemuan.',
            'kategori.in' => 'Kategori pertemuan tidak valid.',
            'tanggal_pertemuan.required' => 'Rencana tanggal pertemuan wajib diisi.',
            'tanggal_pertemuan.date' => 'Tanggal pertemuan tidak valid.',
            'tanggal_pertemuan.after_or_equal' => 'Tanggal pertemuan tidak boleh di masa lalu.',
            'format.required' => 'Pilih format pertemuan.',
            'format.in' => 'Format pertemuan tidak valid.',
            'topik.required' => 'Ringkasan topik wajib diisi.',
            'topik.max' => 'Ringkasan topik maksimal 2000 karakter.',
        ]);

        Audience::create($validated + ['status' => 'baru']);

        return redirect()
            ->route('home')
            ->withFragment('reservasi-kaprodi')
            ->with('success', 'Permohonan audiensi berhasil dikirim. Sekretariat Kaprodi akan mengonfirmasi slot waktu Anda melalui WhatsApp & Email dalam waktu maksimal 1x24 jam kerja.');
    }
}
