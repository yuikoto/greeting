<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class GreetingControllers extends Controller
{
    public function comments($greet)
    {
        switch ($greet) {
            case 'morning':
                $answer = "朝のあいさつ";
                $answer2 = "おはようございます";
                break;
            case 'afternoon':
                $answer = "昼のあいさつ";
                $answer2 = "こんにちは";
                break;
            case 'evening':
                $answer = "夕方のあいさつ";
                $answer2 = "こんばんは";
                break;
            case 'night':
                $answer = "夜のあいさつ";
                $answer2 = "おやすみなさい";
                break;
        }
        return view('message.greeting', ['answer' => $answer, 'answer2' => $answer2]);
    }


    public function comments1($greet)
    {
        return view('message.freeword', ['answer2' => $greet]);
    }


    public function comments2()
    {
        $greet = array('おはよう', 'こんにちは', 'こんばんは', 'おやすみ');
        $rand_array = array_rand($greet);
        $answer2 = $greet[$rand_array];
        return view('message.random', ['answer2' => $answer2]);
    }
}
