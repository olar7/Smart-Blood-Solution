<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('blood_type','255')->nullable();
            $table->string('blood_group','255');
            $table->date('collected_date');
            $table->string('blood_checkup_report','255');

            $table->bigInteger('organization_id')->unsigned();

            $table->foreign('organization_id')
                  ->references('id')
                  ->on('organizations')->onDelete('cascade');
            

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
        Schema::dropIfExists('blood_stocks');
    }
}
