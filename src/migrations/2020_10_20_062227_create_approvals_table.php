<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvals', function (Blueprint $table) {
            $table->id();
            $table->string('approval_id');
            $table->string('approval_name');
            $table->string('approver1_name')->nullable();
            $table->string('approver1_email')->nullable();
            $table->string('approver2_name')->nullable();
            $table->string('approver2_email')->nullable();
            $table->string('approver3_name')->nullable();
            $table->string('approver3_email')->nullable();
            $table->string('approver4_name')->nullable();
            $table->string('approver4_email')->nullable();
            $table->string('approval_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approvals');
    }
}
