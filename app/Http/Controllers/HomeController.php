<?php

namespace Contentli\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the startpage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Show the startpage.
     *
     * @return \Illuminate\Http\Response
     */
    public function features()
    {
        return view('pages.features');
    }

    /**
     * Show the startpage.
     *
     * @return \Illuminate\Http\Response
     */
    public function pricing()
    {
        return view('pages.pricing');
    }

    /**
     * Show the startpage.
     *
     * @return \Illuminate\Http\Response
     */
    public function documentation()
    {
        return view('pages.documentation');
    }
}
