<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
   /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('ALTER TABLE users CHANGE username firstname VARCHAR(255)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE users CHANGE firstname username VARCHAR(255)');
    }
};
