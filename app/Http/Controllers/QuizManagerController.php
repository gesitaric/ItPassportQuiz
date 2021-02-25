<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizManagerController extends Controller
{
    public function showStartScreen() {
        return response()->view('startscreen');
    }

    public function runQuizScreen() {
        return response()->view('quizscreen');
    }
}
