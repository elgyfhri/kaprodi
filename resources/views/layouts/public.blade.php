<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="web_standard" name="shell-type">
    <title>@yield('title', setting('site_title', 'Portal Kaprodi Politeknik Prasetiya Mandiri Bogor'))</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,400..700;1,6..72,400..700&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-secondary-fixed": "#331200",
                        "error": "#ba1a1a",
                        "secondary": "#9b4500",
                        "on-background": "#0b1c30",
                        "on-surface": "#0b1c30",
                        "on-error": "#ffffff",
                        "surface-tint": "#4059aa",
                        "on-primary-fixed-variant": "#264191",
                        "inverse-surface": "#213145",
                        "on-tertiary-container": "#a4acc5",
                        "surface-container-lowest": "#ffffff",
                        "surface-variant": "#d3e4fe",
                        "tertiary-fixed-dim": "#bec6e0",
                        "primary-container": "#1e3a8a",
                        "on-error-container": "#93000a",
                        "surface-container-high": "#dce9ff",
                        "inverse-primary": "#b6c4ff",
                        "outline": "#757682",
                        "secondary-fixed-dim": "#ffb68e",
                        "on-primary-fixed": "#00164e",
                        "on-tertiary-fixed": "#131b2e",
                        "surface-dim": "#cbdbf5",
                        "surface-bright": "#f8f9ff",
                        "surface-container-low": "#eff4ff",
                        "primary": "#00236f",
                        "surface-container-highest": "#d3e4fe",
                        "inverse-on-surface": "#eaf1ff",
                        "tertiary-container": "#384055",
                        "primary-fixed": "#dce1ff",
                        "on-secondary-container": "#682c00",
                        "on-secondary": "#ffffff",
                        "primary-fixed-dim": "#b6c4ff",
                        "on-primary": "#ffffff",
                        "on-secondary-fixed-variant": "#763300",
                        "on-tertiary": "#ffffff",
                        "surface": "#f8f9ff",
                        "on-surface-variant": "#444651",
                        "tertiary-fixed": "#dae2fd",
                        "on-primary-container": "#90a8ff",
                        "surface-container": "#e5eeff",
                        "error-container": "#ffdad6",
                        "outline-variant": "#c5c5d3",
                        "tertiary": "#222a3e",
                        "secondary-container": "#fd8a42",
                        "secondary-fixed": "#ffdbca",
                        "background": "#f8f9ff"
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    spacing: {
                        "space-md": "1rem",
                        "space-xs": "0.25rem",
                        "gutter-mobile": "1rem",
                        "gutter": "1.5rem",
                        "margin": "3rem",
                        "margin-mobile": "1.25rem",
                        "space-lg": "1.5rem",
                        "space-xl": "2.5rem",
                        "space-sm": "0.5rem"
                    },
                    fontFamily: {
                        "body-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "title-md": ["Plus Jakarta Sans"],
                        "headline-md": ["Newsreader"],
                        "display-hero-mobile": ["Newsreader"],
                        "headline-lg-mobile": ["Newsreader"],
                        "body-sm": ["Plus Jakarta Sans"],
                        "headline-lg": ["Newsreader"],
                        "label-md": ["Plus Jakarta Sans"],
                        "display-hero": ["Newsreader"],
                        "title-lg": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"]
                    },
                    fontSize: {
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "body-md": ["15px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "title-md": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
                        "headline-md": ["30px", { "lineHeight": "38px", "fontWeight": "500" }],
                        "display-hero-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-sm": ["13px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "headline-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.015em", "fontWeight": "600" }],
                        "label-md": ["13px", { "lineHeight": "18px", "letterSpacing": "0.04em", "fontWeight": "600" }],
                        "display-hero": ["56px", { "lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "title-lg": ["18px", { "lineHeight": "26px", "fontWeight": "600" }],
                        "headline-sm": ["22px", { "lineHeight": "30px", "fontWeight": "700" }],
                        "label-sm": ["11px", { "lineHeight": "16px", "letterSpacing": "0.06em", "fontWeight": "700" }]
                    }
                }
            }
        };
    </script>
    <style>
        @layer base {
            html, body { margin: 0; padding: 0; }
            body { overscroll-behavior: none; }
            main > :first-child { margin-top: 0 !important; }
            main > :last-child { margin-bottom: 0 !important; }
        }
        ::-webkit-scrollbar { display: none; }
    </style>
</head>
<body class="bg-surface font-body-md text-body-md text-on-surface antialiased">
<header class="fixed top-0 w-full z-50 bg-surface-container-lowest/95 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
    <div class="max-w-7xl mx-auto px-gutter">
        <div class="h-20 flex items-center justify-between gap-gutter">
            <div class="flex items-center gap-space-md">
                <a href="{{ route('home') }}" class="flex items-center gap-space-md">
                    <img alt="{{ setting('header_brand') }}" class="h-8 w-auto object-contain" src="{{ landing_image('logo') }}">
                    <div class="flex flex-col">
                        <span class="font-title-md text-title-md text-primary tracking-tight">{{ setting('header_brand') }}</span>
                        <div class="flex items-center gap-space-xs">
                            <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">{{ setting('header_sub') }}</span>
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">
                                <span class="material-symbols-outlined text-[12px]">verified</span>{{ setting('header_badge') }}
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <nav class="hidden xl:flex items-center gap-gutter">
                <a class="transition-colors text-primary font-title-md font-semibold" href="{{ route('home') }}">{{ setting('nav_1') }}</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('home') }}#sambutan-lengkap">{{ setting('nav_2') }}</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('home') }}#profil-kaprodi">{{ setting('nav_3') }}</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('home') }}#program-unggulan">{{ setting('nav_4') }}</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('home') }}#prospek-karier">{{ setting('nav_5') }}</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('home') }}#reservasi-kaprodi">{{ setting('nav_6') }}</a>
            </nav>
            <div class="flex items-center gap-space-md">
                <a class="hidden md:inline-flex items-center gap-space-xs px-space-md py-space-sm bg-primary hover:bg-primary-container text-on-primary rounded font-label-md text-label-md transition-all shadow-sm" href="{{ route('home') }}#reservasi-kaprodi">
                    <span class="material-symbols-outlined text-[18px]">calendar_month</span>{{ setting('header_cta') }}
                </a>
                @auth
                    <a title="Dashboard" class="flex items-center gap-space-xs pl-space-xs" href="{{ route('dashboard') }}">
                        <span class="w-9 h-9 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-md">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                        <span class="hidden lg:inline font-label-md text-label-md text-primary">Dashboard</span>
                    </a>
                @else
                    <a title="Masuk Dashboard" class="flex items-center pl-space-xs" href="{{ route('login') }}">
                        <span class="w-9 h-9 rounded-full bg-surface-container text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[20px]">account_circle</span>
                        </span>
                    </a>
                @endauth
            </div>
        </div>
    </div>
</header>
<main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">
    <div class="flex flex-col w-full">
        @yield('content')
    </div>
</main>
<footer class="w-full bg-surface-container-low mt-space-xl">
    <div class="max-w-7xl mx-auto px-gutter py-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter mb-space-xl">
            <div>
                <div class="flex items-center gap-space-sm mb-space-md">
                    <img alt="{{ setting('header_brand') }}" class="h-8 w-auto object-contain" src="{{ landing_image('logo') }}">
                    <span class="font-title-md text-title-md text-primary font-bold">{{ setting('footer_brand') }}</span>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md leading-relaxed">{{ setting('footer_desc') }}</p>
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">
                    <span class="material-symbols-outlined text-[14px]">workspace_premium</span>{{ setting('footer_badge') }}
                </div>
            </div>
            <div>
                <h4 class="font-title-md text-title-md text-on-surface mb-space-md font-bold">{{ setting('footer_links_title') }}</h4>
                <ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant">
                    <li class="flex items-center gap-space-xs hover:text-primary transition-colors"><span class="material-symbols-outlined text-[16px]">school</span><a href="#" class="">{{ setting('footer_link1') }}</a></li>
                    <li class="flex items-center gap-space-xs hover:text-primary transition-colors"><span class="material-symbols-outlined text-[16px]">library_books</span><a href="#" class="">{{ setting('footer_link2') }}</a></li>
                    <li class="flex items-center gap-space-xs hover:text-primary transition-colors"><span class="material-symbols-outlined text-[16px]">biotech</span><a href="#" class="">{{ setting('footer_link3') }}</a></li>
                    <li class="flex items-center gap-space-xs hover:text-primary transition-colors"><span class="material-symbols-outlined text-[16px]">groups</span><a href="#" class="">{{ setting('footer_link4') }}</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-title-md text-title-md text-on-surface mb-space-md font-bold">{{ setting('footer_office_title') }}</h4>
                <div class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant">
                    <p class="flex items-start gap-space-xs"><span class="material-symbols-outlined text-[16px] mt-0.5 text-primary">location_on</span><span class="">{{ setting('footer_address') }}</span></p>
                    <p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-[16px] text-primary">mail</span><span class="">{{ setting('footer_email') }}</span></p>
                    <p class="flex items-center gap-space-xs"><span class="material-symbols-outlined text-[16px] text-primary">call</span><span class="">{{ setting('footer_phone') }}</span></p>
                </div>
            </div>
            <div>
                <h4 class="font-title-md text-title-md text-on-surface mb-space-md font-bold">{{ setting('footer_hours_title') }}</h4>
                <div class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant">
                    <p class="flex items-center justify-between"><span class="">{{ setting('footer_hours1_label') }}</span><span class="font-medium text-on-surface">{{ setting('footer_hours1_value') }}</span></p>
                    <p class="flex items-center justify-between"><span class="">{{ setting('footer_hours2_label') }}</span><span class="font-medium text-on-surface">{{ setting('footer_hours2_value') }}</span></p>
                    <p class="flex items-center justify-between text-error font-medium"><span class="">{{ setting('footer_hours3_label') }}</span><span class="">{{ setting('footer_hours3_value') }}</span></p>
                </div>
                <div class="mt-space-md pt-space-md flex items-center gap-space-sm">
                    <span class="material-symbols-outlined text-secondary text-[20px]">schedule</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant">{{ setting('footer_hours_note') }}</span>
                </div>
            </div>
        </div>
        <div class="pt-space-lg flex flex-col md:flex-row items-center justify-between gap-space-md font-body-sm text-body-sm text-on-surface-variant">
            <p class="">© {{ date('Y') }} {{ setting('footer_copyright') }}</p>
            <div class="flex items-center gap-gutter font-label-md text-label-md">
                <a class="hover:text-primary transition-colors" href="#">{{ setting('footer_bottom1') }}</a>
                <a class="hover:text-primary transition-colors" href="#">{{ setting('footer_bottom2') }}</a>
                <a class="hover:text-primary transition-colors" href="#">{{ setting('footer_bottom3') }}</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
