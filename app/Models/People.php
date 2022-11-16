<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class People extends Model
{
    use HasFactory;
    protected $fillable=[
        'first_name',
        'second_name',
        'address',
        'profession',
        'password',
        'mobile',
        'station_id'
    ];
    public function Station()
    {
        return $this->belongsTo(Station::class);
    }
}
