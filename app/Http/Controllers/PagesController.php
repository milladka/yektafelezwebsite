<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function product($id){
        return view('pages.product', compact('id'));
    }
    public function aboutus(){
        return view('pages.aboutus');
    }
    public function contactus(){
        return view('pages.contactus');
    }
}
