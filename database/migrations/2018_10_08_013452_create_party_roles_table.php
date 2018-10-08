<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('party_id')->nullable(false);
            $table->unsignedInteger('party_role_id')->nullable(false);
            $table->dateTime('from_date');
            $table->dateTime('through_date');
            $table->timestamps();

            $table->foreign('party_role_id')->references('id')->on('party_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('party_roles');
    }
}
