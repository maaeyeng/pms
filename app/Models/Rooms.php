<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel;

class Rooms extends Model
{
    use HasFactory;

protected $fillable = [
    'hotel_id',
    'type',
    'description',
    'price',
    'image'
];

public function hotel() {
    return $this->belongsTo(Hotel::class);
}

}
