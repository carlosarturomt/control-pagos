<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClientIdAtPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->bigInteger('client_id')->unsigned()->nullable()->after('id');
            $table->bigInteger('company_id')->unsigned()->nullable()->after('id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('company_id')->references('company_id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
