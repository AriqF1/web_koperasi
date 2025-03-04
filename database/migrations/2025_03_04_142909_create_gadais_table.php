<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gadais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama_barang');
            $table->decimal('estimasi_harga', 15, 2);
            $table->decimal('jumlah_pinjaman', 15, 2);
            $table->enum('status', ['diajukan', 'disetujui', 'ditolak', 'dibayar', 'ditebus'])->default('diajukan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gadais');
    }
};
