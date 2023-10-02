<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
class JoinController extends Controller
{
    public function join()
    {
       $tab= Table::join('users','tab.id','=','users.id')->get();
        $tab=Table::leftJoin('users','tab.id','=','users.id')
            ->select("users.*","tab.*",'tab.id As id1')->get();
        dd($tab);
    }
}
