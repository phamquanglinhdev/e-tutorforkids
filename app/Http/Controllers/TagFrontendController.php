<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tag;

class TagFrontendController extends Controller
{
    public function index($slug){
        $tag = Tags::where("slug",'=',$slug)->first();
        return view('frontend.tag',['tag'=>$tag]);
    }
}
