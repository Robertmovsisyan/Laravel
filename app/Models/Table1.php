<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Table2;

class Table1 extends Model
{
    use HasFactory;
    protected $fillable=['name','surname','description'];
    public function  table2s(){
        return $this->belongsToMany(
            Table2::class,'table3s','table1_id','table2_id'
        );
    }
}
