<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyRoleTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_role_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->nullable(false)->unique(true);
            $table->unsignedInteger('parent_id')->nullable(true);
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('party_role_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('party_role_types');
    }
}
