<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::table('results', function (Blueprint $table) {
         
        $table->string('query')->nullable();
        $table->string('title')->nullable();
        $table->text('authors')->nullable();
        $table->text('abstract')->nullable();
    });
}

public function down(): void
{
    Schema::table('results', function (Blueprint $table) {
        $table->dropColumn(['source', 'query', 'title', 'authors', 'abstract']);
    });
}
};
