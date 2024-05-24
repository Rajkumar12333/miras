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
        Schema::table('users', function (Blueprint $table) {
            $table->string('userid', 50)->nullable();
            $table->string('passwd', 50)->nullable();
            $table->string('mailid', 50)->nullable();
            $table->integer('status')->nullable();
            $table->integer('adminRight')->nullable();
            $table->integer('branchid')->nullable();
            $table->integer('user_type')->nullable();
            $table->integer('staff_att_status')->nullable();
            $table->integer('authority')->nullable();
            $table->integer('add_authority')->nullable();
            $table->timestamp('createdon')->nullable(); // Removed '50' from timestamp
            $table->string('createdby', 50)->nullable();
        });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
