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
        Schema::create('surat', function (Blueprint $table) {
            $table->id('surat_id');
            $table->unsignedBigInteger('sub_bidang_id');
            $table->string('jenis_surat');
            $table->string('judul_surat');
            $table->date('tanggal_surat');
            $table->text('isi_surat')->nullable();
            $table->timestamps();
            $table->foreign('sub_bidang_id')->references('sub_bidang_id')->on('sub_bidang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('surat');
    }
};
