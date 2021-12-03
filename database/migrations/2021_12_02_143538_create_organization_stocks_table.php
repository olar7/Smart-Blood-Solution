<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_stocks', function (Blueprint $table) {
            $table->bigInteger('organization_id')->unsigned();

            $table->foreign('organization_id')
                  ->references('id')
                  ->on('organizations')->onDelete('cascade');

                  $table->bigInteger('blood_stock_id')->unsigned();

            $table->foreign('blood_stock_id')
                  ->references('id')
                  ->on('blood_stocks')->onDelete('cascade');
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
        Schema::dropIfExists('organization_stocks');
    }
}
