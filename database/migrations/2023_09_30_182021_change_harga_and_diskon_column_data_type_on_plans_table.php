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
        Schema::table('plans', function (Blueprint $table) {
            // change data type column harga and diskon from (8, 2) to (10, 2)
            $table->decimal('harga', 10, 2)->change();
            $table->decimal('diskon', 10, 2)->change();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plans', function (Blueprint $table) {
            // change data type column harga and diskon from (10, 2) to (8, 2)
            $table->decimal('harga', 8, 2)->change();
            $table->decimal('diskon', 8, 2)->change();
        });
    }
};