<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('applicant_form', function (Blueprint $table) {
            $table->id();
            $table->integer('total_document')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('applicant_email')->nullable();
            $table->string('employee_number')->nullable();
            $table->string('ta_va_number')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('tp_form_upload')->nullable();
            $table->string('outstation_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('location')->nullable();
            $table->string('company_name')->nullable();
            $table->string('country')->nullable();
            $table->date('appointment_date')->nullable();
            $table->string('category')->nullable();
            $table->date('rec_date')->nullable();
            $table->date('sub_date')->nullable();
            $table->date('coll_date')->nullable();
            $table->date('sent_date')->nullable();
            $table->string('referer')->nullable();
            $table->string('dd_received1')->nullable();
            $table->string('dd_received2')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('status')->nullable();
            $table->string('Outstation')->nullable();
            $table->boolean('passportCheck')->default(false);
            $table->date('passportInput')->nullable();
            $table->boolean('photoCheck')->default(false);
            $table->string('photoCountry')->nullable();
            $table->integer('photoCount')->nullable();
            $table->boolean('visaFormCheck')->default(false);
            $table->boolean('declarationCheck')->default(false);
            $table->boolean('healthDeclarationCheck')->default(false);
            $table->boolean('vfsDeclarationCheck')->default(false);
            $table->boolean('coveringLetterCheck')->default(false);
            $table->date('coveringLetterFromDate')->nullable();
            $table->date('coveringLetterToDate')->nullable();
            $table->boolean('invitationLetterCheck')->default(false);
            $table->date('invitationLetterFromDate')->nullable();
            $table->date('invitationLetterToDate')->nullable();
            $table->boolean('personalBankStatementCheck')->default(false);
            $table->date('personalBankStatementDate')->nullable();
            $table->boolean('personalITReturnsCheck')->default(false);
            $table->date('personalITReturnsDate')->nullable();
            $table->boolean('companyBankStatementCheck')->default(false);
            $table->date('companyBankStatementDate')->nullable();
            $table->boolean('companyITReturnsCheck')->default(false);
            $table->date('companyITReturnsDate')->nullable();
            $table->boolean('payslipCheck')->default(false);
            $table->string('payslipOption')->nullable();
            $table->boolean('ticketReservationCheck')->default(false);
            $table->date('ticketReservationFromDate')->nullable();
            $table->date('ticketReservationToDate')->nullable();
            $table->boolean('insuranceForTravelCheck')->default(false);
            $table->date('insuranceForTravelFromDate')->nullable();
            $table->date('insuranceForTravelToDate')->nullable();
            $table->boolean('hotelBookingCheck')->default(false);
            $table->date('hotelBookingFromDate')->nullable();
            $table->date('hotelBookingToDate')->nullable();
            $table->boolean('yellowFeverCardCheck')->default(false);
            $table->boolean('chamberOfCommerceCheck')->default(false);
            $table->boolean('forexReceiptCheck')->default(false);
            $table->boolean('ddCheck')->default(false);
            $table->date('ddDate')->nullable();
            $table->string('ddNumber')->nullable();
            $table->boolean('addressProofCheck')->default(false);
            $table->text('remarks')->nullable();
            $table->text('internal_remarks')->nullable();
            $table->boolean('send_sms')->default(false);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_form');
    }
};
