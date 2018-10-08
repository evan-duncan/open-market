<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyClassificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_classifications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('party_type_id')->nullable(false);
            $table->unsignedInteger('party_id')->nullable(false);
            $table->dateTime('from_date')->nullable(false);
            $table->dateTime('through_date');
            $table->timestamps();

            $table->foreign('party_type_id')->references('id')->on('party_types');
            $table->foreign('party_id')->references('id')->on('parties');
            $table->unique(['party_type_id', 'party_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('party_classifications');
    }
}
