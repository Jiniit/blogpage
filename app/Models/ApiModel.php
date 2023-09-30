<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiModel extends Model
{
    protected $table = 'api_blogs';
    protected $primaryKey = 'id';
    protected $allowedFields =  [
        'userId,',
        'title',
        'body'
    ];
}
