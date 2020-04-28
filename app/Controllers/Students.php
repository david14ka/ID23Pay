<?php


namespace App\Controllers;


use App\Models\MyStudents;
use CodeIgniter\Config\Services;
use CodeIgniter\Controller;

class Students extends Controller
{
    public function index(){
        $std = new MyStudents();
        var_dump($std->findAll());

        //echo $std->find(1)['s_name'];
    }

    public function new_user(){
        echo 'new user : ';

        $myValues = $this->validate([
            's_name'=>'required',
            's_date'=>'required',
            's_subject'=>'required',
        ]);

        if ($myValues){
            $this->register();
        }
        else{
            $myRequest = \Config\Services::request();
            echo $myRequest->getVar('s_name');
            echo $myRequest->getVar('s_date');
            echo $myRequest->getVar('s_subject');
        }
    }

    public function register()
    {
        echo 'Student registered!';
    }
}