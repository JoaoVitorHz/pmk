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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('phone');
            $table->string('birthday');
            $table->string('registration_date');
            $table->string('donation_interval');
            $table->string('donation_value');
            $table->string('address');
            $table->string('district');
            $table->string('number_address');
            $table->string('zip_code');
            $table->string('card_number')->default('-');
            $table->string('card_holder')->default('-');
            $table->string('validation_data')->default('-');
            $table->string('security_code')->default('-');
            $table->string('card_banner');
            $table->string('first_six_numbers')->default('-');
            $table->string('last_four_numbers')->default('-');
            $table->timestamps();
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
