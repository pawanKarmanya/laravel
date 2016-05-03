<?php

namespace App\Http\Controllers;

//namespace App\Http\Controllers\Redirect;

use File;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class localController extends Controller {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    public function index() {

        return view('currency/CurrencyConvert');
    }

    public function convertor() {
        $input = Input::all();
        $from = $input['from'];
        $amount = $input['amount'];
        $to = $input['to'];
        $obj = new localController();
        return $obj->currency_convert($amount, $from, $to);
    }

    public function currency_convert($amount, $from, $to) {
        $get = file_get_contents("https://www.google.com/finance/converter?a=$amount&from=$from&to=$to");
        $get = explode("<span class=bld>", $get);
        $get = explode("</span>", $get[1]);
        $converted_amount = preg_replace("/[^0-9\.]/", null, $get[0]);
        return view('currency/CurrencyConvert', ['converted_currency' => $converted_amount]);
    }

}

?>
