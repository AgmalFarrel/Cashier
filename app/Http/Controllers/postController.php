<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barcodeproduct;
use App\nfcproduct;
use App\order;
use App\product;
use App\transaction;

class postController extends Controller
{
    public function postProduct(Request $request){
        product::insert([
            'id' => $request->input('id'),
            'productId' => $request->input('productId'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'kind' => $request->input('kind'),
            'price' => $request->input('price'),
            'discPercent' => $request->input('discPercent'),
            'discPotongan' => $request->input('discPotongan'),
            'countSales' => $request->input('countSales'),
            'imageUrl' => $request->input('imageUrl'),
            'stock' => $request->input('stock'),
            'isSyncronized' => $request->input('isSyncronized')
        ]);
        return response()->json([
            'message' => 'Data Product Telah Masuk',
            'status' => 200
        ]);

    }

    public function postTransaction(Request $request){
        transaction::insert([
            'transactionId' => $request->input('transactionId'),
            'date' => $request->input('date'),
            'day' => $request->input('day'),
            'month' => $request->input('month'),
            'year' => $request->input('year'),
            'countTotalSales' => $request->input('countTotalSales'),
            'time' => $request->input('time'),
            'dateTime' => $request->input('dateTime'),
            'discPercent' => $request->input('discPercent'),
            'discPotongan' => $request->input('discPotongan'),
            'total' => $request->input('total'),
            'totalAfterDisc' => $request->input('totalAfterDisc'),
            'customerPaid' => $request->input('customerPaid'),
            'remainingPayment' => $request->input('remainingPayment'),
            'haveSyncronized' => $request->input('haveSyncronized')
        ]);
        return response()->json([
            'message' => 'Data Transaction Telah Masuk',
            'status' => 200
        ]);

    }
}
