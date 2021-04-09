<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsHaveRepresentativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_have_representatives', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('representative_id')->unsigned();
            $table->bigInteger('client_id')->unsigned();
            $table->bigInteger('client_company_id')->unsigned();

            $table->timestamps();

            $table->foreign('representative_id')->references('id')->on('representatives');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('client_company_id')->references('company_id')->on('clients');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients_have_representatives');
    }
}
