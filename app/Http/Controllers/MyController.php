<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue;
    public $myval ="";
    protected $myvalue2;

    function index(){
        return view('myview.index');
    }

    function info(request $req){
        return view('myview.info');
    }

    function calculate(request $req){
        echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myview.calculate',$data);
    }

}
