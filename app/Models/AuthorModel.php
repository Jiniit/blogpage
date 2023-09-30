<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthorModel extends Model
{
    protected $table = 'author';
    protected $primaryKey = 'author_id';

    protected $allowedFields =  [
        'author_id',
    	'author_name',	
        'author_email'
    ];
}
