<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcriptions extends Model
{
    use HasFactory;

    protected $fillable = [
        'subscriber_id',
        'website_id',
    ];
}
