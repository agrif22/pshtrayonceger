<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ About, Banner, General, Partner, Gallery, GalleryCategory, Team, Kegiatan };

class FrontController extends Controller
{
    public function home()
    {
        $about = About::find(1);
        $banner = Banner::all();
        $general = General::find(1);
        // $link = Link::orderBy('name','asc')->get();
        // $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $partner = Partner::orderBy('id','asc')->limit(8)->get();
        $gallerycategory = GalleryCategory::all();
        $gallery = Gallery::all();
        $kegiatan = Kegiatan::orderBy('title','asc')->get();
        return view ('frontend.home',compact('about','banner','general','partner','gallerycategory','gallery','kegiatan'));
    }

    public function about()
    {
        $about = About::find(1);
        // $faq = Faq::all();
        $general = General::find(1);
        // $link = Link::orderBy('name','asc')->get();
        // $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $partner = Partner::orderBy('name','asc')->get();
        $team = Team::orderBy('id','asc')->get();
        
        return view ('frontend.about',compact('about','general','partner','team'));
    }

    public function gallery()
    {
        $general = General::find(1);
        // $link = Link::orderBy('name','asc')->get();
        // $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $gallerycategory = GalleryCategory::all();
        $gallery = Gallery::all();
        
        return view ('frontend.gallery',compact('general','gallerycategory','gallery'));
    }

    public function galleryshow($slug)
    {
        $general = General::find(1);
        // $link = Link::orderBy('name','asc')->get();
        // $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $gallery = Gallery::where('slug', $slug)->firstOrFail();
        return view ('frontend.galleryshow',compact('general','gallery'));
    }

    public function kegiatan()
    {
        $general = General::find(1);
        // $link = Link::orderBy('name','asc')->get();
        // $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $kegiatan = Kegiatan::orderBy('title','asc')->get();
        // return $kegiatan;
        return view ('frontend.kegiatan', compact('general' ,'kegiatan'));
    }

    public function kegiatanshow($slug)
    {
        $general = General::find(1);
        // $link = Link::orderBy('name','asc')->get();
        // $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $kegiatan = Kegiatan::where('slug', $slug)->firstOrFail();
        return $kegiatan;
        return view ('frontend.kegiatanshow', compact('general','kegiatan'));
    }
}

