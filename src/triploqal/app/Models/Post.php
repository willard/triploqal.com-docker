<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    /**
     * Boot
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        self::creating(
            function ($model) {
                $model->uuid = (string) Str::uuid();
            }
        );
    }
}
