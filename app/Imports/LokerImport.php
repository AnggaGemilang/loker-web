<?php

namespace App\Imports;

use App\LowonganPekerjaan;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Carbon\Carbon;

class LokerImport implements ToModel
{
    public function model(array $row)
    {
        return new LowonganPekerjaan([
            'nama_pekerjaan' => $row[1],
            'persyaratan_umum' => $row[2],
            'persyaratan_khusus' => $row[3],
            'job_desk' => $row[4],
            'contact_person' => $row[5],
            'nama_perusahaan' => $row[6],
            'bidang_perusahaan' => $row[7],
            'deskripsi_perusahaan' => $row[8],
            'alamat_perusahaan' => $row[9],
            'sumber_sosmed' => $row[11],
            'tanggal_terbit' => $row[12],
            'kota_ditempatkan' => $row[13],
            'screenshot' => $row[14],
            'link' => $row[15],
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'pengiriman_cv' => $row[10],
            'remember_token' => str_random(100),
        ]);
    }
}
