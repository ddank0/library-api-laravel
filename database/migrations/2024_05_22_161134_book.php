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
        schema::create("book", function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->unsignedBigInteger("id_publisher");
            $table->unsignedBigInteger("id_author");
            $table->foreign("id_publisher")->references("id")->on("publisher");
            $table->foreign("id_author")->references("id")->on("author");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("book");
    }
};
