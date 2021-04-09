<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientServiceContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_service_contracts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('client_id')->unsigned();
            $table->bigInteger('client_company_id')->unsigned();
            $table->bigInteger('service_id')->unsigned();
            $table->date('date');

            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('client_company_id')->references('company_id')->on('clients');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_service_contracts');
    }
}
