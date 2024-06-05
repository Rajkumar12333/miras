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
        Schema::create('credit_payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_from', 255)->nullable();
            $table->integer('agent_id')->nullable();
            $table->string('bank', 20)->nullable();
            $table->string('payment_method', 255)->nullable();
            $table->integer('count_dd')->nullable();
            $table->integer('amount')->nullable();
            $table->string('voucher', 255)->nullable();
            $table->string('date', 255)->nullable();
            $table->integer('debiter_id')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_payments');
    }
};
