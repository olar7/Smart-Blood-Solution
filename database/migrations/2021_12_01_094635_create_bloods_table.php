<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('blood_group','255');
            $table->string('blood_type','255');
            $table->string('volume','255');

            $table->bigInteger('client_id')->unsigned();

            $table->foreign('client_id')
                  ->references('id')
                  ->on('clients')->onDelete('cascade');

                  
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
        Schema::dropIfExists('bloods');
    }
}
