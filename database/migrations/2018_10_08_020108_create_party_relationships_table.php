<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_relationships', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('from_id')->nullable(false);
            $table->unsignedInteger('to_id')->nullable(false);
            $table->unsignedInteger('party_relationship_type_id')->nullable(false);
            $table->dateTime('from_date')->nullable(false);
            $table->dateTime('through_date');
            $table->string('comment');
            $table->timestamps();

            $table->foreign('from_id')->references('id')->on('party_roles');
            $table->foreign('to_id')->references('id')->on('party_roles');
            $table->foreign('party_relationship_type_id')->references('id')->on('party_relationship_types');
            $table->unique(['from_id', 'to_id', 'party_relationship_type_id'], 'unique_party_relationship_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('party_relationships');
    }
}
