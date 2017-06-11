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
            $table->string('method');
            $table->string('fromBank');
            $table->integer('fromAccountNumber');
            $table->string('fromAccountName');
            $table->date('transferDate');
            $table->time('transferTime');
            $table->string('toBank');
            $table->integer('toAccountNumber');
            $table->string('toAccountName');
            $table->float('amount');
            $table->string('transferStatus');
            $table->rememberToken();
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
