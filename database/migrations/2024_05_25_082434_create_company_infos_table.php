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
        Schema::create('company_infos', function (Blueprint $table) {
            $table->id();
            $table->string('companyname', 100)->nullable();
            $table->string('emailid', 100)->nullable();
            $table->string('username', 50)->nullable();
            $table->string('passwd', 250)->nullable();
            $table->text('address')->nullable();
            $table->string('del_status')->nullable();
            $table->string('branchid')->nullable();
            $table->string('adminRight')->nullable();
            $table->string('masteradmin')->nullable();
            $table->timestamp('createdon')->nullable();
            $table->string('createdby', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_infos');
    }
};
