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
            ->select('id', 'category_name')
            ->where('is_delete', 0)
            ->get();
        $list = json_decode(json_encode($list), true);

        foreach ($list as &$l) {
            $ar = DB::table('account_rules')
                ->where('cid', $l['id'])
                ->where('is_delete', 0)
                ->get()->toArray();
            $l['account'] = implode(',', array_column($ar, 'account'));
            $rulesId = explode(',', implode(',', array_column($ar, 'rules')));
            $rulesId = array_unique($rulesId);
            array_pop($rulesId);
            $rules = DB::table('rules')
                ->select('rule')
                ->whereIn('id', $rulesId)
                ->where('is_delete', 0)
                ->get();
            $rules = json_decode(json_encode($rules), true);
            $rules = array_column($rules, 'rule');
            $l['rules'] = implode(',', $rules);
        }

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

            $cateData = array(
                'category_name' =>  $cate_name,
                'true_name' => 'pangweiji',
                'platform' => 5,
                'createtime' => time(),
                'creator' => 'pangweiji'
            );

            //已存在不更新
            DB::transaction(function () use($cateData, $account, $rules, $platform){
                $id = DB::table('category')
                    ->insertGetId($cateData);

                //添加帐号——规则
                $account_rules = array();
                foreach ($account as $a) {
                    $account_rules[] = array(
                        'platform' => $platform,
                        'account' => $a,
                        'rules' => implode(',', $rules) . ',-1',
                        'cid' => $id
                    );
                }

                DB::table('account_rules')
                    ->insert($account_rules);
            });
            exit;
        }

        //获取规则
        $rules = DB::table('rules')
            ->where('platformid', 5)
            ->where('is_delete', 0)
            ->get();

        $accounts = DB::table('account_mailbox')
            ->where('platform', $platform)
            ->where('is_delete', 0)
            ->get();

        return view('admin.category.walmart.add', ['option' => $option, 'func' => $func, 'accounts' =>$accounts, 'rules' => $rules]);
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
