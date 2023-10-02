<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Table1;
class Table2 extends Model
{
    use HasFactory;
    protected $fillable=['age','adress'];
    public function  table1s(){
        return $this->belongsToMany(
            Table1::class,'table3s','table2_id','table1_id'
        );
    }
}
