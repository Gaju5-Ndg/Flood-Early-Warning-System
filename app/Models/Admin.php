<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable=[
        'first_name',
        'second_name',
        'gender',
        'address',
        'level',
        
        'profession',
        'password',
        'role',
        'mobile'

    ];
    public function Station()
    {
return $this->hasMany(Station::class);
    }
}
