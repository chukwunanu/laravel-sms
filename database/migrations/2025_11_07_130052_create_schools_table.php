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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('schoolUId')->unique();
            $table->string('school_name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->integer('po_box')->nullable();
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('principal_name');
            $table->string('vice_principal_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
