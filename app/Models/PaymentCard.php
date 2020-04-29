<?php


namespace App\Models;


class PaymentCard
{
    protected  $DBGroup = 'default';
    protected $table  = 'card_payment';
    protected $primaryKey = 'c_id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields=['card_name','card_number','expire_date','cvv_code','card_type','c_date','c_update'];
    protected $createdField = 'c_date';
    protected $updatedField = 'c_update';
}