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
        Schema::table('one_words', function (Blueprint $table) {
            $table->foreignId('user_id')->after('word')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('one_words', function (Blueprint $table) {
            $table->dropForeign(['user_id'])->dropColumn('user_id');
        });
    }
};
