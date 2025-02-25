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
        Schema::create('entity_record_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entity_record_id')->constrained('entity_records')->onDelete('cascade');
            $table->foreignId('custom_attribute_id')->constrained('custom_attributes')->onDelete('cascade');
            $table->string('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entity_record_values');
    }
};
