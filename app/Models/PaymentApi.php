<?php


namespace App\Models;


class PaymentApi
{
    protected  $DBGroup = 'default';
    protected $table  = 'checkout_payment';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields=['client_id','api_key', 'environment','order_id','order_description', 'total_amount', 'currency','card_name','card_number','expire_date','cvv_code','card_type','create_at','update_at'];
    protected $createdField = 'create_at';
    protected $updatedField = 'update_at';
}