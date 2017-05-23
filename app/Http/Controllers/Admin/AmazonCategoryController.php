<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class AmazonCategoryController extends Controller
{
    /**
     *  文件夹列表
     */
    public function list()
    {
        $list = Category::all();
        return view('admin.category.amazon.list', ['list' => $list]);
    }

    /**
     *  添加
     */
    public function add()
    {
        return view('admin.category.amazon.add');
    }
}
