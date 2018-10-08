<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostalAddressBoundriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postal_address_boundries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('postal_address_id')->nullable(false);
            $table->unsignedInteger('geographic_boundry_id')->nullable(false);
            $table->timestamps();

            $table->foreign('postal_address_id')->references('id')->on('postal_addresses');
            $table->foreign('geographic_boundry_id')->references('id')->on('geographic_boundries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postal_address_boundries');
    }
}
