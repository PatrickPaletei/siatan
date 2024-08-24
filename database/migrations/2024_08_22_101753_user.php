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
        Schema::create('user', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('email');
            $table->string('password');
            $table->string('role');
            $table->string('nama_lengkap');
            $table->unsignedBigInteger('bidang_id');
            $table->timestamps();
            $table->foreign('bidang_id')->references('bidang_id')->on('bidang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('user');
    }
};
