<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {
        $data = [
            'tbl_user'      => DB::table('tbl_user')->first()
        ];
        return view('user.index', $data);
    }
    public function biodata()
    {
        $data = [
            'tbl_user'      => DB::table('tbl_user')->where('id_user', 1)->first()
        ];
        return view('user.biodata', $data);
    }
}
