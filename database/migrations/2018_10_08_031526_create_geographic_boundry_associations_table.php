<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeographicBoundryAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geographic_boundry_associations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('from_id')->nullable(false);
            $table->unsignedInteger('to_id')->nullable(false);
            $table->timestamps();

            $table->foreign('from_id')->references('id')->on('geographic_boundries');
            $table->foreign('to_id')->references('id')->on('geographic_boundries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geographic_boundry_associations');
    }
}
