<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type','255');
            
            $table->bigInteger('blood_id')->unsigned();

            $table->foreign('blood_id')
                  ->references('id')
                  ->on('bloods')->onDelete('cascade');

                  $table->date('last_donation');
                  $table->string('number_of_donations','255');
                  $table->string('diagnosed_disease','255');

            
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
        Schema::dropIfExists('questions');
    }
}
