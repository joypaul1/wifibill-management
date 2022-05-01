<?php

namespace App;

use App\Models\Area;
use App\Models\EmployeeArea;
use App\Traits\AutoTimeStamp;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Employee extends Authenticatable
{
    use Notifiable, AutoTimeStamp, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password','offer_id', 'status', 'mobile',  'address'
    // ];
    protected $guarded=['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the
     *
     * @param  string  $value
     * @return string
     */
    public function getDobAttribute($value)
    {
        return  date("d F, Y", strtotime($value));
    }

    /**
     * Set the
     *
     * @param  string  $value
     * @return void
     */
    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = Carbon::createFromFormat('d F, Y', $value)->format('Y-m-d');
    }

    public function areas()
    {
        return $this->hasMany(EmployeeArea::class, 'employee_id', 'id');
    }


}
