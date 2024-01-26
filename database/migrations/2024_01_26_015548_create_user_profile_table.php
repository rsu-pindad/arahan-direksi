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
        Schema::create('user_profile', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // $table->foreignId('user_id')->contrained()->onDelete('cascade');
            $table->foreignUuid('user_id');
            $table->bigInteger('pic_id')->unsigned()->index();
            // $table->foreignUuid('pic_id');
            $table->string('nama_profile')->nullable();
            $table->string('nomor_handphone_profile')->unique()->nullable();
            $table->string('email')->unique()->nullable();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate();
            $table->foreign('pic_id')->references('id')->on('master_pic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile');
    }
};
