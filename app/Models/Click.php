<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ip',
        'browser',
        'os',
        'page',
        'button_name',
        'button_group'
    ];
}
