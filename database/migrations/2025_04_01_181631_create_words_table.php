<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_words_table.php
public function up()
{
    Schema::create('words', function (Blueprint $table) {
        $table->id();
        $table->string('greek');
        $table->string('transliteration');
        $table->string('english');
        $table->string('part_of_speech');
        $table->text('example_sentence')->nullable();
        $table->text('example_translation')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('words');
    }
};
