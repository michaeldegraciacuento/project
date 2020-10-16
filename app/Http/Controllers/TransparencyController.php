<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use Session;
session_start();


class TransparencyController extends Controller
{
    public function TransparencySeal()
    {
        return view('Transparency.transparencyseal');
    }
    public function citizencharter()
    {
        return view('Transparency.citizencharter');
    }
    public function philgepsposting()
    {
        return view('Transparency.philgepsposting');
    }
    public function sstories()
    {
        return view('Transparency.sstories');
    }
    public function alumni()
    {
        return view('Transparency.alumni');
    }
    public function gallery()
    {
        return view('Transparency.gallery');
    }
}
