<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'description','slug'];

    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
