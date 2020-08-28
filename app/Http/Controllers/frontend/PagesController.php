<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Slider;
use App\Model\Portfolio;
use App\Model\Fiver;
use App\Model\Freelance;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::all();
        return view('frontend.pages.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('frontend.pages.about');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ui()
    {
       return view('frontend.pages.ui');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ccna()
    {
        return view('frontend.pages.ccna');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ccnp()
    {
        return view('frontend.pages.ccnp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function design()
    {
        return view('frontend.pages.design');
    }

    // digital marketing
    public function digital()
    {
        return view('frontend.pages.digital');
    }
    // Android app
    public function app()
    {
        return view('frontend.pages.app');
    }

    // Python 
    public function python()
    {
        return view('frontend.pages.python');
    }
    // seo  
    public function graphics()
    {
        return view('frontend.pages.graphics');
    }

     // portfolio  
    public function portfolio()
    {
        $portfolios=Portfolio::orderBy('id','desc')->paginate(9);
        return view('frontend.pages.portfolio',compact('portfolios'));
    } // clients  
    public function client()
    {
        return view('frontend.pages.client');
    }
    // admission
    public function admission()
    {
        return view('frontend.pages.admission');
    }
    // process
    public function process()
    {
        return view('frontend.pages.process');
    }
    // recent
    public function recent()
    {
        $freelaces=Freelance::orderBy('id','desc')->paginate(6);
        return view('frontend.pages.recent',compact('freelaces'));
    }// process
    public function story()
    {
         $fivers=Fiver::orderBy('id','desc')->paginate(4);
        return view('frontend.pages.story',compact('fivers'));
    }
    // welcome
    public function welcome()
    {
        return view('frontend.pages.welcome');
    }

}
