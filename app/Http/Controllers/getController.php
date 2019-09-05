<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barcodeproduct;
use App\nfcproduct;
use App\order;
use App\product;
use App\transaction;

class getController extends Controller
{
    public function getProduct(){
        $data = product::get();
        
        return response()->json([
            'data' => $data
        ]);
    }

    public function getTransaction(){
        $dataTransaction = transaction::get();

        return response()->json([
            'data' => $dataTransaction
        ]);
    }
}
