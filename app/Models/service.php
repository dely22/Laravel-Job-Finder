<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'is_active',
        'updated_at',
        'created_at',
    ];
    protected $hidden = [
        'updated_at',
        'created_at',
    ];

    public function getImageAttribute($value)
    {
        return url("upload/") . "/" . $value;
    }
}
