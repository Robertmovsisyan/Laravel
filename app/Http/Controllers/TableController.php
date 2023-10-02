<?php

namespace App\Http\Controllers;

use App\Http\Requests\TableRequest;
use App\Models\TableModel;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function create(TableRequest $request)
    {
//        $table = new TableModel() ;
//        $table->name = $request->name;
//        $table->description = $request->description ;
//        $table->gender = $request->gender ;
//        $table->save() ;
        TableModel::create(
            [
                'name' => $request->name ,
                'description' => $request->description ,
                'gender' => $request->gender ,
            ]
        );
        return redirect()->back();
    }

    public function update($id)
    {
        $data = TableModel::find($id) ;
        return view('updateform' , ['data' => $data]) ;
    }

    public function store(TableRequest $request)
    {
        $id = $request->id;
        $data = TableModel::find($id) ;
        $data->name = $request->name;
        $data->description = $request->description ;
        $data->gender = $request->gender;
        $data->save();
        return redirect('/form');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        TableModel::where('id',$id)->delete();
        return redirect('/form');
    }

    public function form()
    {
        $datas = TableModel::orderByDesc('updated_at')->get() ;
        return view('form', ['datas' => $datas ]) ;
    }


}
