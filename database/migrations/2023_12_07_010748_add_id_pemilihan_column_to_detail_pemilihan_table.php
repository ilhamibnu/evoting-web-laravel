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
        Schema::table('tb_detail_pemilihan', function (Blueprint $table) {
            $table->foreignId('id_pemilihan')->constrained('tb_pemilihan')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_detail_pemilihan', function (Blueprint $table) {
            $table->dropColumn('id_pemilihan');
        });
    }
};
