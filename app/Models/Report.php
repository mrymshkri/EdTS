<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $connection = 'mysql';
    protected $table = 'report';

    protected $fillable = [
        'id',
        'id_post',
        'issue',
        'reported_byId',
        'action',
        'extension',
        'created_at'
    ];


}
