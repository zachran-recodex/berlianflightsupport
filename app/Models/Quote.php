<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'message', 'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
