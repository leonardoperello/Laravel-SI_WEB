<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class rosca extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'rosca';
}
