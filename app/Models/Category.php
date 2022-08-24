<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'user_id',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
