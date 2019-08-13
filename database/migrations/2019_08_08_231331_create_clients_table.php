<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('srut', 14);
            $table->char('sdiv',5);
            $table->string('sfirstname', 50);
            $table->string('ssecondname', 50);
            $table->string('slastname', 50);
            $table->string('slastname2', 50);
            $table->string('scliename', 100);
            $table->string('saddress', 150);
            $table->string('semail', 80);
            $table->date('dbirthdate');
            $table->integer('nusercode');
            $table->date('dcompdate');
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
        Schema::dropIfExists('clients');
    }
}
