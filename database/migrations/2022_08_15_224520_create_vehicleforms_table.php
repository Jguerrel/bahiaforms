<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicleforms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('marca');
            $table->string('modelo');
            $table->string('motor');
            $table->string('chasis');
            $table->string('anio');
            $table->string('version');
            $table->string('colorexterior');
            $table->string('colorinterior');
            $table->string('formname');
            $table->longText('formrequest');
            $table->string('formid');
            $table->string('formaction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicleforms');
    }
}
