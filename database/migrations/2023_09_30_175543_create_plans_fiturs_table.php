<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plans_fiturs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->constrained('plans');
            $table->foreignId('fitur_id')->constrained('fiturs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plans_fiturs', function (Blueprint $table) {
            $table->dropForeign(['plan_id']);
            $table->dropForeign(['fitur_id']);
        });
        Schema::dropIfExists('plans_fiturs');
    }
};