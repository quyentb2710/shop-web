<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class CategoryController extends AdminController
{
    /**
     * カテゴリー画面
     * 
     */
    public function index()
    {
        return view('admin.category.index');
    }

    /**
     * 新規追加
     * 
     */
    public function add()
    {
        return view('admin.category.add');
    }
}
