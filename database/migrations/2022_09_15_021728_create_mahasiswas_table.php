<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            // $table->dropColumn('kelas');
            $table->unsignedBiginteger('kelas_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('nim',20)->nullable();
            $table->string('jurusan')->nullable();
            $table->foreign('kelas_id')->references('id')->on('kelas');
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
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->string('kelas');
            // $table->dropForeign(['kelas_id']);
        });
    }
}
