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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->string('userName');
            $table->foreignId('classStudy_id');
            $table->string('gender');
            $table->date('dateOfBirth');
            $table->string('studentIdentity');
            $table->string('image')->default('studentProfileImage/default.jpg');
            $table->string('fatherName');
            $table->string('motherName');
            $table->integer('contactNumber');
            $table->integer('alternateNumber')->nullable();
            $table->text('address');
            $table->timestamp('dateOfAdmission')->nullable();
            $table->timestamps();
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
