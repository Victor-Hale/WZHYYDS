<?php

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
    logInfo('网站部署成功');
    return json_success('网站部署成功');
});

Route::get('invoice', function () {

    $res = view('invoice2');
    $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);
        
    
    $mpdf->showImageErrors = true;

    $mpdf->WriteHTML($res);

    $mpdf->Output('实验报告.pdf', "I");

    exit;
});