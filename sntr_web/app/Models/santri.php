<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class santri extends Model
{
    use HasFactory;
    protected $table = 'santri';
    protected $primaryKey = 'idsantri';
    public $timestamps = false;
    use HasFactory;
}
