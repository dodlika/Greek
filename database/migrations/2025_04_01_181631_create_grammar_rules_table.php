<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_grammar_rules_table.php
public function up()
{
    Schema::create('grammar_rules', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->text('examples');
        $table->string('category'); // e.g., 'nouns', 'verbs', 'articles'
        $table->integer('order')->default(0);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grammar_rules');
    }
};
