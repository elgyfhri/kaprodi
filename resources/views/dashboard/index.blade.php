@extends('layouts.dashboard')

@section('title', 'Dashboard — Permohonan Audiensi Kaprodi')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-space-md mb-space-lg">
    <div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-md border border-outline-variant/20">
        <div class="flex items-center justify-between mb-space-sm">
            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase font-bold tracking-wider">Total Permohonan</span>
            <span class="w-9 h-9 rounded-lg bg-surface-container text-primary flex items-center justify-center">
                <span class="material-symbols-outlined text-[20px]">inbox</span>
            </span>
        </div>
        <p class="font-headline-lg text-headline-lg text-primary font-bold leading-none">{{ $stats['total'] }}</p>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Seluruh permohonan tersimpan</p>
    </div>
    <div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-md border border-outline-variant/20">
        <div class="flex items-center justify-between mb-space-sm">
            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase font-bold tracking-wider">Baru</span>
            <span class="w-9 h-9 rounded-lg bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center">
                <span class="material-symbols-outlined text-[20px]">mark_email_unread</span>
            </span>
        </div>
        <p class="font-headline-lg text-headline-lg text-secondary font-bold leading-none">{{ $stats['baru'] }}</p>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Menunggu tindak lanjut</p>
    </div>
    <div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-md border border-outline-variant/20">
        <div class="flex items-center justify-between mb-space-sm">
            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase font-bold tracking-wider">Diproses</span>
            <span class="w-9 h-9 rounded-lg bg-surface-container-high text-primary flex items-center justify-center">
                <span class="material-symbols-outlined text-[20px]">pending_actions</span>
            </span>
        </div>
        <p class="font-headline-lg text-headline-lg text-primary font-bold leading-none">{{ $stats['diproses'] }}</p>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Sedang dikonfirmasi sekretariat</p>
    </div>
    <div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-md border border-outline-variant/20">
        <div class="flex items-center justify-between mb-space-sm">
            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase font-bold tracking-wider">Selesai</span>
            <span class="w-9 h-9 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center">
                <span class="material-symbols-outlined text-[20px]">task_alt</span>
            </span>
        </div>
        <p class="font-headline-lg text-headline-lg text-emerald-700 font-bold leading-none">{{ $stats['selesai'] }}</p>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Audiensi telah terlaksana</p>
    </div>
</div>

<div class="bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/20 overflow-hidden">
    <div class="p-space-md border-b border-outline-variant/30 flex flex-col md:flex-row md:items-center justify-between gap-space-md">
        <div>
            <h2 class="font-title-lg text-title-lg text-primary font-bold">Daftar Permohonan</h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Kelola audiensi &amp; konsultasi yang diajukan melalui formulir publik.</p>
        </div>
        <form class="flex flex-col sm:flex-row items-stretch sm:items-center gap-space-sm" method="GET" action="{{ route('dashboard') }}">
            <div class="relative">
                <span class="material-symbols-outlined text-[18px] text-on-surface-variant absolute left-3 top-1/2 -translate-y-1/2">search</span>
                <input class="w-full sm:w-64 pl-9 pr-3 py-2 rounded-lg bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm" name="q" value="{{ $search }}" placeholder="Cari nama, NIM, email, topik..." type="search">
            </div>
            <select class="px-3 py-2 rounded-lg bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm" name="status">
                <option value="">Semua Status</option>
                @foreach (\App\Models\Audience::STATUSES as $value => $label)
                    <option value="{{ $value }}" @selected($status === $value)>{{ $label }}</option>
                @endforeach
            </select>
            <button class="inline-flex items-center justify-center gap-1 px-4 py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-colors" type="submit">
                <span class="material-symbols-outlined text-[18px]">filter_alt</span> Terapkan
            </button>
            @if ($search !== '' || $status)
                <a class="inline-flex items-center justify-center gap-1 px-3 py-2 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors" href="{{ route('dashboard') }}">
                    <span class="material-symbols-outlined text-[18px]">restart_alt</span> Reset
                </a>
            @endif
        </form>
    </div>

    @if ($audiences->isEmpty())
        <div class="p-space-xl text-center">
            <div class="w-16 h-16 mx-auto rounded-full bg-surface-container text-primary flex items-center justify-center mb-space-md">
                <span class="material-symbols-outlined text-[32px]">inbox</span>
            </div>
            <h3 class="font-title-lg text-title-lg text-on-surface font-bold">Belum ada permohonan</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Permohonan audiensi yang dikirim melalui halaman publik akan muncul di sini.</p>
        </div>
    @else
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-surface-container-low">
                    <tr class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                        <th class="px-space-md py-3 whitespace-nowrap">Pemohon</th>
                        <th class="px-space-md py-3 whitespace-nowrap">Kontak</th>
                        <th class="px-space-md py-3 whitespace-nowrap">Kategori</th>
                        <th class="px-space-md py-3 whitespace-nowrap">Jadwal</th>
                        <th class="px-space-md py-3 whitespace-nowrap">Status</th>
                        <th class="px-space-md py-3 whitespace-nowrap text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/20">
                    @foreach ($audiences as $audience)
                        <tr class="hover:bg-surface-container-low/60 transition-colors align-top">
                            <td class="px-space-md py-3">
                                <div class="flex items-start gap-space-sm">
                                    <span class="w-9 h-9 rounded-full bg-primary/10 text-primary flex items-center justify-center font-label-md font-bold shrink-0">{{ strtoupper(substr($audience->nama, 0, 1)) }}</span>
                                    <div class="min-w-0">
                                        <p class="font-title-md text-title-md text-on-surface font-semibold truncate max-w-[14rem]">{{ $audience->nama }}</p>
                                        <p class="font-label-sm text-label-sm text-on-surface-variant">{{ $audience->nim }}</p>
                                        <p class="font-label-sm text-label-sm text-on-surface-variant">Dikirim {{ $audience->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-space-md py-3">
                                <p class="font-body-sm text-body-sm text-on-surface">{{ $audience->email }}</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">{{ $audience->whatsapp }}</p>
                            </td>
                            <td class="px-space-md py-3">
                                <p class="font-body-sm text-body-sm text-on-surface max-w-[16rem]">{{ $audience->kategoriLabel() }}</p>
                            </td>
                            <td class="px-space-md py-3 whitespace-nowrap">
                                <p class="font-body-sm text-body-sm text-on-surface font-semibold">{{ $audience->tanggal_pertemuan->translatedFormat('d M Y') }}</p>
                                <p class="font-label-sm text-label-sm text-on-surface-variant">{{ ucfirst($audience->format) }}</p>
                            </td>
                            <td class="px-space-md py-3">
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
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full font-label-sm text-label-sm font-bold whitespace-nowrap {{ $badge }}">{{ $audience->statusLabel() }}</span>
                            </td>
                            <td class="px-space-md py-3 text-right whitespace-nowrap">
                                <a class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-colors" href="{{ route('dashboard.show', $audience) }}">
                                    <span class="material-symbols-outlined text-[16px]">visibility</span> Detail
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-space-md border-t border-outline-variant/30">
            {{ $audiences->links() }}
        </div>
    @endif
</div>
@endsection
