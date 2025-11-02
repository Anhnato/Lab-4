<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderCompleteController extends Controller
{
     /**
     * Handle the incoming request.
     */

    public function __invoke(Request $request, Order $order){
        if(! $request->hasValidSignature()){
            abort(401);
        }

        return view("orders.complete", compact("order"));
    }
}
