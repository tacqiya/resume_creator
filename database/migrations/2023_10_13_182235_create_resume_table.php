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
        Schema::create('resume', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('email')->nullable();
            $table->string('jobtitle', 100);
            $table->string('phone', 100);
            $table->string('country', 100);
            $table->string('province', 100);
            $table->string('zipcode', 100);
            $table->json('experiences');
            $table->json('educations');
            $table->json('certifications');
            $table->json('skills');
            $table->longText('career_objective');
            $table->json('references');
            $table->json('languages');
            $table->longText('additional_info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resume');
    }
};
