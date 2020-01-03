<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('about');
            $table->text('biography');
            // mapLat & mapLon used for location of venues on google maps.
            $table->decimal('mapLat', 10, 8); //ranges from -90 to +90 degrees
            $table->decimal('mapLon', 11, 8); //ranges from -180 to +180 degrees
            $table->integer('favouritesCount');
            $table->text('fbLink');
            $table->text('siteLink');
            $table->text('emailLink');
            $table->text('indexImgSrc');
            $table->text('profileImgSrc');
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
        Schema::dropIfExists('venues');
    }
}
