<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    public function room()
    {
        return $this->hasMany(Rent::class);
    }

    public function getRouteKeyName()
    {
        return 'code';
    }
}
