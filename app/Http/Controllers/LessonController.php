<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function lesson1()
    {
        return view('lesson1',
            [
                'lesson1'
            ]
        );
    }

    public function lesson2()
    {
        return view('lesson2',
            [

            ]
        );
    }
}
