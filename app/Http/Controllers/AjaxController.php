<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\member;

class AjaxController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        // 생성자 함수의 코드를 여기에 작성하세요.

    }

    public function joinproc(Request $request)
    {

        $mem_name = $request->input('mem_name');
        $mem_email = $request->input('mem_email');
        $mem_pass = $request->input('mem_pass');

        $validator = Validator::make(
            [
                'mem_name' => $mem_name,
                'mem_email' => $mem_email,
                'mem_pass' => $mem_pass
            ],
            [
                'mem_name' => 'required',
                'mem_email' => 'required',
                'mem_pass' => 'required'
            ]
        );

        $member = member::create([
            'mem_name' => $request->mem_name,
            'mem_email' => $request->mem_email,
            'mem_pass' => Hash::make($request->mem_pass),
        ]);

        if (!$validator->fails()) {
            $res = [
                'code' => 'success',
                'msg' => '회원 가입에 성공하였습니다.',
            ];
        } else {
            $res = [
                'code' => 'fail',
                'msg' => '회원 가입에 실패하였습니다.'
            ];
        }
        
        return response()->json($res);

    }

    public function loginproc(Request $request)
    {
        DB::enableQueryLog();

        $validator = Validator::make($request->all(), [
            'mem_email' => 'required|email',
            'mem_pass' => 'required',
        ]);

        if ($validator->fails()) {
            $res = [
                'code' => 'fail',
                'msg' => '로그인에 실패하였습니다.',
            ];
        } else {
            $credentials = $request->only('mem_email', 'mem_pass');
            $member = DB::table('member')->where('mem_email', $credentials['mem_email'])->first();
            if ($member && Hash::check($credentials['mem_pass'], $member->mem_pass)) {
                $current_user = Member::where('mem_email', $credentials['mem_email'])->first();
                Auth::login($current_user);
                if (Auth::user()) {
                    $request->session()->put('current_user', $current_user);
                    $res = [
                        'code' => 'success',
                        'msg' => '로그인에 성공하였습니다.',
                    ];
                } else {
                    $res = [
                        'code' => 'fail',
                        'msg' => '로그인에 실패하였습니다.',
                    ];
                }
            } else {
                $res = [
                    'code' => 'fail',
                    'msg' => '로그인에 실패하였습니다.',
                ];
            }
        }

        $queries = DB::getQueryLog();
        $lastQuery = end($queries);
        $lastQueryStr = $lastQuery['query'];

        return response()->json(['res' => $res, 'lastQuery' => $lastQueryStr]);
    }    


     public function logoutproc(Request $request) 
    { 
        Auth::logout();
        $request->session()->forget('current_user');

        return redirect()->to("/");
    } 





}