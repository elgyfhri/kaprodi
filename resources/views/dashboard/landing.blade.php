@extends('layouts.dashboard')

@section('title', 'Konten Halaman Depan — Dashboard Kaprodi')

@section('heading', 'Konten Halaman Depan')

@section('content')
<div class="mb-space-md flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
    <div>
        <h2 class="font-title-lg text-title-lg text-primary font-bold">Kelola Teks &amp; Gambar Landing Page</h2>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Ubah seluruh teks dan gambar yang tampil di halaman depan tanpa menyentuh kode.</p>
    </div>
    <a class="inline-flex items-center gap-1 px-3 py-2 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors" href="{{ route('home') }}" target="_blank" rel="noopener">
        <span class="material-symbols-outlined text-[18px]">open_in_new</span>
        Lihat Halaman Depan
    </a>
</div>

@if ($errors->any())
    <div class="mb-space-md p-space-md bg-error-container rounded-xl text-on-error-container flex items-start gap-3">
        <span class="material-symbols-outlined text-[24px] shrink-0">error</span>
        <div>
            <p class="font-title-md text-title-md font-bold">Perubahan belum dapat disimpan.</p>
            <ul class="list-disc list-inside font-body-sm text-body-sm mt-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<form class="space-y-space-md" method="POST" action="{{ route('dashboard.landing.update') }}" enctype="multipart/form-data">
    @csrf

    @foreach ($groups as $groupKey => $group)
        <details class="bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/20 overflow-hidden" {{ $loop->first ? 'open' : '' }}>
            <summary class="cursor-pointer select-none px-space-lg py-space-md flex items-center gap-2 bg-surface-container-low hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-primary text-[22px]">{{ $group['icon'] }}</span>
                <span class="font-title-md text-title-md text-primary font-bold">{{ $group['label'] }}</span>
                <span class="ml-auto font-label-sm text-label-sm text-on-surface-variant">{{ count($group['fields']) }} item</span>
                <span class="material-symbols-outlined text-on-surface-variant text-[20px]">expand_more</span>
            </summary>
            <div class="p-space-lg grid grid-cols-1 md:grid-cols-2 gap-space-md">
                @foreach ($group['fields'] as $key => $field)
                    @php
                        $value = old($key, \App\Models\Setting::get($key));
                        $isCustom = \App\Models\Setting::has($key);
                    @endphp
                    @if ($field['type'] === 'image')
                        <div class="md:col-span-2 p-space-md rounded-xl bg-surface border border-outline-variant/30">
                            <label class="block font-label-md text-label-md text-on-surface mb-2 font-semibold" for="field-{{ $key }}">{{ $field['label'] }}</label>
                            <div class="flex flex-col sm:flex-row sm:items-center gap-space-md">
                                <div class="w-full sm:w-56 h-32 rounded-lg bg-surface-container overflow-hidden flex items-center justify-center shrink-0">
                                    <img alt="{{ $field['label'] }}" class="max-h-full max-w-full object-contain" src="{{ landing_image($key) }}">
                                </div>
                                <div class="flex-1 space-y-space-xs">
                                    <input class="w-full px-space-md py-2 rounded-lg bg-surface-container-lowest border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm file:mr-3 file:py-1.5 file:px-3 file:rounded file:border-0 file:bg-primary file:text-on-primary file:font-label-sm file:cursor-pointer" id="field-{{ $key }}" name="{{ $key }}" accept="image/png,image/jpeg,image/webp,image/svg+xml" type="file">
                                    <p class="font-label-sm text-label-sm text-on-surface-variant">Format: JPG, PNG, WEBP, atau SVG. Maksimal 4 MB.</p>
                                    @if ($isCustom)
                                        <label class="inline-flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface-variant cursor-pointer">
                                            <input class="rounded border-outline-variant" name="{{ $key }}_remove" type="checkbox" value="1">
                                            Kembalikan ke gambar bawaan
                                        </label>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @elseif ($field['type'] === 'textarea')
                        <div class="md:col-span-2">
                            <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="field-{{ $key }}">{{ $field['label'] }}</label>
                            <textarea class="w-full px-space-md py-2.5 rounded-lg bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm" id="field-{{ $key }}" name="{{ $key }}" rows="3">{{ $value }}</textarea>
                        </div>
                    @else
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="field-{{ $key }}">{{ $field['label'] }}</label>
                            <input class="w-full px-space-md py-2.5 rounded-lg bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm" id="field-{{ $key }}" name="{{ $key }}" type="text" value="{{ $value }}">
                        </div>
                    @endif
                @endforeach
            </div>
        </details>
    @endforeach

    <div class="sticky bottom-0 z-20 bg-surface-container-lowest/95 backdrop-blur border border-outline-variant/30 rounded-xl shadow-md p-space-md flex flex-wrap items-center justify-between gap-space-sm">
        <p class="font-body-sm text-body-sm text-on-surface-variant">Perubahan akan langsung tampil di halaman depan setelah disimpan.</p>
        <div class="flex items-center gap-space-sm">
            <a class="inline-flex items-center gap-1 px-4 py-2.5 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors" href="{{ route('dashboard') }}">
                Batal
            </a>
            <button class="inline-flex items-center gap-1 px-5 py-2.5 rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-colors shadow-sm" type="submit">
                <span class="material-symbols-outlined text-[18px]">save</span>
                Simpan Semua Perubahan
            </button>
        </div>
    </div>
</form>
@endsection
