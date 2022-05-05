<?php

use App\Http\Controllers\SMSController;
use App\Services\Format\CSVFormat;
use App\Services\Format\PDFFormat;
use App\Services\Mail\MailService;
use App\Services\Mailer\MyMailerSystem;
use App\Services\Order\OrderReport;
use App\Services\Payment\PaymentService;
use App\Services\PaymentMethod\Paypal;
use App\Services\PaymentMethod\Stripe;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Mailer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $orders = (new OrderReport())->orderBetween(now()->subMonths(6), now());

    return (new PDFFormat())->format($orders);
});

Route::get('/pay', function () {
    return (new PaymentService())->pay(new Stripe());
});

Route::get('/send/{to}/{message}', [SMSController::class, 'send']);

Route::get('/send/email', function () {
    // $mailService = new MailService(new Mailer());
    $mailService = new MailService(new MyMailerSystem());
    $mailService->sendEmail();
});
