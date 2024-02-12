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
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Risk');
            $table->integer('SpouseIncomePerAnnum');
            $table->integer('SpouseOccupation');
            $table->string('SpousePosition');
            $table->string('SpouseNatureOfBusiness');
            $table->string('SpouseCompanyName');
            $table->integer('SpouseCompanyCity');
            $table->string('SpouseCompanyPostalCode');
            $table->string('SpouseCompanyAddress');
            $table->string('SpouseFundSource');
            $table->string('FATCA1');
            $table->string('FATCA2');
            $table->string('FATCA3');
            $table->string('Question1');
            $table->string('Question1Text');
            $table->string('Question2');
            $table->string('Question2Text');
            $table->string('Question3');
            $table->string('Question3Text');
            $table->string('Question4');
            $table->string('Question4Text');
            $table->string('Question5');
            $table->string('Question5Text');
            $table->string('Question6');
            $table->string('Disclaimer');      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
