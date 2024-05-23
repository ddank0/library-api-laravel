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
            $table->unsignedBigInteger("id_book");
            $table->unsignedBigInteger("id_gender");
            $table->foreign("id_book")->references("id")->on("book");
            $table->foreign("id_gender")->references("id")->on("gender");
//            $table->foreign("id_book")->constrained("books");
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
