<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function greet($greet)
    {
        switch ($greet) {
            case 'morning':
                $greetinig = '朝';
                $msg = 'おはようございます';
                break;
            case 'afternoon':
                $greetinig = '昼';
                $msg = 'こんにちは';
                break;
            case 'evening':
                $greetinig = '夕方';
                $msg = 'こんばんは';
                break;
            case 'night':
                $greetinig = '夜';
                $msg = 'おやすみ';
                break;
            case 'random':
                $greetinig = 'ランダム';
                $ary = ['おはよう','こんにちは','おやすみ','こんばんは'];
                $msg = $ary[array_rand($ary)];
                break;
            
            default:
                $greetinig = '無言';
                $msg = 'あいさつをしましょう';
                break;
        }

        return view('greet', ['greeting' => $greetinig, 'msg' => $msg]);
    }

    public function freeword($msg)
    {
        return view('freeword', ['msg' => $msg]);
    }
}
