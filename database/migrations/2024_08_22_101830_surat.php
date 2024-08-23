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
            $table->unsignedBigInteger('user_id');
            $table->string('judul_surat');
            $table->date('tanggal_surat');
            $table->text('isi_surat');
            $table->timestamps();

            // Menambahkan constraint foreign key
            $table->foreign('user_id')->references('user_id')->on('user');
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