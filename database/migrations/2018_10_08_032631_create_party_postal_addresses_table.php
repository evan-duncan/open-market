<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyPostalAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_postal_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('party_id')->nullable(false);
            $table->unsignedInteger('postal_address_id')->nullable(false);
            $table->dateTime('from_date')->nullable(false);
            $table->dateTime('through_date')->nullable(true);
            $table->timestamps();

            $table->foreign('party_id')->references('id')->on('parties');
            $table->foreign('postal_address_id')->references('id')->on('postal_addresses');
            $table->unique(['party_id', 'postal_address_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('party_postal_addresses');
    }
}
