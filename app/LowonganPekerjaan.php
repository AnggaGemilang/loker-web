<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LowonganPekerjaan extends Model
{
    protected $table = 't_loker';
    protected $fillable = [
        'nama_pekerjaan', 'persyaratan_umum', 'persyaratan_khusus', 'job_desk', 'contact_person', 'nama_perusahaan', 'bidang_perusahaan', 'deskripsi_perusahaan', 'alamat_perusahaan', 'pengiriman_cv', 'sumber_sosmed', 'tanggal_terbit', 'kota_ditempatkan', 'screenshot', 'link',
    ];
}
