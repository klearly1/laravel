<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        // 생성자 함수의 코드를 여기에 작성하세요.
        $this->headerdata = [];
        $this->bodydata = [];
        $this->footerdata = [];
    }

    public function index()
    {

        $header = view('/include.header', $this->headerdata);
        $body = view('index', $this->bodydata);
        $footer = view('/include.footer', $this->footerdata);

        return $header . $body . $footer;

    }



    public function member($mode='')
    {

        switch($mode) {

            case '123':

                break;

            default:

                $members = DB::table('member')->get();
                $this->bodydata['members'] = $members;

                return view('test', $this->bodydata);

                break;
        }
    }





}



