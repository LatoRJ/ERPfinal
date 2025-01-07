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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id'); // Primary key
            $table->string('username');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Contact_Number')->nullable(); // From customers table
            $table->string('Line_Address_1')->nullable(); // From customers table
            $table->string('Line_Address_2')->nullable(); // From customers table
            $table->string('Barangay')->nullable(); // From customers table
            $table->string('Municipality')->nullable(); // From customers table
            $table->string('City')->nullable(); // From customers table
            $table->string('Postal_Code')->nullable(); // From customers table
            $table->enum('Role', ['admin', 'customer'])->default('customer'); // From customers table
            $table->rememberToken(); // For authentication
            $table->timestamps(); // Created and updated timestamps
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
