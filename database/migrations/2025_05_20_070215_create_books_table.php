<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();;
            $table->string('cover_image')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->boolean('is_free')->default(false)->nullable();;
            $table->enum('type', ['physical', 'digital'])->nullable();
            $table->unsignedInteger('stock')->default(0)->nullable();;
            $table->string('download_link')->nullable();
            $table->timestamps(); // created_at و updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
