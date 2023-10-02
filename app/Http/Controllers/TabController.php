<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table1;
use App\Models\Table2;
use App\Models\Table3;

class TabController extends Controller
{
    public function table1(){

        return view('table1');
    }
    public function tab1(Request $request){
        Table1::create([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'description'=>$request->description,

            ]);
        return redirect()->back();
    }
    public function table2(){
        $table1=Table1::get();
        return view('table2',['table1'=>$table1]);
    }

    public function tab2(Request $request){
        $x=Table2::create([
            'age'=>$request->age,
             'adress'=>$request->adress,

        ]);
        Table3::create([
           'table1_id'=>$request->table1_id,
           'table2_id'=>$x->id,
        ]);
        return redirect()->back();


    }
    public function select(){
        $t1=Table1::find(1);
        dd($t1->table2s);
    }
}
