<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function generateTransaction($array){
        if(!empty($array)){
            $transaction=Transaction::create($array);

            return $transaction->token;
        }
    }
    public function getTransaction($token){
      $transaction= Transaction::where('token',$token)->first();
     return $transaction;
    }
}
