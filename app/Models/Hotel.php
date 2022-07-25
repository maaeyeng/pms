<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rooms;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'description',
        'image'
    ];

    public function rooms() {
        return $this->hasMany(Rooms::class);
    }
}
