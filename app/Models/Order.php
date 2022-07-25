<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Order extends Model
{
    use HasFactory;
    protected $fillabel =['user_id','product_id'];

    public function Order(){
        return $this->hasMany(User::class,'user_id', 'id');
    }
}
