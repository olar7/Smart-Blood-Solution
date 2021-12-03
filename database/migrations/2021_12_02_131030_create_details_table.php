<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description');
            $table->string('test_status','255');
            
            $table->bigInteger('blood_id')->unsigned();

            $table->foreign('blood_id')
                  ->references('id')
                  ->on('bloods')->onDelete('cascade');

                  $table->string('donor_name','255');
                  $table->string('donor_nationality','255');
                  $table->string('donor_contact','255');
                  $table->string('donor_location','255');


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
        Schema::dropIfExists('details');
    }
}
