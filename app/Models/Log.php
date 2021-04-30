<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $table = "log";

    protected $fillable = [
        'ip',
        'browser',
        'device',
        'os',
        'mac',
        'mac2',
        'link',
        'keterangan',
    ];
}
