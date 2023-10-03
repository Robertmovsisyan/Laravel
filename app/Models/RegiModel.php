<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegiModel extends Model
{
    use HasFactory;
    protected $table='user1s';
    protected $fillable=[
        'name',
        'email',
        'password',
    ];

}
