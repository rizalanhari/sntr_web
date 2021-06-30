<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pondok extends Model
{
    protected $table = 'pondok';
    protected $primaryKey = 'idpondok';
    public $timestamps = false;
    use HasFactory;
}
