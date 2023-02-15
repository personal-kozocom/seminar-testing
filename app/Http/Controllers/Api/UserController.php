<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\PaymentService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function index()
    {
        return response()->json([
            [
                'id' => '1',
                'name' => 'Nguyen Huu Tuan',
                'email' => 'tuannh@kozo-japan.com',
            ]
        ]);
    }

    public function show($id)
    {
        $creditNumber = $this->paymentService->getCreditCard();
        return response()->json([
            'id' => '1',
            'name' => 'Nguyen Huu Tuan',
            'email' => 'tuannh@kozo-japan.com',
            'credit_number' => $creditNumber
        ]);
    }
}
