@extends('layouts.public')

@section('title', setting('site_title', 'Portal Kaprodi Politeknik Prasetiya Mandiri Bogor'))

@section('content')
<!-- HERO SECTION WITH EDITORIAL LEADERSHIP CARD -->
<section class="relative w-full overflow-hidden bg-surface-container-low py-space-xl lg:py-24">
    <div class="absolute -top-32 right-0 w-[550px] h-[550px] rounded-full bg-surface-variant/40 blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-10 w-[420px] h-[420px] rounded-full bg-secondary-fixed/30 blur-2xl pointer-events-none"></div>
    <div class="relative max-w-7xl mx-auto px-gutter">
        <div class="flex flex-wrap items-center gap-space-sm mb-space-lg">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold tracking-wider">
                <span class="material-symbols-outlined text-[15px]" style="font-variation-settings: 'FILL' 1;">verified</span>
                {{ setting('hero_badge_accred') }}
            </span>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-surface-container-highest text-primary font-label-sm text-label-sm font-semibold">
                <span class="material-symbols-outlined text-[15px]">memory</span> {{ setting('hero_badge_prodi') }}
            </span>
            <span class="hidden sm:inline-flex items-center gap-1 px-2.5 py-1 rounded bg-surface-container-lowest text-on-surface-variant font-label-sm text-label-sm shadow-sm">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                {{ setting('hero_badge_calendar') }}
            </span>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
            <div class="lg:col-span-7 flex flex-col justify-center pr-0 lg:pr-space-md">
                <p class="font-label-md text-label-md text-secondary uppercase font-bold tracking-widest mb-space-xs">
                    {{ setting('hero_eyebrow') }}
                </p>
                <h1 class="font-headline-lg text-headline-lg lg:text-[46px] lg:leading-[54px] text-primary tracking-tight mb-space-md">{{ setting('hero_title') }}</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mb-space-lg leading-relaxed">{{ setting('hero_desc') }}</p>
                <div class="flex flex-wrap items-center gap-space-sm mb-space-lg">
                    <a class="inline-flex items-center gap-space-xs px-space-lg py-3 rounded bg-primary hover:bg-primary-container text-on-primary font-title-md text-title-md shadow-md hover:shadow-lg transition-all" href="#reservasi-kaprodi">
                        <span class="material-symbols-outlined text-[20px]">calendar_add_on</span>
                        {{ setting('hero_cta_primary') }}
                    </a>
                    <a class="inline-flex items-center gap-space-xs px-space-lg py-3 rounded bg-surface-container-lowest hover:bg-surface text-primary font-title-md text-title-md shadow-sm hover:shadow transition-all" href="#profil-kaprodi">
                        <span class="material-symbols-outlined text-[20px]">menu_book</span>
                        {{ setting('hero_cta_secondary') }}
                    </a>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-space-sm pt-space-md border-t border-outline-variant/30 text-on-surface-variant">
                    <div class="flex items-center gap-space-xs">
                        <span class="material-symbols-outlined text-primary text-[20px]">schedule</span>
                        <span class="font-body-sm text-body-sm">{{ setting('hero_info_1') }}</span>
                    </div>
                    <div class="flex items-center gap-space-xs">
                        <span class="material-symbols-outlined text-primary text-[20px]">meeting_room</span>
                        <span class="font-body-sm text-body-sm">{{ setting('hero_info_2') }}</span>
                    </div>
                    <div class="flex items-center gap-space-xs col-span-2 sm:col-span-1">
                        <span class="material-symbols-outlined text-secondary text-[20px]">contact_support</span>
                        <span class="font-body-sm text-body-sm">{{ setting('hero_info_3') }}</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-5 relative mt-space-lg lg:mt-0" id="profil-kaprodi">
                <div class="relative bg-surface-container-lowest rounded-xl shadow-xl overflow-hidden p-space-lg">
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-primary via-primary-container to-secondary"></div>
                    <div class="flex flex-col sm:flex-row lg:flex-col items-center gap-space-md">
                        <div class="relative w-44 h-44 sm:w-48 sm:h-48 lg:w-52 lg:h-52 shrink-0">
                            <div class="absolute inset-0 rounded-xl bg-surface-container-highest -rotate-2 scale-105"></div>
                            <img alt="{{ setting('profile_name') }} - Ketua Program Studi" class="relative w-full h-full object-cover rounded-xl shadow-md" src="{{ landing_image('profile_photo') }}">
                            <div class="absolute -bottom-2 -right-2 bg-primary text-on-primary rounded px-2.5 py-1 text-center shadow-md">
                                <span class="block font-label-sm text-[10px] uppercase tracking-wider font-semibold">{{ setting('kaprodi_badge_role') }}</span>
                                <span class="block font-label-sm text-[11px] font-bold">{{ setting('kaprodi_badge_year') }}</span>
                            </div>
                        </div>
                        <div class="flex flex-col text-center sm:text-left lg:text-center w-full min-w-0">
                            <div class="inline-block px-2.5 py-0.5 rounded bg-surface-container text-primary font-label-sm text-label-sm font-semibold mx-auto sm:mx-0 lg:mx-auto mb-1">
                                {{ setting('profile_eyebrow') }}
                            </div>
                            <h3 class="font-title-lg text-title-lg text-on-surface font-bold">
                                {{ setting('profile_name') }}
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">{{ setting('profile_role') }}</p>
                            <blockquote class="bg-surface-container-low p-space-sm rounded-lg mb-space-sm text-on-surface italic font-body-sm text-body-sm text-left">{{ setting('profile_quote') }}</blockquote>
                            <div class="flex flex-wrap items-center justify-center sm:justify-start lg:justify-center gap-space-xs font-label-sm text-label-sm mb-space-md">
                                <span class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-medium">{{ setting('profile_tag_1') }}</span>
                                <span class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-medium">{{ setting('profile_tag_2') }}</span>
                                <span class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-medium">{{ setting('profile_tag_3') }}</span>
                                <span class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-medium">{{ setting('profile_tag_4') }}</span>
                            </div>
                            <div class="grid grid-cols-2 gap-space-xs w-full">
                                <a class="flex items-center justify-center gap-1 py-2 px-space-sm rounded bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-colors shadow-sm" href="#reservasi-kaprodi">
                                    <span class="material-symbols-outlined text-[16px]">how_to_reg</span>
                                    {{ setting('profile_cta_1') }}
                                </a>
                                <a class="flex items-center justify-center gap-1 py-2 px-space-sm rounded bg-surface-container text-primary font-label-md text-label-md hover:bg-surface-container-high transition-colors" href="#sambutan-lengkap">
                                    <span class="material-symbols-outlined text-[16px]">visibility</span>
                                    {{ setting('profile_cta_2') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- METRICS BANNER / KEY ACHIEVEMENTS -->
<section class="w-full bg-primary text-on-primary py-space-xl relative shadow-md">
    <div class="max-w-7xl mx-auto px-gutter">
        <div class="text-center max-w-2xl mx-auto mb-space-lg">
            <span class="font-label-sm text-label-sm text-primary-fixed uppercase tracking-widest font-bold">{{ setting('metrics_eyebrow') }}</span>
            <h2 class="font-headline-md text-headline-md text-white mt-1">{{ setting('metrics_title') }}</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
            <div class="bg-primary-container/40 p-space-md rounded-xl backdrop-blur-sm flex flex-col items-center sm:items-start text-center sm:text-left transition-all hover:bg-primary-container/60">
                <div class="flex items-center gap-space-xs text-secondary-fixed mb-space-xs">
                    <span class="material-symbols-outlined text-[24px]">workspace_premium</span>
                    <span class="font-label-sm text-label-sm font-semibold uppercase tracking-wider">{{ setting('metric1_label') }}</span>
                </div>
                <div class="font-headline-lg text-headline-lg text-white font-bold leading-none mb-1">{{ setting('metric1_value') }}</div>
                <p class="font-body-sm text-body-sm text-on-primary-container">{{ setting('metric1_desc') }}</p>
            </div>
            <div class="bg-primary-container/40 p-space-md rounded-xl backdrop-blur-sm flex flex-col items-center sm:items-start text-center sm:text-left transition-all hover:bg-primary-container/60">
                <div class="flex items-center gap-space-xs text-secondary-fixed mb-space-xs">
                    <span class="material-symbols-outlined text-[24px]">hub</span>
                    <span class="font-label-sm text-label-sm font-semibold uppercase tracking-wider">{{ setting('metric2_label') }}</span>
                </div>
                <div class="font-headline-lg text-headline-lg text-white font-bold leading-none mb-1">{{ setting('metric2_value') }}</div>
                <p class="font-body-sm text-body-sm text-on-primary-container">{{ setting('metric2_desc') }}</p>
            </div>
            <div class="bg-primary-container/40 p-space-md rounded-xl backdrop-blur-sm flex flex-col items-center sm:items-start text-center sm:text-left transition-all hover:bg-primary-container/60">
                <div class="flex items-center gap-space-xs text-secondary-fixed mb-space-xs">
                    <span class="material-symbols-outlined text-[24px]">schedule</span>
                    <span class="font-label-sm text-label-sm font-semibold uppercase tracking-wider">{{ setting('metric3_label') }}</span>
                </div>
                <div class="font-headline-lg text-headline-lg text-white font-bold leading-none mb-1">{{ setting('metric3_value') }}</div>
                <p class="font-body-sm text-body-sm text-on-primary-container">{{ setting('metric3_desc') }}</p>
            </div>
            <div class="bg-primary-container/40 p-space-md rounded-xl backdrop-blur-sm flex flex-col items-center sm:items-start text-center sm:text-left transition-all hover:bg-primary-container/60">
                <div class="flex items-center gap-space-xs text-secondary-fixed mb-space-xs">
                    <span class="material-symbols-outlined text-[24px]">flag</span>
                    <span class="font-label-sm text-label-sm font-semibold uppercase tracking-wider">{{ setting('metric4_label') }}</span>
                </div>
                <div class="font-headline-lg text-headline-lg text-white font-bold leading-none mb-1">{{ setting('metric4_value') }}</div>
                <p class="font-body-sm text-body-sm text-on-primary-container">{{ setting('metric4_desc') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- LEADERSHIP PILLARS & STRATEGIC VISION 2030 -->
<section class="w-full py-space-xl lg:py-24 bg-surface">
    <div class="max-w-7xl mx-auto px-gutter">
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md mb-space-xl">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-space-xs text-secondary font-label-md text-label-md font-bold uppercase tracking-wider mb-space-xs">
                    <span class="material-symbols-outlined text-[18px]">compass_calibration</span>
                    {{ setting('visi_eyebrow') }}
                </div>
                <h2 class="font-headline-lg text-headline-lg text-primary tracking-tight">
                    {{ setting('visi_title') }}
                </h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant mt-space-xs">{{ setting('visi_desc') }}</p>
            </div>
            <div class="hidden lg:block shrink-0">
                <div class="px-space-md py-space-sm bg-surface-container rounded-lg text-on-surface font-label-md text-label-md flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-[20px]">flag</span>
                    {{ setting('visi_target') }}
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-space-xl">
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-lg bg-surface-container-high text-primary flex items-center justify-center mb-space-md">
                        <span class="material-symbols-outlined text-[28px]">memory</span>
                    </div>
                    <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">{{ setting('pillar1_eyebrow') }}</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface mt-1 mb-space-sm">{{ setting('pillar1_title') }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">{{ setting('pillar1_desc') }}</p>
                </div>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-lg bg-surface-container-high text-primary flex items-center justify-center mb-space-md">
                        <span class="material-symbols-outlined text-[28px]">developer_board</span>
                    </div>
                    <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">{{ setting('pillar2_eyebrow') }}</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface mt-1 mb-space-sm">{{ setting('pillar2_title') }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">{{ setting('pillar2_desc') }}</p>
                </div>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-lg bg-surface-container-high text-primary flex items-center justify-center mb-space-md">
                        <span class="material-symbols-outlined text-[28px]">security</span>
                    </div>
                    <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">{{ setting('pillar3_eyebrow') }}</span>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface mt-1 mb-space-sm">{{ setting('pillar3_title') }}</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">{{ setting('pillar3_desc') }}</p>
                </div>
            </div>
        </div>
        <div class="bg-primary-container text-on-primary rounded-2xl p-space-lg lg:p-space-xl relative overflow-hidden shadow-lg" id="sambutan-lengkap">
            <div class="absolute -right-16 -bottom-16 w-80 h-80 rounded-full bg-primary/40 blur-2xl pointer-events-none"></div>
            <div class="relative grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
                <div class="lg:col-span-8">
                    <div class="flex items-center gap-2 text-secondary-fixed mb-space-xs">
                        <span class="material-symbols-outlined text-[20px]">format_quote</span>
                        <span class="font-label-sm text-label-sm font-bold uppercase tracking-wider">{{ setting('sambutan_eyebrow') }}</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-white mb-space-sm">
                        {{ setting('sambutan_quote') }}
                    </h3>
                    <p class="font-body-md text-body-md text-on-primary-container leading-relaxed">{{ setting('sambutan_desc') }}</p>
                    <div class="mt-space-md pt-space-md border-t border-on-primary-container/20 flex flex-wrap items-center justify-between gap-space-sm">
                        <div>
                            <p class="font-title-md text-title-md text-white font-semibold">{{ setting('sambutan_name') }}</p>
                            <p class="font-body-sm text-body-sm text-on-primary-container">{{ setting('sambutan_role') }}</p>
                        </div>
                        <a class="inline-flex items-center gap-2 px-4 py-2 rounded bg-secondary-fixed text-on-secondary-fixed font-title-md text-title-md hover:bg-secondary-fixed-dim transition-colors shadow-sm" href="#reservasi-kaprodi">
                            <span class="material-symbols-outlined text-[18px]">chat</span>
                            {{ setting('sambutan_cta') }}
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-4 bg-primary/30 p-space-md rounded-xl backdrop-blur-sm">
                    <h4 class="font-title-md text-title-md text-white mb-space-sm font-bold flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary-fixed text-[20px]">verified_user</span>
                        {{ setting('competency_title') }}
                    </h4>
                    <div class="space-y-space-xs font-body-sm text-body-sm text-on-primary-container">
                        <div class="flex items-start gap-2"><span class="text-secondary-fixed font-bold">1.</span><span class="">{{ setting('competency_1') }}</span></div>
                        <div class="flex items-start gap-2"><span class="text-secondary-fixed font-bold">2.</span><span class="">{{ setting('competency_2') }}</span></div>
                        <div class="flex items-start gap-2"><span class="text-secondary-fixed font-bold">3.</span><span class="">{{ setting('competency_3') }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ACADEMIC EXCELLENCE PROGRAMS & STUDENT SERVICES -->
<section class="w-full py-space-xl bg-surface-container-low" id="program-unggulan">
    <div class="max-w-7xl mx-auto px-gutter">
        <div class="text-center max-w-3xl mx-auto mb-space-xl">
            <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-widest">{{ setting('program_eyebrow') }}</span>
            <h2 class="font-headline-lg text-headline-lg text-primary tracking-tight mt-1 mb-space-xs">
                {{ setting('program_title') }}
            </h2>
            <p class="font-body-md text-body-md text-on-surface-variant">
                {{ setting('program_desc') }}
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-lg bg-surface-container-high text-primary flex items-center justify-center mb-space-md">
                        <span class="material-symbols-outlined text-[26px]">code</span>
                    </div>
                    <div class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-surface-container text-primary font-label-sm text-label-sm font-semibold mb-2">{{ setting('prog1_tag') }}</div>
                    <h3 class="font-title-lg text-title-lg text-on-surface mb-space-xs">{{ setting('prog1_title') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-space-md">{{ setting('prog1_desc') }}</p>
                </div>
                <a class="inline-flex items-center gap-1 font-label-md text-label-md text-primary hover:text-primary-container font-semibold" href="#prospek-karier">{{ setting('prog1_link') }} <span class="material-symbols-outlined text-[16px]">arrow_forward</span></a>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-lg bg-surface-container-high text-primary flex items-center justify-center mb-space-md">
                        <span class="material-symbols-outlined text-[26px]">lan</span>
                    </div>
                    <div class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-surface-container text-primary font-label-sm text-label-sm font-semibold mb-2">{{ setting('prog2_tag') }}</div>
                    <h3 class="font-title-lg text-title-lg text-on-surface mb-space-xs">{{ setting('prog2_title') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-space-md">{{ setting('prog2_desc') }}</p>
                </div>
                <a class="inline-flex items-center gap-1 font-label-md text-label-md text-primary hover:text-primary-container font-semibold" href="#prospek-karier">{{ setting('prog2_link') }} <span class="material-symbols-outlined text-[16px]">arrow_forward</span></a>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-lg bg-surface-container-high text-primary flex items-center justify-center mb-space-md">
                        <span class="material-symbols-outlined text-[26px]">build</span>
                    </div>
                    <div class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-surface-container text-primary font-label-sm text-label-sm font-semibold mb-2">{{ setting('prog3_tag') }}</div>
                    <h3 class="font-title-lg text-title-lg text-on-surface mb-space-xs">{{ setting('prog3_title') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-space-md">{{ setting('prog3_desc') }}</p>
                </div>
                <a class="inline-flex items-center gap-1 font-label-md text-label-md text-primary hover:text-primary-container font-semibold" href="#prospek-karier">{{ setting('prog3_link') }} <span class="material-symbols-outlined text-[16px]">arrow_forward</span></a>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-lg bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center mb-space-md">
                        <span class="material-symbols-outlined text-[26px]">storefront</span>
                    </div>
                    <div class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold mb-2">{{ setting('prog4_tag') }}</div>
                    <h3 class="font-title-lg text-title-lg text-on-surface mb-space-xs">{{ setting('prog4_title') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-space-md">{{ setting('prog4_desc') }}</p>
                </div>
                <a class="inline-flex items-center gap-1 font-label-md text-label-md text-secondary hover:text-secondary-fixed-dim font-bold" href="#reservasi-kaprodi">{{ setting('prog4_link') }} <span class="material-symbols-outlined text-[16px]">arrow_forward</span></a>
            </div>
        </div>
    </div>
</section>

<!-- CAREER PROSPECTS -->
<section class="w-full py-space-xl lg:py-24 bg-surface" id="prospek-karier">
    <div class="max-w-7xl mx-auto px-gutter">
        <div class="text-center max-w-3xl mx-auto mb-space-xl">
            <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-widest">{{ setting('karier_eyebrow') }}</span>
            <h2 class="font-headline-lg text-headline-lg text-primary tracking-tight mt-1 mb-space-xs">
                {{ setting('karier_title') }}
            </h2>
            <p class="font-body-md text-body-md text-on-surface-variant">
                {{ setting('karier_desc') }}
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col">
                <div class="w-12 h-12 rounded-lg bg-surface-container-high text-primary flex items-center justify-center mb-space-md">
                    <span class="material-symbols-outlined text-[26px]">support_agent</span>
                </div>
                <h3 class="font-title-lg text-title-lg text-on-surface mb-space-xs">{{ setting('karier1_title') }}</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ setting('karier1_desc') }}</p>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col">
                <div class="w-12 h-12 rounded-lg bg-surface-container-high text-primary flex items-center justify-center mb-space-md">
                    <span class="material-symbols-outlined text-[26px]">router</span>
                </div>
                <h3 class="font-title-lg text-title-lg text-on-surface mb-space-xs">{{ setting('karier2_title') }}</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ setting('karier2_desc') }}</p>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col">
                <div class="w-12 h-12 rounded-lg bg-surface-container-high text-primary flex items-center justify-center mb-space-md">
                    <span class="material-symbols-outlined text-[26px]">terminal</span>
                </div>
                <h3 class="font-title-lg text-title-lg text-on-surface mb-space-xs">{{ setting('karier3_title') }}</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ setting('karier3_desc') }}</p>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col">
                <div class="w-12 h-12 rounded-lg bg-surface-container-high text-primary flex items-center justify-center mb-space-md">
                    <span class="material-symbols-outlined text-[26px]">computer</span>
                </div>
                <h3 class="font-title-lg text-title-lg text-on-surface mb-space-xs">{{ setting('karier4_title') }}</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ setting('karier4_desc') }}</p>
            </div>
            <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col">
                <div class="w-12 h-12 rounded-lg bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center mb-space-md">
                    <span class="material-symbols-outlined text-[26px]">handyman</span>
                </div>
                <h3 class="font-title-lg text-title-lg text-on-surface mb-space-xs">{{ setting('karier5_title') }}</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ setting('karier5_desc') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- ANNOUNCEMENTS, IMPORTANT DATES & OPEN OFFICE HOURS -->
<section class="w-full py-space-xl lg:py-24 bg-surface" id="pengumuman">
    <div class="max-w-7xl mx-auto px-gutter">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
            <div class="lg:col-span-8">
                <div class="flex items-center justify-between mb-space-md">
                    <div>
                        <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-widest">{{ setting('ann_eyebrow') }}</span>
                        <h2 class="font-headline-md text-headline-md text-primary mt-0.5">{{ setting('ann_title') }}</h2>
                    </div>
                    <a class="hidden sm:inline-flex items-center gap-1 font-label-md text-label-md text-primary font-semibold hover:text-primary-container" href="#">
                        {{ setting('ann_link') }} <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    </a>
                </div>
                <div class="space-y-space-md">
                    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
                        <div class="flex items-start gap-space-md">
                            <div class="w-14 h-14 rounded-lg bg-surface-container-high text-primary flex flex-col items-center justify-center shrink-0">
                                <span class="font-label-sm text-[11px] font-bold uppercase">{{ setting('ann1_month') }}</span>
                                <span class="font-title-lg text-title-lg font-bold leading-none">{{ setting('ann1_day') }}</span>
                            </div>
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <span class="px-2 py-0.5 rounded bg-error-container text-on-error-container font-label-sm text-[11px] font-bold">{{ setting('ann1_tag') }}</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">{{ setting('ann1_location') }}</span>
                                </div>
                                <h4 class="font-title-md text-title-md text-on-surface font-semibold">{{ setting('ann1_title') }}</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">{{ setting('ann1_desc') }}</p>
                            </div>
                        </div>
                        <div class="sm:shrink-0 flex items-center justify-end">
                            <a class="px-3 py-1.5 rounded bg-surface-container hover:bg-surface-container-high text-primary font-label-md text-label-md transition-colors flex items-center gap-1" href="#">
                                <span class="material-symbols-outlined text-[16px]">download</span> {{ setting('ann1_btn') }}
                            </a>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
                        <div class="flex items-start gap-space-md">
                            <div class="w-14 h-14 rounded-lg bg-surface-container text-primary flex flex-col items-center justify-center shrink-0">
                                <span class="font-label-sm text-[11px] font-bold uppercase">{{ setting('ann2_month') }}</span>
                                <span class="font-title-lg text-title-lg font-bold leading-none">{{ setting('ann2_day') }}</span>
                            </div>
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <span class="px-2 py-0.5 rounded bg-secondary-fixed text-on-secondary-fixed font-label-sm text-[11px] font-bold">{{ setting('ann2_tag') }}</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">{{ setting('ann2_location') }}</span>
                                </div>
                                <h4 class="font-title-md text-title-md text-on-surface font-semibold">{{ setting('ann2_title') }}</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">{{ setting('ann2_desc') }}</p>
                            </div>
                        </div>
                        <div class="sm:shrink-0 flex items-center justify-end">
                            <a class="px-3 py-1.5 rounded bg-surface-container hover:bg-surface-container-high text-primary font-label-md text-label-md transition-colors flex items-center gap-1" href="#">
                                <span class="material-symbols-outlined text-[16px]">open_in_new</span> {{ setting('ann2_btn') }}
                            </a>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
                        <div class="flex items-start gap-space-md">
                            <div class="w-14 h-14 rounded-lg bg-surface-container text-primary flex flex-col items-center justify-center shrink-0">
                                <span class="font-label-sm text-[11px] font-bold uppercase">{{ setting('ann3_month') }}</span>
                                <span class="font-title-lg text-title-lg font-bold leading-none">{{ setting('ann3_day') }}</span>
                            </div>
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <span class="px-2 py-0.5 rounded bg-surface-container text-primary font-label-sm text-[11px] font-bold">{{ setting('ann3_tag') }}</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">{{ setting('ann3_location') }}</span>
                                </div>
                                <h4 class="font-title-md text-title-md text-on-surface font-semibold">{{ setting('ann3_title') }}</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">{{ setting('ann3_desc') }}</p>
                            </div>
                        </div>
                        <div class="sm:shrink-0 flex items-center justify-end">
                            <a class="px-3 py-1.5 rounded bg-surface-container hover:bg-surface-container-high text-primary font-label-md text-label-md transition-colors flex items-center gap-1" href="#">
                                <span class="material-symbols-outlined text-[16px]">how_to_reg</span> {{ setting('ann3_btn') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-4 bg-surface-container-lowest rounded-xl p-space-lg shadow-sm border border-outline-variant/30">
                <div class="flex items-center gap-2 mb-space-sm text-secondary">
                    <span class="material-symbols-outlined text-[24px]">door_open</span>
                    <span class="font-label-sm text-label-sm font-bold uppercase tracking-wider">{{ setting('office_eyebrow') }}</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">
                    {{ setting('office_title') }}
                </h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md leading-relaxed">
                    {{ setting('office_desc') }}
                </p>
                <div class="space-y-space-sm mb-space-md">
                    <div class="p-space-sm rounded-lg bg-surface-container-low flex items-center justify-between">
                        <div>
                            <span class="font-title-md text-title-md text-primary block font-semibold">{{ setting('office_slot1_day') }}</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">{{ setting('office_slot1_desc') }}</span>
                        </div>
                        <span class="px-2.5 py-1 rounded bg-surface-container-high text-primary font-label-sm text-label-sm font-bold">{{ setting('office_slot1_time') }}</span>
                    </div>
                    <div class="p-space-sm rounded-lg bg-surface-container-low flex items-center justify-between">
                        <div>
                            <span class="font-title-md text-title-md text-primary block font-semibold">{{ setting('office_slot2_day') }}</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">{{ setting('office_slot2_desc') }}</span>
                        </div>
                        <span class="px-2.5 py-1 rounded bg-surface-container-high text-primary font-label-sm text-label-sm font-bold">{{ setting('office_slot2_time') }}</span>
                    </div>
                </div>
                <div class="p-space-sm bg-surface-container rounded-lg mb-space-md text-on-surface font-body-sm text-body-sm flex items-start gap-2">
                    <span class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5">info</span>
                    <span class="">{{ setting('office_note') }}</span>
                </div>
                <a class="w-full flex items-center justify-center gap-2 py-2.5 px-space-md rounded bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all shadow-sm" href="#reservasi-kaprodi">
                    <span class="material-symbols-outlined text-[18px]">event_available</span>
                    {{ setting('office_cta') }}
                </a>
            </div>
        </div>
    </div>
</section>

<!-- INTERACTIVE BOOKING & CONTACT KAPRODI OFFICE SECTION -->
<section class="w-full py-space-xl lg:py-24 bg-surface-container-low relative" id="reservasi-kaprodi">
    <div class="max-w-7xl mx-auto px-gutter">
        <div class="text-center max-w-2xl mx-auto mb-space-xl">
            <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-widest">{{ setting('res_eyebrow') }}</span>
            <h2 class="font-headline-lg text-headline-lg text-primary tracking-tight mt-1 mb-space-xs">
                {{ setting('res_title') }}
            </h2>
            <p class="font-body-md text-body-md text-on-surface-variant">
                {{ setting('res_desc') }}
            </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-stretch">
            <div class="lg:col-span-7 bg-surface-container-lowest p-space-lg lg:p-space-xl rounded-2xl shadow-md">
                @if (session('success'))
                    <div class="mb-space-md p-space-md bg-secondary-fixed rounded-xl text-on-secondary-fixed flex items-start gap-3" id="booking-confirmation">
                        <span class="material-symbols-outlined text-[24px] text-secondary shrink-0">check_circle</span>
                        <div>
                            <h5 class="font-title-md text-title-md font-bold text-on-secondary-fixed">Permohonan Berhasil Dikirimkan!</h5>
                            <p class="font-body-sm text-body-sm mt-0.5">{{ session('success') }}</p>
                        </div>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-space-md p-space-md bg-error-container rounded-xl text-on-error-container flex items-start gap-3">
                        <span class="material-symbols-outlined text-[24px] shrink-0">error</span>
                        <div>
                            <h5 class="font-title-md text-title-md font-bold">Permohonan belum dapat dikirim.</h5>
                            <ul class="list-disc list-inside font-body-sm text-body-sm mt-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <form class="space-y-space-md" id="form-booking-kaprodi" method="POST" action="{{ route('audience.store') }}">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="pemohon-nama">
                                {{ setting('res_label_nama') }} <span class="text-error">*</span>
                            </label>
                            <input class="w-full px-space-md py-2.5 rounded bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm text-on-surface transition-all @error('nama') border-error @enderror" id="pemohon-nama" name="nama" value="{{ old('nama') }}" placeholder="Contoh: Muhammad Farhan" required type="text">
                        </div>
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="pemohon-nim">
                                {{ setting('res_label_nim') }} <span class="text-error">*</span>
                            </label>
                            <input class="w-full px-space-md py-2.5 rounded bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm text-on-surface transition-all @error('nim') border-error @enderror" id="pemohon-nim" name="nim" value="{{ old('nim') }}" placeholder="Contoh: 20230001 / NIP / Asal Institusi" required type="text">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="pemohon-email">
                                {{ setting('res_label_email') }} <span class="text-error">*</span>
                            </label>
                            <input class="w-full px-space-md py-2.5 rounded bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm text-on-surface transition-all @error('email') border-error @enderror" id="pemohon-email" name="email" value="{{ old('email') }}" placeholder="contoh@mahasiswa.ac.id" required type="email">
                        </div>
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="pemohon-wa">
                                {{ setting('res_label_wa') }} <span class="text-error">*</span>
                            </label>
                            <input class="w-full px-space-md py-2.5 rounded bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm text-on-surface transition-all @error('whatsapp') border-error @enderror" id="pemohon-wa" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="+62 812-3456-7890" required type="tel">
                        </div>
                    </div>
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="kategori-pertemuan">
                            {{ setting('res_label_kategori') }} <span class="text-error">*</span>
                        </label>
                        <select class="w-full px-space-md py-2.5 rounded bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm text-on-surface transition-all @error('kategori') border-error @enderror" id="kategori-pertemuan" name="kategori" required>
                            <option disabled value="" @selected(! old('kategori'))>Pilih Keperluan Audiensi</option>
                            <option value="capstone" @selected(old('kategori') === 'capstone')>Bimbingan Tugas Akhir &amp; Proyek Terapan</option>
                            <option value="akademik" @selected(old('kategori') === 'akademik')>Konsultasi Studi, Beban SKS &amp; Praktikum Lab</option>
                            <option value="robotika" @selected(old('kategori') === 'robotika')>Bimbingan Praktik Pemrograman &amp; Jaringan</option>
                            <option value="industri" @selected(old('kategori') === 'industri')>Kemitraan Industri &amp; Layanan Teknis IT</option>
                            <option value="lainnya" @selected(old('kategori') === 'lainnya')>Konsultasi Karier, Wirausaha &amp; Sertifikasi</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="jadwal-preferensi">
                                {{ setting('res_label_tanggal') }} <span class="text-error">*</span>
                            </label>
                            <input class="w-full px-space-md py-2.5 rounded bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm text-on-surface transition-all @error('tanggal_pertemuan') border-error @enderror" id="jadwal-preferensi" name="tanggal_pertemuan" value="{{ old('tanggal_pertemuan') }}" min="{{ date('Y-m-d') }}" required type="date">
                        </div>
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="format-pertemuan">
                                {{ setting('res_label_format') }} <span class="text-error">*</span>
                            </label>
                            <select class="w-full px-space-md py-2.5 rounded bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm text-on-surface transition-all @error('format') border-error @enderror" id="format-pertemuan" name="format" required>
                                <option value="luring" @selected(old('format', 'luring') === 'luring')>Tatap Muka di Ruang Kaprodi / Sekretariat Prodi</option>
                                <option value="daring" @selected(old('format') === 'daring')>Daring via Zoom / Google Meet Resmi</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold" for="ringkasan-topik">
                            {{ setting('res_label_topik') }} <span class="text-error">*</span>
                        </label>
                        <textarea class="w-full px-space-md py-2.5 rounded bg-surface border border-outline-variant/60 focus:border-primary focus:outline-none font-body-sm text-body-sm text-on-surface transition-all resize-none @error('topik') border-error @enderror" id="ringkasan-topik" name="topik" placeholder="Tuliskan secara ringkas konteks yang ingin dikonsultasikan agar berkas persiapan dapat ditinjau lebih dulu..." required rows="3">{{ old('topik') }}</textarea>
                    </div>
                    <div class="pt-space-xs">
                        <button class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-space-xl py-3 rounded bg-primary hover:bg-primary-container text-on-primary font-title-md text-title-md shadow-md hover:shadow-lg transition-all" type="submit">
                            <span class="material-symbols-outlined text-[20px]">send</span>
                            {{ setting('res_submit') }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="lg:col-span-5 flex flex-col justify-between gap-space-md">
                <div class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm flex-1">
                    <div class="flex items-center gap-space-xs text-primary mb-space-sm">
                        <span class="material-symbols-outlined text-[24px]">account_balance</span>
                        <span class="font-label-sm text-label-sm font-bold uppercase tracking-wider">{{ setting('sekretariat_eyebrow') }}</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">{{ setting('sekretariat_title') }}</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                        {{ setting('sekretariat_desc') }}
                    </p>
                    <div class="space-y-space-md font-body-sm text-body-sm text-on-surface">
                        <div class="flex items-start gap-space-sm">
                            <div class="w-8 h-8 rounded-lg bg-surface-container text-primary flex items-center justify-center shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-[18px]">location_on</span>
                            </div>
                            <div>
                                <span class="font-semibold block text-primary">{{ setting('contact_location_label') }}</span>
                                <span class="">{{ setting('contact_location_value') }}</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-sm">
                            <div class="w-8 h-8 rounded-lg bg-surface-container text-primary flex items-center justify-center shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-[18px]">support</span>
                            </div>
                            <div>
                                <span class="font-semibold block text-primary">{{ setting('contact_secretary_label') }}</span>
                                <span class="">{{ setting('contact_secretary_value') }}</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-sm">
                            <div class="w-8 h-8 rounded-lg bg-surface-container text-primary flex items-center justify-center shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-[18px]">mail</span>
                            </div>
                            <div>
                                <span class="font-semibold block text-primary">{{ setting('contact_email_label') }}</span>
                                <span class="text-primary">{{ setting('contact_email_value') }}</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-sm">
                            <div class="w-8 h-8 rounded-lg bg-surface-container text-primary flex items-center justify-center shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                            </div>
                            <div>
                                <span class="font-semibold block text-primary">{{ setting('contact_wa_label') }}</span>
                                <span class="">{{ setting('contact_wa_value') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm overflow-hidden">
                    <div class="flex items-center justify-between mb-space-xs px-space-xs">
                        <span class="font-label-sm text-label-sm text-on-surface-variant font-bold uppercase tracking-wider">{{ setting('map_label') }}</span>
                        <span class="font-label-sm text-label-sm text-primary font-semibold flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">near_me</span> {{ setting('map_badge') }}
                        </span>
                    </div>
                    <div class="w-full h-56 rounded-xl overflow-hidden shadow-inner bg-surface-container" data-location="{{ setting('contact_location_value') }}">
                        <iframe class="w-full h-full border-0" src="{{ setting('map_embed_url') }}" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen title="{{ setting('map_label') }} - {{ setting('contact_location_value') }}"></iframe>
                    </div>
                    <div class="mt-space-xs px-space-xs flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
                        <span class="material-symbols-outlined text-secondary text-[16px]">pin_drop</span>
                        {{ setting('map_caption') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
