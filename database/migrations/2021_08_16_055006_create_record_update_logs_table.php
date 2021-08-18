<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordUpdateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_update_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('old_record_id');
            $table->unsignedBigInteger('new_record_id');
            $table->foreign('old_record_id')->references('id')->on('records');
            $table->foreign('new_record_id')->references('id')->on('records');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('record_update_logs');
    }
}
