<?php

namespace App\Modules\Demo\Models;

use App\Packages\DBAL\BaseModel;


class Members extends BaseModel
{
    protected $table = 'members';


    public function __construct()
    {
        parent::__construct();
    }


}