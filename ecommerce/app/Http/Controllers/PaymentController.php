<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function Payment(Request $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['payment'] = $request->payment;
        // dd($data);

        if ($request->payment == 'stripe') {
            return view('pages.payment.stripe', compact('data'));
        } elseif ($request->payment == 'paypal') {
            # code...
        } elseif ($request->payment == 'oncash') {
            return view('pages.payment.oncash', compact('data'));
        } else {
            echo 'Cash On Delivery';
        }
    }
}
