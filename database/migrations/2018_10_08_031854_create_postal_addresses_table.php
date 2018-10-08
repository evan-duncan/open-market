<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostalAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postal_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address_1')->nullable(false);
            $table->string('address_2')->nullable(true);
            $table->string('address_3')->nullable(true);
            $table->text('direction')->nullable(true);
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
        Schema::dropIfExists('postal_addresses');
    }
}
