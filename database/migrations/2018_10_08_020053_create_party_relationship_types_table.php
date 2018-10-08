<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyRelationshipTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_relationship_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->nullable(false);
            $table->string('description');
            $table->unsignedInteger('from_id')->nullable(false);
            $table->unsignedInteger('to_id')->nullable(false);
            $table->timestamps();

            $table->foreign('from_id')->references('id')->on('party_role_types');
            $table->foreign('to_id')->references('id')->on('party_role_types');
            $table->unique(['from_id', 'to_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('party_relationship_types');
    }
}
