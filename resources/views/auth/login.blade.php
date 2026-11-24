@extends('layouts.public')

@section('title', 'Masuk Dashboard — Portal Kaprodi')

@section('content')
<section class="w-full py-space-xl lg:py-24 bg-surface-container-low min-h-[calc(100vh-80px)] flex items-center">
    <div class="max-w-md w-full mx-auto px-gutter">
        <div class="bg-surface-container-lowest rounded-2xl shadow-xl overflow-hidden">
            <div class="h-1.5 bg-gradient-to-r from-primary via-primary-container to-secondary"></div>
            <div class="p-space-lg lg:p-space-xl">
                <div class="text-center mb-space-lg">
                    <div class="w-14 h-14 mx-auto rounded-xl bg-surface-container-high text-primary flex items-center justify-center mb-space-md">
                        <span class="material-symbols-outlined text-[30px]">admin_panel_settings</span>
                    </div>
                    <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-widest">Area Terbatas</span>
                    <h1 class="font-headline-md text-headline-md text-primary mt-1">Masuk Dashboard Kaprodi</h1>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Kelola permohonan audiensi &amp; konsultasi yang masuk.</p>
                </div>

                @if ($errors->any())
                    <div class="mb-space-md p-space-md bg-error-container rounded-xl text-on-error-container flex items-start gap-3">
                        <span class="material-symbols-outlined text-[22px] shrink-0">error</span>
                        <p class="font-body-sm text-body-sm">{{ $errors->first() }}</p>
                    </div>
                @endif

                <form method="POST" action="{{ route('login.store') }}" class="space-y-space-md">
                    @csrf
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="email">Email Administrator</label>
                        <input class="w-full px-space-md py-2.5 rounded bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm text-on-surface transition-all" id="email" name="email" value="{{ old('email') }}" placeholder="admin@kaprodi.test" required type="email" autofocus>
                    </div>
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="password">Password</label>
                        <input class="w-full px-space-md py-2.5 rounded bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm text-on-surface transition-all" id="password" name="password" placeholder="••••••••" required type="password">
                    </div>
                    <label class="inline-flex items-center gap-2 font-body-sm text-body-sm text-on-surface-variant">
                        <input class="rounded border-outline-variant text-primary focus:ring-primary" name="remember" type="checkbox" value="1">
                        Ingat saya
                    </label>
                    <button class="w-full inline-flex items-center justify-center gap-2 px-space-xl py-3 rounded bg-primary hover:bg-primary-container text-on-primary font-title-md text-title-md shadow-md hover:shadow-lg transition-all" type="submit">
                        <span class="material-symbols-outlined text-[20px]">login</span>
                        Masuk Dashboard
                    </button>
                </form>

                <div class="mt-space-lg p-space-sm bg-surface-container rounded-lg font-body-sm text-body-sm text-on-surface-variant flex items-start gap-2">
                    <span class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5">info</span>
                    <span>Akun demo: <strong>admin@kaprodi.test</strong> / <strong>password</strong></span>
                </div>
                <div class="mt-space-md text-center">
                    <a class="inline-flex items-center gap-1 font-label-md text-label-md text-primary font-semibold hover:text-primary-container" href="{{ route('home') }}">
                        <span class="material-symbols-outlined text-[16px]">arrow_back</span> Kembali ke portal
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
