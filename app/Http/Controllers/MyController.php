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

    function html101(Request $req){
         return view('template.html101');
    }
    
    function show(Request $req){
        $data = [
            'fname' => $req->input('fname'),
            'lname' => $req->input('lname'),
            'day' => $req->input('day'),
            'age' => $req->input('age'),
            'sex' => $req->input('sex'),
            'w3review' => $req->input('w3review'),
            'favoritecolo' => $req->input('favoritecolo'),
            'music' => $req->input('music'),
        ];
       return view('template.html101_view',$data);
    }


}
