<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('audiences', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim', 60);
            $table->string('email');
            $table->string('whatsapp', 30);
            $table->string('kategori', 30);
            $table->date('tanggal_pertemuan');
            $table->string('format', 20)->default('luring');
            $table->text('topik');
            $table->string('status', 20)->default('baru');
            $table->text('catatan_admin')->nullable();
            $table->timestamps();

            $table->index('status');
            $table->index('tanggal_pertemuan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audiences');
    }
};
