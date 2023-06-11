<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */

        protected $request;
        protected $headerdata;
        protected $bodydata;
        protected $footerdata;

    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->headerdata = [];
        $this->bodydata = [];
        $this->footerdata = [];

        $current_user = $this->request->session()->get('current_user');
        $this->headerdata['current_user'] = $current_user;
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

            case 'login':


                $header = view('/include.header', $this->headerdata);
                $body = view('login', $this->bodydata);
                $footer = view('/include.footer', $this->footerdata);

                return $header . $body . $footer;

            case 'join':


                $header = view('/include.header', $this->headerdata);
                $body = view('join', $this->bodydata);
                $footer = view('/include.footer', $this->footerdata);

                return $header . $body . $footer;


                break;


            default:

                $members = DB::table('member')->get();
                $this->bodydata['members'] = $members;

                return view('test', $this->bodydata);

                break;
        }
    }
    public function board($mode='')
    {

        switch($mode) {

            case 'view':

                $header = view('/include.header', $this->headerdata);
                $body = view('boardview', $this->bodydata);
                $footer = view('/include.footer', $this->footerdata);

                return $header . $body . $footer;

                break;

            default: // list


                $this->bodydata['page_name'] = '자유게시판';

                $topics = ['먹거리&맛집', '쇼핑', '자연', '관광명소', '온천&대중목욕탕', '숙소정보', '전시회', '축제'];
                $this->bodydata['topics'] = $topics;


                $header = view('/include.header', $this->headerdata);
                $body = view('board', $this->bodydata);
                $footer = view('/include.footer', $this->footerdata);

                // $posts = Post::paginate(20);
                // $categories = Category::all();

                // return view('posts.index', compact('posts', 'categories'));




                return $header . $body . $footer;

                break;
        }
    }

    public function job($mode='')
    {

        switch($mode) {

            case 'view':

                $header = view('/include.header', $this->headerdata);
                $body = view('jobview', $this->bodydata);
                $footer = view('/include.footer', $this->footerdata);

                return $header . $body . $footer;

                break;

            default: //list


                $header = view('/include.header', $this->headerdata);
                $body = view('job', $this->bodydata);
                $footer = view('/include.footer', $this->footerdata);

                // $posts = Post::paginate(20);
                // $categories = Category::all();

                // return view('posts.index', compact('posts', 'categories'));



                return $header . $body . $footer;

                break;
        }
    }





}



