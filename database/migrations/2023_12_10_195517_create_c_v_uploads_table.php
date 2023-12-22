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
        Schema::create('c_v_uploads', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('country');
            $table->string('phone_number', 20);
            $table->date('date_of_birth');
            $table->string('residence_status');
            $table->string('academic_qualification');
            $table->boolean('terms_acknowledged');
            $table->boolean('privacy_acknowledged');
            $table->string('cv_pdf'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_v_uploads');
    }
};
