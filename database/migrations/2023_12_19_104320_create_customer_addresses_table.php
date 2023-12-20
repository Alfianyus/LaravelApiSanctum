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
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('IDCardAddress');
            $table->string('IDCardRT');
            $table->string('IDCardRW');
            $table->string('IDCardKelurahan');
            $table->string('IDCardKecamatan');
            $table->string('IDCardCity');
            $table->string('CIFProvinceName');
            $table->string('IDCardPostalCode');
            $table->string('CIFLookupDescription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_addresses');
    }
};
