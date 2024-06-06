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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('referer',255)->nullable();
            $table->string('passportno', 50)->nullable();
            $table->string('country', 255)->nullable();
            $table->integer('visafees')->nullable();
            $table->string('visa_method', 255)->nullable();
            $table->integer('vfs_charge')->nullable();
            $table->integer('vfs_method')->nullable();
            $table->date('date')->nullable();
            $table->string('recepno', 20)->nullable();
            $table->integer('staff_id')->nullable();
            $table->integer('app_id')->nullable();
            $table->string('app_email', 255)->nullable();
            $table->integer('track_id')->nullable();
            $table->timestamp('created_on')->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
