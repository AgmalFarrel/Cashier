<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barcodeproduct;
use App\nfcproduct;
use App\order;
use App\product;
use App\transaction;

class updateController extends Controller
{
    public function updateProduct(){
        $data = product::update();
        
        return response()->json([
            'data' => $data
        ]);
    }
}
