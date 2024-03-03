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
        Schema::create('demons_has_origins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('demon_id');
            $table->unsignedBigInteger('origin_id');
            $table->timestamps();

            $table->foreign('demon_id')->references('id')->on('demons');
            $table->foreign('origin_id')->references('id')->on('origins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demons_has_origins', function (Blueprint $table) {
            $table->dropForeign('demons_has_origins_demon_id_foreign');
            $table->dropForeign('demons_has_origins_origin_id_foreign');
        });
        Schema::dropIfExists('demons_has_origins');
    }
};
