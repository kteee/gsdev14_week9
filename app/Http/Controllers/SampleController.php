<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;

class SampleController extends Controller
{
    public function SampleNotification(){
        $name='ラベル太郎';
        $text='これからもよろしくおねがいします';
        $to='keitahighbridge@gmail.com';
        Mail::to($to)->send(new SampleNotification($name,$text));
    }
}
