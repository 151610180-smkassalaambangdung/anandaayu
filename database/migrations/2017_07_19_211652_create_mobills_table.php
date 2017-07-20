<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_mobil');
            $table->unsignedInteger('pelanggan_id');
            $table->foreign('pelanggan_id')->references('id')
            ->on('pelanggans')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_pelanggan');
            $table->string('jenis_mobil');
            $table->string('merek');
            $table->string('warna');
            $table->integer('plat_nomer');
            $table->time('waktu');
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
        Schema::dropIfExists('mobills');
    }
}
