<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactMechanismLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_mechanism_links', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('from_id')->nullable(false);
            $table->unsignedInteger('to_id')->nullable(false);
            $table->timestamps();

            $table->foreign('from_id')->references('id')->on('contact_mechanisms');
            $table->foreign('to_id')->references('id')->on('contact_mechanisms');
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
        Schema::dropIfExists('contact_mechanism_links');
    }
}
