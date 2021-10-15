<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Orden_Produccion extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'ordenProduccion';
}
