<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('image_slide');
            $table->string('name');
            $table->string('short_des');
            $table->text('long_des');
            $table->string('year_experience');
            $table->text('experience');
            $table->string('quantity_project');
            $table->string('project_text');
            $table->string('client_reviews');
            $table->string('client_reviews_text');
            $table->string('button_text');
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
        Schema::dropIfExists('slides');
    }
}
