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
        Schema::create('bill_datas', function (Blueprint $table) {
            $table->id();
            $table->string('bill_no', 50)->nullable();
            $table->string('applicant_name', 50)->nullable();
            $table->string('passport_no', 50)->nullable();
            $table->string('employee_no', 50)->nullable();
            $table->string('travel_no', 50)->nullable();
            $table->string('booking_ref', 50)->nullable();
            $table->string('department', 50)->nullable();
            $table->string('location', 50)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('method', 255)->nullable();
            $table->datetime('date')->nullable();
            $table->string('agent_name', 50)->nullable();
            $table->string('agent_address', 200)->nullable();
            $table->string('visa_fees', 50)->nullable();
            $table->string('vfs_charge', 50)->nullable();
            $table->string('service_charge', 50)->nullable();
            $table->string('gst_tax', 11)->nullable();
            $table->integer('agent_region')->nullable();
            $table->string('sbc', 50)->nullable();
            $table->string('kkc', 50)->nullable();
            $table->string('dd_charge', 50)->nullable();
            $table->string('mis_charge', 50)->nullable();
            $table->string('cour_charge', 50)->nullable();
            $table->string('photoc_charge', 50)->nullable();
            $table->string('photo_charge', 50)->nullable();
            $table->string('not_charge', 50)->nullable();
            $table->string('service_tax', 50)->nullable();
            $table->string('round_off', 50)->nullable();
            $table->string('billstatus', 50)->nullable();
            $table->string('total_cal', 50)->nullable();
            $table->string('amount_words', 50)->nullable();
            $table->string('service_purpose', 250)->nullable();
            $table->string('billed_date', 255)->nullable();
            $table->timestamp('update_on')->nullable();
            $table->integer('print')->nullable();
            $table->integer('old_data')->nullable();
            $table->integer('applicant_refid')->nullable();
            $table->timestamp('created_on')->nullable();
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_datas');
    }
};
