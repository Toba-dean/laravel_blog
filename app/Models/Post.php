<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Allowing mass assignment
    // protected $fillable = ['title', 'excerpt', 'body', 'slug'];
    protected $guarded = [];

    // Relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
