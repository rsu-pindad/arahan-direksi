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
        Schema::create('comment_lampiran', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('comment_id');
            $table->string('nama_lampiran');
            $table->string('lokasi_lampiran');
            $table->foreign('comment_id')->references('id')->on('master_comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment_lampiran');
    }
};
