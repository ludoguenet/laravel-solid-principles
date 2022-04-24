<?php

use Carbon\Carbon;
use App\Services\Order\OrderReport;
use App\Services\Format\FormatPDFService;
use Illuminate\Support\Facades\Route;

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
    $orderReport = (new OrderReport())->reportBetween(Carbon::now()->subMonths(6), now());

    return (new FormatPDFService())->format($orderReport);
});
