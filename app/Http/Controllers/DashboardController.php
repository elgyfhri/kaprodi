<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(Request $request): View
    {
        $status = $request->query('status');
        $search = trim((string) $request->query('q'));

        $audiences = Audience::query()
            ->when($status && array_key_exists($status, Audience::STATUSES), fn ($query) => $query->where('status', $status))
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query->where('nama', 'like', "%{$search}%")
                        ->orWhere('nim', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('topik', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $stats = [
            'total' => Audience::count(),
            'baru' => Audience::where('status', 'baru')->count(),
            'diproses' => Audience::where('status', 'diproses')->count(),
            'selesai' => Audience::where('status', 'selesai')->count(),
        ];

        return view('dashboard.index', compact('audiences', 'stats', 'status', 'search'));
    }

    public function show(Audience $audience): View
    {
        return view('dashboard.show', compact('audience'));
    }

    public function update(Request $request, Audience $audience): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', 'in:'.implode(',', array_keys(Audience::STATUSES))],
            'catatan_admin' => ['nullable', 'string', 'max:2000'],
        ], [
            'status.required' => 'Status wajib dipilih.',
            'status.in' => 'Status tidak valid.',
            'catatan_admin.max' => 'Catatan maksimal 2000 karakter.',
        ]);

        $audience->update($validated);

        return redirect()
            ->route('dashboard.show', $audience)
            ->with('success', 'Status dan catatan permohonan berhasil diperbarui.');
    }

    public function destroy(Audience $audience): RedirectResponse
    {
        $audience->delete();

        return redirect()
            ->route('dashboard')
            ->with('success', 'Permohonan audiensi berhasil dihapus.');
    }
}
