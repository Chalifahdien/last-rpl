<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('id_pengguna');
            $table->string('nama_lengkap', 100);
            $table->string('email', 100)->unique();
            $table->string('telepon', 20)->nullable();
            $table->string('kata_sandi', 255);
            $table->string('foto_profil', 255)->nullable();
            $table->unsignedBigInteger('id_peran')->nullable();
            $table->timestamp('tanggal_dibuat')->useCurrent();
            $table->foreign('id_peran')->references('id_peran')->on('peran');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
};
