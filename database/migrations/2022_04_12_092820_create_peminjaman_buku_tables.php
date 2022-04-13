<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanBukuTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_book', function (Blueprint $table) {
            $table->bigIncrements('id_peminjaman');
            $table->string('peminjam_nama');
            $table->string('peminjam_email');
            $table->string('peminjam_nomorhp');
            $table->date('waktu_meminjam');
            $table->integer('duration');
            $table->unsignedBigInteger('id_book');
            $table->timestamps();

            $table->foreign('id_book')->references('id')->on('books')
                                                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman_buku_tables');
    }
}
