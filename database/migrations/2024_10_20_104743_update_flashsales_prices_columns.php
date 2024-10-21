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
        Schema::table('flashsales', function (Blueprint $table) {
            $table->decimal('original_price', 15, 2)->change();
            $table->decimal('discount_price', 15, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('flashsales', function (Blueprint $table) {
            // Kembalikan ke tipe data sebelumnya jika perlu
            $table->decimal('original_price', 8, 2)->change();
            $table->decimal('discount_price', 8, 2)->change();
        });
    }
};
