<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function process(Request $request){
        dd($request->all());
    }
    public function processBkp(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|in:easypaisa,jazzcash,card',
            'total_price' => 'required|numeric|min:0',
        ]);

        $paymentMethod = $request->input('payment_method');
        $totalPrice = $request->input('total_price');

        if ($paymentMethod === 'easypaisa') {
            return $this->handleEasyPaisa($totalPrice);
        } elseif ($paymentMethod === 'jazzcash') {
            return $this->handleJazzCash($totalPrice);
        } else {
            return $this->handleCardPayment($totalPrice);
        }
    }

    private function handleEasyPaisa($amount)
    {
        // EasyPaisa Sandbox Integration (Demo)
        // Replace with actual sandbox API logic
        $apiUrl = 'https://sandbox.easypaisa.com.pk/api/payment'; // Example sandbox URL
        $merchantId = env('EASYPAISA_MERCHANT_ID'); // Add to .env
        $apiKey = env('EASYPAISA_API_KEY'); // Add to .env

        // Simulate API call (no real transaction)
        $response = [
            'status' => 'success',
            'message' => 'EasyPaisa payment initiated in sandbox mode',
            'transaction_id' => 'TEST-' . uniqid(),
            'amount' => $amount,
        ];

        return redirect()->back()->with('success', $response['message'] . ' (Transaction ID: ' . $response['transaction_id'] . ')');
    }

    private function handleJazzCash($amount)
    {
        // JazzCash Sandbox Integration (Demo)
        // Replace with actual sandbox API logic
        $apiUrl = 'https://sandbox.jazzcash.com.pk/ApplicationAPI/API/Payment/DoTransaction'; // Example sandbox URL
        $merchantId = env('JAZZCASH_MERCHANT_ID'); // Add to .env
        $password = env('JAZZCASH_PASSWORD'); // Add to .env
        $integritySalt = env('JAZZCASH_INTEGRITY_SALT'); // Add to .env

        // Simulate API call (no real transaction)
        $response = [
            'status' => 'success',
            'message' => 'JazzCash payment initiated in sandbox mode',
            'transaction_id' => 'TEST-' . uniqid(),
            'amount' => $amount,
        ];

        return redirect()->back()->with('success', $response['message'] . ' (Transaction ID: ' . $response['transaction_id'] . ')');
    }

    private function handleCardPayment($amount)
    {
        // Card Payment (Demo)
        // You can integrate a third-party like Stripe for card payments in sandbox mode
        $response = [
            'status' => 'success',
            'message' => 'Card payment initiated in sandbox mode',
            'transaction_id' => 'TEST-' . uniqid(),
            'amount' => $amount,
        ];

        return redirect()->back()->with('success', $response['message'] . ' (Transaction ID: ' . $response['transaction_id'] . ')');
    }
}
