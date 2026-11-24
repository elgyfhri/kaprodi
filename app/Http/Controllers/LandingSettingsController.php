<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Support\LandingContent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class LandingSettingsController extends Controller
{
    /**
     * Tampilkan formulir pengaturan konten halaman depan.
     */
    public function edit(): View
    {
        return view('dashboard.landing', [
            'groups' => LandingContent::fields(),
        ]);
    }

    /**
     * Simpan perubahan konten landing page.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate($this->rules(), [], $this->attributes());

        foreach (LandingContent::fields() as $group) {
            foreach ($group['fields'] as $key => $field) {
                if ($field['type'] === 'image') {
                    $this->storeImage($request, $key);

                    continue;
                }

                Setting::put($key, $request->input($key));
            }
        }

        return redirect()
            ->route('dashboard.landing')
            ->with('success', 'Konten halaman depan berhasil diperbarui.');
    }

    /**
     * Simpan gambar unggahan (jika ada) atau kembalikan ke gambar bawaan.
     */
    protected function storeImage(Request $request, string $key): void
    {
        if (! $request->hasFile($key)) {
            if ($request->boolean($key.'_remove')) {
                Setting::put($key, null);
            }

            return;
        }

        $file = $request->file($key);
        $directory = public_path('images/landing');

        File::ensureDirectoryExists($directory);

        $filename = $key.'_'.date('YmdHis').'.'.strtolower($file->getClientOriginalExtension());
        $file->move($directory, $filename);

        Setting::put($key, 'images/landing/'.$filename);
    }

    /**
     * Aturan validasi untuk seluruh field.
     *
     * @return array<string, array<int, string>>
     */
    protected function rules(): array
    {
        $rules = [];

        foreach (LandingContent::fields() as $group) {
            foreach ($group['fields'] as $key => $field) {
                $rules[$key] = $field['type'] === 'image'
                    ? ['nullable', 'file', 'mimes:jpg,jpeg,png,webp,svg', 'max:4096']
                    : ['nullable', 'string', 'max:5000'];

                if ($field['type'] === 'image') {
                    $rules[$key.'_remove'] = ['nullable', 'boolean'];
                }
            }
        }

        return $rules;
    }

    /**
     * Nama atribut yang ramah untuk pesan validasi.
     *
     * @return array<string, string>
     */
    protected function attributes(): array
    {
        $attributes = [];

        foreach (LandingContent::fields() as $group) {
            foreach ($group['fields'] as $key => $field) {
                $attributes[$key] = $field['label'];
            }
        }

        return $attributes;
    }
}
