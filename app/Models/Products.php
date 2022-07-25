<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','productname','producttype','detail','title','description','img', 'category_id',
    ];


 
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
