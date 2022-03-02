<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('picture');
            $table->text('description');
            $table->string('teaser_link')->nullable();
            $table->text('terms_and_conditions')->nullable();
            $table->string('register_link')->nullable();
            $table->text('faq')->nullable();
            $table->text('trivia')->nullable();
            $table->text('the_judges')->nullable();
            $table->text('our_finalist')->nullable();
            $table->text('documentation')->nullable();
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
        Schema::dropIfExists('competitions');
    }
}
