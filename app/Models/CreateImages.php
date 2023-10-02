<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateImages extends Model
{
    use HasFactory;

    protected $table = 'images_tables';
    protected $fillable = ['name','image'];
}
