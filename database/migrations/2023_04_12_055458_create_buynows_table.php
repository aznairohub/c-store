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
        Schema::create('buynows', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('fname');
            $table->string('lname');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->string('phone');
            $table->string('email');
            $table->string('method');
            $table->string('paymentstatus')->default('notpayed');
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buynows');
    }
};
