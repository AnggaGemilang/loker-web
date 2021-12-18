<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowonganPekerjaan extends Migration
{
    public function up()
    {
        Schema::create('t_loker', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pekerjaan',225);
            $table->text('persyaratan_umum')->nullable();
            $table->text('persyaratan_khusus')->nullable();
            $table->text('job_desk')->nullable();
            $table->text('contact_person')->nullable();
            $table->string('nama_perusahaan',225);
            $table->text('bidang_perusahaan')->nullable();
            $table->text('deskripsi_perusahaan')->nullable();
            $table->text('alamat_perusahaan')->nullable();
            $table->text('pengiriman_cv')->nullable();
            $table->string('sumber_sosmed');
            $table->text('tanggal_terbit')->nullable();
            $table->text('kota_ditempatkan')->nullable();
            $table->text('screenshot')->nullable();
            $table->text('link')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('t_loker');
    }
}
