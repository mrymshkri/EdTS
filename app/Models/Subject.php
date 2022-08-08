<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $connection = 'edts';
    protected $table = 'post';

    protected $fillable = [
        'id',
        'subject_name'
    ];


}
