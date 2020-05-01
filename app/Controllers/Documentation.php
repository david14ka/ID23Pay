<?php


namespace App\Controllers;


class Documentation extends BaseController
{
    public function index(){
        return view('documentation\index');
    }

    public function changelog(){
        return view('documentation\changelog');
    }
}