<?php

namespace App\Models;

use App\Support\LandingContent;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['key', 'value'])]
class Setting extends Model
{
    /**
     * Cache hasil query agar tidak berulang dalam satu request.
     *
     * @var array<string, string|null>|null
     */
    protected static ?array $values = null;

    /**
     * Ambil seluruh pengaturan sebagai pasangan key => value.
     *
     * @return array<string, string|null>
     */
    public static function values(): array
    {
        if (static::$values === null) {
            try {
                static::$values = static::query()->pluck('value', 'key')->all();
            } catch (\Throwable $e) {
                static::$values = [];
            }
        }

        return static::$values;
    }

    /**
     * Ambil nilai pengaturan. Jika belum diatur, pakai default konten landing.
     */
    public static function get(string $key, ?string $default = null): ?string
    {
        $value = static::values()[$key] ?? null;

        if ($value !== null && $value !== '') {
            return $value;
        }

        return $default ?? LandingContent::defaults()[$key] ?? null;
    }

    /**
     * Apakah pengaturan sudah disesuaikan dari nilai bawaan.
     */
    public static function has(string $key): bool
    {
        $value = static::values()[$key] ?? null;

        return $value !== null && $value !== '';
    }

    /**
     * Simpan nilai pengaturan.
     */
    public static function put(string $key, ?string $value): void
    {
        static::query()->updateOrCreate(['key' => $key], ['value' => $value]);

        static::$values = null;
    }
}
