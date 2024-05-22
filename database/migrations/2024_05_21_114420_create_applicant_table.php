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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200)->nullable();
            $table->string('passportno', 200);
            $table->string('applicant_email', 200);
            $table->string('employeeno', 200);
            $table->string('tavano', 250);
            $table->string('dob', 200);
            $table->string('location', 200);
            $table->string('category', 200);
            $table->string('country', 200)->nullable();
            $table->string('passportcopy', 250);
            $table->string('visacopy', 250);
            $table->string('insurancecopy', 250);
            $table->string('interviewslip', 250);
            $table->integer('status')->nullable();
            $table->integer('bill');
            $table->string('appoint_date', 255);
            $table->string('rcddate', 200)->nullable();
            $table->string('subdate', 250)->nullable();
            $table->string('collectdate', 220)->nullable();
            $table->string('sentdate', 250)->nullable();
            $table->string('senton', 250);
            $table->string('appt_status', 200)->nullable();
            $table->integer('del_status')->nullable();
            $table->integer('doc')->nullable();
            $table->dateTime('createdon')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('modifiedon')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->string('createdby', 50)->nullable();
            $table->integer('agtid')->nullable();
            $table->integer('cms_id');
            $table->integer('branchid')->default(1);
            $table->integer('outstatid')->nullable();
            $table->string('referer', 55);
            $table->string('company', 55);
            $table->string('visaref', 200);
            $table->string('dd', 255);
            $table->text('reason');
            $table->text('internal_reason');
            $table->string('barcode', 100);
            $table->integer('outstation')->default(0);
            $table->string('number', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant');
    }
};
