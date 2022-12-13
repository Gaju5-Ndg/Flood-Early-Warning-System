<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $fillable=[
    'name',
    'district',
    'admin_id'
    ];
    protected $hide=[
    'id',
    ''
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Soil_moisture()
    {
        return $this->hasOne(Station::class);
    }
    public function Temperature_hummidity()
    {
        return $this->hasOne(Station::class);
    }
    public function Water_level()
    {
        return $this->hasOne(Station::class);
    }
}
