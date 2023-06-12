<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blogs extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $guarded = [
        'id',
    ];

    public static function boot() {
        parent::boot();

        static::creating(function($blog){
            $blog->slug = str_replace(' ','-', $blog->judul);
        });
    }

    public function comments() {
        return $this->hasMany(Comments::class);
    }
}
