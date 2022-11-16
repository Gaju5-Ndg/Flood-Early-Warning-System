<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soil_moisture extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'moisture_level',
        'description',

    ];
    public function Station()
    {
        return $this->belongsTo(Station::class);
    }
}
