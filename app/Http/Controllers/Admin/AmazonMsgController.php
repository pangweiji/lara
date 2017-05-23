<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AmazonMsgController extends Controller
{
    //
    public function list()
    {
    	//搜索条件

    	
    	return view('admin.inbox.amazon.list');
    }
}
