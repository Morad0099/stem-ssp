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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('index_number', 10)->unique();
            $table->date('date_of_birth');
            $table->string('email')->unique();
            $table->unsignedBigInteger('school_assigned_id')->nullable();
            $table->timestamps();
        });

        // Add foreign key after the table is created
        Schema::table('students', function (Blueprint $table) {
            $table->foreign('school_assigned_id')->references('id')->on('schools')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
