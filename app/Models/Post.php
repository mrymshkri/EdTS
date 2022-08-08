<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $connection = 'mysql';
    protected $table = 'post';

    protected $fillable = [
        'id',
        'id_user',
        'subj',
        'description',
        'file_upload',
        'extension',
        'created_at',
        '_token',
        '_method'
    ];


}
