<?php

namespace App\Http\Controllers;

use Stripe;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\myOrder;
use App\Models\myCart;
use Session;
use Notification;

class PaymentController extends Controller
{
    

     public function paymentPost(Request $request)
    {
           
    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->sub*100,
                "currency" => "MYR",
                "source" => $request->stripeToken,
                "description" => "This payment is testing purpose of southern online",
        ]);

        $newOrder=myorder::Create([
            'paymentStatus'=>'Done',
            'userID'=>Auth::id(),
            'amount'=>$request->sub,
        ]);

        $orderID=DB::table('my_orders')->where('userID','=',Auth::id())->orderBy
        ('created_at','desc')->first();

        $items=$request->input('cid');
        foreach($items as $item=>$value){
            $carts=myCart::find($value);
            $carts->orderID=$orderID->id;
            $carts->save();
        }

        $email="B210241C@sc.edu.my";
        Notification::route('mail',$email)->notify(new \App\Notifications\orderPaid($email)); 
           
        return back();
    }
}