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
        schema::create("gender_book", function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_book")->constrained("books");
            $table->foreignId("id_gender")->constrained("genders");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists("gender_book");
    }
};
