<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddElement extends Model
{
    protected $table='addelements';
    protected $fillable=['name','gender','description'];
}
