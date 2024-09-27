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
        Schema::create('test_places', function (Blueprint $table) {
            $table->id();

            $table->text('content');

            $table->string('type');

            $table->string('sourcetype');

            $table->string('sourcename');

            $table->vector('embedding',128);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_places');
    }
};
