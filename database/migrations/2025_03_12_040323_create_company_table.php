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
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('name', length:100);
            $table->string('logo', length:255);
            $table->string('main_image', length:255);
            $table->string('slogan', length:255);
            $table->text('description')->nullable();
            $table->string('address', length:255);
            $table->string('phone', length:50);
            $table->string('email', length:50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
