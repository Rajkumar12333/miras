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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('agtname', 50)->nullable();
            $table->string('mailid', 100)->nullable();
            $table->string('emailid', 100)->nullable();
            $table->string('gst_no', 255)->nullable();
            $table->string('username', 50)->nullable();
            $table->string('passwd', 50)->nullable();
            $table->string('mobile', 255)->nullable();
            $table->text('address')->nullable();
            $table->integer('del_status')->nullable();
            $table->integer('status')->nullable();
            $table->integer('region')->nullable();
            $table->integer('branchid')->nullable();
            $table->integer('adminRight')->nullable();
            $table->integer('masteradmin')->nullable();
            $table->integer('authority')->nullable();
            $table->string('add_authority', 255)->nullable();
            $table->string('createdby', 50)->nullable();
            $table->timestamp('createdon')->nullable();
            $table->timestamp('modified_on')->nullable();
            $table->integer('modified_by')->nullable();
            $table->integer('outstation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
