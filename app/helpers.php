<?php

use App\Models\Setting;

if (! function_exists('setting')) {
    /**
     * Ambil konten landing yang sudah diatur admin.
     */
    function setting(string $key, ?string $default = null): ?string
    {
        return Setting::get($key, $default);
    }
}

if (! function_exists('landing_image')) {
    /**
     * URL lengkap untuk gambar landing (mendukung unggahan lokal & URL eksternal).
     */
    function landing_image(string $key): string
    {
        $value = (string) Setting::get($key);

        if ($value === '') {
            return '';
        }

        if (preg_match('#^(https?:)?//#i', $value) === 1) {
            return $value;
        }

        return asset($value);
    }
}
