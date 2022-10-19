<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRekaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_rekaman', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomor')->unsigned()->index();
            $table->string('anamersis',400);
            $table->string('p_fisik',400);
            $table->string('a_diagnosis',400);
            $table->string('plan',400);
            $table->string('p_entry',100);
            $table->timestamps();

            
            $table->foreign('nomor')->references('id')->on('m_kunjungan')->onDelete('restrict');

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
        Schema::table('m_rekaman', function (Blueprint $table) {
            //
        });
    }
}
