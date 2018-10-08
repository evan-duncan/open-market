<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyContactMechanismsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_contact_mechanisms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('party_id')->nullable(false);
            $table->unsignedInteger('contact_mechanism_id')->nullable(false);
            $table->dateTime('from_date')->nullable(false);
            $table->dateTime('through_date')->nullable(true);
            $table->boolean('allows_solicitation')->nullable(false)->default(false);
            $table->string('extension', 15)->nullable(true);
            $table->text('comment')->nullable(true);
            $table->timestamps();

            $table->foreign('party_id')->references('id')->on('parties');
            $table->foreign('contact_mechanism_id')->references('id')->on('contact_mechanisms');
            $table->unique(['party_id', 'contact_mechanism_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('party_contact_mechanisms');
    }
}
