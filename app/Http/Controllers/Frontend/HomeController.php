<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFrom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('frontend.pages.home');
    }

    public function aboutPage()
    {
        return view('frontend.pages.about');
    }
    public function servicePage()
    {
        return view('frontend.pages.service');
    }
    public function portfolioPage()
    {
        return view('frontend.pages.portfolio');
    }

    // portfolio pages
    public function singleWork()
    {
        return view('frontend.pages.single-work');
    }   

    public function contactUsPage()
    {     
        return view('frontend.pages.contact');
    }
    public function contactSubmit(Request $request)
    {
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->text,
        ];
        Mail::to('1touchbdsoftware@gmail.com')->send(new ContactFrom($data));
        return "Thank you for contact us";
    }
}
