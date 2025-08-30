<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceType extends Model
{

    protected $fillable = [
        'name',
        'description',
    ];
    public function devices()
    {
        return $this->hasMany(Device::class);
    }
}
