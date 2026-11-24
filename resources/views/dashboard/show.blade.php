@extends('layouts.dashboard')

@section('title', 'Detail Permohonan — Dashboard Kaprodi')

@section('heading', 'Detail Permohonan Audiensi')

@section('content')
<div class="mb-space-md">
    <a class="inline-flex items-center gap-1 font-label-md text-label-md text-primary font-semibold hover:text-primary-container" href="{{ route('dashboard') }}">
        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
        Kembali ke daftar permohonan
    </a>
</div>

<div class="grid grid-cols-1 xl:grid-cols-3 gap-space-md items-start">
    <div class="xl:col-span-2 space-y-space-md">
        <div class="bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/20 overflow-hidden">
            <div class="p-space-lg bg-primary text-on-primary">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
                    <div class="flex items-start gap-space-md min-w-0">
                        <span class="w-14 h-14 rounded-xl bg-white/10 flex items-center justify-center font-headline-sm text-headline-sm font-bold shrink-0">{{ strtoupper(substr($audience->nama, 0, 1)) }}</span>
                        <div class="min-w-0">
                            <h2 class="font-headline-sm text-headline-sm text-white font-bold truncate">{{ $audience->nama }}</h2>
                            <p class="font-body-sm text-body-sm text-primary-fixed">{{ $audience->nim }}</p>
                            <p class="font-label-sm text-label-sm text-primary-fixed mt-1">Dikirim {{ $audience->created_at->translatedFormat('l, d F Y • H:i') }} WIB</p>
                        </div>
                    </div>
                    @php
                        $badge = match ($audience->status) {
                            'baru' => 'bg-secondary-fixed text-on-secondary-fixed',
                            'diproses' => 'bg-surface-container-high text-primary',
                            'dijadwalkan' => 'bg-sky-100 text-sky-800',
                            'selesai' => 'bg-emerald-100 text-emerald-800',
                            'ditolak' => 'bg-error-container text-on-error-container',
                            default => 'bg-surface-container text-on-surface-variant',
                        };
                    @endphp
                    <span class="inline-flex items-center gap-1 px-3 py-1.5 rounded-full font-label-sm text-label-sm font-bold {{ $badge }} self-start sm:self-center">
                        <span class="material-symbols-outlined text-[14px]">circle</span>
                        {{ $audience->statusLabel() }}
                    </span>
                </div>
            </div>
            <div class="p-space-lg grid grid-cols-1 sm:grid-cols-2 gap-space-lg">
                <div>
                    <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Informasi Pemohon</span>
                    <dl class="mt-space-sm space-y-space-sm">
                        <div class="flex items-start gap-space-sm">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">badge</span>
                            <div>
                                <dt class="font-label-sm text-label-sm text-on-surface-variant">Nama Lengkap</dt>
                                <dd class="font-body-sm text-body-sm text-on-surface font-semibold">{{ $audience->nama }}</dd>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-sm">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">fingerprint</span>
                            <div>
                                <dt class="font-label-sm text-label-sm text-on-surface-variant">NIM / NIP / Institusi</dt>
                                <dd class="font-body-sm text-body-sm text-on-surface font-semibold">{{ $audience->nim }}</dd>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-sm">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">mail</span>
                            <div class="min-w-0">
                                <dt class="font-label-sm text-label-sm text-on-surface-variant">Email Resmi</dt>
                                <dd class="font-body-sm text-body-sm text-primary font-semibold break-all"><a href="mailto:{{ $audience->email }}">{{ $audience->email }}</a></dd>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-sm">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">chat</span>
                            <div>
                                <dt class="font-label-sm text-label-sm text-on-surface-variant">WhatsApp</dt>
                                <dd class="font-body-sm text-body-sm text-on-surface font-semibold">{{ $audience->whatsapp }}</dd>
                            </div>
                        </div>
                    </dl>
                </div>
                <div>
                    <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Detail Audiensi</span>
                    <dl class="mt-space-sm space-y-space-sm">
                        <div class="flex items-start gap-space-sm">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">category</span>
                            <div>
                                <dt class="font-label-sm text-label-sm text-on-surface-variant">Kategori Pertemuan</dt>
                                <dd class="font-body-sm text-body-sm text-on-surface font-semibold">{{ $audience->kategoriLabel() }}</dd>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-sm">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">event</span>
                            <div>
                                <dt class="font-label-sm text-label-sm text-on-surface-variant">Rencana Tanggal</dt>
                                <dd class="font-body-sm text-body-sm text-on-surface font-semibold">{{ $audience->tanggal_pertemuan->translatedFormat('l, d F Y') }}</dd>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-sm">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">videocam</span>
                            <div>
                                <dt class="font-label-sm text-label-sm text-on-surface-variant">Format Pertemuan</dt>
                                <dd class="font-body-sm text-body-sm text-on-surface font-semibold">{{ $audience->formatLabel() }}</dd>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-sm">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">update</span>
                            <div>
                                <dt class="font-label-sm text-label-sm text-on-surface-variant">Pembaruan Terakhir</dt>
                                <dd class="font-body-sm text-body-sm text-on-surface font-semibold">{{ $audience->updated_at->translatedFormat('d F Y • H:i') }} WIB</dd>
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="px-space-lg pb-space-lg">
                <div class="p-space-md rounded-xl bg-surface-container-low border border-outline-variant/30">
                    <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider flex items-center gap-1">
                        <span class="material-symbols-outlined text-[16px]">subject</span>
                        Ringkasan Topik / Pokok Bahasan
                    </span>
                    <p class="font-body-md text-body-md text-on-surface mt-space-sm whitespace-pre-line leading-relaxed">{{ $audience->topik }}</p>
                </div>
            </div>
        </div>

        <div class="bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/20 p-space-lg">
            <h3 class="font-title-lg text-title-lg text-primary font-bold flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-[22px]">edit_note</span>
                Tindak Lanjut Sekretariat
            </h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 mb-space-md">Perbarui status permohonan dan tambahkan catatan internal untuk tim sekretariat.</p>
            <form class="space-y-space-md" method="POST" action="{{ route('dashboard.update', $audience) }}">
                @csrf
                @method('PATCH')
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="status">Status Permohonan</label>
                        <select class="w-full px-space-md py-2.5 rounded-lg bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm" id="status" name="status" required>
                            @foreach (\App\Models\Audience::STATUSES as $value => $label)
                                <option value="{{ $value }}" @selected(old('status', $audience->status) === $value)>{{ $label }}</option>
                            @endforeach
                        </select>
                        @error('status')
                            <p class="font-label-sm text-label-sm text-error mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="tanggal-ringkas">Ringkasan Jadwal</label>
                        <div class="w-full px-space-md py-2.5 rounded-lg bg-surface-container border border-outline-variant/40 font-body-sm text-body-sm text-on-surface-variant">
                            {{ $audience->tanggal_pertemuan->translatedFormat('d M Y') }} • {{ ucfirst($audience->format) }}
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="catatan_admin">Catatan Internal / Konfirmasi</label>
                    <textarea class="w-full px-space-md py-2.5 rounded-lg bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm resize-none" id="catatan_admin" name="catatan_admin" rows="4" placeholder="Contoh: Dijadwalkan Selasa, 09.30 WIB di Ruang Kaprodi.">{{ old('catatan_admin', $audience->catatan_admin) }}</textarea>
                    @error('catatan_admin')
                        <p class="font-label-sm text-label-sm text-error mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-wrap items-center gap-space-sm">
                    <button class="inline-flex items-center gap-1 px-4 py-2.5 rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-colors shadow-sm" type="submit">
                        <span class="material-symbols-outlined text-[18px]">save</span>
                        Simpan Perubahan
                    </button>
                    <a class="inline-flex items-center gap-1 px-4 py-2.5 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors" href="{{ route('dashboard') }}">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>

    <aside class="space-y-space-md">
        <div class="bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/20 p-space-md">
            <h4 class="font-title-md text-title-md text-primary font-bold mb-space-sm flex items-center gap-2">
                <span class="material-symbols-outlined text-[20px]">bolt</span>
                Aksi Cepat
            </h4>
            <div class="space-y-space-xs">
                <a class="w-full flex items-center gap-2 px-3 py-2.5 rounded-lg bg-emerald-50 text-emerald-800 font-label-md text-label-md hover:bg-emerald-100 transition-colors" href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $audience->whatsapp) }}" target="_blank" rel="noopener">
                    <span class="material-symbols-outlined text-[18px]">chat</span>
                    Hubungi via WhatsApp
                </a>
                <a class="w-full flex items-center gap-2 px-3 py-2.5 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors" href="mailto:{{ $audience->email }}">
                    <span class="material-symbols-outlined text-[18px]">mail</span>
                    Kirim Email Konfirmasi
                </a>
            </div>
        </div>

        <div class="bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/20 p-space-md">
            <h4 class="font-title-md text-title-md text-primary font-bold mb-space-sm flex items-center gap-2">
                <span class="material-symbols-outlined text-[20px]">sticky_note_2</span>
                Catatan Tersimpan
            </h4>
            @if ($audience->catatan_admin)
                <p class="font-body-sm text-body-sm text-on-surface whitespace-pre-line leading-relaxed">{{ $audience->catatan_admin }}</p>
            @else
                <p class="font-body-sm text-body-sm text-on-surface-variant">Belum ada catatan internal untuk permohonan ini.</p>
            @endif
        </div>

        <div class="bg-surface-container-lowest rounded-2xl shadow-sm border border-error/20 p-space-md">
            <h4 class="font-title-md text-title-md text-error font-bold mb-space-sm flex items-center gap-2">
                <span class="material-symbols-outlined text-[20px]">delete</span>
                Hapus Permohonan
            </h4>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">Tindakan ini permanen dan tidak dapat dibatalkan.</p>
            <form method="POST" action="{{ route('dashboard.destroy', $audience) }}" onsubmit="return confirm('Hapus permohonan dari {{ addslashes($audience->nama) }}? Tindakan ini tidak dapat dibatalkan.');">
                @csrf
                @method('DELETE')
                <button class="w-full inline-flex items-center justify-center gap-1 px-4 py-2.5 rounded-lg bg-error text-on-error font-label-md text-label-md hover:opacity-90 transition-opacity" type="submit">
                    <span class="material-symbols-outlined text-[18px]">delete_forever</span>
                    Hapus Permohonan
                </button>
            </form>
        </div>
    </aside>
</div>
@endsection
