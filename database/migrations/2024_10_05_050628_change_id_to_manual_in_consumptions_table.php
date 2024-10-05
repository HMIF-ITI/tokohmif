<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('consumptions', function (Blueprint $table) {
            // Menghapus kolom id yang lama
            $table->dropColumn('id');
        });

        Schema::table('consumptions', function (Blueprint $table) {
            // Menambahkan kolom id baru sebagai integer
            $table->integer('id')->primary()->after('name'); // Mengatur kolom id sebagai primary key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consumptions', function (Blueprint $table) {
            // Mengembalikan kolom id yang lama
            $table->id();
        });
    }
};
