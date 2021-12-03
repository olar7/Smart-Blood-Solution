<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailQuestionStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_question_stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('response','255');

            $table->bigInteger('detail_id')->unsigned();

            $table->foreign('detail_id')
                  ->references('id')
                  ->on('details')->onDelete('cascade');

                  
                  $table->bigInteger('question_id')->unsigned();

            $table->foreign('question_id')
                  ->references('id')
                  ->on('questions')->onDelete('cascade');

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
        Schema::dropIfExists('detail_question_stores');
    }
}
