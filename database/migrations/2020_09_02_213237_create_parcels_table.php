<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->string('trackid');
            $table->string('sname');
            $table->string('rname');
            $table->string('raddress');
            $table->string('rcountry');
            $table->string('remail');
            $table->string('rphone');
            $table->string('description');
            $table->string('dimension');
            $table->string('clocation');
            $table->string('days');
            $table->string('message');
            $table->string('start');
            $table->string('end');
            $table->string('startint');
            $table->string('endint');
            $table->string('status')->default('active');
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
        Schema::dropIfExists('parcels');
    }
}
