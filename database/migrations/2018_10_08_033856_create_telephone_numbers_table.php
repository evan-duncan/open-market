<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelephoneNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telephone_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('area_code', 50)->nullable(false);
            $table->string('number', 50)->nullable(false);
            $table->string('country_code')->nullable(true);
            $table->timestamps();

            $table->unique(['area_code', 'number', 'country_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telephone_numbers');
    }
}
