<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rooms;
class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'room_id',
        'num_of_guests',
        'arrival',
        'departure'
    ];

    public function room() {
        return $this->belongsTo(Rooms::class);
    }
}
