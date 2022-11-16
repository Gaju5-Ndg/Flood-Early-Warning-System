<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temperature_hummidity extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'temperature',
        'hummidity',
        'description',

    ];
    public function Station()
    {
        return $this->belongsTo(Station::class);
    }
}
