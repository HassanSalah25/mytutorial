<?php

namespace App\Http\Controllers;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    //
    function index(){
      $index = Lesson::all();
      return $index;
    }
}
