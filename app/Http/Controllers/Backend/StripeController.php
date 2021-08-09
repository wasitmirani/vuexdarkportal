<?php

namespace App\Http\Controllers\Backend;

use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    //

    public function generateLink(Request $request){
        $transaction=new Transaction();
        $array=[
            'token'=>(string) Str::uuid(),
            'package_name'=>$request->package_name,
            // 1=Stripe
            'merchant_id'=>1,
            'amount'=>$request->package_amount,
            'currency'=>$request->currency,
            'agent_id'=>$request->agent_id,
            'user_id'=>Auth::check() ? Auth::user()->id : $request->user_id,

        ];
        $token= $transaction->generateTransaction($array);
        $payment_link=route('charge.stripe.payment',['package_name'=> Str::slug($request->package_name),'token'=>$token]);

        return response()->json(['link'=>$payment_link]);
    }
}
