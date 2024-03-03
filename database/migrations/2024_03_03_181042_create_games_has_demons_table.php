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
        Schema::create('games_has_demons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained();
            $table->foreignId('demon_id')->constrained();
            $table->foreignId('race_id')->nullable()->constrained();
            $table->foreignId('arcana_id')->nullable()->constrained();
            $table->integer('base_level');
            $table->longtext('entry');
            $table->longtext('in_game_lore');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('games_has_demons', function (Blueprint $table) {
            $table->dropForeign([
                'game_id',
                'demon_id',
                'race_id',
                'arcana_id'
            ]);
        });
        Schema::dropIfExists('games_has_demons');
    }
};
