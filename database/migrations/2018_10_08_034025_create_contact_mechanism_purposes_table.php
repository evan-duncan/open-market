<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactMechanismPurposesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_mechanism_purposes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('purpose_type_id')->nullable(false);
            $table->unsignedInteger('party_contact_mechanism_id')->nullable(false);
            $table->dateTime('from_date')->nullable(false);
            $table->dateTime('through_date')->nullable(true);
            $table->timestamps();

            $table->foreign('purpose_type_id')->references('id')->on('contact_mechanism_purpose_types');
            $table->foreign('party_contact_mechanism_id')->references('id')->on('party_contact_mechanisms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_mechanism_purposes');
    }
}
