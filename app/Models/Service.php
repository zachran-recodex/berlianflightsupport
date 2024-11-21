<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'status',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($service) {
            if (!$service->slug) {
                $service->slug = Str::slug($service->title);
            }
        });
    }
}
