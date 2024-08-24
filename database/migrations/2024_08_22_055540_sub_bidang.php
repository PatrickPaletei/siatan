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
        Schema::create('sub_bidang', function (Blueprint $table) {
            $table->id('sub_bidang_id');
            $table->string('nama_sub_bidang');
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
        Schema::drop('sub_bidang');
    }
};
