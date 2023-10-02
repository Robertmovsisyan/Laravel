<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\AddElement;

class AddElements extends Controller
{
    public  function  elements(){
//         DB::table('addelements')->insert([
//            'name'=>'roberrt',
//            'gender'=>'male',
//             'description'=>'barev dzez'
//         ]);

//       AddElement::insert([
//           'name'=>'artakt',
//            'gender'=>'male',
//             'description'=>'barev dzez'
//         ]);
//        $x=AddElement::create([
//            'name'=>'davit',
//            'gender'=>'male',
//            'description'=>'barev dzez'
//        ]);
//        dd($x->id); esi vercnumea es creat araci id in
//        AddElement::Where('id',3)->update([
//            'name'=>'davit',
//            'gender'=>'male',
//            'description'=>'barev dzez'
//        ]);
        AddElement::Where('id',4)->delete([
            'name'=>'davit',
            'gender'=>'male',
            'description'=>'barev dzez'
        ]);
        $xyz=AddElement::first();
        $xyz=AddElement::Where('id',5)->orWhere('id',7)->get();
        $xyz=AddElement::orderBy('updated_at','DESC')->get();

        $xyz=AddElement::find(2); //vercnumes id in
        $xyz=AddElement::WhereIN('id',[7,5,8])->get();
        dd($xyz);
    }

}
