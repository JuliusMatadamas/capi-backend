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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 45)->nullable(false);
            $table->string('lastname', 45)->nullable(false);
            $table->date('birthdate')->nullable(false);
            $table->enum('genre', ['f', 'm'])->default('f')->nullable(false);
            $table->text('note')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['firstname', 'lastname', 'birthdate', 'genre']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
