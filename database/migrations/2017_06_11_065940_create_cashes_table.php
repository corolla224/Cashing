<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bank');
            $table->string('fromBank');
            $table->string('fromAccountNumber');
            $table->string('fromAccountName');
            $table->date('dateadd');
            //$table->time('Timeadd');
            //$table->string('toBank');
            $table->string('toAccountNumber');
            $table->string('toAccountName');
            $table->string('amount');
            $table->string('transferStatus');
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
        Schema::dropIfExists('cashes');
    }
}
