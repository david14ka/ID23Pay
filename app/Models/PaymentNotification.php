<?php


namespace App\Models;


class PaymentNotification
{
    protected  $DBGroup = 'default';
    protected $table  = 'notifications';
    protected $primaryKey = 'c_id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields=['client_number','order_id', 'total_amount', 'currency'];
    protected $createdField = 'c_date';
    protected $updatedField = 'c_update';
}