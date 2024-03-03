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
        Schema::create('games_has_demons_has_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('games_has_demons_id')->constrained();
            $table->foreignId('skill_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('games_has_demons_has_skills', function (Blueprint $table) {
            $table->dropForeign([
                'games_has_demons_id',
                'skill_id'
            ]);
        });
        Schema::dropIfExists('games_has_demons_has_skills');
    }
};
