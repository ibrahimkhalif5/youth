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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('group_name')->nullable();
            $table->string('group_type')->default('employment');
            $table->string('subcounty')->nullable();
            $table->string('ward')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contant_no')->nullable();
            $table->string('reg_date')->nullable();
            $table->integer('total_member')->nullable();
            $table->string('reg_number')->nullable();
            $table->string('reg_cert')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};