<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BayarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayax', function (Blueprint $table) {
            $table->id(); // Menggunakan id() untuk kolom id
            $table->integer('NISN');
            $table->integer('IDSTAF');
            $table->date('TANGGAL_PEMBAYARAN');
            $table->integer('NOMINAL');
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
    }
}
