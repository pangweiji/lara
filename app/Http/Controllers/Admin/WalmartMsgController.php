<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class WalmartMsgController extends Controller
{
	public function list()
	{
		extract($this->info());

		$msg_list = DB::table('walmart_message')
			->where('is_delete', 0)
			->orderBy('id', 'desc')
			->get();

		return view('admin.message.walmart.list', ['option' => $option, 'func' => $func, 'msg_list' => $msg_list]);
	}

	private function info()
    {
        return [
        	'platformId' => 5,
            'platform' => 'walmart',
            'option' => 2,
            'func' => 5
        ];
    }

}
