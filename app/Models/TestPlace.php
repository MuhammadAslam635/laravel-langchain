<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPlace extends Model
{
    use HasFactory;
    protected $fillable = [

        'content',

        'type',

        'sourcetype',

        'sourcename',

        'embedding',

    ];
}
