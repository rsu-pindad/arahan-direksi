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
        Schema::create('pivot_ap', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('arahan_id')->unsigned()->index();
            $table->foreignUuid('arahan_id');
            $table->bigInteger('progress_id')->unsigned()->index();
            // $table->foreignUuid('progress_id');
            $table->foreign('arahan_id')->references('id')->on('master_arahan')->cascadeOnUpdate();
            $table->foreign('progress_id')->references('id')->on('master_progress')->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_ap');
    }
};
