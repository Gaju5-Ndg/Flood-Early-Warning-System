<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Water_level extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'waterlevel',
        'description',

    ];
    public function Station()
    {
        return $this->belongsTo(Station::class);
    }
}
