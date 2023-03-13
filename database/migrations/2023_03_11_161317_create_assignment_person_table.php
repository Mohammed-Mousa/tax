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
        Schema::create('assignment_person', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->string('tax_number');
            $table->string('full_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('birth_date')->nullable();
            $table->string('id_number')->nullable();
            $table->string('phone')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment_person');
    }
};
