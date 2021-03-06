<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Verifikasi;

class VerifikasiController extends Controller
{
    public function index()
    {
        return view('pages.verifikasi.verifikasiPDF');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            // 'no_telp' => 'required',
            'file'     => 'required|mimes:pdf|max:1024'         
            // 'alamat_pedagang' => 'required'
        ]);

        $file     = $request->file('file');
        $fileName = time() . "." . $file->getClientOriginalName();  
        // $request->file('file')->move("files/privy/", $fileName);
        $request->file('file')->storeAs('/files/', $fileName, 'sftp', 'public');


        $verifikasis = new Verifikasi();
        // $pedagang->nm_pedagang     = $request->nm_pedagang;
        // $pedagang->alamat_pedagang = $request->alamat_pedagang;
        // $pedagang->no_ktp = $request->no_ktp;
        // $pedagang->no_telp = $request->no_telp;
       
        $verifikasis->file = $fileName;
        $verifikasis->save();

        $fileStatus = $file->getClientOriginalName();

        return redirect()->route('verifikasipdf')->with('status', $fileStatus.' Telah Tersimpan');
    }
}
