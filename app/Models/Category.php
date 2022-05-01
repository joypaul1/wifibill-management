<?php

namespace App\Models;

use App\Traits\AutoDeleteFile;
use App\Traits\AutoTimeStamp;
use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use AutoTimeStamp, Sluggable, AutoDeleteFile, SoftDeletes;

    protected $guarded = ['id'];

    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class);
    }

    private static function autoDeleteFileConfig()
    {
        return [
            'disk' => 'simpleupload',
            'attribute' => 'image'
        ];
    }
}
