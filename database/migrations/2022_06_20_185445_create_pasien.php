<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_rm',100);
            $table->string('nik',30);
            $table->string('nama',100);
            $table->string('jenis_kelamin',10);
            $table->string('tempat_lahir',115);
            $table->string('agama',115);
            $table->string('golongan_darah',115);
            $table->string('s_pernikahan',115);
            $table->string('pekerjaan',115);
            $table->string('no_hp',115);
            $table->string('umur',100);
            $table->text('provinsi',115);
            $table->string('kabupaten_kota',115);
            $table->string('kecamatan',115);
            $table->string('kelurahan_desa',115);
            $table->string('rt_rw',115);
            $table->string('s_kepesertaan',115);
            $table->string('no_fakses',115);
            $table->string('f_tingkat',115);
            $table->string('nk_keluarga',115);
            $table->string('s_keluarga',115);
            $table->string('nh_keluarga',115);
            $table->string('keterangan',115);
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
        Schema::table('m_pasien', function (Blueprint $table) {
            //
        });
    }
}
