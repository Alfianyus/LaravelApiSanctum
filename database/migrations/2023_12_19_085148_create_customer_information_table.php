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
        Schema::create('customer_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('IDCardNumber');
            $table->string('FirstName');
            $table->string('BirthPlace');
            $table->date('BirthDate');
            $table->string('Sex');
            $table->string('MaritalStatus');
            $table->string('Email');
            $table->string('MobilePhone');
            $table->string('Education');
            $table->string('ResidencyNStatus');
            $table->string('InvestmentObjectives');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_information');
    }
};
