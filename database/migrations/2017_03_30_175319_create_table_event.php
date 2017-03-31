<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('t_event', function(Blueprint $table){
            $table->increments('id_event');
            $table->string('nama_event',100);
            $table->date('tgl');
            $table->text('lokasi');
            $table->text('sponsor');
            $table->text('media_patner');
            $table->string('email',100);
            $table->text('kontak');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::drop('t_event');

    }
}
