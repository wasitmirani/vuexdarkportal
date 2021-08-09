<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class ChargeController extends Controller
{
    //

    public function chargeStripePayment(Request $request ){
       $transaction=new Transaction();
       $transaction= $transaction->getTransaction($request->token);
       return view('payments.StripePayment',['transaction'=>$transaction]);
    }
}
