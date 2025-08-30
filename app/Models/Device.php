<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{

    protected $fillable = [
        'name',
        'description',
        'device_type_id',
    ];

    public function deviceType()
    {
        return $this->belongsTo(DeviceType::class);
    }

    public function variants()
    {
        return $this->hasMany(DeviceVariant::class);
    }
}
