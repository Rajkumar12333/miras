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
        Schema::create('tbl_documents', function (Blueprint $table) {
            $table->id();
            $table->integer('app_id')->nullable();
            $table->string('app_name', 250)->nullable();
            $table->integer('passport')->nullable();
            $table->string('passport_number', 250)->nullable();
            $table->string('passport_validity_date', 50)->nullable();
            $table->integer('photo')->nullable();
            $table->integer('count')->nullable();
            $table->integer('visa_form')->nullable();
            $table->integer('declaration')->nullable();
            $table->integer('health_declaration')->nullable();
            $table->integer('VFS_declaration')->nullable();
            $table->integer('covering_letter')->nullable();
            $table->string('covering_letter_from_date', 250)->nullable();
            $table->string('covering_letter_to_date', 250)->nullable();
            $table->integer('invitation_letter')->nullable();
            $table->string('invitation_letter_from_date', 250)->nullable();
            $table->string('invitation_letter_to_date', 250)->nullable();
            $table->integer('personal_bank_statement')->nullable();
            $table->string('pbs_given_date', 250)->nullable();
            $table->integer('personal_it_returns')->nullable();
            $table->string('pit_date', 250)->nullable();
            $table->integer('company_bank_statement')->nullable();
            $table->string('cbs_date', 250)->nullable();
            $table->integer('company_it_returns')->nullable();
            $table->string('cit_date', 250)->nullable();
            $table->integer('payslip')->nullable();
            $table->string('payslip_type', 250)->nullable();
            $table->integer('ticket_reservation')->nullable();
            $table->string('tr_fromdate', 250)->nullable();
            $table->string('tr_todate', 250)->nullable();
            $table->integer('insurance_for_travel')->nullable();
            $table->string('ift_fromdate', 250)->nullable();
            $table->string('ift_todate', 250)->nullable();
            $table->integer('hotelbooking')->nullable();
            $table->string('hb_fromdate', 250)->nullable();
            $table->string('hb_todate', 250)->nullable();
            $table->integer('yellow_fever_card')->nullable();
            $table->integer('chamber_of_commerce')->nullable();
            $table->integer('forex_receipt')->nullable();
            $table->integer('dd')->nullable();
            $table->string('dd_date', 250)->nullable();
            $table->integer('dd_number')->nullable();
            $table->integer('Addressproof')->nullable();
            $table->string('address_proof', 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_documents');
    }
};
