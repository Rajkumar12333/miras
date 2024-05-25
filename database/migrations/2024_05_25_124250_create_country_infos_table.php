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
        Schema::create('country_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('countryid')->nullable();
            $table->text('countryinfo')->nullable();
            $table->text('embassyinfo')->nullable();
            $table->text('understanding')->nullable();
            $table->integer('status')->nullable();
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country_infos');
    }
};
