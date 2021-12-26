<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMucTruyen;
use App\Models\Truyen;
use App\Models\Chapter;
class IndexController extends Controller
{

    public function home(){
        $danhmuc = DanhMucTruyen::orderBy('id','DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->get();
        return view('pages.home')->with(compact('danhmuc','truyen','slide_truyen'));
    }

    public function danhmuc($slug) {
        $danhmuc = DanhMucTruyen::orderBy('id','DESC')->get();
        $danhmuc_id = DanhMucTruyen::where('slug_danhmuc',$slug)->first();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();
        $tendanhmuc = $danhmuc_id->tendanhmuc;
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)
            ->where('danhmuc_id',$danhmuc_id->id)->get();
        return view('pages.danhmuc')->with(compact('danhmuc','truyen','tendanhmuc','slide_truyen'));
    }

    public function xemtruyen($slug){
        $danhmuc = DanhMucTruyen::orderBy('id','DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();
        $truyen =Truyen::with('danhmuctruyen')->where('slug_truyen',$slug)
            ->where('kichhoat','0')->first();
        $chapter = Chapter::with('truyen')->orderBy('id','ASC')
            ->where('truyen_id',$truyen->id)->get();
        $chapter_dau = Chapter::with('truyen')->orderBy('id','ASC')
            ->where('truyen_id',$truyen->id)->first();
        $cungdanhmuc = Truyen::with('danhmuctruyen')->where('danhmuc_id',$truyen->danhmuctruyen->id)
            ->whereNotIn('id',[$truyen->id])->get();
        return view('pages.truyen')
            ->with(compact('danhmuc','truyen','chapter','cungdanhmuc','chapter_dau','slide_truyen'));
    }

    public function xemchapter($slug){
        $danhmuc = DanhMucTruyen::orderBy('id','DESC')->get();

        $truyen = Chapter::where('slug_chapter',$slug)->first();

        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();

        $truyen_breadcrumb = Truyen::with('danhmuctruyen')->where('id',$truyen->truyen_id)->first();

        $chapter = Chapter::with('truyen')->where('slug_chapter',$slug)
            ->where('truyen_id',$truyen->truyen_id)->first();

        $all_chapter = Chapter::with('truyen')->orderBy('id','ASC')
            ->where('truyen_id',$truyen->truyen_id)->get();

        $max_id = Chapter::where('truyen_id',$truyen->truyen_id)->orderBy('id','DESC')->first();

        $min_id = Chapter::where('truyen_id',$truyen->truyen_id)->orderBy('id','ASC')->first();

        $next_chapter = Chapter::where('truyen_id',$truyen->truyen_id)->where('id','>',$chapter->id)->min('slug_chapter');

        $previous_chapter = Chapter::where('truyen_id',$truyen->truyen_id)->where('id','<',$chapter->id)->max('slug_chapter');

        return view('pages.chapter')
            ->with(compact('danhmuc','chapter','all_chapter','next_chapter','previous_chapter'
                ,'max_id','min_id','truyen_breadcrumb','slide_truyen'));
    }

    public function timkiem() {

        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();

        $danhmuc = DanhMucTruyen::orderBy('id','DESC')->get();

        $tukhoa = $_GET['tukhoa'];

        $truyen = Truyen::with('danhmuctruyen')
            ->where('tentruyen','LIKE','%'.$tukhoa.'%')
            ->orWhere('tacgia','LIKE','%'.$tukhoa.'%')->get();

        return view('pages.timkiem')->with(compact('danhmuc','slide_truyen','tukhoa','truyen'));
    }
}
