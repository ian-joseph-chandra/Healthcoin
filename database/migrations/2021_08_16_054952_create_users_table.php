<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id')->default(1);
            $table->foreign('role_id')->references('id')->on('user_roles');
            $table->unsignedBigInteger('blockchain_id')->nullable();
            $table->foreign('blockchain_id')->references('id')->on('blockchains');
            $table->string('name');
            $table->timestamp('birth_date')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->unique();
            $table->text('address');
            $table->string('password');
            $table->unsignedBigInteger('national_id');
            $table->rememberToken();
            $table->timestamps();
            $table->dropColumn('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
