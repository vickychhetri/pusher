<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PushController extends Controller
{
   public  function index(){
       event(new MyEvent('hello world'));
   }
}
