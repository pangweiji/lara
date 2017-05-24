<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class WalmartCategoryController extends Controller
{
    /**
     *  文件夹列表
     */
    public function list()
    {
        extract($this->info());
        $list = DB::table('category')
            ->get();
        return view('admin.category.walmart.list', ['option' => $option, 'func' => $func, 'list' => $list]);
    }

    public function add(Request $request)
    {
        extract($this->info());

        if ($request->has('submit')) {
            $cate_name = $request->input('cate_name', '');
            $account = $request->input('account', '');
            $rules = $request->input('rules', '');

            if (empty($cate_name) || empty($account) || empty($rules)) {
                return response()->json([
                    'code' => '2001',
                    'msg' => '请求错误！'
                ]);
            }

            //已存在不更新

            $cateData = array(
                'category_name' =>  '123',
                'ture_name' => 'test',
                'platform' => $platform,
                'createtime' => time(),
                'creator' => 'pangweiji'
            );

            $account_rules = array();

            DB::transaction(function () {
                $id = DB::table('category')
                    ->insertGetId($cateData);
                $arData = array(
                    'platform' => $platform,
                    'cid' => $id
                );
                DB::table()
                    ->insert();
            });
            exit;
        }

        return view('admin.category.walmart.add', ['option' => $option, 'func' => $func]);
    }

    private function info()
    {
        return [
            'platform' => 'walmart',
            'option' => 1,
            'func' => 5
        ];
    }
}
