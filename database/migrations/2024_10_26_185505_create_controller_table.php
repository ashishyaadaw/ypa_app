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
        Schema::create('controller', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // For photo upload
            $table->string('description'); // For photo upload
            $table->string('file_path'); // For photo upload
            $table->string('link'); // For photo upload
            $table->string('other'); // For photo upload
            $table->string('status'); // For photo upload
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controller');
    }
};
