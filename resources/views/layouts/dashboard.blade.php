<!DOCTYPE html>
<html lang="id">
<head>
    @include('partials.head')
</head>
<body class="bg-surface font-body-md text-body-md text-on-surface antialiased">
<div class="min-h-screen flex">
    <aside class="hidden lg:flex w-72 shrink-0 flex-col bg-primary text-on-primary">
        <div class="h-20 flex items-center gap-space-sm px-space-lg border-b border-white/10">
            <div class="w-10 h-10 rounded-lg bg-surface-container-lowest text-primary flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined text-[24px]">school</span>
            </div>
            <div class="min-w-0">
                <p class="font-title-md text-title-md font-bold leading-tight truncate">Portal Kaprodi</p>
                <p class="font-label-sm text-label-sm text-primary-fixed truncate">Teknik Komputer</p>
            </div>
        </div>
        <nav class="flex-1 p-space-md space-y-space-xs">
            <a class="flex items-center gap-3 px-space-md py-2.5 rounded-lg {{ request()->routeIs('dashboard', 'dashboard.show') ? 'bg-white/10 font-bold' : 'hover:bg-white/10 transition-colors text-primary-fixed' }} font-label-md text-label-md" href="{{ route('dashboard') }}">
                <span class="material-symbols-outlined text-[20px]">inbox</span>
                Permohonan Audiensi
            </a>
            <a class="flex items-center gap-3 px-space-md py-2.5 rounded-lg {{ request()->routeIs('dashboard.landing') ? 'bg-white/10 font-bold' : 'hover:bg-white/10 transition-colors text-primary-fixed' }} font-label-md text-label-md" href="{{ route('dashboard.landing') }}">
                <span class="material-symbols-outlined text-[20px]">edit_document</span>
                Konten Halaman Depan
            </a>
            <a class="flex items-center gap-3 px-space-md py-2.5 rounded-lg hover:bg-white/10 transition-colors font-label-md text-label-md text-primary-fixed" href="{{ route('home') }}">
                <span class="material-symbols-outlined text-[20px]">public</span>
                Lihat Situs
            </a>
        </nav>
        <div class="p-space-md border-t border-white/10">
            <div class="flex items-center gap-3 mb-space-sm">
                <span class="w-9 h-9 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center font-label-md font-bold">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                <div class="min-w-0">
                    <p class="font-label-md text-label-md font-semibold truncate">{{ auth()->user()->name }}</p>
                    <p class="font-label-sm text-label-sm text-primary-fixed truncate">{{ auth()->user()->email }}</p>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full flex items-center justify-center gap-2 py-2 rounded-lg bg-white/10 hover:bg-white/20 transition-colors font-label-md text-label-md" type="submit">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                    Keluar
                </button>
            </form>
        </div>
    </aside>

    <div class="flex-1 min-w-0 flex flex-col">
        <header class="h-20 shrink-0 bg-surface-container-lowest border-b border-outline-variant/30 flex items-center justify-between px-gutter gap-space-md sticky top-0 z-40">
            <div class="flex items-center gap-space-sm min-w-0">
                <a class="lg:hidden w-10 h-10 rounded-lg bg-primary text-on-primary flex items-center justify-center" href="{{ route('dashboard') }}">
                    <span class="material-symbols-outlined text-[22px]">school</span>
                </a>
                <div class="min-w-0">
                    <p class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-widest">Dashboard</p>
                    <h1 class="font-title-lg text-title-lg text-primary truncate">@yield('heading', 'Permohonan Audiensi & Konsultasi Kaprodi')</h1>
                </div>
            </div>
            <div class="flex items-center gap-space-sm shrink-0">
                <a class="hidden sm:inline-flex items-center gap-1 px-3 py-2 rounded-lg bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors" href="{{ route('home') }}">
                    <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                    Lihat Situs
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="inline-flex items-center gap-1 px-3 py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-colors" type="submit">
                        <span class="material-symbols-outlined text-[18px]">logout</span>
                        <span class="hidden sm:inline">Keluar</span>
                    </button>
                </form>
            </div>
        </header>

        <main class="flex-1 p-space-md lg:p-gutter">
            @if (session('success'))
                <div class="mb-space-md p-space-md bg-secondary-fixed rounded-xl text-on-secondary-fixed flex items-start gap-3">
                    <span class="material-symbols-outlined text-[24px] text-secondary shrink-0">check_circle</span>
                    <p class="font-body-sm text-body-sm">{{ session('success') }}</p>
                </div>
            @endif
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
