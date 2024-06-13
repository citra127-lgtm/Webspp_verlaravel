<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatapembayaransppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('NISN');
            $table->string('NAMA_SISWA');
            $table->string('KELAS_JURUSAN');
            $table->timestamps();
        });
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->integer('NISN');
            $table->integer('ID_STAF_ATAU_GURU');
            $table->date('TANGGAL_PEMBAYARAN');
            $table->integer('NOMINAL');
            // Tambahkan line berikut untuk mengizinkan nilai null pada 'ID_PEMBAYARAN'
            // atau berikan nilai default jika diperlukan.
            $table->integer('ID_PEMBAYARAN')->nullable();
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
        //
    }
}
