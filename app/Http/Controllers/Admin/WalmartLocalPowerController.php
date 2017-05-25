<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class WalmartLocalPowerController extends Controller
{
    public function list()
    {
        return view('admin.localpower.walmart.list');
    }

    public function accountManagement()
    {
        return view('admin.localpower.walmart.acManagement');
    }

    public function addAccount()
    {
        extract($this->info());

        $insertDate = array(
            'platform' => $platform,
            'account' => 'pang379415825',
            'mailbox' => 'pang379415825@gmail.com',
            'createtime' => time()
        );

        $result = DB::table('account_mailbox')
            ->insert($insertDate);
        if (!$result) {
            return response()->json([
                'code' => '1002',
                'msg' => '添加失败'
            ]);
        }

        return response()->json([
            'code' => '1001',
            'msg' => '添加成功'         
        ]);
    }

    private function info()
    {
        return [
            'platform' => 'walmart',
            'option' => 5,
            'func' => 6
        ];
    }
}
