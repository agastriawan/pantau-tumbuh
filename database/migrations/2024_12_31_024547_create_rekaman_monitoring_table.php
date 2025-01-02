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
        Schema::create('rekaman_monitoring', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anak_id')->constrained('anak')->onDelete('cascade'); 
            $table->float('berat_badan')->nullable();
            $table->float('tinggi_badan')->nullable();
            $table->float('lingkar_kepala')->nullable();
            $table->text('kondisi_kesehatan')->nullable();
            $table->enum('status_imunisasi', ['Lengkap', 'Tidak Lengkap', 'Belum Imunisasi'])->nullable();
            $table->text('pertanyaan_orang_tua')->nullable();
            $table->string('status')->default('Diproses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekaman_monitoring');
    }
};
