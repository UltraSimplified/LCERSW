<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstituenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constituencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('county')->nullable();
            $table->integer('region_id')->references('id')->on('regions')->nullable();
            $table->integer('electorate_2019')->nullable();
            $table->integer('margin_2019')->nullable();
            $table->integer('winner_id')->references('id')->on('parties')->nullable();
            $table->integer('nearest_id')->references('id')->on('parties')->nullable();
            $table->enum('change',['Gained', 'Held', 'Lost', ' — '])->nullable();
            $table->integer('status_id')->references('id')->on('status')->nullable();
            $table->tinyInteger('champion')->default(0);
            $table->tinyInteger('resolution')->default(0);
            $table->date('resolution_date')->nullable();
            $table->string('secretary_email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('website')->nullable();
            $table->text('map_title')->nullable();
            $table->text('shape')->nullable();
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
        Schema::dropIfExists('constituencies');
    }
}
