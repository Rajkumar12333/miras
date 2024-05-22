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
        Schema::create('agent_fees', function (Blueprint $table) {
            $table->id();
            $table->string('country', 250)->nullable();
            $table->string('agent_id', 250)->nullable();
            $table->string('visa_fees', 50)->nullable();
            $table->string('vfs_charge', 50)->nullable();
            $table->string('service_charge', 50)->nullable();
            $table->string('dd_charge', 50)->nullable();
            $table->string('miscellaneous_charge', 50)->nullable();
            $table->string('courier_charge',50)->nullable();
            $table->string('photocopy_charge', 50)->nullable();
            $table->string('photo_charge', 50)->nullable();
            $table->string('notary_charge',50)->nullable();
            $table->string('service_tax', 50)->nullable();
            $table->string('rount_off', 50)->nullable();
            $table->string('service_purpose',250)->nullable();
            $table->timestamp('update_on')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent_fees');
    }
};
