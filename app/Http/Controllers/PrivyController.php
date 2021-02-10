<?php

namespace App\Http\Controllers;

use App\Keuntungan;
use App\Enterprise;
use App\Klien;
use App\Liputan;
use App\Sertifikat;
use App\Pimpinan;
use App\Penghargaan;
use App\Dokumentasi;
use App\Faq;
use App\Blog;
use App\BlogKategori;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PrivyController extends Controller
{
    protected $path = 'images/';
    
    public function index()
    {
            //  $keuntungans = DB::select('select * from keuntungans ORDER BY updated_at DESC');
             $keuntungans = Keuntungan::all();

            //  $icons = $keuntungans->icon;
            //  $keuntungans->icon = config('app.sftp_src').'/images/' . $icons;
            //  $enterprises = DB::select('select * from enterprises');
            $enterprises = Enterprise::all();
            //  $kliens = DB::select('select * from kliens');
            $count = Klien::count()/2;
            $kliensFirst = Klien::limit($count)->get();
            $kliensLast = Klien::limit($count)->orderBy('id','desc')->get();
            //  $liputans = DB::select('select * from liputans');
            $liputans = Liputan::all();
            $sertifikats = Sertifikat::all();


            $src = config('app.sftp_src'). $this->path;
             
        return view('pages.home.home',compact('src','keuntungans','enterprises','kliensFirst','kliensLast','liputans','sertifikats'));
    }

    public function tentangKami()
    {
        $src = config('app.sftp_src'). $this->path;
        // $pimpinans = DB::select('select * from pimpinans ORDER BY updated_at DESC');
        $pimpinans = Pimpinan::all();
        // $penghargaans = DB::select('select * from penghargaans ORDER BY updated_at DESC');
        $penghargaans = Penghargaan::all();
        
        // if($pimpinans->foto != null){
        //     $pimpinans->foto = '../images/privy/'.$pimpinans->foto; 
        // }else{
        //     $pimpinans->foto = '../images/404.png';
        // }
        
        return view('pages.tentang.tentangKami',compact('src','pimpinans','penghargaans'));
    }

    public function dokumentasiAPI()
    {
        $src = config('app.sftp_src'). $this->path;
        // $dokumentasis = DB::select('select * from dokumentasis');
        $dokumentasis = Dokumentasi::all();
        return view('pages.dokumentasi.dokumentasiAPI',compact('src','dokumentasis'));
    }

    public function verifikasiPDF()
    {
        return view('pages.verifikasi.verifikasiPDF');
    }

    public function kontakBisnis()
    {
        return view('pages.kontak.kontakBisnis');
    }

    public function faq()
    {
        $faq = Faq::all();
        // $faqstop = DB::select("select * from faqs where kategori = 'Top Asked Question' ");
        $faqstop = Faq::all()->where('kategori','Top Asked Question');
        // $faqsen = DB::select("select * from faqs where kategori = 'Enterprise' ");
        $faqsen = Faq::all()->where('kategori','Enterprise');
        // $faqsgen = DB::select("select * from faqs where kategori = 'General' ");
        $faqsgen = Faq::all()->where('kategori','General');
    
        return view('pages.faq.faq',compact('faq','faqstop','faqsen','faqsgen'));
    }

    public function faqSearch(Request $request){
        $search = $request->search;
        $faqs = Faq::where('kategori','like','%'.$search.'%')->orWhere('question','like','%'.$search.'%')
        ->orWhere('answer','like','%'.$search.'%')
        ->get();
        // dd($faqs);

        return view('pages/faq/faq',compact('faqs'));
    }

    public function faqCategory(Request $request){
        $category = $request->category;
        $faqc = Faq::where('kategori',$category)->get();

        return view('pages/faq/faq',compact('faqc'));
    }

    public function bantuan()
    {
        // $batuans = Pimpinan::all();
        return view('pages.kontak.kontakBisnis');
    }

    public function blog()
    {
        $src = config('app.sftp_src'). $this->path;
        // $dokumentasis = DB::select('select * from dokumentasis');
        $blogs = Blog::all();
        $blog_kategoris = BlogKategori::all();

        return view('pages.blog.index',compact('blogs','src','blog_kategoris'));
    }

    public function blogKategori(Request $request){
        $kategori = $request->kategori;
        $blog_kategori_nav = Blog::where('kategori',$kategori)
        ->get();
        $blog_kategoris = BlogKategori::all();
        $src = config('app.sftp_src'). $this->path;
        $blog_footer = Blog::all()->take(5);

        return view('pages/blog/index',compact('blog_kategori_nav','src','blog_kategoris','blog_footer'));
    }

    public function blogDetail($id){
        $blog_detail = Blog::where('id',$id)->get();
        $blog_kategoris = BlogKategori::all();
        $blog_footer = Blog::all()->take(5);
        $src = config('app.sftp_src'). $this->path;
        return view('pages/blog/index',compact(
            'blog_footer',
            'src',
            'blog_kategoris',
            'blog_detail'
        ));
    }



}