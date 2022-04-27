<?php

namespace App\Models;

use App\Traits\AutoTimeStamp;
use Illuminate\Database\Eloquent\Model;

class OfferSerial extends Model
{
    use AutoTimeStamp;
    protected $guarded = ['id'];

}
