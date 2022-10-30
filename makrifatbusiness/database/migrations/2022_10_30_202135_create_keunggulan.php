<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeunggulan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keunggulan', function (Blueprint $table) {
            $table->Increments('id_keunggulan');
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('kompetensi_1');
            $table->string('kompetensi_2');
            $table->string('kompetensi_3');
            $table->integer('persentase_1');
            $table->integer('persentase_2');
            $table->integer('persentase_3');
            $table->string('gambar');
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
        Schema::dropIfExists('keunggulan');
    }
}
