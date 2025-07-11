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
        Schema::create('admission_apply', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email');
            $table->string('mobile_number', 15);
            $table->string('otp', 6)->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('discipline')->nullable();
            $table->string('specialization')->nullable();
            $table->date('schedule_call')->nullable();
            $table->boolean('consent')->default(false); // Checkbox consent
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_apply');
    }
};
