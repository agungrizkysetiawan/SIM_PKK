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
        Schema::table('m_pinjam', function (Blueprint $table) {
            $table->string('status')->default('Belum Lunas')->after('bunga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('m_pinjam', function (Blueprint $table) {
            $table->string('status');
        });
    }
};
