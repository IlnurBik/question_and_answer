<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke()
    {
        $questions = Question::all();
        return view('main', compact('questions'));
    }
}
