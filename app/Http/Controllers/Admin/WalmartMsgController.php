<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class WalmartMsgController extends Controller
{
    /**
     *  文件夹列表
     */
    public function list()
    {
        $list = DB::table('category')
        	->get();
        return view('admin.category.walmart.list', ['list' => $list]);
    }

    /**
     *  添加
     */
    public function add()
    {
        return view('admin.category.walmart.add');
    }
}
