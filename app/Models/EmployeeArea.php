<?php

namespace App\Models;

use App\Traits\AutoDeleteFile;
use App\Traits\AutoTimeStamp;
use Illuminate\Database\Eloquent\Model;

class EmployeeArea extends Model
{
    use AutoTimeStamp,  AutoDeleteFile;

    protected $guarded = ['id'];


    public function areaName()
    {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }
}
