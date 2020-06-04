<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pilihan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pilihan_id')->unsigned()->nullable();
            $table->bigInteger('gejala_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('pilihan_id')
                ->references('id')
                ->on('pilihan');

            $table->foreign('gejala_id')
                ->references('id')
                ->on('gejala');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pilihan');
    }
}
