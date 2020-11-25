<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak_bisnis extends Model
{
    protected $fillable = ['namaDepan','namaBelakang', 'email','phone','divisi','jabatan','namaPerusahaan','namaBrand','kategoriIndustri','tipeDokumen','contohDokumen','jumlahDokumen','caraTandaTangan','caraPenggunaan','waktuImplementasi','catatan'];
}