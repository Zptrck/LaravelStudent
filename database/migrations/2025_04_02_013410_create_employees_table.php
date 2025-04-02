<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Auto-incrementing `id`
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name', 255);
            $table->string('middle_name', 255)->nullable(); // Assuming mname can be nullable
            $table->string('last_name', 255);
            $table->string('uli_no', 255);
            $table->dateTime('entry_date', 6);
            $table->string('barangay', 255);
            $table->string('city', 255);
            $table->string('province', 255);
            $table->string('region', 255);
            $table->string('contact_no', 255);
            $table->string('nationality', 255);
            $table->string('sex', 255);
            $table->string('civil_status', 255);
            $table->string('employment', 255);
            $table->date('bdate');
            $table->string('bplace', 255);
            $table->string('educ_attain', 255);
            $table->string('parent', 255);
            $table->string('parent_address', 255);
            $table->string('learner_classification', 255);
            $table->string('type_of_disability', 255);
            $table->string('cause_of_disability', 255);
            $table->string('name_course', 255);
            $table->string('scholar', 255);
            $table->string('privacy_consent', 255);
            $table->timestamps(); // Adds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
