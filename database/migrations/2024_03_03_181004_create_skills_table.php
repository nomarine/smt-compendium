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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skilltype_id');
            $table->string('name', 90);
            $table->longtext('desc');
            $table->timestamps();

            $table->foreign('skilltype_id')->references('id')->on('skilltypes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('skills', function(Blueprint $table) {
            $table->dropForeign('skills_skilltype_id_foreign');
            $table->drop('skilltype_id');
        });
        Schema::dropIfExists('skills');
    }
};
