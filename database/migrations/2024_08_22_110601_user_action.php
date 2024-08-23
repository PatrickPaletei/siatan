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
        Schema::create('user_action', function (Blueprint $table) {
            $table->id('user_action_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('surat_id');
            $table->unsignedBigInteger('bidang_id');
            $table->timestamps();

            // Menambahkan constraint foreign key
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->foreign('surat_id')->references('surat_id')->on('surat');
            $table->foreign('bidang_id')->references('bidang_id')->on('bidang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('user_action');
    }
};
