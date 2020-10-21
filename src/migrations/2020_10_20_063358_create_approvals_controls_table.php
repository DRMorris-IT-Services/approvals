<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalsControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvalscontrols', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('approval_admin')->nullable();
            $table->string('approval_view')->nullable();
            $table->string('approval_add')->nullable();
            $table->string('approval_edit')->nullable();
            $table->string('approval_del')->nullable();
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
        Schema::dropIfExists('approvalscontrols');
    }
}
