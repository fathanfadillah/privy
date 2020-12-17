<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak_bisnis;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.kontak.kontakBisnis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaDepan'=>'required',
            'namaBelakang'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);

        // dd($request);
        
        // Kontak_bisnis::create([
        //     'namaDepan' => $request->namaDepan,
        //     'namaBelakang' => $request->namaBelakang,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'divisi' => $request->divisi,
        //     'jabatan' => $request->jabatan,
        //     'namaPerusahaan' => $request->namaPerusahaan,
        //     'namaBrand' => $request->namaBrand,
        //     'kategoriIndustri' => $request->kategoriIndustri,
        //     'tipeDokumen' => $request->tipeDokumen,
        //     'contohDokumen' => $request->contohDokumen,
        //     'jumlahDokumen' => $request->jumlahDokumen,
        //     'caraTandaTangan' => $request->caraTandaTangan,
        //     'caraPenggunaan' => $request->caraPenggunaan,
        //     'waktuImplementasi' => $request->waktuImplementasi,
        //     'catatan' => $request->catatan
        // ]);

        $kontaks = new Kontak_bisnis();
        $kontaks->namaDepan = $request->namaDepan;
        $kontaks->namaBelakang = $request->namaBelakang;
        $kontaks->email = $request->email;
        $kontaks->phone = $request->phone;
        $kontaks->divisi = $request->divisi;
        $kontaks->jabatan = $request->jabatan;
        $kontaks->namaPerusahaan = $request->namaPerusahaan;
        $kontaks->namaBrand = $request->namaBrand;
        $kontaks->kategoriIndustri = $request->kategoriIndustri;
        $kontaks->tipeDokumen = $request->tipeDokumen;
        $kontaks->contohDokumen = $request->contohDokumen;
        $kontaks->jumlahDokumen = $request->jumlahDokumen;
        $kontaks->caraTandaTangan = $request->caraTandaTangan;
        $kontaks->caraPenggunaan = $request->caraPenggunaan;
        $kontaks->waktuImplementasi = $request->waktuImplementasi;
        $kontaks->catatan = $request->catatan;
        
        $kontaks->save();

        return redirect()->route('kontakbisnis')->with('status','Terima Kasih Telah meng-submit');
    }

}