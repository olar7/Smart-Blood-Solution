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
            $table->bigIncrements('id');
            $table->string('first_name','255');
            $table->string('last_name','255')->nullable();
            $table->string('email')->unique();

            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            
            $table->string('contact','255');
            $table->string('address','255');

            $table->timestamp('email_verified_at')->nullable();
            

            
            $table->bigInteger('user_type_id')->unsigned();

            $table->foreign('user_type_id')
                  ->references('id')
                  ->on('user_types')->onDelete('cascade');
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
