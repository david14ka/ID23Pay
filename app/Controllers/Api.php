<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ApiModel;

class Api extends BaseController
{
    public $clientId;
    public $clientApiKey;
    public $response;

    public function index(){

        if ($this->validation())
        {
            //echo $this->clientApiKey;
            $this->auth();
        }

    }

    public function auth(){

        $apiModel = new ApiModel();

        $result = $apiModel
            ->where('client_api_key','key03')
            ->where('client_id','id003')
            ->first();

        var_dump($result);
    }


    public function validation()
    {
        $myValues = $this->validate([
            'client_id'=>'required',
            'client_api_key'=>'required'
        ]);

        if (!$myValues){

            $this->response->status = 'NO';
            $this->response->response = 'NO';
            $this->response->message = 'You are not authorized access to this page';
            $this->response->description = 'kindly read our doc at https://id23pay.com/documentation';

            echo json_encode($this->response);

        }else{
            $apiRequest = \Config\Services::request();
            $this->clientId = $apiRequest->getVar('client_id');
            $this->clientApiKey = $apiRequest->getVar('client_api_key');
        }

        return true;

    }

    public function processPayment(){


    }

}