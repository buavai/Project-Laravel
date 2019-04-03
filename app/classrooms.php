<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classrooms extends Model
{
    protected $table = 'classrooms';
    protected $fillable = [
        'id',
        'name',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
