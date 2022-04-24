<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\SMSInterface;

class SMSController extends Controller
{
    public function __construct(private SMSInterface $SMSService)
    {}

    public function send(Request $request)
    {
        $this->SMSService->create($request->to, $request->message);
    }
}
