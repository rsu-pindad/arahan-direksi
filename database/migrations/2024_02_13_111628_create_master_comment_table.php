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
        Schema::create('master_comment', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_profile_id');
            $table->foreignUuid('arahan_id');
            $table->uuid('parent_id')->nullable();
            $table->text('body');

            $table->foreign('user_profile_id')->references('id')->on('user_profile');
            $table->foreign('arahan_id')->references('id')->on('master_arahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_comment');
    }
};
