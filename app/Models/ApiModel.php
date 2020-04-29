<?php


namespace App\Models;


use CodeIgniter\Model;


class ApiModel extends Model
{
    protected  $DBGroup = 'default';
    protected $table  = 'keys';
    protected $primaryKey = 'id';
    protected $returnType = 'App\Entities\Client';
    protected $useTimestamps = true;
    protected $allowedFields=['client_id','api_key','token', 'project_logo', 'project_name','website','email','phone','create_at','update_at'];
    protected $createdField = 'create_at';
    protected $updatedField = 'update_at';

    public function auth(){
        return $this;
    }
}