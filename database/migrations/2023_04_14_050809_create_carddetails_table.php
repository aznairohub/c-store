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
        Schema::create('carddetails', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('cardname');
            $table->string('cardnumber');
            $table->string('cvc');
            $table->string('exp');
            $table->string('year');
            $table->string('totalamount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carddetails');
    }
};
