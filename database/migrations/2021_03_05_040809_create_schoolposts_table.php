<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolposts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image_top');
            $table->string('access_postal');
            $table->string('access');
            $table->smallInteger('area_code')->unsigned();
            $table->string('station');
            $table->string('station_time');
            $table->smallInteger('reviews')->unsigned()->default(0);
            $table->tinyInteger('rating')->unsigned()->default(0);
            $table->text('comment');
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
        Schema::dropIfExists('schoolposts');
    }
}
