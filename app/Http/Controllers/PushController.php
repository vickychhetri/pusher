<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\PushEvent;
use App\Models\Product;
class PushController extends Controller
{
   public  function index(Request $request){
       $message=isset($request->message)?$request->message:"Empty Message Pass";
       event(new PushEvent($message));
       return redirect('/sender');
   }
    public  function product($id){
        $pr=Product::find($id);
        return response()->json([
            'data'=>$pr
        ],200);
    }


    public  function update($id,Request $request){
        $price=isset($request->price)?$request->price:250;
        $pr=Product::find($id);
        $pr->price=$price;
        $pr_save=$pr->save();
        if($pr_save)
        {
            event(new PushEvent('price_updated'));
        }

        return redirect('/sender');
    }


}
