<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class words extends Model
{
    protected $table = 'words';
    protected $primaryKey = 'word_id';
    public $timestamps = false;
}
