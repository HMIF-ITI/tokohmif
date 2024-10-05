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
            $table->boolean('published')->default(false); // Kolom publish
        });
    }

    public function down()
    {
        Schema::table('consumptions', function (Blueprint $table) {
            $table->dropColumn('published');
        });
    }
};
