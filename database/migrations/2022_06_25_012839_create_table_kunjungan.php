<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKunjungan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kunjungan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pasien')->unsigned()->index();
            $table->string('no_pendaftaran',100);
            $table->string('umur',100);
            $table->string('status_kepesertaan',100);
            $table->string('fakses_tk',100);
            $table->string('tujuan_ruangan',100);
            $table->string('status_kunjungan',100);
            $table->string('ket',100);

            $table->foreign('pasien')->references('id')->on('m_pasien')->onDelete('restrict');
            $table->timestamps();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_kunjungan', function (Blueprint $table) {
            //
        });
    }
}
