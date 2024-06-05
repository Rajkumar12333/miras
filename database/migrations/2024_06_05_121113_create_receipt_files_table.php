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
        Schema::create('receipt_files', function (Blueprint $table) {
            $table->id();
            $table->integer('track_id')->nullable();
            $table->integer('staff_id')->nullable();
            $table->longtext('file_name')->nullable();
            $table->timestamp('created_on')->nullable();
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipt_files');
    }
};
