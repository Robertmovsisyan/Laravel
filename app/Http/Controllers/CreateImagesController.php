<?php

namespace App\Http\Controllers;

use App\Models\CreateImages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CreateImagesController extends Controller
{
    public function create_images()
    {
        $datas = CreateImages::orderByDesc('updated_at')->get() ;
        return view('create_images', ['datas' => $datas ]) ;
    }

    public function create_img(Request $request)
    {
        $url = '' ;
        if($request -> hasFile('image'))
        {
            if($request->file('image')->isValid())
            {
                $extension = $request -> image -> extension() ;
                if(!Storage::exists('public/image'))
                {
                    Storage::makeDirectory('public/image' , 0775 , true) ;
                    //Storage::setVisibility('public/image' , 'public') ;
                }
                $date = Carbon::now() -> format('YM') ;
                if(!Storage::exists('public/image'.$date))
                {
                    Storage::makeDirectory('public/image'.$date , 0775 , true) ;
                }
                $name = mt_rand(100000000,999999999999).'.'.$extension ;
                $xyz = $request -> image -> storeAs('public/image'.$date , $name) ;
                $url = Storage::url('image'.$date.'/'.$name);
            }
        }

        CreateImages::create(
            [
                'name' => $request->name ,
                'image' => $url ,
            ]
        );
        return redirect()->back();
    }

    public function update_img(Request $request)
    {
        $id = $request->id;
        $data = CreateImages::find($id) ;
        $url = $data->image ;
        if($request -> hasFile('image'))
        {
            if($request->file('image')->isValid())
            {
                $extension = $request -> image -> extension() ;
                if(!Storage::exists('public/image'))
                {
                    Storage::makeDirectory('public/image' , 0775 , true) ;
                    //Storage::setVisibility('public/image' , 'public') ;
                }
                $date = Carbon::now() -> format('YM') ;
                if(!Storage::exists('public/image'.$date))
                {
                    Storage::makeDirectory('public/image'.$date , 0775 , true) ;
                }
                $name = mt_rand(100000000,999999999999).'.'.$extension ;
                $xyz = $request -> image -> storeAs('public/image'.$date , $name) ;
                $url = Storage::url('image'.$date.'/'.$name);
            }
        }

        $data->image = $url ;
        $data->name = $request->name;
        $data->save();
        return redirect('/create_images');
    }

    public function store_img($id)
    {
        $data = CreateImages::find($id) ;
        return view('create_img' , ['data' => $data]) ;
    }

}
