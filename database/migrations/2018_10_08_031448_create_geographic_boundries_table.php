<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeographicBoundriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geographic_boundries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->unsignedInteger('geographic_boundry_type')->nullable(false);
            $table->point('position')->nullable(true);
            $table->string('abbreviation', 50)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geographic_boundries');
    }
}
