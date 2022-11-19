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

    protected $with = ['category', 'author'];

    // Relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        // Second argument is the value for the foreign key
        return $this->belongsTo(User::class, 'user_id');
    }
}
