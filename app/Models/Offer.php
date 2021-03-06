<?php

namespace App\Models;
use App\Traits\AutoTimeStamp;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use AutoTimeStamp;
    protected $guarded = ['id'];

    public function serials()
    {
        return $this->hasMany(OfferSerial::class);
    }
}
