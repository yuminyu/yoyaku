<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivewireTestController extends Controller
{
    public static function index(){
        return view('livewire-test.index');
    }
}
