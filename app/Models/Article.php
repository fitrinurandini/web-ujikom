<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // 🛠 Tambahkan ini:
    protected $fillable = [
        'title',
        'content',
        'meta_keywords',
        'meta_description',
        'title_image',
        'status',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
