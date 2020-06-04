<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConclussionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conclussion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gejala');
            $table->bigInteger('penyakit_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('penyakit_id')
                ->references('id')
                ->on('penyakit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conclussion');
    }
}
