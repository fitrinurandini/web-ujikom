<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // ✅ Izinkan field 'name' untuk mass assignment
    protected $fillable = ['name'];


    public function articles()
{
    return $this->belongsToMany(Article::class);
}

}
